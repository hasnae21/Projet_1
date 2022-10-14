<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
	<center>
		


			<?php
			require('../classes/Connection.php');
			$promo = new PromotionManager();

			/////////////////////filter action

			if (isset($_POST["query"])) {

				$search = $_POST["query"];                    ///what we are searching for
				$searched = $promo->Search_Record($search);   ///what we found

				if (mysqli_num_rows($searched) > 0) {
					header("location:../index.php");
			?>
				<tr>
					<td> ID de la promotion </td>
					<td> Nom de la promotion </td>
					<td colspan="2"> Operations </td>
				</tr>

				<?php
					// while ($filter = mysqli_fetch_assoc($searched)) {
				?>
						<tr>
							<td><?php echo $filter['id'] ?></td>
							<td><?php echo $filter['name'] ?></td>
							<td><a href="./includes/delete.php?id=<?php echo $filter['id'] ?>"> Supprimer </a></td>
							<td><a href="./includes/edit.php?id=<?php echo $filter['id'] ?>"> Modifier</a></td>
						</tr>

			<?php
					}
				} else {
					echo 'Data Not Found';
				}
			}
			?>


	</center>
</body>

</html>