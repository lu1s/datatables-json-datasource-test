<?php
	header('Content-Type: application/json');
	$st = file_get_contents("input.json");
	$obj = json_decode($st, true);
	$arr = array();
	foreach($obj[ads] as $item)
	{
		array_push($arr, array(
			'type_name'			=>	$item['type_name'],
			'category_name'		=>	$item['category_name'],
			'date'				=>	$item['date'],
			'region_name'		=>	$item['region_name'],
			'subject'			=>	$item['subject']
		));
	}
	echo json_encode(array(
		'aaData'=>$arr
	));
?>