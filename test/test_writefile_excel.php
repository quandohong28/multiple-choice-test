<?php

include "../model/excel.php";

$students = array(
    array('id' => 1, 'name' => 'John Doe'),
    array('id' => 2, 'name' => 'Jane Smith')
);

$filename = 'student2.xlsx'; // Tên file Excel

writeStudentsToExcel($students, $filename);