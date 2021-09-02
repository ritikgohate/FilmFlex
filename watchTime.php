<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $watchTime="SELECT watchTime FROM `movies` WHERE movie_Id=000{$movieId};";
    $result3 = $conn->query($watchTime);
        while($row = $result3->fetch_assoc()) {
          echo  $row["watchTime"];
        }
?>