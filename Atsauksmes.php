<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volejbols</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <nav class="navbar">
        <img class="logo" src="img/2.png">
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="Galerija">Galerija</a></li>
            <li><a href="Video">Video</a></li>
        </ul>
    </nav>
	<style>
	P { text-align: center }
	</style>
	<div class="row">
        <div class="col-md-6">
        </div>
        <div class = "col-md-6">
            <form action="Atsauksmes" method="post">
                <div class="form-group">
                    <label for="name">Vārds:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="nane">Password:</label>
                    <input type="password" class="form-control" id="surname" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadiet savu epastu" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Ages:</label>
                    <input type="number" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="question">Jūsu jautājums;</label>
                    <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="save">Nosūtīt</button>
            </form>
        </div>
        <div class="col-md-6">
            <p></p>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}";
        echo "<b>Parole:</b>{$_POST['surname']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }

?>
    }
?>