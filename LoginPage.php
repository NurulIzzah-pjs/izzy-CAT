<?php
include "connection.php";
session_start();
if (isset($_POST['submit'])) {
    $mykad = $_POST['mykad'];
    $password = $_POST['pass'];
//change into ur database
    $sql = "SELECT * FROM psj_signup WHERE mykad = '$mykad'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($row) {
        // Debugging to check the stored password and input password
        $storedPassword = $row["password"];
        echo "Stored Password: " . $storedPassword . "<br>";
        echo "Input Password: " . $password . "<br>";

        if (password_verify($password, $storedPassword)) {
            $_SESSION['mykad'] = $mykad;
            // Redirect to welcome.php on successful login
            header("Location: UserProfile.php");
            exit(); // Ensure that code execution stops after redirection
        } else {
            echo '<script>
            alert("Invalid password!!");
            window.location.href = "LoginPage.php";
            </script>';
        }
    } else {
        echo '<script>
        alert("Invalid mykad!!");
        window.location.href = "LoginPage.php";
        </script>';
    }
}
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./LoginPage.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cagliostro:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Literata:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Changa One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Changa:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Caudex:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cutive Mono:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Judson:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Literata:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Moul:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Changa:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Archivo Black:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cambo:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira Sans:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kotta One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Changa One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Caudex:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="login-page">
      <img class="rect-pass-icon1" alt="" src="./public/rect-email@2x.png" />

      <div class="background-kiri"></div>

      <div class="login1">Login</div>
      <div class="background">
        <img
          class="image-removebg-preview-5-1"
          alt=""
          src="./public/imageremovebgpreview-5-1@2x.png"
        />
      </div>
      <div class="logo-psj">
        <img
          class="psj-transparent-32"
          alt=""
          src="./public/psj-transparent-3@2x.png"
        />
      </div>
      <div class="tulisan-psj">
        <h1 class="projek-sedekah-jariah3">PROJEK SEDEKAH JARIAH</h1>
      </div>
      
      <img class="rect-mykad-icon" alt="" src="./public/rect-email@2x.png" />

      <form method="POST" action="LoginPage.php">
      <h3 class="nombor-mykad">Nombor MyKad</h3>
      <div class="input-mykad">
        <input class="xxxxxxxxx" type="text" name = "mykad" required/>
      </div>

      <h3 class="password1">Password</h3>
      <input class="input-password" type="password" name = "pass" required/>

      <button type = "submit" value= "Log in" name = "submit" class="button-login1">
        <div class="button-login-child" id="rectangle"></div>
        <h1 class="log-in">Log in</h1>
      </button>
</form>

      <button class="sign-up" id="signUp">
        <span class="sign-up-txt-container">
          <span class="dont-have-an">Don’t have an account? </span>
          <span class="sign-up1">Sign Up</span>
        </span>
      </button>
      <div class="button-forgot-pass">
        <div class="forgot-password">Forgot Password</div>
      </div>
      
</div>

    <script>
      // var rectangle = document.getElementById("rectangle");
      // if (rectangle) {
      //   rectangle.addEventListener("click", function (e) {
      //     // Please sync "User Profile" to the project
      //     window.location.href = "welcome.php";
      //   });
      // }

      var signUp = document.getElementById("signUp");
      if (signUp) {
        signUp.addEventListener("click", function (e) {
          window.location.href = "./SignUpPage.php";
        });
      }
    </script>
  </body>
</html>
