<?php
$connect = mysqli_connect("localhost", "root", "", "projet_1");
$output = '';

if (isset($_POST["query"])) {
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM promotion 
	WHERE name LIKE '%" . $search . "%'
	OR id LIKE '%" . $search . "%' 
	";

	$result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) > 0) {
		$output .= '<table>';
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
		<tr>
		<td>' . $row["id"] . '</td>
		<td>' . $row["name"] . '</td>
		</tr>
			';
		}

		echo $output;
	} else {
		echo 'Data Not Found';
	}
}
