<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $movieName="SELECT movie_Name FROM `movies` WHERE movie_Id=000{$movieId};";
    $result1= $conn->query($movieName);
        while($row = $result1->fetch_assoc()) {
          echo $row["movie_Name"];
        }
?>