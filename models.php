<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
if($_GET['id']==0){
  print_r(['1', '2', '3', '4', '5' ]);
  exit();
};
if($_GET['id']==5){
  print_r(json_encode(['responce'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail']));
  exit();
};
if($_GET['id']==10){
  print_r(json_encode(['responce'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail','test'=>'fail']));
  exit();
};
if($_GET['id']==10){
  print_r(json_encode(['1', '2', '3', '4', '5','1', '2', '3', '4', '5','1', '2', '3', '4', '5','1', '2', '3', '4', '5','1', '2', '3', '4' ]));
  exit();
};

print_r(json_encode(['responce'=>'fail']));
?>
