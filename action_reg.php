<!DOCTYPE html>
    <?php include "head.php"; ?>
    <body>
        <div class="container">
            <?php
                require __DIR__ . './connect_config.php';
                function add_new_user_to_database($name1, $lastname, $username, $password, $email){
                    
                    $password_poppered = hash_hmac("sha256", $password, $GLOBALS["pepper"]);
                    pg_prepare($GLOBALS["dbconn"], "add_user_query", 'INSERT INTO users (id, "name", lastname, username, password_hash, email) VALUES (DEFAULT, $1, $2, $3, $4, $5)');
                    pg_execute($GLOBALS["dbconn"], "add_user_query", array($name1, $lastname, $username, $password_poppered, $email));
                }
                include 'header.php';
                
                add_new_user_to_database($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['pass'], $_POST['email']);
                include 'footer.php';

            ?>
            <div class="col-3 justify-content-md-center">
                <?php
                    $url = "./register.php";
                    header('Location: '.$url);
                ?>
            </div>
        </div>
    </body>
</html>