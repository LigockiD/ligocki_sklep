<!DOCTYPE html>
    <head>
        <?php include "head.php"; ?>
    <head>
    <body>
        <div class="container">
        <?php include 'header.php'; ?>

            <div class="row justify-content-md-center">
                <div class="col-3 form-floating mb-3">
                    <form action="#">
                        <br>
                        <input class="form-control" type="text" id="uname" name="uname" placeholder="Nazwa użytkownika" aria-label="Nazwa użytkownika"><br>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Hasło" aria-label="Hasło"><br>
                        <br>
                        <input class="btn btn-outline-dark" type="button" id="send_login" name="send_login" value="Zaloguj"><br><br>
                        <a href="#">Zapomniałeś hasła?</a>
                    </form>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>