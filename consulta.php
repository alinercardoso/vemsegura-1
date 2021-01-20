<?php include('header.php')?> 
    <section class="form-denuncia">
        <h1 class="title">Consulte aqui sua denúncia</h1>

        <div class="container">
            <form action="resultado_consulta.php" method="GET">
                <div class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input type="text" class="input-text" id="nome" name="nome">
                        <label for="nome" class="label">Nome</label>
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