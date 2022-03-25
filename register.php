<!DOCTYPE html>
    <?php include 'head.php' ?>
    <body>
        <div class="container">
        <?php include 'header.php'; ?>
        

            <div class="row justify-content-md-center">
                <div class="col-3">
                    <form method="post" action="action_reg.php">
                        <label for="fname">Imię:</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Nazwisko:</label><br>
                        <input type="text" id="lname" name="lname"><br>
                        <label for="uname">Nazwa użytkownika:</label><br>
                        <input type="text" id="uname" name="uname"><br>
                        <label for="pass">Hasło:</label><br>
                        <input type="password" id="pass" name="pass"><br>
                        <label for="email">Adres email:</label><br>
                        <input type="text" id="email" name="email"><br><br>
                        <input type="checkbox" id="rules" name="rules">
                        <label for="rules">Czy akceptujesz <a href="#">regulamin</a>?</label><br>
                        <br>
                        <input type="submit" id="send" name="send" value="Zarejestruj">
                    </form>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>