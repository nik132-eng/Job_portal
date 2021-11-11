<?php include 'header.php' ?>

<div class="content">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">resume</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $conn= mysqli_connect('localhost','root','' ,'jobs' );
            $sql="SELECT name,apply,year FROM candidates";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                        $i=0;
                    echo "
                    <tbody>
                    <tr>
                    <td>".++$i."</td>
                    <td>".$rows['name']."</td>
                    <td>".$rows['apply']."</td>
                    <td>".$rows['year']."</td>
                    </tr>";
                }}
                else{
                    echo "";
                }
        ?>
        </tbody>
    </table>
</div>