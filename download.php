<?php

$base64_image_content = $_GET['pic'];
if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
  $type = $result[2];
  $new_file = "./test.{$type}";
  $imgstring = base64_decode(str_replace($result[1], '', $base64_image_content));
  header('Content-type: image/png');
  $name = time().'.png';
  header("Content-Disposition: attachment;filename=$name ");
}
// header("Content-Type: application/vnd.ms-excel; charset=GB2312");
// header("Content-Disposition: attachment;filename=$file.csv ");


?>