<!DOCTYPE html>
    <head>
        <?php include "head.php"; ?>
        <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/jquery-validation-1.19.3.js"></script>
        <script src="./js/register.js"></script>
        <script src="./js/jquery-validation-additional-method-1.19.3.js"></script>
    <head>
    <body>
        <div class="container">
        <?php include 'header.php'; ?>
        

            <div class="row justify-content-md-center">
                <div class="col-3">
                    <form id="reg1" method="post" action="#">
                        <label for="fname">Imię:</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Nazwisko:</label><br>
                        <input type="text" id="lname" name="lname"><br>
                        <label for="uname">Nazwa użytkownika:</label><br>
                        <input type="text" id="uname" name="uname"><br>
                        <label for="pass">Hasło:</label><br>
                        <input type="password" id="pass" name="pass"><br>
                        <label for="pass">Powtórz hasło:</label><br>
                        <input type="password" id="pass2" name="pass2"><br>
                        <label for="email">Adres email:</label><br>
                        <input type="text" id="email" name="email"><br><br>
                        <input type="checkbox" id="rules" name="rules">
                        <label for="rules">Czy akceptujesz <a href="#">regulamin</a>?</label><br>
                        <br>
                        <input type="submit" id="register" name="register" value="Zarejestruj">
                    </form>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>