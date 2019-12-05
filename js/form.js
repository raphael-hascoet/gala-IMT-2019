$.fn.reset = function(){
    return $(this).each(function(){
        $("input[name=prenom]").val("Prénom");
        $("input[name=nom]").val("Nom");
        $("input[name=email]").val("Email");
        $("textarea").val("Message");
    });
}

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

var $contactForm = $("form");

$contactForm.submit(function(){
    var $validForm = true;
    $('.error').css('display', 'none');
    $('.contact-result').css('display', 'none');

    $('input, textarea').css('border-color', '#FFF');

    if ($("input[name=prenom]").val() == "Prénom"){
        $("input[name=prenom]").css('border-color', '#C90303');
        $("#prenom-error").css('display', 'block');
        $validForm = false;
    } else if ($("input[name=nom]").val() == "Nom"){
        $("input[name=nom]").css('border-color', '#C90303');
        $("#nom-error").css('display', 'block');
        $validForm = false;
    } else if ($("input[name=email]").val() == "Email" || !isValidEmailAddress($("input[name=email]").val())){
        $("input[name=email]").css('border-color', '#C90303');
        $("#email-error").css('display', 'block');
        $validForm = false;
    } else if ($("textarea").val() == "Message"){
        $("textarea").css('border-color', '#C90303');
        $("#message-error").css('display', 'block');
        $validForm = false;
    }

    if ($validForm){
        $.post({
            url: 'contact.php', 
            data: 
            {
                'prenom': $("input[name=prenom]").val(),
                'nom': $("input[name=nom]").val(),
                'email': $("input[name=email]").val(),
                'message': $("textarea").val()
            },
            success: function(result){
            	console.log(result);
                if (result == '1'){
                    $contactForm.reset();
                    $('#success').css('display', 'block');
                } else {
                    $('#fail').css('display', 'block');
                }
            }
        });
    }  
    return false;
});

$contactForm.reset();