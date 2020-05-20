<?php
require "dbh.inc.php";
?>
<!doctype html>
<html lang="pl" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Oskar Pykosz">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Jacek Maciocah</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Tomasz Mes</h1>
    <div class="row">
		<div class="col-md-6">
		<form action="add_url.php" method="post">
			<div class="form-group">
				<label for="url">URL</label>
				<input type="url" name="url" class="form-control" id="url">
			</div>
		</div>
		<div class="col-md-2">
		<label for="url"></label>
			<button type="submit" name="submit" class="btn btn-primary btn-block">Dodaj</button>
		</div>
		</form>
		<div class="col-md-4">
		<form action="send_mail.php" method="post">
			<div class="form-group">
				<label for="email">Adres e-mail</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<textarea id="w3mission" name="tresc" rows="10" style="width:100%;">
<table>
	<tr>
		<th><h1>Generator maili:</h1></th>
	</tr>
	<ul>
	<?php
						$sql = "SELECT * from urls";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
							echo "	<li>".$row["url"]."</li>
	";
						}
						?>
	
	</ul>
</table></textarea>
<button type="submit" name="submit-mail" class="btn btn-primary btn-block">Wyślij</button>
</form>
			</div>
		</div>
		<div class="col-md-6">
			<ul>
			<?php
						$sql = "SELECT * from urls";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
							echo "<li>".$row["url"]."</li>		<a href='delete_url.php?id=".$row["id"]."'>Usuń link</a>";
						}
						?>
			</ul>
		</div>
	</div>
  </div>
</main>

<footer class="footer mt-auto py-3">
</footer>
</body>
</html>
