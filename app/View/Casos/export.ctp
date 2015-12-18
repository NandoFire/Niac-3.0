<?php

// app/Views/Casos/export.ctp

foreach ($data as $row):
	foreach ($row['Caso'] as &$cell):
		// Escape double quotation marks
		$cell = '"' . preg_replace('/"/','""',$cell) . '"';
	endforeach;
	echo implode(',', $row['Caso']) . "\n";
endforeach;

//aaa
?>

