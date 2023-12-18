<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Search Hotel</title>

	<!-- import bootstrap v5.3 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

	<!-- search title -->
	<h1 class="text-center fw-bold pt-3">Ricarca hotel valutazione:</h1>
	
	<!-- form input search -->
	<div class="input-container text-center" style="width: 50%; margin: 0 auto;">
		<form action="alberghi.php" class="pt-5">
  			<div class="mb-3">
    			<label for="vote" class="form-label">Valutazione da 1 a 5:</label>
    			<input type="number" class="form-control" id="vote" name="vote" aria-describedby="emailHelp" placeholder="Valutation.." min="1" max="5" style="width: 35%; margin: 0 auto;">
  			</div>
  			<button type="submit" class="btn btn-primary">Cerca</button>
		</form>
	</div>

	<!-- import bootstrap JS v5.3 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>