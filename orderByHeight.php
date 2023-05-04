<?php
		// Your PHP code here

		// Example inputs
		$names = ["Mary","John","Emma"];
		$heights = [180,165,170];

		// Sort names in descending order by heights
		array_multisort($heights, SORT_DESC, $names);

		// Output sorted names as an HTML unordered list
		echo "<ol>";
		foreach ($names as $name) {
			echo "<li>$name</li>";
		}
		echo "</ol>";
	?>