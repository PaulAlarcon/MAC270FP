<?php
  /**
   * this class includes all the operations performed with the database.
   */
  class Operations
  {

    function getConn() {
      $conn = mysqli_connect("localhost","root","","extraCredit");
      if($conn === false)
      { 
          die("Connection failed".mysqli_connect_error($conn));     
      }
      return $conn;
    }

    /* Calling last project id from database.tbl_Project and returning */
    function getGid() {
      $sql = "SELECT Proj_ID FROM tbl_Project ORDER BY Proj_ID DESC LIMIT 1";
      $data = ($this->getConn()->query($sql))->fetch_assoc();
      return $data['Proj_ID'] + 1;
    }

    /* Inserting data to the database with table name and values from the parameter */
    function saveRecord($tablename, $data) {
      /* Getting database table fields from parameter */
      $field = '';
      foreach ($data as $key => $value) {
        $field.=$key.",";
      }
      $field = substr($field, 0, -1);
      /* Getting values from parameter */
      $values = '';
      foreach ($data as $key => $value) {
        $values.="'".$value."',";
      }
      $values = substr($values, 0, -1);
      $sql = "INSERT INTO $tablename ($field) VALUES ($values)";
      //die($sql);
      if ($this->getConn()->query($sql) === TRUE) {
          echo "Success";
      } else {
          echo "Error: " . $this->getConn()->error;
      }

      $this->getConn()->close();
    }

    /* Retriving data from database by Proj_ID with requested table */
    function getData($pid, $tablename) {
      $sql = mysqli_query($this->getConn(),"SELECT * FROM $tablename WHERE Proj_ID = $pid");
      return $sql->fetch_assoc();
    } 

    /* Retriving data from database by Proj_ID and tab from tbl_uploads */
    function viewFiles($id, $tab) {
      $sql = mysqli_query($this->getConn(),"SELECT * FROM tbl_uploads WHERE Proj_ID = $id AND tab = '$tab'");
      return $sql;
    }

  }

  $op = new Operations;

