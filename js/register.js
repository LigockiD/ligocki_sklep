$(document).ready(function() {
    $(function() {
        $("#reg1").validate({
          rules: {
            fname: { reguired: true, minlength: 2 },
            lname: { reguired: true, minlength: 2 },
            uname: { reguired: true, minlength: 2 },
            email: { required: true, email: true  },
            pass:  { required: true, minlength: 5 },
            pass2: { equalTo: "#pass" },
            rules: "required"
          },
          messages: {
            fname: { required: "  Musisz podać imię", minlength: "  Imię musi zawierać przynajmniej 2 znaki" },
            lname: { required: "  Musisz podać nazwisko", minlength: "  Nazwisko musi zawierać przynajmniej 2 znaki" },
            uname: { required: "  Musisz podać nazwę użytkownika", minlength: "  Nazwa użytkownika musi zawierać przynajmniej 2 znaki" },
            email: "  Musisz podać poprawny adres email",
            pass:  { required: "  Musisz podać hasło", minlength: "  Hasło musi zawierać przynajmniej 5 znaków" },
            pass2: "  Hasła nie są identyczne!",
            rules: "  &nbsp Musisz zaakceptować regulamin!"
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
        $.post("action_reg.php", {
            fname: _fname,
            lname: _lname,
            uname: _uname,
            pass: _pass,
            pass2: _pass2,
            email: _email,
            rules: _rules
        }, function(data, status) { alert(data + "\n" + status); });
        
    });
});