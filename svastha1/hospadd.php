<?php
session_start();
include("connect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Create</title>
</head>
<body>
    <div class="container mt-5">

    <?php include('message.php'); ?>
        <div class="row">
        
        <div class="col-md-12">
        
            <div class="card">
            <a href = "logout.php" class = "btn float-end">Logout</a>
                <div class="card-header">
                    
                    <h4>Patient Details
                        <a href="usercreate.php" class="btn btn-primary float-end">Add Patient</a>
                        
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
                                <!--<th>Action</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query4 = "SELECT * FROM patient";
                                $query_run = mysqli_query($conn,$query4);

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
                                            <!---<td>
                                                <a href="userview.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="useredit.php?patientid=<?= $patient['patientid']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_patient" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="add_patient" value="<?= $patient['patientid']; ?>" class="btn btn-danger btn-sm">Add</button>
                                                </form>
                                            </td>-->
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
                        <h4>Patient Addmit 
                            <a href="hospacc.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <!---patientid	hospitalid	dateadd	datediss	diseaseid	description	-->
                            
                           <div class="mb-3">
                                <label>Patient id</label>
                                <input type="text" name="patientid" class="form-control">
                            </div>
                            <div class="mb-3">
                                        <label>Hospital Id</label>
                                        <p class="form-control">
                                            <?=$_SESSION['hospid']?>
                                        </p>
                                    </div>

                            <div class="mb-3">
                                <label>Admission Date</label>
                                <input type="date" name="dateadd" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Discharge Date</label>
                                <input type="date" name="datediss" class="form-control">
                            </div>
                            <div>
                            <label>Disease</label>
                            <select class='form-select' aria-label='Default select example'name='diseaseid'>

                            <option>Select Disease</option>
                                <option  value="1">Dengue</option>
                                <option  value="2">Malaria</option>
                                <option  value="3">chikungunya</option>
                                <option  value="4">Typhiod</option>
                                <option  value="5">Diarrhoea</option>
                                <option  value="6">Hepatitis A</option>
                                <option  value="7">Hepatitis B</option>
                                <option  value="8">Pneumonia</option>
                                <option  value="9">Covid-19</option>
                                <option  value="10">AIDS</option>
                                <option  value="11">Others</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="admit_patient" class="btn btn-primary">Admit</button>
                            </div>
                                
                          <!--  //<?php
                            echo "<select class='form-select' aria-label='Default select example'>";
                            $sql = "SELECT * FROM disease";
                            if($ress=mysqli_query($conn,$sql)){
                                if(mysqli_num_rows($ress)>0){
                                    
                                    while($row=mysqli_fetch_array($ress)){
                                        echo "<option value='$row[diseaseid]'>$row[diseasename]</option>";
                                    }
                                }else{
                                    echo "<script>error</script>";
                                }
                            }
                            echo " </select>";
                           // ?>-->
                                
                           
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>