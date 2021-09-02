<?php
    $conn= new mysqli("localhost","root","","filmflex");
    $movieId=$_POST['movieId'];
    $movieLang="SELECT language FROM `movies` WHERE movie_Id=000{$movieId};";
    $result2 = $conn->query($movieLang);
    while($row = $result2->fetch_assoc()) {
      echo  $row["language"];
    }
?>