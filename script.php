<?php
$file1 = file('ids'); // read file2.txt
$file2 = file('colors'); // read file2.txt
// Assuming both files have equal amount of rows.
for ($x = 0; $x < count($file1); $x++) {
    $file1[$x] = str_replace(array("\n", "\r"), "", $file1[$x]);
    $file2[$x] = str_replace(array("\n", "\r"), "", $file2[$x]);

    $files3[$x] = $file1[$x] . $file2[$x];
}
$result = implode("\n", $files3); // combines the array to a single string.
if (file_put_contents('file3.txt', $result)) { // puts the imploded string into file3.txt
    echo "Writing to file 'file3.txt' was successfull.";
}
