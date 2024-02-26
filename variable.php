<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>

<?php
//declare variables

$name = "UMI NAJIAH";
$age = 40;
$city = "Shah Alam";
$imgId=23;

//output message using HTML formatting

echo "<p><strong>Name:</strong>".(isset($name)?$name:"Not provided")."</p>";
echo "<p><strong>Age:</strong>".(isset($age)?$age:"Not provided")."</p>";
echo "<p><strong>City:</strong>".(isset($city)?$city:"Not provided")."</p>";

//var_dump demonstration

echo "<p><strong>Debugging Information:</strong></p>";
echo "<pre>";
var_dump($name, $age, $city);
echo "</pre>";

echo "Hello ".$name;
echo "<img src='$imgId.jpg' alt='".$name." " .$city."'>";

?>