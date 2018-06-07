<?php
include 'conn.php';
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        if (isset ($_POST['submitmeeting'])) // checks for the submit value
        {
            $path = 'files/meetingminutes/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                //$position = strpos($name,"." );
                //$fileextension = substr($name, $position + 1);
                //$fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                if (!empty($description)) {           
                    mysqli_query($conn, "insert into tblproject (proj_minutes_name, proj_minutes_path, proj_minutes_description) values('$name','$path_name', $description)"); //query that stores desc and name
                }
                if (isset($name)) {
                    $path = 'files/meetingminutes/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        } 

        else if (isset ($_POST['submitbasis'])) // checks for the submit value
        {
            $path = 'files/requestanddesignbasis/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (proj_design_basis_name, proj_design_basis_path, proj_design_basis_description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/requestanddesignbasis/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }


        else if (isset ($_POST['submitScopeChange'])) // checks for the submit value
        {
            $path = 'files/requestforscopechange/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Scope_Changes_Name, Proj_Scope_Changes_Path, Proj_Scope_Changes_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/requestforscopechange/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitCostEstimates'])) // checks for the submit value
        {
            $path = 'files/costestimates/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Cost_Estimates_Name, Proj_Cost_Estimates_Path, Proj_Cost_Estimates_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/costestimates/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitBuildingDepart'])) // checks for the submit value
        {
            $path = 'files/buildingdeparment/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Building_Dept_Name, Proj_Building_Dept_Name, Proj_Building_Dept_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/buildingdeparment/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitBidDocument'])) // checks for the submit value
        {
            $path = 'files/biddocuments/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Bid_Doc_Name, Proj_Bid_Doc_Path, Proj_Bid_Doc_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/biddocuments/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitInspectReport'])) // checks for the submit value
        {
            $path = 'files/inspectionreport/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Inspection_Report_Name, Proj_Inspection_Report_Path, Proj_Inspection_Report_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/inspectionreport/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitFE'])) // checks for the submit value
        {
            $path = 'files/fande/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_FE_Name, Proj_FE_Path, Proj_FE_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/fande/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        else if (isset ($_POST['submitCloseOut'])) // checks for the submit value
        {
            $path = 'files/closeout/'; //folder's name
            $i = 0; 
            while($i<count($_FILES['file']['name']))//counts the number of files
            {
                $name = $_FILES['file']['name'][$i]; //stores the files and files name along with the array
                $path_name = $path.$name;
                $tmp_name = $_FILES['file']['tmp_name'][$i]; //temp for $name
                //$submit = isset($_POST['submit']);
                $position = strpos($name,"." );
                $fileextension = substr($name, $position + 1);
                $fileextension = strtolower($fileextension);
                $description = $_POST["description_entered"]; //description
                //if (!empty($description)) {}
                mysqli_query($conn, "insert into tblproject (Proj_Closeout_Name, Proj_Closeout_Path, Proj_Closeout_Description) values('$name','$path_name', '$description')"); //query that stores desc and name

                if (isset($name)) {
                    $path = 'files/closeout/'; //folder's name
                    if( !empty($name)){
                        move_uploaded_file($tmp_name, $path.$name); // function, moves files into www/
                    }
                }
                $i++;
            }
            echo $i++." files were added.";   
        }

        ?>
    </body>
</html>
