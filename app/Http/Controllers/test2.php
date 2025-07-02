<?php
$host = "localhost";
$user = "johnpaul";
$pass = "";
$db = "testpartII";
$conn = new mysqli;
$conn->connect($host, $user, $pass, $db);
$sql = "CREATE TABLE IF NOT EXISTS my_table (id INT AUTO_INCREMENT PRIMARY KEY, a INT, b INT, c VARCHAR(255))";
$conn->multi_query($sql);
if (isset($_POST['a'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $insert = "INSERT INTO my_table (a, b, c) VALUES (" . $a . ", " . $b . ", '" . $c . "')";
  $conn->multi_query($insert);
  $sum = $a + $b;
  $reverse = "";
  $i = 0;
  while (true) {
    if (!isset($c[$i])) break;
    $i++;
  }
  $length = $i;
  $i = $length - 1;
  while ($i >= 0) {
    $reverse .= $c[$i];
    $i--;
  }
  echo "Sum: " . $sum . "<br>Reversed c: " . $reverse;
}
?>
<form method="post">
  a: <input name="a"><br>
  b: <input name="b"><br>
  c: <input name="c"><br>
  <input type="submit" value="Submit">
</form>
