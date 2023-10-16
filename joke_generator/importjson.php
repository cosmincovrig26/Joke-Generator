<?php

$con = mysqli_connect('localhost','root','','fathom03task1');

$file = "index.json";
$mydata = file_get_contents($file);
$arr = json_decode($mydata,true);

foreach ($arr as $value) {

  $query = "INSERT INTO jokes(id, type, setup, punchline)
              VALUES ('$value[id]', '$value[type]', '$value[setup]',
              '$value[punchline]')";

  mysqli_query($con, $query);
}
echo "Done!";
 ?>
