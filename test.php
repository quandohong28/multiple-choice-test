<?php

// Include PHPExcel library
require_once './lib/PhpExcel/vendor/autoload.php';
require_once './lib/PhpExcel/Classes/PHPExcel.php';

// Create a new PHPExcel object
$objPHPExcel = PHPExcel_IOFactory::load("./schedule.xlsx");

// Get the first sheet of the Excel file
$worksheet = $objPHPExcel->getActiveSheet();

// Loop through each row of the sheet
foreach ($worksheet->getRowIterator() as $row) {
    // Loop through each cell of the row
    foreach ($row->getCellIterator() as $cell) {
        // Get the value of the cell
        $value = $cell->getValue();
        // Do something with the value
        echo $value . " ";
    }
    echo "<br>";
}
