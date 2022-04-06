$(document).ready(function() {
    $("#register").click(function() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var uname = $("#uname").val();
        var pass = $("#pass").val();
        var email = $("#email").val();
        var rules = $("#rules").val();
            if (fname == '' || lname == '' || uname == '' || pass == '' || email == '') {
                alert("Uzupełnij wszystkie pola!");
            } else if ((pass.length) < 8) {
                alert("Hasło powinno zawierać przynajmniej 8 znaków!");
            } else if($("rules").prop("checked") == false){
                alert("Musisz zaakceptować regulamin!");
            } else {
                $.post("action_reg.php", {
                fname1: fname,
                lname1: lname,
                uname1: uname,
                pass1: pass,
                email1: email
                }, function(data, status) {
                    //
                });
                alert("Zarejestrowany pomyślnie!");
            }
    });
});