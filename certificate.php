<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $certificate="SELECT certificate FROM `movies` WHERE movie_Id=000{$movieId};";
    $result6 = $conn->query($certificate);
        while($row = $result6->fetch_assoc()) {
          echo  $row["certificate"];
        }
?>