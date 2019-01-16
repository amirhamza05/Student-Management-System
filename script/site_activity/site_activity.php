<?php


class site_activity {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->site=new site_content();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

  public function get_site_activity(){
  	$sql="select * from site_activity ORDER BY id DESC";
  	$info=$this->db->get_sql_array($sql);
  	return $info;
  }

  public function site_activity_list($total=10){
  	$info=$this->get_site_activity();
  	$res=array();
  	$c=0;
  	foreach ($info as $key => $value) {
  		$c++;
  		if($c>$total)break;
  		array_push($res, $value);
  	}
  	return $res;
  }
  public function get_separate_activity($id){
    $sql="
    select site_activity.*,user.uname as user_name,user.photo as user_photo from site_activity 
    INNER JOIN user ON site_activity.user_id=user.id
    where site_activity.id=$id";
    $info=$this->db->get_sql_array($sql);
    return $info[0];
  }

  public function get_user_activity($uid){
    $sql="
    select * from site_activity where user_id=$uid ORDER BY id DESC";
    $info=$this->db->get_sql_array($sql);
    return $info;
  }

  public function get_activity_detail($id){
    $info=$this->get_separate_activity($id);
    $user_id=$info['user_id'];
    $table_name=$info['table_name'];
    $action_type=$info['action_type'];
    $ip=$info['ip'];
    $browser=$info['browser'];
    $data1=$info['previous_data'];
    $data2=$info['present_data'];
    
    $user_name=$info['user_name'];
    $user_photo=$info['user_photo'];
    $date=strtotime($info['date']);
    $date=date("j M Y, h:i:s A",$date);

    ?>
<div class="row" id="activity_detail">
  <div class="col-md-12 act_header_title">Activity Statics</div>
  <div class="col-md-12" style="background-color: #ffffff;padding: 5px">
    <div class="col-md-2">
      <img src="upload/user_photo/<?php echo $user_photo; ?>" class="activity_img">
    </div>
    <div class="col-md-10" style="margin-top: 5px;">
      <table width="100%">
        <tr>
          <td class="act_td1">Activity Id</td>
          <td class="act_td1">User Name</td>
          <td class="act_td1">Table Name</td>
          <td class="act_td1">Action Type</td>
          <td class="act_td1">Action Time</td>
          <td class="act_td1">IP</td>
          <td class="act_td1">Browser</td>
        </tr>
        <tr>
          <td class="act_td2"><?php echo "$id"; ?></td>
          <td class="act_td2">
            <a href="user_info.php?user_id=<?php echo $user_id; ?>" target="_blank"><?php echo "$user_name"; ?></a>
              
          </td>
          <td class="act_td2"><?php echo "$table_name"; ?></td>
          <td class="act_td2"><?php echo "$action_type"; ?></td>
          <td class="act_td2"><?php echo "$date"; ?></td>
          <td class="act_td2"><?php echo "$ip"; ?></td>
          <td class="act_td2"><?php echo "$browser"; ?></td>
        </tr>
      </table>
    </div>
  </div>

  <?php $this->data_compare($data1,$data2); ?>
  
</div>

<style type="text/css">
  .activity_img{
    height: 120px;
    width: 130px;
    border: 2px solid #ffffff;
    border-radius: 20px;
  }
  .act_td1{
       background-color: #EFF0F2;
        color: #000000;
        padding: 10px;
        font-weight: bold;
        border: 1px solid #C6C9D1;
        text-align: center;
  }
  .act_td2{
       background-color: #ffffff;
        color: #000000;
        padding: 10px;
        border: 1px solid #C6C9D1;
        text-align: center;
  }
  
</style>
    <?php
    
  }


  public function data_compare($data1,$data2){
    $info1=json_decode($data1,true);
    $info2=json_decode($data2,true);
    
    ?>

<div class="col-md-12 act_header_title">Data Compare</div>
 <div class="row">
    <div class="col-md-6">
      <div class="act_header1">Previous Data</div>
      <div class="present_data">
        <?php 

        //$this->site->myprint_r($info1); 
        $c=0;
        $not_match=0;
        $total=0;
        if($info1!=""){
          foreach ($info1 as $key => $value) {
            $c++;
            $cmp=($info1[$key]!=$info2[$key])?0:1;
            $not_match+=$cmp;
            $total++;
            $this->set_key_and_data($c,$key,$value,$cmp);   
          }
        }
        ?>
      </div>
    </div>
    <div class="col-md-6" style="margin-left: -30px;">
      <div class="act_header1">Updated Data</div>
      <div class="present_data">
        <?php 

        //$this->site->myprint_r($info1); 
        $c=0;
        if($info2!=""){
        foreach ($info2 as $key => $value) {
          $c++;
          $cmp=($info1[$key]!=$info2[$key])?0:1;
          $css_class=($cmp==1)?"data_match":"data_diff";
          $this->set_key_and_data($c,$key,$value,$cmp);
        }
      }
        ?>
      </div>
    </div>
    <div class="col-md-12">
      <center>
      <li>Total Data: <span class=""><b><?php echo "$total"; ?></b></span></li>
      <li>Total Match: <span class="data_match"><?php echo "$not_match"; ?></span></li>
      <li>Total Not Match: <span class="data_diff"><?php echo $total-$not_match; ?></span></li>
    </center>
</div>   

<style type="text/css">
  .act_header_title{
    background-color: var(--bg-color);
    color: var(--font-color);
    padding: 5px;
    text-align: center;
    font-weight: bold;
  }
  .act_header1{
    background-color: #EFF0F2!important;
    color: #000000;
    padding: 10px;
    text-align: center;
    font-weight: bold;
    border-width: 0px 2px 0px 0px;
    border-style: solid;
    border-color: #C6C9D1;
  }
  .present_data{
    background-color: #ffffff;
    padding: 15px;
    border-width: 0px 2px 0px 0px;
    border-style: solid;
    border-color: #C6C9D1;
  }
  .data_match,.data_diff{
    padding: 3px;
    color: #ffffff;
    font-weight: bold;
    border-radius: 2px;
  }
  .data_match{
    background-color: green;
  }
  .data_diff{
    background-color: red;
  }
  .data_line,.data_line_diff{
    padding: 3px;
    font-weight: bold;
  }
  .data_line{
    background-color: yellow;
    
  }
  .data_line_diff{
    background-color: red;
    color: #ffffff;
  }
  .line_data{
    padding: 2px;
    margin-top: 0px;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
  }
  
</style>


  <?php
  }

  public function set_key_and_data($line,$key,$value,$cmp){
    $css_class=($cmp==1)?"data_match":"data_diff";
    $line_css=($cmp==1)?"data_line":"data_line_diff";
   ?>
   <div class='line_data'>
      <span class="<?php echo $line_css; ?>"><?php echo $line; ?></span>
      <span class='<?php echo $css_class; ?>'>
        [<?php echo $key; ?>]
      </span>
      <b style="font-size: 15px;">=></b> 
      <?php echo $value; ?>
   </div>
   <?php 
    
  }


}


?>

