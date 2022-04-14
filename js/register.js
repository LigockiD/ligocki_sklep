$(document).ready(function() {
    $(function() {
        $("#reg1").validate({
          rules: {
            fname: "required",
            lname: "required",
            uname: "required",
            pass: { required: true, minlength: 5 },
            pass2: { equalTo: "#pass" },
            email: { required: true, email: true },
            rules: "required"
          },
          messages: {
            fname: "  Musisz podać imię",
            lname: "  Musisz podać nazwisko",
            uname: "  Musisz podać nazwę użytkownika",
            email: "  Podaj poprawny adres email",
            pass: { required: "  Musisz podać hasło", minlength: "  Hasło musi zawierać przynajmniej 5 znaków" },
            rules: "  &nbsp Musisz zaakceptować regulamin!",
            pass2: "  Hasła nie są identyczne!"
          },
          submitHandler: function(form) {
            form.submit();
          }
        });
    });

    $("#register").click(function() {
        var _fname = $("#fname").val();
        var _lname = $("#lname").val();
        var _uname = $("#uname").val();
        var _pass  = $("#pass" ).val();
        var _pass2 = $("#pass2" ).val();
        var _email = $("#email").val();
        var _rules = $("#rules").is(':checked');

        $.post("./engine/action_reg.php", {
            fname: _fname,
            lname: _lname,
            uname: _uname,
            pass: _pass,
            pass2: _pass2,
            email: _email,
            rules: _rules
        }, function(data) { alert(data); });
        
    });
});