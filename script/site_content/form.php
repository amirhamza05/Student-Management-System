<?php




class form {


public function requerd($level,$name,$id,$icon,$value,$ex,$pla,$type){
  echo "<div class='form-group'>
        <label class='control-label' for='inputName'><b>$level</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-$icon'></i></span>     
            <input autocomplete='false' class='form-control' data-error='Please enter name field.' id='$id' value='$value' placeholder='$pla'  type='$type' name='$name'  required='' />
        </div>  
        <div id='err_product_date' class='error'>$ex</div>
</div>";
}

public function not_requred($level,$name,$id,$icon,$value,$ex,$pla,$type){
  echo "<div class='form-group'>
        <label class='control-label' for='inputName'><b>$level</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-$icon'></i></span>     
            <input  class='form-control' data-error='Please enter name field.' id='$id' value='$value' placeholder='$pla'  type='$type' autocomplete='off' name='$name'  />
        </div>  
        <div id='err_product_date' class='error'>$ex</div>
</div>";
}


public function form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes"){
  
  $pla="Enter ".$level;

       if($req=="yes"){
        $this->requerd($level,$name,$id,$icon,$value,$ex,$pla,$type);
       }
       else if($req=="no"){
        $this->not_requred($level,$name,$id,$icon,$value,$ex,$pla,$type);
       }

  
}

public function test(){
  echo "string";
}

}


/**
* 
*/


?>

