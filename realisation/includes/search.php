<?php

// $connect = mysqli_connect("localhost", "root", "", "projet_1");
// $output = '';

// if (isset($_POST["query"])) {
// 	$search = $_POST["query"];  //what we are searching for

// 	$query = "
// 	SELECT * FROM promotion 
// 	WHERE name LIKE '%" . $search . "%'
// 	OR id LIKE '%" . $search . "%' 
// 	";
// 	$result = mysqli_query($connect, $query);

// 	if (mysqli_num_rows($result) > 0) {

// 		$output .= '<div>';

// 		while ($row = mysqli_fetch_array($result)) {

// 			$output .= '
// 			<p>' . $row["name"] . '</p>
// 			';
// 		}

// 		echo $output;
// 	}
// 	else {
// 		echo 'Data Not Found';
// 	}
// }