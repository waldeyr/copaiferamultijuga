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
        include_once './conexao.php';
        $loginData = $_REQUEST;
        $stmt = $dbh->prepare("SELECT * FROM copaifera_multijuga.people WHERE peo_email = ? AND peo_pass = ?");
        $stmt->execute(array($loginData['peo_email'], $loginData['peo_pass']));
        $result = $stmt->fetch( PDO::FETCH_ASSOC);
        if ($result) {
            $_SESSION['peo_name'] = $result['peo_name'];
            $_SESSION['peo_email'] = $result['peo_email'];
            $_SESSION['logado'] = TRUE;
            ?>
            <script language="JavaScript"> window.location = "restrictarea.php";</script> 
            <?php
            $mysqli->close();
        } else {
            ?>
            <script language="JavaScript"> window.location = "login.php?msg=<h2>Not success login.</h2>";</script>
            <?php
        }
        ?>
    </section>

    <footer class="footer">
        <p><i>Copaifera multijuga</i></p>
        <small class="creditos">Site Criado pelo <a href="http://www.biomol.unb.br">Laboratório de Bioinformática da UnB</a></small>
        <img src="img/unb2.jpg" height="18.5" />
        <p>Dúvidas? mendes[at]iscb.org</p>
    </footer>
</div>

</body>
</html>
