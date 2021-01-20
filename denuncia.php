<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vemsegura";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
    }

    if (isset($_POST['nome']) && isset($_POST['localizacao']) && isset($_POST['vagao']) && isset($_POST['descricao']) && isset($_POST['telefone'])) {
    $nome = $_POST['nome'];
    $localizacao = $_POST['localizacao'];
    $vagao = $_POST['vagao'];
    $descricao = $_POST['descricao'];
    $telefone = $_POST['telefone'];

    $sql = "insert into tb_denuncia (id_cadastro, nome, localizacao, vagao, descricao, telefone) values ((select id_cadastro from tb_cadastros where nome like '$nome'),'$nome', '$localizacao', '$vagao', '$descricao', '$telefone')";
    $result = $conn->query($sql);    
    }
    include('header.php')
?>

    <section class="form-denuncia">
        <h1 class="title">Fazer uma denúncia</h1>

        <div class="container">
            <form action="./denuncia.php" method="POST">
                <div class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="nome" name="nome">
                        <label for="name" class="label">Nome</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="localizacao" name="localizacao">
                        <label for="localizacao" class="label">Localização</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="vagao" name="vagao">
                        <label for="vagao" class="label">Vagão</label>
                    </div>


                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="telefone" name="telefone">
                        <label for="descricao" class="label">Telefone</label>
                    </div>

                    <div class="form-field col-lg-12">
                        <input type="text" class="input-text" id="descricao" name="descricao">
                        <label for="descricao" class="label">Descrição</label>
                    </div>

                    <div class="form-field col-lg-12">
                        <input type="submit" value="enviar" class="submit-btn" name="enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>