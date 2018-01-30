<?php
$files1 = file('file1.txt'); // read file1.txt
$files2 = file('file2.txt'); // read file2.txt
// Assuming both files have equal amount of rows.
for($x = 0; $x < count($files1); $x++) {
  $files1[$x] = str_replace(array("\n", "\r"), "", $files1[$x]);
  $files3[$x] = $files1[$x]." ".$files2[$x];
}
$result = implode("", $files3); // combines the array to a single string.
if(file_put_contents('file3.txt', $result)) { // puts the imploded string into file3.txt
  echo "Writing to file 'file3.txt' was successfull.";
}
?>