<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $trailer="SELECT trailer FROM `movies` WHERE movie_Id=000{$movieId};";
     $result9 = $conn->query($trailer);
        while($row = $result9->fetch_assoc()) {
          echo  $row["trailer"];
        }
?>