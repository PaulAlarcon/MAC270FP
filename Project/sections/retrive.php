<?php
  include 'operations.php';
  
  $fn = $_POST['key'];

  if (isset($_POST['tab'])) {
    $tab = $_POST['tab'];
    $sql = $op->getDataForUpload($fn, $tab);
    echo $sql;
  } else {
    $tablename = $_POST['tablename'];
    $sql = $op->getData($fn, $tablename);
    print_r(json_encode($sql));
  }