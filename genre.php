<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $genre="SELECT genre FROM `movies` WHERE movie_Id=000{$movieId};";
    $result5 = $conn->query($genre);
    while($row = $result5->fetch_assoc()) {
      echo  $row["genre"];
    }
?>