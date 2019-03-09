
<link rel="stylesheet" type="text/css" href="page/user/user_profile/css/style.css">
<script type="text/javascript" src="page/user/user_profile/js/user_profile.js"></script>

<div class="row">
    <div class="col-md-12">
    <div class="user-profile" style="background-color: #E8EAF6">
        <div class="profile-header-background">
            <div class="profile_background"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="profile-info-left">
                    <div class="text-center">
                        <img id="load_profile_photo" style="height: 180px; width: 180px;" src="<?php echo $info['photo']; ?>" alt="Avatar"  class="avatar img-circle">
                        <h2><?php echo $info['uname']; ?>
                            <br/>
                            <font style="font-size: 16px;font-weight: bold;"><span class="glyphicon glyphicon-flag"></span> <?php echo "$user_category"; ?></font>
                        </h2>

                    
                    </div>
                    <div class="action-buttons">
                        <div class="row">
                            <nav class="nav-sidebar">
                                  <ul class="nav">
                                                
                                    <?php include "profile_side_bar.php"; ?>       
                                    </ul> 
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-info-right">
                    <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                        <li class="active" onclick="user_info()"><a href="#activities" data-toggle="tab">INFO</a></li>
                        <li onclick="user_activity()"> <a href="#followers" data-toggle="tab">ACTIVITY</a></li>
                        <li onclick="user_info()"><a href="#following" data-toggle="tab">LOGIN ACTIVITY</a></li>
                    </ul>
                    <div style="background-color: #ffffff; margin-left: 0px; padding: 15px;height: auto;" class="tab-content" id="user_detail_body">
                        
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end profile info right -->
            </div>
            <!-- end col-md-9 -->
        </div>
    </div>
</div>
</div>

<style type="text/css">
    .profile_background{

        background-image: url(upload/site_content/user_background.jpg);
        background-size: cover;
        color: var(--bg-color);
        height: 130px;
        font-size: 60px;
        padding-top: 20px;
        padding-right: 10px;
        text-align: center;
        text-shadow: 0 0 2px var(--bg-color);
    }
</style>

<script type="text/javascript">
     set_user_id(<?php echo $uid; ?>);
     user_info();
</script>