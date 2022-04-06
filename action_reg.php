
<?php
    require __DIR__ . './connect_config.php';
    function add_new_user_to_database($name1, $lastname, $username, $password, $email){
                    
        $password_poppered = hash_hmac("sha256", $password, $GLOBALS["pepper"]);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
            echo "Niepoprawny adres email!";
        } else {
            $resoult = pg_query($GLOBALS["dbconn"], "SELECT email FROM users WHERE email='$email'");
            $resoult2 = pg_query($GLOBALS["dbconn"], "SELECT 'name' FROM users WHERE email='$name1'");
            $data = pg_fetch_row($resoult);
            $data2 = pg_fetch_row($resoult2);
                if($data == 0){
                    pg_prepare($GLOBALS["dbconn"], "add_user_query", 'INSERT INTO users (id, "name", lastname, username, password_hash, email) VALUES (DEFAULT, $1, $2, $3, $4, $5)');
                    pg_execute($GLOBALS["dbconn"], "add_user_query", array($name1, $lastname, $username, $password_poppered, $email));
                    echo "Rejestracja przebiegla pomyslnie.";
                } else if($data2 != 0){
                    echo "Ta nazwa użytkownika jest już zajęta.";
                } else {
                    echo "Konto z podanym adresem email już istnieje.";
                }       
            }
    }
    add_new_user_to_database($_POST['fname1'], $_POST['lname1'], $_POST['uname1'], $_POST['pass1'], $_POST['email1']);
?>