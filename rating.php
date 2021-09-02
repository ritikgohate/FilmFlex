<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $rating="SELECT rating FROM `movies` WHERE movie_Id=000{$movieId};";
    $result4 = $conn->query($rating);
        while($row = $result4->fetch_assoc()) {
          echo  $row["rating"];
        }
?>