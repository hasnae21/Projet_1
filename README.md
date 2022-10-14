# Projet_1
   
Le centre SOLICODE est doté des moyens pédagogiques et techniques innovants favorisant l’apprentissage et la pratique des connaissances dans les meilleures conditions. SOLICODE adopte une pédagogie active et par projets où l’apprenant se trouve dans des situations réelles ce qui garantit une insertion professionnelle. L’apprenant est accompagné par des formateurs toute la période de formation.
Dans le but de simplifier la gestion de la formation par projets aux formateurs de Solicode. Votre mission est de créer une application CRUD fullstack à base de PHP et Mysql qui permet la manipulation des promotions dans Solicode


        //var_dump(mysqli_fetch_object($result));
        // exit();

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