<?php
session_start();
require 'connect.php';

if(isset($_POST['delete_patient']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['delete_patient']);

    $query = "DELETE FROM patient WHERE patientid='$patient_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: useracc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: useracc.php");
        exit(0);
    }
}
if(isset($_POST['delete_patient_details']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['delete_patient_details']);

    $query = "DELETE FROM admit WHERE patientid='$patient_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: hospacc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: hospacc.php");
        exit(0);
    }
}
if(isset($_POST['delete_muncipal_details']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['delete_muncipal_details']);

    $query = "DELETE FROM muncipal_details WHERE patientid='$patient_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: muncpacc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: muncpacc.php");
        exit(0);
    }
}

if(isset($_POST['add_patient']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['add_patient']);

    $query = "INSERT INTO patient_details(patientid,name,dateadd,patientno,datedis,hospitalid,description,diseaseid) SELECT patientid,name,dateadd,patientno,datedis,hospitalid,description,diseaseid FROM patient_add";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Added Successfully";
        header("Location: hospacc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Addded";
        header("Location: hospacc.php");
        exit(0);
    }
}
if(isset($_POST['Munc_add']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['Munc_add']);

    $query = "INSERT INTO muncipal_details(patientid,hospitalid,diseaseid) SELECT patientid,hospitalid,diseaseid FROM patient_details";
    $query_run = mysqli_query($conn, $query);
    $err=error_reporting(E_ALL);
    if (!$err) {
        if ($query_run) {
            $_SESSION['message'] = "Added Successfully";
            header("Location: muncpacc.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Not Addded";
            header("Location: muncpacc.php");
            exit(0);
        }
    }
    
}
if(isset($_POST['update_patient']))
{
    $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "UPDATE patient SET name='$name', date='$date', location='$location', phone='$phone' WHERE patientid='$patient_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Updated Successfully";
        header("Location: useracc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Updated";
        header("Location: useracc.php");
        exit(0);
    }

}


if(isset($_POST['save_patient']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "INSERT INTO patient (userid,name,date,location,phone) VALUES ('$_SESSION[userid]','$name','$date','$location','$phone')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "patient Created Successfully";
        header("Location: usercreate.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Created";
        header("Location: usercreate.php");
        exit(0);
    }
}
if(isset($_POST['save_patient_hos']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "INSERT INTO patient (userid,name,date,location,phone) VALUES ('$_SESSION[hospid]','$name','$date','$location','$phone')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "patient Created Successfully";
        header("Location: hospadd.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "patient Not Created";
        header("Location: hospadd.php");
        exit(0);
    }
}
if(isset($_POST['admit_patient']))
{
    $patientid = mysqli_real_escape_string($conn, $_POST['patientid']);
    $dateadd = mysqli_real_escape_string($conn, $_POST['dateadd']);
    $datediss = mysqli_real_escape_string($conn, $_POST['datediss']);
    $diseaseid = mysqli_real_escape_string($conn, $_POST['diseaseid']);
    $descrip = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO admit(patientid,hospitalid,dateadd,datediss,diseaseid,description) VALUES ('$patientid','$_SESSION[hospid]','$dateadd','$datediss','$diseaseid','$descrip')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Admitted Successfully";


/*$source_table = 'patient_add';
$destination_table = 'patient_details';
// Define the source and destination tables
$query = "SELECT patientid,name,hospitalid,dateadd,phone,datediss,description,diseaseid FROM $source_table";
$result = mysqli_query($conn, $query);

// Prepare the query for inserting/updating the values into the destination table
$stmt = mysqli_prepare($conn, "INSERT INTO $destination_table (patientid,name,hospitalid,dateadd,patientno,datedis,description,diseaseid) SELECT patientid,name,hospitalid,dateadd,phone,datediss,description,diseaseid FROM patient_add ON DUPLICATE KEY UPDATE patientid=?,name=?,hospitalid=?,dateadd=?,patientno=?,datedis=?,description=?,diseaseid=?");

// Bind the parameters for the query
mysqli_stmt_bind_param($stmt, "isisssss", $value1, $value2, $value3,$value4,$value5,$value6,$value7,$value8);

// Loop through each value and insert/update it into the destination table
if($stmt) {
            echo "no error";
                } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $value1 = $row['patientid'];
                $value2 = $row['name'];
                $value3 = $row['hospitalid'];
                $value4 = $row['dateadd'];
                $value5 = $row['phone'];
                $value6 = $row['datediss'];
                $value7 = $row['description'];
                $value8 = $row['diseaseid'];
                mysqli_stmt_execute($stmt);
            }
        }
// Close the prepared statement
mysqli_stmt_close($stmt);





       // $query6 = "INSERT INTO patient_details(patientid,name,hospitalid,dateadd,patientno,datedis,description,diseaseid) SELECT patientid,name,hospitalid,dateadd,phone,datediss,description,diseaseid FROM patient_add";
        //$res1 = mysqli_query($conn, $query6);*/
        header("Location: hospadd.php");
       
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Addmission Not Done";
        header("Location: hospadd.php");
        exit(0);
    }
}

?>