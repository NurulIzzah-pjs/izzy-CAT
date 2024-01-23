<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./staffuser.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Changa One:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cagliostro:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Caudex:wght@700&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Changa:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=League Spartan:wght@700&display=swap"
    />
</head>
<body>
<div class="staffuser">
    <div class="frame-container">
        <div class="background-kiri"></div>
        <div class="background">
            <div class="logo-container">
                <img
                    class="image-removebg-preview-5-1"
                    alt=""
                    src="./public/imageremovebgpreview-5-1@2x.png"
                />

                <div class="logo-psj">
                    <img
                        class="psj-transparent-31"
                        loading="eager"
                        alt=""
                        src="./public/psj-transparent-31@2x.png"
                    />
                </div>
                <h1 class="projek-sedekah-jariah2">PROJEK SEDEKAH JARIAH</h1>
            </div>
        </div>
    </div>
    <div class="user-login-frame">
        <div class="user-login-rectangle">
            <h1 class="log-in2">Log in</h1>
            <div class="staff-login-rectangle">
                <button class="user-login">
                    <div class="rectangle-user" id="rectangleUser"></div>
                    <div class="user">USER</div>
                </button>
                <button class="staff-login">
                    <div class="rectangle-staff" id="rectangleStaff"></div>
                    <div class="staff">STAFF</div>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    var rectangleUser = document.getElementById("rectangleUser");
    if (rectangleUser) {
        rectangleUser.addEventListener("click", function (e) {
            // Please sync "Login Page" to the project
            window.location.href = "LoginPage.php";
        });
    }

    var rectangleStaff = document.getElementById("rectangleStaff");
    if (rectangleStaff) {
        rectangleStaff.addEventListener("click", function (e) {
            window.location.href = "LoginStaff.php";
        });
    }
</script>
</body>
</html>