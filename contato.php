<?php

    //incluindo a pagina config
    include "config.php";

    //incluindo a pagina header 
    include_once TEMPLATE_PATH. "/header.php";

    //incluindo a pagina do nav 
    include_once TEMPLATE_PATH."/nav.php";
?>
<main>
    <form action="enviarEmail.php" method="post">
        <h1>Enviar um email</h1>
        <div class="form-row">
            <label>Nome</label>
            <div>
                <input type="text" name="nome">
            </div>
        </div>
        <div class="form-row">
            <label>E-mail</label>
            <div>
                <input type="email" name="email">
            </div>
        </div>
        <div class="form-row">
            <label>Mensagem</label>
            <div>
                <textarea rows="5" name="comentario"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div>
                <button type="submit">Enviar</button>
            </div>
        </div>
    </form>
</main>
<?php

    //include rodapé
    include TEMPLATE_PATH."/footer.php";
?>