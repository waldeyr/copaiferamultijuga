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
        <h2>Mannual annotation by <span class="error"><?php echo $_SESSION['peo_name']; ?> </span></h2>
        <?php
        echo $_GET['msg'];
        ?>
        <form name="mannualform" id="mannualform" method="POST" action="mannualsave.php">
            <fieldset>

                <!-- Text input-->
                <div>
                    <label for="man_annotation">Sugested annotation for <span class="error"><?php echo $_REQUEST['trans_id'];?></span></label>  
                    <div>
                        <input id="man_annotation" name="man_annotation" type="text" placeholder="Your sugested annotation" required="" size="50">
                        <span class="error"></span>  
                    </div>
                </div>
                
                <!-- Text input-->
                <div>
                    <script src="js/fields.js" type="text/javascript"></script>
                    <label for="man_evalue">e-value</label>  
                    <div>
                        <input id="man_evalue" name="man_evalue" type="text" placeholder="e-value annotation" required="" size="50">
                    </div>
                        <span class="error"></span>  
                </div>
                
                <!-- Auto-complete input-->
                <div>
                    <label for="ecn_code">Enzyme Code</label>  
                    <div id="field">
                        <input id="ecn_code" name="ecn_code" type="text" placeholder="EC number" required="" size="50">
                        <button id="b1" class="add_ecn_code" type="button">+</button>
                        <span class="error"></span>  
                    </div>
                </div>

                <!-- Auto-complete input-->
                <div>
                    <label for="go_code">Gene Ontology Code</label>  
                    <div>
                        <input id="go_code" name="go_code" type="text" placeholder="GO code" required="" size="50">
                        <button id="b1" class="add_go_code" type="button">+</button>
                        <span class="error"></span>  
                    </div>
                </div>
                
                <!-- Auto-complete input-->
                <div>
                    <div>
                        <input id="peo_id" name="peo_id" type="hidden" value="<?php echo $_SESSION['peo_id']; ?>" readonly="readonly"  size="50">
                        <span class="error"></span>  
                    </div>
                </div>
                

                <!-- Button -->
                <br />
                <div>
                    <label for="peoSave"></label>
                    <div>
                        <button id="peoSave" name="peoSave" type="submit" class="btn" onclick="return validarFormLogin();">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
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
