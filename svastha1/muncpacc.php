<?php
    session_start();
    require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    

    <title>Muncipal</title>
</head>
<body>
<div class="container mt-4">
    
    <?php include('message.php'); ?>

    <div class="row">
    
        <div class="col-md-12">
        
            <div class="card">
            <a href = "logout.php" class = "btn float-end">Logout</a>
                <div class="card-header">
                    
                    <h4>Patient Details
                       <!-- <a href="usercreate.php" class="btn btn-primary float-end">Add Patient</a>-->
                        
                    </h4>
                    
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Phone</th>
                                <!--<th>Action</th>--->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM patient";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                foreach ($query_run as $patient) {
                                    
                                        ?>
                                        <tr>
                                            <td><?= $patient['patientid']; ?></td>
                                            <td><?= $patient['name']; ?></td>
                                            <td><?= $patient['date']; ?></td>
                                            <td><?= $patient['location']; ?></td>
                                            <td><?= $patient['phone']; ?></td>
                                           <!--- <td>
                                                <a href="userview.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="useredit.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_patient" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="add_patient" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Add</button>
                                                </form>
                                            </td>--->
                                        </tr>
                                        <?php
                                    }
                                
                                
                                }
                                else
                                {
                                    echo "<h5> No Record Found </h5>";
                                }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="row">
    
        <div class="col-md-12">
        
            <div class="card">
            
                <div class="card-header">
                    
                    <h4>Hospital Details
                    <!---<form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="add_patient" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Add Patient</button>
                                                </form>--->
                        
                    </h4>
                    
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Date Admission</th>
                                <th>Patient Phone</th>
                                <th>Date Discarge</th>
                                <th>Hospital ID</th>
                                <th>Description</th>
                                <th>Disease ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM patient_add";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                foreach ($query_run as $patient) {
                                    
                                        ?>
                                        <tr>
                                            <td><?= $patient['patientid']; ?></td>
                                            <td><?= $patient['name']; ?></td>
                                            <td><?= $patient['dateadd']; ?></td>
                                            <td><?= $patient['phone']; ?></td>
                                            <td><?= $patient['datediss']; ?></td>
                                            <td><?= $patient['hospitalid']; ?></td>
                                            <td><?= $patient['description']; ?></td>
                                            
                                            <td><?= $patient['diseaseid']; ?></td>
                                            <td>
                                                <!---<a href="userview.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="useredit.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-success btn-sm">Edit</a>-->
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_patient_details" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                
                                
                                }
                                else
                                {
                                    echo "<h5> No Record Found </h5>";
                                }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
  
            <div class="row">
        
            <div class="col-md-12">
            
                <div class="card">
                
                    <div class="card-header">
                        
                        <h4>Muncipal Details
                      <!--- <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="Munc_add" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Update</button>
                                                    </form>--->
                            
                        </h4>
                        
                    </div>

                    <div class="container">
                    </div>
                    <div >
                                    <h6>Patients Count</h6> 
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='1'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count1'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count1'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='2'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count2'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count2'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='3'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count3'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count3'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='4'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count4'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count4'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='5'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count5'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count5'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='6'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count6'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count6'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='7'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count7'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count7'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='8'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count8'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count8'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='9'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count9'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count9'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='10'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count10'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                        ?>
                                        <script> <?=$_SESSION['count10'];?></<script>
                                          
                                        
                                     <?php }
                                      ?>
                                      <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='11'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count11'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                        ?>
                                        <script> <?=$_SESSION['count11'];?></<script>
                                          
                                        
                                     <?php }
                                      ?>

                                      <style>
                                      .dispaly-flex{
                                            display: flex;
                                            justify-content:space-between;
                                      }
                                      </style>
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                <th>Dengue</th>
                                <th>Malaria</th>
                                <th>Chikungunya</th>
                                <th>Typhiod</th>
                                <th>Diarrhoea</th>
                                <th>Hepatitis A</th>
                                <th>Hepatitis B</th>
                                <th>Pneumonia</th>
                                <th>Covid-19</th>
                                <th>AIDS</th>
                                <th>Others</th>
                            </tr>
                                        </thead>
                                        <tbody>
                            
                                        <tr>
                                            <td><?php echo $_SESSION['count1']; ?></td>
                                            <td><?php echo $_SESSION['count2']; ?></td>
                                            <td><?php echo $_SESSION['count3']; ?></td>
                                            <td><?php echo $_SESSION['count4']; ?></td>
                                            <td><?php echo $_SESSION['count5']; ?></td>
                                            <td><?php echo $_SESSION['count6']; ?></td>
                                            <td><?php echo $_SESSION['count7']; ?></td>
                                            <td><?php echo $_SESSION['count8']; ?></td>
                                            <td><?php echo $_SESSION['count9']; ?></td>
                                            <td><?php echo $_SESSION['count10']; ?></td>
                                            <td><?php echo $_SESSION['count11']; ?></td>
                                           
                                        </tr>
                                    
                            
                        </tbody>
                                      </table>
                                      
                                    </div>
                                    
                                    
                                    
                                
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Hospital Id</th>
                                    <th>Patient Id</th>
                                    <th>Disease Id</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM muncipal_display";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                    foreach ($query_run as $patient) {
                                        
                                            ?>
                                            <tr>
                                                <td><?= $patient['hospitalid']; ?></td>
                                                <td><?= $patient['patientid']; ?></td>
                                                <td><?= $patient['diseaseid']; ?></td>
                                                
                                                
                                                
                                               <!--- <td>
                                                    <a href="userview.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="useredit.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-success btn-sm">Edit</a>-->
                                                   <!--- <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_muncipal_details" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                    
                                                </td>--->
                                            </tr>
                                            <?php
                                        }
                                    
                                    
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                                
                    </div>
                </div>
            </div>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>