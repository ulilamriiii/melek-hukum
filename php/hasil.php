<?php

require ('config.php');

	$id = $_GET['a'];
	$sql = "SELECT * from `masalah` WHERE `id_hukum` = '".$id."'";

$hasil=mysql_query($sql);
				$items = array();
				while($row = mysql_fetch_object($hasil)){
					array_push($items, $row);
				}
				$result["wb"] = $items;
				$data=json_encode($result);
echo $data;

?>
