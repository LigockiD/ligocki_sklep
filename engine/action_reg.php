
<?php
    require __DIR__ . './connect_config.php';
    function add_new_user_to_database($name, $lastname, $username, $password, $repeat_password, $email, $rules){
                    
        $password_poppered = hash_hmac("sha256", $password, $GLOBALS["pepper"]);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $resoult = pg_query($GLOBALS["dbconn"], "SELECT email FROM users WHERE email='$email'");
        $resoult2 = pg_query($GLOBALS["dbconn"], "SELECT 'username' FROM users WHERE username='$name'");
        $data = pg_fetch_row($resoult);
        $data2 = pg_fetch_row($resoult2);
        if(strlen($name) < 1 || strlen($lastname) < 1){ //sprawdzenie imienia i nazwiska
            echo "Imię i/lub nazwisko nie mogą być puste!";
        }else if(strlen($username) < 2){
            echo "Podana nazwa użytkownika jest za krótka!";
        } else if($data2 != 0){
            echo "Ta nazwa użytkownika jest już zajęta."; 
        } else if(strlen($password) < 5){ //sprawdzenie czy hasło ma przynajmniej 5 znaków
            echo "Hasło musi posiadać przynajmniej 5 znaków!";
        } else if($password != $repeat_password){ //sprawdzenie czy obydwa hasła są takie same
            echo "Podane hasła różnią się!";
        } else if(!filter_var($email, FILTER_SANITIZE_EMAIL)){ //sprawdzenie poprawności emaila
            echo "Niepoprawny adres email!";
        } else if($data != 0){
            echo "Konto z podanym adresem email już istnieje.";
        } else if($rules == "false"){
            echo "Musisz zaakceptować regulamin!";
        } else {
            echo "Rejestracja przebiegla pomyslnie.";
            pg_prepare($GLOBALS["dbconn"], "add_user_query", 'INSERT INTO users (id, "name", lastname, username, password_hash, email) VALUES (DEFAULT, $1, $2, $3, $4, $5)');
            pg_execute($GLOBALS["dbconn"], "add_user_query", array($name, $lastname, $username, $password_poppered, $email));
        } 
    }
    add_new_user_to_database($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['pass'], $_POST['pass2'], $_POST['email'], $_POST["rules"]);
?>