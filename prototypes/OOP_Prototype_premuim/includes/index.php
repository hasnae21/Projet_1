<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset=utf-8" />
	<title> filter </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>    
	<!-- <center>

	<label for="search_text"> Rechercher : </label>
	<input type="text" name="search_text" id="search_text" />

	<div id="result"></div>
	<div style="clear:both"></div>
</center> -->
</body>

</html>


<!-- <script>
	$(document).ready(function() {
		load_data();

		function load_data(query) {
			$.ajax({
				url: "./fetch.php",
				method: "post",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			});
		}

		$('#search_text').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});
	});
</script> -->