
$(document).ready(function(){
    $("#romanNumeral").on('input', function(){
        var romanNumeral = $(this).val();
        $.ajax({
            type: "POST",
            url: "romanNumeralConverter.php",
            data: {"romanNumeral": romanNumeral},
            success: function(response){
                $("#result").html(response);
            }
        });
    });
})