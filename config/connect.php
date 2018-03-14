
<?php

class database {
   

 public $host=db_host;
 public $user=db_user;
 public $pass=db_pass;
 public $db=db_name;
 public $result;
 public $conn;


 //conection start

 public function __construct(){
     $this->connection();

 }


public function connection(){

     $this->conn =mysqli_connect($this->host,$this->user,$this->pass,$this->db);
     if(!$this->conn){
       echo "Conection failed";
     }
}


public function select($query){
return $this->result=mysqli_query($this->conn, $query);
}

public function action_link($table){
  $index["batch"]="batch_list";
  $index["student"]="student_list";
  $index["program"]="program_list";
  $index["subject"]="subject_list";
  $index['exam']="exam_list";

return $index[$table];
}

  public function insert_sql($arr,$table){
    $sql="";
    $sql.="INSERT INTO ".$table;
    $sql.=" (".implode(",", array_keys($arr)).") VALUES ";
    $sql.=" ('".implode("','", array_values($arr))."')";

    return $sql;
  }



public function Update_sql($arr,$table){
    $sql="";
    $sql.="UPDATE ".$table." SET ";
    $condition="";
    $size=sizeof($arr);
    $c=0;
    foreach ($arr as $key => $value) {
       $condition.=$key."='".$value."'";
      if($c!=$size-1)$condition.=",";
      $c++;
    }
    $sql.=$condition;
    $sql.=" WHERE id=".$arr['id'];
    return $sql;
}




  public function sql_action($table,$action,$info,$msg="yes"){
      $flag=0;
      $action_name="";
      
      if($action=="update"){
        $action_name="Update ". $table;
        $sql=$this->update_sql($info,$table);
      }

      else if($action=="insert"){
        $action_name="Insert New ". $table;
        $sql=$this->insert_sql($info,$table);
      }

      else if($action=="delete"){
        $id=$info['id'];
        $action_name="Delete ". $table;
        $sql = "DELETE FROM $table WHERE id=$id";
      }

   $res=$this->select($sql);
    //echo "$sql";
    if($res)$flag=1;
if($table=="payment"){
   if($flag==0)echo("Error description: " . mysqli_error($this->conn));
}

else if($table=="student" && $action=="insert"){
  $id=$info['id'];
  $id1="new_student_".$id;
  $id1=md5($id1);
  $id1=hash('sha256', $id1);
  $link="new_student.php?success_new_student_admission=".$id1;
   if($flag==1 && $msg=="yes"){
    $info1['id']=$id;
    $info1['date']=$info['date'];
    $this->sql_action("student_id","insert",$info1,"no");
    echo "<script>alert('Successfully $action_name!');</script><script>document.location='$link'</script>";
  }

   else if($msg=="yes") echo "<script>alert('Failed...Please Again Try!');</script><script>document.location='student_list.php'</script>";
    if($flag==0)echo("Error description: " . mysqli_error($this->conn));
    if($msg=="no")return $flag;
}

else{
if($msg=="yes")$link=$this->action_link($table);
  if($flag==1 && $msg=="yes")echo "<script>alert('Successfully $action_name!');</script><script>document.location='$link.php'</script>";
   else if($msg=="yes") echo "<script>alert('Failed...Please Again Try!');</script><script>document.location='$link.php'</script>";
    if($flag==0)echo("Error description: " . mysqli_error($this->conn));
    if($msg=="no")return $flag;
  }
  }



// conection end
}

?>