<?php

$filename="watermark.php";
if (isset($_POST['field'])) {

  file_put_contents($filename, $_POST['field']);
}
?>

<?php
$doc=file_get_contents($filename);

$line=explode("\n",$doc);
$st="";
foreach($line as $newline){
    $st=$st.$newline;
}
$len=strlen($st);

echo "$len";

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <textarea name="field">hello</textarea>
    <input type="submit" value="Save">
</form>