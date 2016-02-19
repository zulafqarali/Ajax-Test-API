<?php 
	if(isset($_POST)){
		echo " YOU have Posted ".$_POST['text1']. " and ". $_POST['text2'];
	}
	else
		echo "no data found.";
?>