
 
<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</button>
</div>
</center>

<div class="row userMain">
    <?php 
       
      foreach ($user as $key => $value) {
        $id=$value['id'];
        $uname=$value['uname'];
        $fname=$value['fname'];
        $photo=$value['photo'];
    ?>
       <div class="col-md-3 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
               </div>
               <div class="userImg">
                   <img src="<?php echo $photo; ?>">
               </div>
               <div class="userDescription">
                   <h5><?php echo $uname; ?></h5>
                   <p><?php echo $fname; ?></p>
                    
                    <a href="user_info.php?user_id=<?php echo $id; ?>">
                        <button class="btn">View Profile</button>
                    </a>
               </div>
              
           </div>
       </div>
       
     <?php } ?>
      


</div>

    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

.userMain{
  margin-top: 60px;
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