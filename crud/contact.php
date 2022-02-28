<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Patient's Form</h2>
                    </div>
                    <p>Please fill this form and submit to a Patient's record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="text" name="date_of_birth" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kilograms</label>
                            <input type="number" name="kg" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date of Admission</label>
                            <input type="text" name="date_of_admission" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ward</label>
                            <input type="text" name="ward" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>TB Start</label>
                            <input type="text" name="tb_start" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>R</label>
                            <input type="text" name="r" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ARV Histpry</label>
                            <input type="text" name="arv_history" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Active Problems</label>
                            <input type="text" name="active_problems" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Meds</label>
                            <input type="text" name="meds" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Studies</label>
                            <input type="text" name="studies" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Follow Up</label>
                            <input type="text" name="follow_up" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" href="user-table.php">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>