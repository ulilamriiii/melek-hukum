<?php

$user	  = 'root';
	$pass	  = '';
	$host	  = 'localhost';
	$database = 'hukum2';

	$sql = mysql_connect($host, $user, $pass);
	mysql_select_db($database, $sql);

	$id = $_GET['a'];
	$sql = "SELECT ayat.nama_ayat, pasal.nama_pasal, bab.nama_bab, peraturan.nama_peraturan, jenis_hukum.nama_jenis
FROM ayat, pasal, bab, peraturan, jenis_hukum
WHERE ayat.id_pasal = pasal.id_pasal
AND pasal.id_bab = bab.id_bab
AND bab.id_peraturan = peraturan.id_peraturan
AND peraturan.id_jenis = jenis_hukum.id_hukum
AND ayat.tag LIKE  '%'".$id."'%' ";

$hasil=mysql_query($sql);
				$items = array();
				while($row = mysql_fetch_object($hasil)){
					array_push($items, $row);
				}
				$result["hasil"] = $items;
				$data=json_encode($result);
echo $data;

?>
