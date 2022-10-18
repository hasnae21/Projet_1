<table class="table table-bordered">

	<?php
	require('../classes/Connection.php');
	$promo = new PromotionManager();

	/////////////////////filter action
	if (isset($_POST["query"])) {

		$search = $_POST["query"];                       ///what we are searching for
		$searched = $promo->Search_Record($search);      ///what we found

		if (mysqli_num_rows($searched) > 0) {
	?>

			<tr>
				<td> ID de la promotion </td>
				<td> Nom de la promotion </td>
				<td colspan="2"> Operations </td>
			</tr>

			<?php
			while ($filter = mysqli_fetch_assoc($searched)) {
			?>

				<tr>
					<td><?php echo $filter['id'] ?></td>
					<td><?php echo $filter['name'] ?></td>
					<td><a class="btn btn-danger" href="./functions/delete.php?id=<?php echo $filter['id'] ?>"> Supprimer </a></td>
					<td><a class="btn btn-warning" href="./functions/edit.php?id=<?php echo $filter['id'] ?>"> Modifier</a></td>
				</tr>

			<?php
			}
		} else {
			echo 'Data introuvable :(';
		}
	}

	/////////////////////affichage action
	else {
		$result = $promo->view_record();

		if (mysqli_num_rows($result) > 0) {
			?>

			<tr>
				<td> ID de la promotion </td>
				<td> Nom de la promotion </td>
				<td colspan="2"> Operations </td>
			</tr>

			<?php
			while ($data = mysqli_fetch_assoc($result)) {
			?>

				<tr>
					<td><?php echo $data['id'] ?></td>
					<td><?php echo $data['name'] ?></td>
					<td><a class="btn btn-danger" href="./functions/delete.php?id=<?php echo $data['id'] ?>"> Supprimer </a></td>
					<td><a class="btn btn-warning" href="./functions/edit.php?id=<?php echo $data['id'] ?>"> Modifier</a></td>
				</tr>

	<?php
			}
		}
	}
	?>

</table>