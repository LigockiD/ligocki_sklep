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
            rules: "  Musisz zaakceptować regulamin! <br>",
            pass2: "  Hasła nie są identyczne!"
          },
          submitHandler: function(form) {
            form.submit();
          }
        });
    });

    $("#register").submit(function() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var uname = $("#uname").val();
        var pass  = $("#pass" ).val();
        var email = $("#email").val();
        var rules = $("#rules").val(); 
        $.post("action_reg.php", {
            fname1: fname,
            lname1: lname,
            uname1: uname,
            pass1: pass,
            email1: email
        }, function(data, status) { alert(data); });
        
    });
});