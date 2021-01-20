<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vemsegura";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "insert into tb_novidades (email) values ('$email')";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>vem segura</title>
</head>

<body>
    <div id="news-area">
        <div class="container">
            <div class="col-md-12">
                <h3 class="main-title">Novidades do Vem Segura</h3>
            </div>
            <p>Digite seu e-mail abaixo para ficar por dentro de todas as novidades do Vem Segura</p>
            <form method="POST" action="">
                <input type="email" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
                <input type="submit" value="Enviar" id="news-btn">
            </form>
        </div>
    </div>
</body>

</html>