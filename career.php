<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
    .navbar {
        overflow: hidden;
        background color: #333;
        position: fixed;
        top: 0;
        width: 100%;
    }

    h1,
    p {
        color: black;
    }

    .jobs {
        border: 1px solid black;
        box-shadow: 5px 5px 4px 5px grey;
        margin: 10px;
        padding: 10px;

    }
    </style>
    <title>Career page</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid" style="background-image:url('bg.jpg'); background-size:cover;">
                <div class="container">
                    <h1 class="display-4">Job portal</h1>
                    <p class="lead">Best Jobs Available matching your skills</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
    $sql="SELECT cname,position,jdesc,CTC,skills from jobs";
    $result =mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo'
            <div class="col-md-4">
            
            <div class="jobs">
                <h3 style="text-aling: center;">'.$rows['position'].'</h3>
                <h4 style="text-aling: center;">'.$rows['cname'].'</h4>
                <p style="color:black; text-aling: justify;">'.$rows['jdesc'].'</p>
                <p style="color:black;"><b>skills Required : </b> '.$rows['skills'].'</p>
                <p style="color:black;"><b>CTC : </b> '.$rows['CTC'].'</p>
              
                
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                apply jobs
                </button>
                </div>
                
                </div>';
            }
        }
        ?>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Applying For</label>
                                <input type="text" class="form-control" name="apply">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Qualification</label>
                                <input type="text" class="form-control" name="qual">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Year passout</label>
                                <input type="text" class="form-control" name="year">
                            </div>
                    </div>
                    I
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>