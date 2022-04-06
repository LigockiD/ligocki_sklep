<!DOCTYPE html>
    <head>
        <?php include "head.php"; ?>
    <head>
    <body>
        <div class="container">
        <?php include 'header.php'; ?>

            <div class="row justify-content-md-center">
                <div class="col-3">
                    <form action="#">
                        <label for="uname">Nazwa użytkownika:</label><br>
                        <input type="text" id="uname" name="uname"><br>
                        <label for="pass">Hasło:</label><br>
                        <input type="password" id="password" name="password"><br>
                        <br>
                        <input type="button" id="send_login" name="send_login" value="Zaloguj"><br><br>
                        <a href="#">Zapomniałeś hasła?</a>
                    </form>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>