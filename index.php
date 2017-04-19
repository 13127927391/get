<?php 
	header("content-type:text/html;charset=utf-8");
	$pdo = new PDO("mysql:host=localhost;dbname=h5_10",'root','123456');
	$pdo->query('set names utf8');
	//使用upid进行查询
	$upid = $_GET['upid'];
	$res = $pdo->query("select * from lamp_district where upid={$upid}");
	$data = $res->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($data);
	echo json_encode($data);	
 ?>