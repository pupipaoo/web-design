<?php
	header("Content-Type: application/json; charset=UTF-8");
	$array = array("ans"=>$_GET['id']);
	echo json_encode($_GET);
	
	//以下取消註腳後印出，可以去https://jsoneditoronline.org/讀寫
	//$array = array("阿格麗","貶幅霞","株株人");
	//print_r(json_encode($array));
	
	//$array = array("name"=>"阿格麗","name1"=>"貶幅霞","name2"=>"株株人");
	//print_r(json_encode($array_key));
?>