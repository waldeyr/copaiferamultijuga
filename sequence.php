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
        <div id="printable" style="text-align: justify;"    >
            <?php
            if (isset($_REQUEST['trans_id'])) {
                
                $trans_id = $_REQUEST['trans_id'];
                
                $sql = "SELECT t.trans_sequence FROM copaifera_multijuga.transcript t WHERE t.trans_id = '{$trans_id}'";

                include_once 'conexao.php';

                $stmt1 = $dbh->prepare($sql);
                $stmt1->execute();

                $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                $rows =  trim( str_replace(" ", "",  $result1['trans_sequence']) );
                echo "<pre>";
                print_r(">$trans_id\n".$rows);
                echo "</pre>";
            }
            ?>

        </div>
    </section>
    <?php
    include 'footer.php';
    ?>
</div>

</body>
</html>