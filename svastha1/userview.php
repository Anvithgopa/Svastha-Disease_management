<?php
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

    <title>Patient View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>patient View Details 
                            <a href="useracc.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['patientid']))
                        {
                            $patient_id = mysqli_real_escape_string($conn, $_GET['patientid']);
                            $query = "SELECT * FROM patient WHERE patientid='$patient_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $patient = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>patient Name</label>
                                        <p class="form-control">
                                            <?=$patient['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>patient Id</label>
                                        <p class="form-control">
                                            <?=$patient['patientid'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <p class="form-control">
                                            <?=$patient['date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <p class="form-control">
                                            <?=$patient['location'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?=$patient['phone'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>