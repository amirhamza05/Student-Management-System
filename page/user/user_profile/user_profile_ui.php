
<link rel="stylesheet" type="text/css" href="page/user/user_profile/css/style.css">
<script type="text/javascript" src="page/user/user_profile/js/user_profile.js"></script>

<div class="row">
    <div class="col-md-12">
    <div class="user-profile" style="background-color: #f1f2f6">
        <div class="profile-header-background"><img id="load_cover_photo" src="http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/city.jpg" alt="Profile Header Background"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="profile-info-left">
                    <div class="text-center">
                        <img id="load_profile_photo" style="height: 180px; width: 180px;" src="<?php echo $info['photo']; ?>" alt="Avatar"  class="avatar img-circle">
                        <h2><?php echo $info['uname']; ?></h2>
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
                        <li class="active"><a href="#activities" data-toggle="tab">INFO</a></li>
                        <li><a href="#followers" data-toggle="tab">ACTIVITY</a></li>
                        <li><a href="#following" data-toggle="tab">LOGIN ACTIVITY</a></li>
                    </ul>
                    <div style="background-color: #ffffff; margin-left: -15px;height: 400px;" class="tab-content">
                        <!-- activities -->
                        <div class="tab-pane fade in active" id="activities">
                          
                               
                        </div>
                        <!-- end activities -->
                        <!-- followers -->
                        <div class="tab-pane fade" id="followers">
                            
                        </div>
                        <!-- end followers -->
                        <!-- following -->
                        <div class="tab-pane fade" id="following">
                            
                        </div>
                        <!-- end following -->
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



<script type="text/javascript">
     set_user_id(<?php echo $uid; ?>);
</script>