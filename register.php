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
                <div class="col-3 form-floating mb-3">
                    <form id="reg1" method="post" action="#">
                        <br>
                        <input class="form-control" type="text" id="fname" name="fname" placeholder="Imię" aria-label="Imię"><br>
                        <input class="form-control" type="text" id="lname" name="lname" placeholder="Nazwisko" aria-label="Nazwisko"><br>
                        <input class="form-control" type="text" id="uname" name="uname" placeholder="Nazwa użytkownika" aria-label="Nazwa użytkownika"><br>
                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Hasło" aria-label="Hasło"><br>
                        <input class="form-control" type="password" id="pass2" name="pass2" placeholder="Powtórz hasło" aria-label="Powtórz hasło"><br>
                        <input class="form-control" type="text" id="email" name="email" placeholder="Email" aria-label="Email"><br><br>
                        
                        <label class="form-control order-1" for=rules><input class="form-check-input" type="checkbox" id="rules" name="rules"> &nbspCzy akceptujesz <a href="#">regulamin</a>?</label><br><br>
                        <input class="btn btn-outline-dark" type="submit" id="register" name="register" value="Zarejestruj">  
                    </form>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>