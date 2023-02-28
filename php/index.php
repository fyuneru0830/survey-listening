<?php
  $id = $_POST['jieguo'];
$score = $_POST['score'];
$jsonid = json_encode($id,JSON_UNESCAPED_UNICODE);
//echo($jsonid);
$httpre = $_SERVER['HTTP_REFERER'];
$dsn = 'mysql:dbname=sampledb;host=myapp-db';
try {
$db = new PDO($dsn, 'sample-user', 'hi2mi4i6');
echo "success to connection";
} catch (PDOException $e) {
echo "error to connection database";   
exit('データベース接続失敗。' . $e->getMessage());
}
$sql = "INSERT INTO survey VALUES (NULL,'".$httpre."','".$score."','".$jsonid."')";
echo $sql;
var_dump($db->query($sql));
//foreach ($db->query($sql) as $row) {
//echo "success";  
//var_dump($row);
//}
  exit;
