<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <?php
    include 'cabecalho.php';
    ?>
    <section class="principal">
        <?php
        session_destroy();
        ?>
        <script language="JavaScript"> window.location = "index.php";</script> 
    </section>

    <footer class="footer">
        <p>V Simpósio do Programa de Pós-Graduação em Biologia Molecular - 2015 </p>
        <small class="creditos">Site Criado pelo <a href="http://www.biomol.unb.br">Laboratório de Bioinformática da UnB</a></small>
        <img src="img/unb2.jpg" height="18.5" />
    </footer>
</div>

</body>
</html>
