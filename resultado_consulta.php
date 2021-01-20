<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vemsegura";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
    }

$nome = $_GET['nome'];
    
if ($nome != null){
        $nome = $_GET['nome'];
    }
    $sql = "SELECT * FROM tb_cadastros INNER JOIN tb_denuncia ON tb_cadastros.id_cadastro = tb_denuncia.id_cadastro WHERE tb_denuncia.nome = '$nome'";
    $result = $conn->query($sql);
    include('header.php')
?>


    <section class="form-denuncia">
        <h1 class="title">Cadastro</h1>

        <div class="container">

            <?php

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<br><b>Nome:</b> ". $row["nome"]. "<br><b>Localização:</b> ". $row["localizacao"]. "<br><b>Vagão:</b> ". $row["vagao"]. "<br><b>Descrição:</b> ". $row["descricao"]."<br>";
                    }
                } else {
                    echo "0 results";
                }

            ?>

        </div>
    </section>
</body>

</html>