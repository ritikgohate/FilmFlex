<?php //include 'load.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Style.css">
    <link rel="stylesheet" href="/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
    <script src="http://localhost/script.js" defer type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>FilmFlex-Home</title>
    <script>
      $(document).ready(function(){
        var mNo=1;
        $("div#right").click(function(){
          mNo=mNo+1;
          if(mNo==0){mNo=8}
          if(mNo>8){mNo=1}
          $("#movieTitle").load("movieTitle.php",{
            movieId: mNo
          });
          $("#language").load("movieLang.php",{
            movieId: mNo
          });
          $("#watchTime").load("watchTime.php",{
            movieId: mNo
          });
          $("#rating").load("rating.php",{
            movieId: mNo
          });
          $("#genre").load("genre.php",{
            movieId: mNo
          });
          $("#certificate").load("certificate.php",{
            movieId: mNo
          });
          $("#date").load("date.php",{
            movieId: mNo
          });
          $("#description").load("description.php",{
            movieId: mNo
          });
          
          $("#trailer[src]").load("trailer.php",{
            movieId: mNo
          });
        })
        $("div#left").click(function(){
          mNo=mNo-1;
          if(mNo==0){mNo=8;}
          if(mNo>8){mNo=1;}
          $("#movieTitle").load("load.php",{
            movieId: mNo
          });
          $("#movieTitle").load("movieTitle.php",{
            movieId: mNo
          });
          $("#language").load("movieLang.php",{
            movieId: mNo
          });
          $("#watchTime").load("watchTime.php",{
            movieId: mNo
          });
          $("#rating").load("rating.php",{
            movieId: mNo
          });
          $("#genre").load("genre.php",{
            movieId: mNo
          });
          $("#certificate").load("certificate.php",{
            movieId: mNo
          });
          $("#date").load("date.php",{
            movieId: mNo
          });
          $("#description").load("description.php",{
            movieId: mNo
          });
        })
      })

    </script>
</head>
<?php
$conn= new mysqli("localhost","root","","filmflex");
$movieId=1;
// $movieName="SELECT movie_Name FROM `movies` WHERE movie_Id=000{$movieId};";
// $movieLang="SELECT language FROM `movies` WHERE movie_Id=000{$movieId};";
// $watchTime="SELECT watchTime FROM `movies` WHERE movie_Id=000{$movieId};";
// $rating="SELECT rating FROM `movies` WHERE movie_Id=000{$movieId};";
// $genre="SELECT genre FROM `movies` WHERE movie_Id=000{$movieId};";
// $certificate="SELECT certificate FROM `movies` WHERE movie_Id=000{$movieId};";
// $date="SELECT date FROM `movies` WHERE movie_Id=000{$movieId};";
// $description="SELECT description FROM `movies` WHERE movie_Id=000{$movieId};";
// $trailer="SELECT trailer FROM `movies` WHERE movie_Id=000{$movieId};";
?>

<body>
    <div class="topBar">
        <div class="menu" onclick="navCtrl()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="logo"><a href="/index.html"> FilmFlex </a></div>
        <a class="signInUp" href="/loginPage.html">
            <div>Login/Signup</div>
        </a>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <div class="gallery">
        <div class="screen">
            <figure id="spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </figure>
        </div>
        <div id="left" class="mover" onclick="galleryspin('-'); leftCount(); ">
            <div>&lt;</div>
        </div>
        <div id="right" class="mover" onclick="galleryspin(''); rightCount();">
            <div>&gt;</div>
        </div>
    </div>
    <div class="container">
        <!-- <div class="background-image"></div> -->
        <div class="content">
            <div class="grid-item1">
                <h2>Description</h2>
            </div>
            <div class="grid-item2">
                <div>
                    <h3 id="movieTitle">
                        <?php
                            $movieName="SELECT movie_Name FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result1= $conn->query($movieName);
                            while($row = $result1->fetch_assoc()) {
                              echo  $row["movie_Name"];
                            }
                        ?>
                    </h3>
                </div>
            </div>
            <div class="grid-item3">
                <div id="movieAttr">
                    <div style="color: rgb(228, 228, 0);">
                        <p id="language">
                            <?php
                                $movieLang="SELECT language FROM `movies` WHERE movie_Id=000{$movieId};";
                                $result2 = $conn->query($movieLang);
                                while($row = $result2->fetch_assoc()) {
                                  echo  $row["language"];
                                }
                            ?>
                        </p>
                    </div>
                    <div id="watchTime">
                        <?php
                            $watchTime="SELECT watchTime FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result3 = $conn->query($watchTime);
                            while($row = $result3->fetch_assoc()) {
                              echo  $row["watchTime"];
                            }
                        ?>
                    </div>
                    <div id="rating">
                        <?php
                            $rating="SELECT rating FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result4 = $conn->query($rating);
                            while($row = $result4->fetch_assoc()) {
                              echo  $row["rating"];
                            }
                        ?>
                    </div>
                    <div style="color: #00FF38; -webkit-text-stroke: black 0.5px;"><b id="genre">
                        <?php
                            $genre="SELECT genre FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result5 = $conn->query($genre);
                            while($row = $result5->fetch_assoc()) {
                              echo  $row["genre"];
                            }
                        ?>
                        </b></div>
                    <div>
                        <p id="certificate">
                        <?php
                            $certificate="SELECT certificate FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result6 = $conn->query($certificate);
                            while($row = $result6->fetch_assoc()) {
                              echo  $row["certificate"];
                            }
                        ?>  </p>
                    </div>
                    <div>
                        <p id="date">
                        <?php
                            $date="SELECT date FROM `movies` WHERE movie_Id=000{$movieId};";
                            $result7 = $conn->query($date);
                            while($row = $result7->fetch_assoc()) {
                              echo  $row["date"];
                            }
                        ?>  </p>
                    </div>
                </div>
                <div style="padding-top: 1rem; font-family: Calibri;">
                                <p id="description">
                    <?php
                             $description="SELECT description FROM `movies` WHERE movie_Id=000{$movieId};";
                             $result8 = $conn->query($description);
                             while($row = $result8->fetch_assoc()) {
                               echo  $row["description"];
                             }
                        ?>  </p>
                </div>
            </div>
            <div class="grid-item4">
                <p><iframe width="300" height="150" id="trailer" src="<?php  $trailer="SELECT trailer FROM `movies` WHERE movie_Id=000{$movieId};";
                $result9 = $conn->query($trailer);
                    while($row = $result9->fetch_assoc()) {
                        echo  $row["trailer"];
                    }?> " title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe></p>
                <p>Watch Trailer</p>
            </div>
            <div class="grid-item5">
                <a href="/bookingWindow.html" class="book">
                    <div class="book">BOOK now!</div>
                </a>
            </div>
        </div>
    </div>
    <div class="cast">
        <div style="padding: 10px;">
            <h4>CAST</h4>
        </div>
        <div class="castContainer">
            <div>
                <p>Alexander Skarsgard</p>
                <p>as</p>
                <p>Nathan Lind</p>
            </div>
            <div>
                <p>Mille Bobby Brown</p>
                <p>as</p>
                <p>Madison Russell</p>
            </div>
            <div>
                <p>Rebecca Hall</p>
                <p>as</p>
                <p>Ilene Andrews</p>
            </div>
            <div>
                <p>Elza Gonzalez</p>
                <p>as</p>
                <p>Maya Simmons</p>
            </div>
        </div>
    </div>
    <div class="movieGal">
        <div class="container">
            <div class="slide" id="m1"></div>
            <div class="slide" id="m2"></div>
            <div class="slide" id="m3"></div>
        </div>
        <p style="text-align: center;">
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </p>
    </div>
    <div class="footer">

        <p><a href="#">HOME</a><br></p>
        <p><a href="#">Contact</a></p>
        <p>Copyright 2021 &#169; Something Pvt. Ltd.</p>
        <p>All Right Are Reserved.</p>
    </div>
</body>

</html>