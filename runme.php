<?php
$csv_file = "list.csv";

if (($handle = fopen($csv_file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        exec("import.php {$data[0]} {$data[1]} {$data[2]}");
    }
    fclose($handle);
}
