<?php
$name = $_POST['name'];

if (empty($name)) {
  echo 'Stranger, please tell me your name!';
} else if ($name == 'Rohit' || $name == 'Virat' || $name == 'Dhoni' || $name == 'Ashwin' || $name == 'Harbhajan') {
  echo 'Hello, master!';
} else {
  echo $name . ', I don\'t know you!';
}
?>
