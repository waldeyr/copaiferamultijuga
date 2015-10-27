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
        echo $_GET['msg'];
        ?>
        <form name="formlogin" id="formlogin" method="POST" action="loginsave.php">
            <fieldset>


                <!-- Text input-->
                <div>
                    <label for="peo_email">E-mail</label>  
                    <div>
                        <input id="peo_email" name="peo_email" type="text" placeholder="A valid e-mail" required="" size="50">
                        <span class="error" id="peo_emailError"></span>  
                    </div>
                </div>

                <!-- Password input-->
                <div>
                    <label for="peo_pass">Password</label>
                    <div>
                        <input id="peo_pass" name="peo_pass" type="password" placeholder="Your password" required="" size="50">
                        <span class="error" id="peo_passError"></span>
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
