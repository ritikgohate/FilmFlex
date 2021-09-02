<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $date="SELECT date FROM `movies` WHERE movie_Id=000{$movieId};";
    $result7 = $conn->query($date);
        while($row = $result7->fetch_assoc()) {
          echo  $row["date"];
        }
?>