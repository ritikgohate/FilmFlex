<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $description="SELECT description FROM `movies` WHERE movie_Id=000{$movieId};";
    $result8 = $conn->query($description);
        while($row = $result8->fetch_assoc()) {
          echo  $row["description"];
        }
?>