<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $("btn_login").click(function () {
                validate_email();
                validate_pass();
            });
        });
        function validate_email() {
            var email = $("#email_input").val();
            if (email == "") {
                $("#EmailEmpty").show("slow");
            }
            else {
                $("#EmailEmpty").hide("slow");
            }
        }
        function validate_pass() {
    
            var password = $("#password_input").val();
    
            if (password == "") {
                $("#passwordEmpty").show("slow");
            }
            else {
                $("#passwordEmpty").hide("slow");
            }
        }
    </script> -->
    <title>Engineering Works Associates</title>
    </head>
    <?php
        if(isset($_POST['submit'])){
        $uname =$_POST['username'];

        $password = $_POST['password'];
        $con = mysqli_connect($server,$username,"","tichkulee");
        if ($uname != " " && $password != " "){

        $sql_query = "SELECT count(*) as cntUser from users where username='$uname' AND password='$password'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
            echo "Number of Rows found in data base = $count <br>";
        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:Home.html');
        }
        else{
            echo "Wrong credentials";
        }
    }
}
?>

<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo">
                    <a href="Home.html">
                        <h1>Engineering Works Associates</h1>
                    </a>
                </div>
                <div class="menu-items">
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="our_projects.html">Our Projects</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="Appointment.php">Appointment</a></li>
                    <li><a href="contact.html">contact</a></li>
                </div>
            </div>
        </div>
    </nav>
    <h1 style="text-align: center; margin-top: 20px;">YOU DREAM IT</h1>
    <section class="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 mt-auto mb-auto">
                    <div class="section_logo">
                        <a href="Home.html"><img src="./images/Final-Logo.png" alt="logo" width="250px"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1 style="text-align: center;">WE BUILD IT</h1>
    <section class="Login">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h1 style="text-align: center;">Please Login</h1>
                    <form action="login.php" method="post">
                        <ul id="login_details">
                            <li>
                                <p>
                                    Email:
                                    <input type="text" style="margin-left: 50px;" name="username" id="email_input"
                                        placeholder="Email" />
                                </p>
                                <div id="EmailEmpty" style="color:rgb(236, 57, 57); display: none;">
                                    <p>Email is Missing</p>
                                </div>
                            </li>
                            <li>
                                <p>
                                    Password:
                                    <input type="password" name="password" style="margin-left: 16px;"
                                        id="password_input" placeholder="Password" />
                                </p>
                                <div class="passwordEmpty" style="color:rgb(236, 57, 57); display: none;">
                                    <p>Password is Missing</p>
                                </div>
                            </li>
                            <input type="submit" id="btn_login" value="login" name="submit" />
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>