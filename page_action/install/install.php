<?php
include "script/install/install.php";
$install=new install();
$config_file=$install->config_file;
if(isset($_POST['view_install_page'])){
	
	$step=$install->step_install();
    
	if($step==1){
		form_step1();
	}
	
	
}
if(isset($_POST['install_first_step'])){
	
	$info=$_POST['install_first_step'];
	$host=$info['hostname'];
	$user=$info['db_user'];
	$pass=$info['db_pass'];
	$db=$info['db_name'];
    

	$db_config="
	<?php
   		define('db_host', '$host');
		define('db_user', '$user'); 
		define('db_pass', '$pass');
		define('db_name', '$db');
	?>	
	";

	$conn=mysqli_connect($host,$user,$pass,$db) or die("Unable to Connect to 'host'");
    if($conn){
    	file_put_contents($config_file, $db_config, FILE_APPEND | LOCK_EX);
        form_step2();
    }
    else{
    	echo "System Install Failed";
    }

}



function form_step1(){
?>

<h3 class="register-heading">Server Information</h3>
    <div class="row register-form">
        <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" id="hostname" placeholder="hostname" value="" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="db_user" placeholder="db_user" value="" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="db_pass" placeholder="db_pass" value="" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="db_name"  placeholder="db_name" value="" />
        </div>
     <center>
        <button class="btnRegister" onclick="install_first_step()">Install</button>
   </center>   
    </div>
                                    
    </div>



<?php
}

function form_step2(){
	$install=new install();
   	$sql=$install->get_file_data("sql/install_sql.sql");
   	$config_file=$install->config_file;
   	include "$config_file";
	$host=db_host;
	$user=db_user;
	$pass=db_pass;
 	$db=db_name;
 	$conn=mysqli_connect($host,$user,$pass,$db);

   $templine = '';
// Read in entire file
$lines = file("sql/install_sql.sql");
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        mysqli_query($conn,$templine);
        // Reset temp variable to empty
        $templine = '';
    }
}
	echo "<h3 class='register-heading'>
	Install Successfully Compleated.You Reload This Page For Login.<br/>
	<li>User Name: admin</li>
	<li>Password: admin</li>

	</h3>";
 	
    

}


?>

