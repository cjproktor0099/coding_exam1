<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coding exam</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
    <h3>PROBLEM SET 1</h3>
    <strong>Given a roman numeral, convert it to an integer.</strong> <br>
	<input type="text" id="romanNumeral" placeholder="Input Roman Numeral">	= <span id="result"></span>


	<script>
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
		});
	</script>
    </body>
</html>

