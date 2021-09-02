<?php
    $conn= new mysqli("localhost","root","","filmflex");
    // $movieId=1;
    $movieId=$_POST['movieId'];

    $movieName="SELECT movie_Name FROM `movies` WHERE movie_Id=000{$movieId};";
    $movieLang="SELECT language FROM `movies` WHERE movie_Id=000{$movieId};";
    $watchTime="SELECT watchTime FROM `movies` WHERE movie_Id=000{$movieId};";
    $rating="SELECT rating FROM `movies` WHERE movie_Id=000{$movieId};";
    $genre="SELECT genre FROM `movies` WHERE movie_Id=000{$movieId};";
    $certificate="SELECT certificate FROM `movies` WHERE movie_Id=000{$movieId};";
    $date="SELECT date FROM `movies` WHERE movie_Id=000{$movieId};";
    $description="SELECT description FROM `movies` WHERE movie_Id=000{$movieId};";
    $trailer="SELECT trailer FROM `movies` WHERE movie_Id=000{$movieId};";
    
    // echo $movieName;
        $result1= $conn->query($movieName);
        while($row = $result1->fetch_assoc()) {
          echo $row["movie_Name"];
        }
    
        // $result2 = $conn->query($movieLang);
        // while($row = $result2->fetch_assoc()) {
        //   echo  $row["language"];
        // }

        // $result3 = $conn->query($watchTime);
        // while($row = $result3->fetch_assoc()) {
        //   echo  $row["watchTime"];
        // }

        // $result4 = $conn->query($rating);
        // while($row = $result4->fetch_assoc()) {
        //   echo  $row["rating"];
        // }

        // $result5 = $conn->query($genre);
        // while($row = $result5->fetch_assoc()) {
        //   echo  $row["genre"];
        // }

        // $result6 = $conn->query($certificate);
        // while($row = $result6->fetch_assoc()) {
        //   echo  $row["certificate"];
        // }

        // $result7 = $conn->query($date);
        // while($row = $result7->fetch_assoc()) {
        //   echo  $row["date"];
        // }

        // $result8 = $conn->query($description);
        // while($row = $result8->fetch_assoc()) {
        //   echo  $row["description"];
        // }

        // $result9 = $conn->query($trailer);
        // while($row = $result9->fetch_assoc()) {
        //   echo  $row["trailer"];
        // }

?>