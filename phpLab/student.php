<?php
$students = [];

echo "Enter student names separated by commas: ";
$input = trim(fgets(STDIN));
$students = explode(",", $input);
$students = array_map('trim', $students); 

echo "Original Array:\n";
print_r($students);

asort($students);
echo "\nSorted in Ascending Order:\n";
print_r($students);

arsort($students);
echo "\nSorted in Descending Order:\n";
print_r($students);
?>