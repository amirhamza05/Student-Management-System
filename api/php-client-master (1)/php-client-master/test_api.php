
<?php
/**
 * Example presents usage of the successful createSubmission() API method
*/


if(isset($_POST['submit'])){
	$code=$_POST['code'];
	$lang=11;
	$input="2018";


$token = '6c1d9acc4a5ac184d56f4485d24298bf';
$get_submission_id = curl_init();   

curl_setopt_array($get_submission_id, array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'http://api.compilers.sphere-engine.com/api/v3/submissions?access_token=6c1d9acc4a5ac184d56f4485d24298bf',
CURLOPT_USERAGENT => 'Codular Sample cURL Request',
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => array(
    "language" => $lang,
    "input" => $input,
    "sourceCode" => $code
)
)); 

$get_ideone_results = curl_init();

$submissions_id =  $get_ideone_results->id;

$url = 'http://api.compilers.sphere-engine.com/api/v3/submissions/'.$submissions_id.'/?access_token=6c1d9acc4a5ac184d56f4485d24298bf&withSource=1&withInput=1&withOutput=1&withStderr=1&withCmpinfo=1';

usleep(2000000);

$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$data = curl_exec($ch);
curl_close($ch);

echo $data;
}
?>

<form accept="" method="POST">
	<textarea name="code"></textarea>
	<input type="submit" name="submit">
</form>