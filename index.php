<?php

    //incluindo a pagina config
    include "config.php";

    //incluindo a pagina header 
    include_once TEMPLATE_PATH. "/header.php";

    //incluindo a pagina do nav 
    include_once TEMPLATE_PATH."/nav.php";
?>
<main>
    <h2>Home</h2>
    <h2>Disciplinas</h2>
    <h2>Professores</h2>
    <h2><a href="contato.php">Contato</a></h2>
</main>
<?php

    //include rodapé
    include TEMPLATE_PATH."/footer.php";
?>