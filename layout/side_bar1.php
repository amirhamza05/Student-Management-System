 
<div style="background-color: #000000; height: 100%; position: absolute;">
<div class="sidebar-nav" style="">

<?php

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sub_str=$site->get_page_sub_str($link);
$page_name=$site->get_page_name($sub_str);

?>

    <ul>

        <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
        <li><a href="attend.php" class="nav-header"><i class="fa fa-fw fa-dashboard"></i> Attendence</a></li>

<li><a href="#" data-target=".legal-menu_s" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Students<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="legal-menu_s nav nav-list collapse<?php if($page_name=="Student List")echo "in"; ?>">
            <li class=""><a href="student_list.php" class=""><span class="fa fa-caret-right"></span>Student List</a></li>
            <li ><a href="add_student.php"><span class="fa fa-caret-right"></span>Add Student</a></li>
            <li ><a href="id_card.php"><span class="fa fa-caret-right"></span>ID Card</a></li>
            <li ><a href="payment_add.php"><span class="fa fa-caret-right"></span>Payment</a></li>
        </ul></li>

<li><a href="#" data-target=".batch_menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Batch<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="batch_menu nav nav-list collapse">
            <li ><a href="batch_list.php" class="l_active"><span class="fa fa-caret-right"></span>Batch List</a></li>
            <li ><a href="add_batch.php"><span class="fa fa-caret-right"></span>Add Batch</a></li>
        </ul></li>


<li><a href="#" data-target=".program" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Program<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="program nav nav-list collapse">
            <li ><a href="program_list.php" class="l_active"><span class="fa fa-caret-right"></span>Program List</a></li>
            <li ><a href="add_program.php"><span class="fa fa-caret-right"></span>Add Program</a></li>
        </ul></li>

<li><a href="#" data-target=".Subject" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Subject<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="Subject nav nav-list collapse">
            <li ><a href="subject_list.php" class="l_active"><span class="fa fa-caret-right"></span>Subject List</a></li>
            <li ><a href="add_subject.php"><span class="fa fa-caret-right"></span>Add Subject</a></li>
        </ul></li>


<li><a href="#" data-target=".exam" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Exam<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="exam nav nav-list collapse">
            <li ><a href="exam_list.php" class="l_active"><span class="fa fa-caret-right"></span>Exam List</a></li>
           
        </ul></li>

<li><a href="#" data-target=".result" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Result<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="result nav nav-list collapse">
            <li ><a href="result.php" class="l_active"><span class="fa fa-caret-right"></span>Show Result</a></li>
            <li ><a href="add_result.php" class="l_active"><span class="fa fa-caret-right"></span>ADD Result</a></li>
           
        </ul></li>

<li><a href="#" data-target=".notice" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-pencil"></i> Notice<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="notice nav nav-list collapse">
            <li ><a href="send_notice.php" class="l_active"><span class="fa fa-caret-right"></span>Send Notice</a></li>
            <li ><a href="notice_list.php"><span class="fa fa-caret-right"></span>Notice List</a></li>
        </ul></li>

<li><a href="#" data-target=".user" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> User<i class="fa fa-collapse"></i></a></li>
        
        <li>
             <ul class="user nav nav-list collapse">
            <li ><a href="student_list.php" class="l_active"><span class="fa fa-caret-right"></span>User List</a></li>
            <li ><a href="add_student.php"><span class="fa fa-caret-right"></span>Add User</a></li>
        </ul></li>

       
            </ul>
    </div>

    </div>

    <style type="text/css">
        /*Navigation*/
.sidebar-nav {
  width: 250px;

  float: left;
  border-top: none;
  border-left: none;
  margin: 0em;
}
.sidebar-nav ul {
  list-style: none;
  padding-left: 0px;
}
.sidebar-nav li a .fa-caret-right {
  color: #ffffff;
  padding-right: .50em;
}
.sidebar-nav .nav-header {
  border-top: 0px solid #fcfcfc;
  border-bottom: 1px dotted #1F262D;
  background: #2E363F;
  border-left: none;
  color: #ffffff;
  display: block;
  font-weight: normal;
  font-size: 1em;
  line-height: 2.6em;
  padding: .50em .5em .5em 1em;
  margin-bottom: 0px;
  text-shadow: none;
  text-transform: none;
  /*Change the arrow direction if the item is collapsed*/

}
.sidebar-nav .nav-header .label {
  float: right;
  margin-top: .5em;
  margin-right: .25em;
  line-height: 1.5em;
}
.sidebar-nav .nav-header:hover {
  background: #2A2D35;
 
}
.sidebar-nav .nav-header.collapsed .fa-collapse::before {
  content: "\f078";
}
.sidebar-nav .nav-header .fa-collapse::before {
  content: "\f077";
}
.sidebar-nav .nav-header .fa-collapse,
.sidebar-nav .nav-header .fa-collapse {
  float: right;
  margin-right: 15px;
}
.sidebar-nav .nav-header .label {
  float: right;
  margin-top: .7em;
  line-height: 1.5em;
}
.sidebar-nav .nav-header i[class*="fa-"] {
  line-height: 2.25em;
  padding-right: .75em;
}
.sidebar-nav .nav-list {
  margin: 0px;
  border: 0px;
  background: #394152;
  padding: 0px;
  color: #ffffff;

}
.sidebar-nav .nav-list  > li > a:hover {
  background: #313847;
}
.sidebar-nav .nav-list  > .active > a,
.sidebar-nav .nav-list  > .active > a:hover {
  text-shadow: none;
  background: #e5e5ea;
  border-top: 1px solid #1F262D;
  border-bottom: 1px solid #1F262D;
}
.sidebar-nav .nav-list li:first-child.active a {
  border-top: 0px;
}
.sidebar-nav .nav-list li:last-child.active a {
  border-bottom: 0px;
}
.sidebar-nav .nav-list  > li:hover {
  border-left: 0px solid #8989a6;
  overflow: hidden;
}
.sidebar-nav .nav-list  > li:hover a {
  margin-left: -4px;
}
.sidebar-nav .nav-list  > .active {
  overflow: hidden;
  border-left: 4px solid #8989a6;
}
.sidebar-nav .nav-list  > .active a {
  margin-left: 4px;
}
.sidebar-nav .nav-list  > .active > a:hover {
  background: #c3c3d2;
}
.sidebar-nav .nav-list  > li > a {
  color: #ffffff;
  padding: 0.8em 1em;
}
.sidebar-nav .nav-list.collapse.in {
  border-bottom: 1px solid #1F262D;
}
    </style>