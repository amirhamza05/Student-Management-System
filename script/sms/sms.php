<?php

/**
 *
 */

class sms
{
    
    public $student;
    public $student_ob;
    public $login_user;
    
    public function __construct($user_id)
    {
        
        $this->db         = new database();
        $this->login_user = $this->db->login_user;
        $this->conn       = $this->db->conn;
        $this->student_ob = new student();
        
        $this->login_user=$user_id;
    }
    
    public function select($query)
    {
        return $this->result = $this->db->select($query);
    }
    
    public function get_buy_sms_list()
    {
        $sql  = "select sms_add.*,user.uname as user from sms_add INNER JOIN user ON user.id=add_by ORDER BY sms_add.id DESC";
        $info = $this->db->get_sql_array($sql);
        return $info;
    }
    
    public function get_send_sms_list()
    {
        $sql  = "select sms_list.*,user.uname as user from sms_list INNER JOIN user ON user.id=sender ORDER BY sms_list.id DESC";
        $info = $this->db->get_sql_array($sql);
        return $info;
    }
    
    public function get_separate_sms_buy($id){
        $sql  = "select * from sms_add where id=$id";
        $info = $this->db->get_sql_array($sql);
        return $info[0];
    }

    public function send_sms($sms_list)
    {
        
        $data = $this->check_sms_balance_list($sms_list);
        if ($data['per'] == 0)return;

        $total      = $data['total'];
        $start_time = strtotime($this->db->date());
        $check_getway=$this->check_getway_database();
        
        if($check_getway==-1){
            echo "<b style='color:red'>You Can not add any gateway.Please Add Any Gateway For Send SMS</b>";
            return;
        }

        $this->sms_dist($total);
        $this->send_mobile_phone($sms_list);
        $end_time = strtotime($this->db->date());
        $diff     = $end_time - $start_time;
        
        echo "<b style='color:green'>All SMS Successfully Send.
        <li>Total SMS Send: $total</li>
        <li>Total Time: $diff Second</li></b>";
    }

    public function check_sms_balance_list($sms_list)
    {
        
        $total = 0;
        foreach ($sms_list as $key => $value) {
            $len = $value['len'];
            $total += $len;
        }
        $info          = $this->sms_balance();
        $balance       = $info['balance'];
        $data['total'] = $total;
        $data['per']   = ($total > $balance) ? 0 : 1;
        
        if($data['per']==0){
            $need=$total-$balance;
            echo "<b style='color:red'>Insufficient Balance.
            <li>Your Total SMS: $total sms</li>
            <li>Your Balance: $balance sms</li>
            <li>Your Need: $need sms</li>
            Please Recharge Your Balance And Again Send SMS.Contact TechSerm Authority For Recharge Your Balance.</b>";
        }

        return $data;
    }

    public function sms_balance()
    {
        $now             = $this->db->date();
        $sql             = "select SUM(total_sms) as total_sms ,SUM(total_send) as total_send from sms_add WHERE '$now' BETWEEN start AND end";
        $info            = $this->db->get_sql_array($sql);
        $info            = $info[0];
        $info['balance'] = $info['total_sms'] - $info['total_send'];
        $balance         = $info['balance'];
        
        $sql                = "select SUM(total_sms) as total_sms,SUM(total_send) as total_send from sms_add";
        $info               = $this->db->get_sql_array($sql);
        $info               = $info[0];
        $total_sms          = $info['total_sms'];
        $total_send         = $info['total_send'];
        $ex                 = ($total_sms - ($total_send + $balance));
        $data['total_sms']  = $total_sms;
        $data['total_send'] = $total_send;
        $data['ex']         = $ex;
        $data['balance']    = $balance;
        return $data;
    }

    public function check_getway_database(){
        $sql     = "select * from sms_setting";
        $info    = $this->db->get_sql_array($sql);
        if(!isset($info[0]))return -1;
        return 1;
    }

    

    public function sms_dist($total)
    {
        $now  = $this->db->date();
        $sql  = "select id,total_sms,total_send from sms_add WHERE '$now' BETWEEN start AND end ORDER BY end ASC";
        $info = $this->db->get_sql_array($sql);
        
        $data = array();
        foreach ($info as $key => $value) {
            $id         = $value['id'];
            $total_sms  = $value['total_sms'];
            $total_send = $value['total_send'];
            $due        = $total_sms - $total_send;
            if ($total <= 0)
                break;
            if ($due <= 0)
                continue;
            $use = ($due >= $total) ? $total : $due;
            $total -= $use;
            $res['id']         = $id;
            $res['total_send'] = $use + $total_send;
            array_push($data, $res);
        }
        
        foreach ($data as $key => $value) {
            $this->db->sql_action("sms_add", "update", $value, "no");
        }
        
    }

    public function get_gateway_info(){
        $sql     = "select * from sms_setting";
        $gateway_info    = $this->db->get_sql_array($sql);
        $gateway_info    = $gateway_info[0];
        return $gateway_info;
    }
    
    public function send_mobile_phone($sms_list)
    {
        
        $sms_list=$this->make_sms_list_package($sms_list);
        
        $gateway_info=$this->get_gateway_info();
        $gateway = $gateway_info['gateway'];
        $token   = $gateway_info['token'];

        $this->insert_sms_database($sms_list,$gateway_info);
        
        foreach ($sms_list as $key => $value) {
            $data            = array();
            $data['to']      = $value['to'];
            $data['message'] = $value['message'];
            $data['gateway'] = $gateway;
            $data['token']   = $token;
            $this->save_pending_sms($data);
        }
        
    }

    public function make_sms_list_package($sms_list){

        /**make sms package
            017,014,013=>hello user1
            018,015,018=>hello user2
        */
        $final_sms_list=array();
        $c=0;
        $visit_index=array();
        foreach ($sms_list as $key => $value) {
            $msg=$value['message'];
            $in=$key;
            if(isset($visit_index[$in]))continue;
            
            $to_list=array();
            foreach ($sms_list as $key => $value1) {
                $msg1=$value1['message'];
                $number=$value1['to'];
                
                if($msg==$msg1){
                    $visit_index[$key]=1;
                    array_push($to_list, $number);
                }
            }
            $to_list=implode(',', $to_list);
            $data=$this->make_sms_array($to_list,$msg);
            array_push($final_sms_list, $data);
            
        }
        return $final_sms_list;
    }

    public function insert_sms_database($sms_list,$gateway_info)
    {
        
        $gateway = $gateway_info['gateway'];
        $token   = $gateway_info['token'];

        foreach ($sms_list as $key => $value) {
            $info            = array();
            $info['number']  = $value['to'];
            $info['message'] = mysqli_real_escape_string($this->db->conn, $value['message']);
            $info['len']     = $value['len'];
            $info['gateway'] = $gateway;
            $info['date']    = $this->db->date();
            $info['token']   = $token;
            $info['sender']  = $this->login_user;
            $this->db->sql_action("sms_list", "insert", $info, "no");
        }
        return 1;
    }

    public function save_pending_sms($info){
        $data=array();
        $data['number_list']=$info['to'];
        $data['message']=mysqli_real_escape_string($this->db->conn, $info['message']);
        $this->db->sql_action("pending_sms", "insert", $data, "no");
    }

    public function get_pending_sms_list(){
        $sql="select * from pending_sms";
        $info = $this->db->get_sql_array($sql);
        return $info;
    }

    public function send_pending_sms($pending_id){
        $sql="select * from pending_sms where id=$pending_id";
        $info = $this->db->get_sql_array($sql);
        if(count($info)==0)return;
        $data=$this->get_gateway_info();
        $data['to']=$info[0]['number_list'];
        $data['message']=$info[0]['message'];
        $this->send_sms_getway($data);
        $del_data=array();
        $del_data['id']=$info[0]['id'];
        $this->db->sql_action("pending_sms", "delete", $del_data, "no");
    }

    public function send_sms_getway($info)
    {
        
        $to      = $info['to'];
        $message = $info['message'];
        $token   = $info['token'];
        $url     = $info['gateway'];

        $data = array(
            'to' => "$to",
            'message' => "$message",
            'token' => "$token"
        );

        $ch   = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        
    }


    public function make_sms_array($number, $text)
    {
        $len = strlen($text);
        $len = ceil($len / 160);

        $total_number=explode(',', $number);
        $total_number=count($total_number);
        $len=$len*$total_number;
        $res = array(
            "to" => $number,
            "message" => $text,
            "len" => $len
        );
        return $res;
    }
    
    public function valid_mobile($number)
    {
        if($number=="")return 0;
      return (strlen($number)==11)?1:0;
    }
    
    
    public function get_sms_recever_option()
    {

        echo " 
              <b>Select Recever</b>
              <select class='form-control' id='select_receiver'>
                <option value='-1'> --Select Recever-- </option>
                <option value='all'> ALL </option>
                <option value='st'> Student </option>
                <option value='ga'> Guardians </option>
              </select> 
              

                ";
    }


   public function get_sms_recever_only_option()
    {

        echo " 
             
                <option value='-1'> --Select Recever-- </option>
                <option value='all'> ALL </option>
                <option value='st'> Student </option>
                <option value='ga'> Guardians </option>
                ";
    }


    

    public function get_student_mobile_number($student_id,$per){
     
      $con="personal_mobile,father_mobile,mother_mobile";
      $sql="select $con from student where id=$student_id";
      $info=$this->db->get_sql_array($sql);
      $info=$info[0];
      $list=array();
      $personal_mobile=$info['personal_mobile'];
      $father_mobile=$info['father_mobile'];
      $mother_mobile=$info['mother_mobile'];
      if($per=="st" || $per=="all" && $this->valid_mobile($personal_mobile)==1)array_push($list, $personal_mobile);
        if($per=="ga" || $per=="all"){
      
      if($this->valid_mobile($father_mobile)==1)array_push($list, $father_mobile);
      if($this->valid_mobile($mother_mobile)==1)array_push($list, $mother_mobile);
          
      }


      return $list;
    }


    
    public function get_syn()
    {
        $info                     = array();
        $info['{{student_name}}'] = "Student Name";
        $info['{{nick_name}}']    = "Nick Name";
        $info['{{id}}']           = "Student Id";
        $info['{{student_pass}}'] = "Student Password";
        return $info;
    }
    
    public function get_syntext()
    {
        $info = $this->get_syn();
        foreach ($info as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
    }

     public function syn_info($id)
    {
      
        $st_info=$this->student_ob->get_info($id);
        $info['{{student_name}}'] = $st_info['name'];
        $info['{{nick_name}}']    = $st_info['nick'];
        $info['{{id}}']           = $st_info['id'];

        
        return $info;
    }
    
    public function get_sms($student_id, $text)
    {
        $info = $this->syn_info($student_id);
        $syn  = $this->get_syn();
        foreach ($syn as $key => $value) {
            $syn_val  = $key;
            $info_val = (isset($info[$key]))?$info[$key]:"";
            $text     = str_replace($syn_val, $info_val, $text);
        }
        
        return $text;
    }
    
    public function test()
    {
        echo "hello";
    }
    
    
    
}

?>