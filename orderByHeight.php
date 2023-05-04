<?php
		$names = ["Mary","John","Emma"];
		$heights = [180,165,170];
		array_multisort($heights, SORT_DESC, $names);
		echo "<ol>";
		foreach ($names as $name) {
			echo "<li>$name</li>";
		}
		echo "</ol>";
	?>