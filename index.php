<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- Page content -->
<div class="content ">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Post Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="Company" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="cname">
                </div>
                <div class="mb-3">
                    <label for="Position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="Position" name="position">
                </div>
                <div class="mb-3">
                    <label for="job des" class="form-label">Job Description</label>
                    <textarea class="form-control" name="jdesc" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">skills</label>
                    <input type="text" class="form-control" id="skills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" name="CTC" class="form-control" id="CTC">
                </div>
                <button type="submit" class="btn btn-primary" name="job">Submit</button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <?php
        
$server = 'localhost';
$username ='root';
$password = '';
$database='jobs';
        $conn = mysqli_connect($server,$username,$password,$database);
        $sql="SELECT `cname` , `position` , `CTC` FROM `jobs` ";
        $result =mysqli_query($conn,$sql);
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                    $i=0;
                echo "
                <tbody>
                <tr>
                <td>".++$i."</td>
                <td>".$rows['cname']."</td>
                <td>".$rows['position']."</td>
                <td>".$rows['CTC']."</td>
                </tr>";
            }}
            else{
                echo "";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- bundle script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>

</html>