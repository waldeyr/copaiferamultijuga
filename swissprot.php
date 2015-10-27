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
        <div id="pagination" cellspacing="0">

        </div>
        <script type="text/javascript" src="js/ajaxswissprot.js"></script>
    </section>
    <?php
    include 'footer.php';
    ?>
</div>

</body>
</html>
