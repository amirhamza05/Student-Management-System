 
<div style="background-color: #000000; height: 100%; position: absolute;">
<div class="sidebar-nav" style="">
<style type="text/css">
    .img_style{
      height: 74px;
      width: 70px; 
      margin: -5px;
    }
</style>
<?php

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sub_str=$site->get_page_sub_str($link);
$page_name=$site->get_page_name($sub_str);
$uname=$login_user['uname'];
$email=$login_user['email'];
$id=$login_user['id'];
$photo=$login_user['photo'];

?>

    <ul>

 <li class="side-user">   

 <div class="user-head">
    <div>
    <a class="inbox-avatar" style="border-radius: 0%" href="user_info.php?user_id=<?php echo "$id"; ?>">
        <img class="img_style"  width="74" hieght="70" src="<?php echo"$photo"; ?>">
    </a>
    <div class="user-name">
        <h5><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$uname"; ?></a></h5>
        <span><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$email"; ?></a></span>
        </div>
    </div> 
          
    </div>

 </li>

        <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li> 
        <li><a href="attend.php" class="nav-header"><i class="fa fa-fw fa-dashboard"></i> Attendence</a></li>

<li><a href="javascript:void(0)" data-target=".legal-menu_s" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Students<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="legal-menu_s nav nav-list collapse<?php if($page_name=="Student List")echo "in"; ?>">
            <li class=""><a href="student_list.php" class=""><span class="fa fa-caret-right"></span>Student List</a></li>
            <li ><a href="add_student.php"><span class="fa fa-caret-right"></span>Add Student</a></li>
            <li ><a href="id_card.php"><span class="fa fa-caret-right"></span>ID Card</a></li>
            <li ><a href="payment_add.php"><span class="fa fa-caret-right"></span>Payment</a></li>
        </ul></li>



<li><a href="batch_list.php" class="nav-header"><i class="fa fa-fw fa-legal"></i> Batch</a></li>

<li><a href="program_list.php" class="nav-header"><i class="fa fa-fw fa-legal"></i> Program</a></li>

<li><a href="subject_list.php" class="nav-header"><i class="fa fa-fw fa-legal"></i> Subject</a></li>

<li><a href="exam_list.php" class="nav-header"><i class="fa fa-fw fa-legal"></i> Exam</a></li>


<li><a href="javascript:void(0)" data-target=".result" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Result<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="result nav nav-list collapse">
            <li ><a href="result.php" class="l_active"><span class="fa fa-caret-right"></span>Show Result</a></li>
            <li ><a href="add_result.php" class="l_active"><span class="fa fa-caret-right"></span>ADD Result</a></li>
           
        </ul></li>

<li><a href="javascript:void(0)" data-target=".notice" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Notice<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="notice nav nav-list collapse">
            <li ><a href="send_notice.php" class="l_active"><span class="fa fa-caret-right"></span>Send Notice</a></li>
            <li ><a href="notice_list.php"><span class="fa fa-caret-right"></span>Notice List</a></li>
        </ul></li>

<li><a href="javascript:void(0)" data-target=".user" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> User<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="user nav nav-list collapse">
            <li ><a href="user_list.php" class="l_active"><span class="fa fa-caret-right"></span>User List</a></li>
            <li ><a href="add_student.php"><span class="fa fa-caret-right"></span>User Profile</a></li>
        </ul></li>
</ul>
    </div>

    </div>

    <style type="text/css">
        /*Navigation*/

    </style>