<?php

// $connect = mysqli_connect("localhost", "root", "", "projet_1");

require_once('Connection.php');

$db = new Connection();
$output = '';

global $db;

if (isset($_POST["query"])) {
	$search = $_POST["query"];

	$query = "
	SELECT * FROM promotion 
	WHERE name LIKE '%" . $search . "%'
	OR id LIKE '%" . $search . "%' 
	";

	$result = mysqli_query($db->con, $query);
	// $result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) > 0) {
		$output .= '<div>';
		// var_dump(mysqli_fetch_object($result));
		// exit();
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<p>' . $row["name"] . '</p>
		';
		}
		echo $output;
	} else {
		echo 'Data Not Found';
	}
}
