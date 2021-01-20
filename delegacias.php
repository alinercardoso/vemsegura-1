<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "vemsegura";

    $conn = mysqli_connect($servername, $username, $password, $database);

    mysqli_set_charset($conn, "utf8");

    if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
    }
?>

<?php

$sql = "SELECT * FROM tb_delegacias";
$dados = mysqli_query($conn,$sql) or die(mysql_error());
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);

 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vem segura</title>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- Via MaxCDN -->
</head>
 
<body>

<div class="col-md-12">
<h3 class="main-title">Localize uma delegacia</h3>
<div>

<form action="" method="GET" name="buscar">
 
<select name="delegacia" id="">    
    <option value="" action="result.php" selected = selected>Selecione</option>
    <?php
    if($total > 0) {
        do {
        echo "<option value='".$linha['id']."'>".$linha['delegacia'].$linha['endereco'] .$linha ['telefone'];"</option>";
        }while($linha = mysqli_fetch_assoc($dados));
    }
   
    ?>
</select>
</body>
</html>   