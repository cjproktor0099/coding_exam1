<?php
	function romanToInt($s) {
	    $romanNumeralMap = array(
	        'I' => 1,
	        'V' => 5,
	        'X' => 10,
	        'L' => 50,
	        'C' => 100,
	        'D' => 500,
	        'M' => 1000
	    );
	    
	    $result = 0;
	    $prevValue = 0;
	    for ($i = strlen($s) - 1; $i >= 0; $i--) {
	        $currValue = $romanNumeralMap[$s[$i]];
	        if ($currValue < $prevValue) {
	            $result -= $currValue;
	        } else {
	            $result += $currValue;
	        }
	        $prevValue = $currValue;
	    }
	    
	    return $result;
	}
	
	if (isset($_POST["romanNumeral"])) {
	    $romanNumeral = $_POST["romanNumeral"];
	    $integerValue = romanToInt($romanNumeral);
	    echo $integerValue;
	}
?>
