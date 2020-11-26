<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volejbols</title>
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<div class="wrapper">
    <nav class="navbar">
        <img class="logo" src="img/2.png">
        <ul>
            <li><a class="active" href="Index">Home</a></li>
            <li><a href="Galerija">Galerija</a></li>
        </ul>
    </nav>
</div>	
    <div class="row">
        <div class="col-md-2">
            <p></p>
        </div>
        <div class = "col-md-6">
            <form action="atsauksmes" method="post">
                <div class="form-group">
                    <label for="name">Vārds:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="nane">Uzvārds:</label>
                    <input type="text" class="form-control" id="surname" name="surname"required>
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadiet savu epastu" name="email">
                </div>
                <div class="form-group">
                    <label for="question">Jūsu jautājums;</label>
                    <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="save">Nosūtīt</button>
            </form>
        </div>
        <div class="col-md-2">
            <p></p>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}";
        echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }

?>
</body>
</html>