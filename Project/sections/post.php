<?php
  include 'operations.php';
  /* Storing Left Part to the database.tbl_Project */

$total = floatval($_POST['Proj_Const_Cost']) + floatval($_POST['Proj_Design_Team']) + floatval ($_POST['Proj_Design_Cost']) + floatval($_POST['Proj_Mgmt_Cost']) + floatval($_POST['Proj_FE_Cost']);
    

  $dataProject  = array(
    'Proj_Number'       =>  $_POST['Proj_Number'],
    'Proj_Name'         =>  $_POST['Proj_Name'],
    'Proj_Type'         =>  $_POST['Proj_Type'],
    'Proj_St_Date'      =>  $_POST['Proj_St_Date'],
    'Proj_Comp_Date'    =>  $_POST['Proj_Comp_Date'],
    'Proj_Building'     =>  $_POST['Proj_Building'],
    'Priority_lvl'      =>  $_POST['Priority_lvl'],
    'services'          =>  $_POST['services'],
    'Proj_Design_Team'  =>  $_POST['Proj_Design_Team'],
    'Proj_Design_Cost'  =>  $_POST['Proj_Design_Cost'],
    'Proj_Const_Cost'   =>  $_POST['Proj_Const_Cost'],
    'Proj_FE_Cost'      =>  $_POST['Proj_FE_Cost'],
    'Proj_Mgmt_Cost'    =>  $_POST['Proj_Mgmt_Cost'],
    'Proj_Total_Cost'   =>  $_POST['Proj_Total_Cost'],
    'Proj_Overview'     =>  $_POST['Proj_Overview'],
    'location'          =>  $_POST['location'],
    'status'            =>  $_POST['status'],
    'Proj_Total_Cost'   =>  $total
  );

  //checking if data is stored in tbl_project or not
  $Proj_result = $op->saveRecord('tbl_Project',$dataProject);
  if($Proj_result != "Success"){
    echo $Proj_result;
  }
  //print_r($dataProject);

  /* Storing Right Part Funding to database.tbl_Funding */
  $dataFunding  = array(
    'Proj_ID'           =>  $_POST['Proj_ID'],
    'boro_Amount'       =>  $_POST['boro_Amount'],
    'boro_Fy'           =>  $_POST['boro_Fy'],
    'boro_Contact'      =>  $_POST['boro_Contact'],
    'city_Amount'       =>  $_POST['city_Amount'],
    'city_Fy'           =>  $_POST['city_Fy'],
    'city_Contact'      =>  $_POST['city_Contact'],
    'mayor_Amount'      =>  $_POST['mayor_Amount'],
    'mayor_Fy'          =>  $_POST['mayor_Fy'],
    'mayor_Contact'     =>  $_POST['mayor_Contact'],
    'house_Amount'      =>  $_POST['house_Amount'],
    'house_Fy'          =>  $_POST['house_Fy'],
    'house_Contact'     =>  $_POST['house_Contact'],
    'capital_Amount'    =>  $_POST['capital_Amount'],
    'capital_Fy'        =>  $_POST['capital_Fy'],
    'capital_Contact'   =>  $_POST['capital_Contact'],
    'cuny_Amount'       =>  $_POST['cuny_Amount'],
    'cuny_Fy'           =>  $_POST['cuny_Fy'],
    'cuny_Contact'      =>  $_POST['cuny_Contact'],
    'sam_Amount'        =>  $_POST['sam_Amount'],
    'sam_Fy'            =>  $_POST['sam_Fy'],
    'sam_Contact'       =>  $_POST['sam_Contact'],
    'grant_Amount'      =>  $_POST['grant_Amount'],
    'grant_Fy'          =>  $_POST['grant_Fy'],
    'grant_Contact'     =>  $_POST['grant_Contact'],
    'federal_Amount'    =>  $_POST['federal_Amount'],
    'federal_Fy'        =>  $_POST['federal_Fy'],
    'federal_Contact'   =>  $_POST['federal_Contact'],
    'operating_Amount'  =>  $_POST['operating_Amount'],
    'operating_Fy'      =>  $_POST['operating_Fy'],
    'operating_Contact' =>  $_POST['operating_Contact'],
    'cap_Amount'        =>  $_POST['cap_Amount'],
    'cap_Fy'            =>  $_POST['cap_Fy'],
    'cap_Contact'       =>  $_POST['cap_Contact'],
    'energy_Amount'     =>  $_POST['energy_Amount'],
    'energy_Fy'         =>  $_POST['energy_Fy'],
    'energy_Contact'    =>  $_POST['energy_Contact']
  );

  //checking if data is stored in tbl_funding or not
  $Fund_result = $op->saveRecord('tbl_Funding',$dataFunding);
  if($Fund_result != "Success"){
    echo $Fund_result;
  }
  //print_r($dataFunding);

  
  /* Saving uploaded file to upload folder and recording in database.tbl_Uploads */
  /* File Upload Process for Meeting Minutes */
  if (isset ($_POST['minutes'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Minutes';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['mfile']['name']))//counts the number of files
    {
      $name = $_FILES['mfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['mfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["minutes"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Request and Design Basis */
  if (isset ($_POST['design'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Design';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['dfile']['name']))//counts the number of files
    {
      $name = $_FILES['dfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['dfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["design"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Request for Scope Change */
  if (isset ($_POST['scope'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Scope';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['sfile']['name']))//counts the number of files
    {
      $name = $_FILES['sfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['sfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["scope"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Cost Estimates */
  if (isset ($_POST['cost'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Cost';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['cfile']['name']))//counts the number of files
    {
      $name = $_FILES['cfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['cfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["cost"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Building Department */
  if (isset ($_POST['building'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Building';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['bdfile']['name']))//counts the number of files
    {
      $name = $_FILES['bdfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['bdfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["building"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Bid Documents */
  if (isset ($_POST['bid'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Bid';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['bfile']['name']))//counts the number of files
    {
      $name = $_FILES['bfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['bfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["bid"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for Inspection Report */
  if (isset ($_POST['report'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'Report';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['rfile']['name']))//counts the number of files
    {
      $name = $_FILES['rfile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['rfile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["report"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for F and E */
  if (isset ($_POST['fe'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'FE';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['ffile']['name']))//counts the number of files
    {
      $name = $_FILES['ffile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['ffile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["fe"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 

  /* File Upload Process for CloseOut */
  if (isset ($_POST['closeout'])) // checks for the submit value
  {
    $pid = $_POST['Proj_ID'];
    $tab = 'CloseOut';
    $path = '../uploads/'; //folder's name
    $i = 0; 
    while($i<count($_FILES['cofile']['name']))//counts the number of files
    {
      $name = $_FILES['cofile']['name'][$i]; //stores the files and files name along with the array
      $path_name = $path.$name;
      $tmp_name = $_FILES['cofile']['tmp_name'][$i]; //temp for $name
      $description = $_POST["closeout"]; //description
      if (!empty($description)) {           
        $data = array(
          'Proj_ID'     =>  $pid,
          'tab'         =>  $tab,
          'description' =>  $description,
          'filename'    =>  $name
        );
        $res = $op->saveRecord('tbl_Uploads',$data);
      }
      if (isset($name)) {
        if( !empty($name)){
          move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
        }
      }
      $i++;
    }
  } 