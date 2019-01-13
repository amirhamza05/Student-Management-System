<?php

$user_not_found=1;
if(isset($_GET['user_id'])){
    $uid=$_GET['user_id'];
   if(isset($user[$uid])){
        $user_not_found=0;
        $info=$user[$uid];
        include "user_profile_ui.php";
   }
}

if($user_not_found==1)echo "

<script>
alert('User Is Not Found');
window.location.href = 'user_list.php';

</script>

";



?>