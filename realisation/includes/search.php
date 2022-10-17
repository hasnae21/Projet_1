<?php
require('../classes/Connection.php');
require('../classes/PromotionManager.php');
$promo = new PromotionManager();

/////////////////////filter action

if (isset($_POST["query"])) {

	$search = $_POST["query"];                                      ///what we are searching for
	$searched = $promo->Search_Record($search);    ///what we found

	if (mysqli_num_rows($searched) > 0) {
?>

		<table border="1px;">
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
					<td><a href="./includes/delete.php?id=<?php echo $filter['id'] ?>"> Supprimer </a></td>
					<td><a href="./includes/edit.php?id=<?php echo $filter['id'] ?>"> Modifier</a></td>
				</tr>

		<?php
			}
		} else {
			echo 'Data Not Found';
		}
		?>

		</table>

	<?php
}
?>