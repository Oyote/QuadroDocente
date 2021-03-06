<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<title>Quadro Docente</title>
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class="container mt-10">
		<img class="img-80" src="img/ifc-h.png">
    </div>
    
	<div class = "container">
		<form id="servform" action="nameSearch0.php" method="post">
			<div class="input-group">
				<span class="input-group-addon"><i class="fas fa-list-ul"></i></span>
				<input id="nome" name="nome" type="text" class="form-control" placeholder="Nome">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fas fa-briefcase"></i></span>
				<input name="cargo" type="text" class="form-control" placeholder="Cargo" >
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fas fa-envelope"></i></span>
				<input name="email" type="text" class="form-control" placeholder="Email">
			</div>
		</form>

		<div class="buttondiv">
			<h2>Procura</h2>
		</div>
    </div>
	<script src='js/cmb.js'></script>

</body>
</html>