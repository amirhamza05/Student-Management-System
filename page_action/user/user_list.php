<?php

if(isset($_POST['get_user_list'])){
	$get_list_type=$_POST['get_user_list'];
	$user_list=$user_ob->get_user_permission_list($get_list_type);
?>


<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

.userMain{
  margin-top: 30px;
}

.userMain .userBlock{
    float: left;
    width: 100%;
    box-shadow: 0px 0px 23px -3px #ccc;
    padding-bottom: 12px;
    margin-bottom: 30px;
    margin-top: 15px;
    background:#fff;
    border: 2px solid var(--bg-color);
    

}
.userMain .userBlock .backgrounImg{
    float: left;
    overflow: hidden;
    height: 77px;
}

.userMain .userBlock .userImg{
    text-align: center;
}
.userMain .userBlock .userImg img{
    width: 80px;
    height: 80px;
    margin-top: -39px;
    border-radius: 100%;
    border: 2px solid var(--bg-color);
    
} 
.userMain .userBlock .userDescription{
    text-align: center;
}
.userMain .userBlock .userDescription h5{
    margin-bottom: 2px;
    font-weight: 600;
}
.userMain .userBlock .userDescription p{
    margin-bottom: 5px;
}
.userMain .userBlock .userDescription .btn{
    padding: 0px 23px 0px 23px;
    height: 22px;
    border-radius: 0;
    font-size: 12px;
    background: var(--bg-color);
    color: var(--font-color);
}
.userMain .userBlock .userDescription .btn:hover{
    
    opacity:0.7;
}

.userMain .userBlock .followrs{
    display: inline-flex;
    margin-right: 10px;
    border-right: 1px solid #ccc;
    padding-right: 10px;
}
.userMain .userBlock .followrs .number{
    font-size: 15px;
    font-weight: bold;
    margin-right: 5px;
    margin-top: -1px;
}
    </style>

<div class="row userMain">
    <?php 
       
      foreach ($user_list as $key => $value) {
        $id=$value['id'];
        $info=$user[$id];
        $uname=$info['uname'];
        $fname=$info['fname'];
        $photo=$info['photo'];
        $permit=$info['permit'];
        $status=$info['status'];
        $status_text="<span class='glyphicon glyphicon-ok' title='Active'></span>";
        if($status==0)$status_text="<span class='glyphicon glyphicon-remove' title='Deactive'></span>";
       

        $permission=$user_ob->get_user_permission($permit);
        
    ?>
       <div class="col-md-4 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
               </div>
               <div class="userImg">
                   <img src="<?php echo $photo; ?>">
               </div>
               <div class="userDescription">
                   <h5><?php echo $uname; ?> <?php echo "$status_text"; ?></h5>
                   <p>
                   	<?php echo $fname; ?>
                   	<br/>
                   <b><span class='glyphicon glyphicon-flag' title='Active'></span>	<?php echo $permission; ?></b>
                   </p>
                    
                    <a href="user_info.php?user_id=<?php echo $id; ?>">
                        <button class="btn">View Profile</button>
                    </a>
               </div>
              
           </div>
       </div> 
     <?php } ?>    
</div>



<?php	

}

if(isset($_POST['add_user'])){
  $site->form_input("User Name","fname","up_full_name","text","exclamation-sign","","<b>You Can Only Use '-'<b>","yes");
  $site->form_input("Full Name","fname","up_full_name","text","exclamation-sign","","","yes");
  $site->form_input("Email","email","up_email","text","exclamation-sign","","","yes");
	$site->form_input("Phone","phone","up_phone","number","text","exclamation-sign","","","yes");
	$site->form_input("Address","address","up_address","text","exclamation-sign","","","yes");
	$site->form_input("Phone","phone","phone","text","exclamation-sign","","","yes");
	$site->form_input("Password","address","up_address","password","exclamation-sign","","","yes");

}

?>

