<?php

if(isset($_POST['admit_card'])){
	
?>



<button class="btn" onclick="print('admit_card')">Print</button>
<div class="admit_card" id="admit_card">

<div class="my_container">
    <h1>Scotch Scotch Scotch</h1>
</div>
	<style type="text/css">

	.my_container {
    position: relative;
    background: #5C97FF;
    overflow: hidden;
    height: 700px;
}
.my_container:before {
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.6;
    background-image: url('http://placekitten.com/1500/1000');
    background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}

	
</style>
</div>




<?php

}



?>