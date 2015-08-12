<?php

require ('config.php');

	$id = $_GET['b'];
	$sql = "SELECT * from `animasi` WHERE `id_masalah` = '".$id."'";

$hasil=mysql_query($sql);
				$items = array();
				while($row = mysql_fetch_object($hasil)){
					array_push($items, $row);
				}
				$result["ani"] = $items;
				$data=json_encode($result);
echo $data;

?>
