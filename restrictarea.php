<?php
session_start();
if ($_SESSION['logado'] == FALSE) {
    ?>
    <script language="JavaScript"> window.location = "login.php";</script>

    <?php
}
?>
<!DOCTYPE html>
<html>
    <?php
    include 'cabecalho2.php';
    ?>
    <section class="principal">
        Serei uma página de pesquisa...
    </section>

    <?php
    include 'footer.php';
    ?>
</div>

</body>
</html>
