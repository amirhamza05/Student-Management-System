


<?php if($uid==$login_user_id || $role<$user_role){ ?>        
<li onclick="update_profile_form()" class="nav_button"><span class="glyphicon glyphicon-pencil"></span> Update Profile</li>

<li onclick="change_password_form()"class="nav_button"><span class="glyphicon glyphicon-lock"></span> Change Password</li> 
<li onclick="update_user_role_form()" class="nav_button"><span class="glyphicon glyphicon-flag"></span> Update Role</li>
<li onclick="update_user_status_form()" class="nav_button"><span class="glyphicon glyphicon-ban-circle"></span> Change Status</li>
<li onclick="change_profile_photo()" class="nav_button"><span class="glyphicon glyphicon-picture"></span> Update Profile Picture</li>

<?php } if($uid==$login_user_id){ ?>
<a href="logout.php"><li class="nav_button"><span class="glyphicon glyphicon-log-out"></span> Logout</li></a>
<?php } ?>

  