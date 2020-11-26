<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volejbols</title>
    <link rel="stylesheet" href="style.css">
<style>
body .navbar{
    position: fixed;
    height: 80px;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.4);
}
.navbar .logo{
    width: 100px;
    height: auto;
    padding: 5px 5px;
}
.navbar ul{
    float: right;
    margin-right: 20px;
}
.navbar ul li{
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
} 
{
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background:url(img/1.jpg) no-repeat;
  background-size: cover;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
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
<div class="about-section">
  <h1>Galerija</h1>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="/img/1.jpg" style="width:100%">
      <div class="container">
        <h2>Bumba</h2>
        <p>Volejbola bumba nav īsti liela un pārsvarā viņa ir divkrāsaina.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/img/2.png" style="width:100%">
      <div class="container">
        <h2>Attēlojums</h2>
        <p>Attēlojums kā notiek spēle.</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/img/3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Spēle</h2>
        <p>Spēle saulrietā.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
