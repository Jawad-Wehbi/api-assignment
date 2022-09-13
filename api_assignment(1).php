
<?php

$string = $_GET['string'];
Palindrome($string);

function Palindrome($string) {
  $l = 0;
  $r = strlen($string) - 1;
  $flag = 0;

  while($r > $l){
    if ($string[$l] != $string[$r]){
      $flag = 1;
      break;
    }
    $l++;
    $r--;
  }

  $result = "";

  if ($flag == 0){
    $result = "Palindrome";
  } else {
    $result = "Not Palindrome";
  }

  $data = array("Name" => $string, "Result" => $result);
  echo json_encode($data);

}
?>
