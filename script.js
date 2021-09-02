// movieSelection
var movieNo = 0;

function rightCount() {
        movieNo = movieNo + 1;
        if(movieNo==0){movieNo=8;}
        if(movieNo>8){movieNo=1;}
        console.log(movieNo);
        console.log(document.getElementById('trailer').src);
}

function leftCount() {
        movieNo = movieNo - 1;
        if(movieNo==-1){
                movieNo=7;
        }
        console.log(movieNo);
}

// sideBar
function navCtrl() {
        document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
}
// Spinner
var angle = 0;

function galleryspin(sign) {
        spinner = document.querySelector("#spinner");
        if (!sign) {
                angle = angle + 45;
        } else {
                angle = angle - 45;
        }
        spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
}
// Gallery
var m1 = document.getElementById('m1').style;
var m2 = document.getElementById('m2').style;
var m3 = document.getElementById('m3').style;

m1.backgroundImage = "url('/1.png')";
m2.backgroundImage = "url('/2.png')";
m3.backgroundImage = "url('/3.png')";

function currentSlide(x) {
        m1.backgroundImage = "url('/1.png')";
        m2.backgroundImage = "url('/2.png')";
        m3.backgroundImage = "url('/3.png')";

        if (x == 1) {
                m1.backgroundImage = "url('/1.png')";
                m2.backgroundImage = "url('/2.png')";
                m3.backgroundImage = "url('/3.png')";
        }
        if (x == 2) {
                m1.backgroundImage = "url('/4.png')";
                m2.backgroundImage = "url('/5.png')";
                m3.backgroundImage = "url('/6.png')";
        }
        if (x == 3) {
                m1.backgroundImage = "url('/7.png')";
                m2.backgroundImage = "url('/8.png')";
                m3.backgroundImage = "url('/9.png')";
        }
}
// form PasswordConfirm
function validation() {
        var password = document.getElementById("password").value;
        var Cpassword = document.getElementById("Cpassword").value;

        if (password != Cpassword) {
                document.getElementById('loginERROR').innerHTML = "Password Not Same!"
        }
}