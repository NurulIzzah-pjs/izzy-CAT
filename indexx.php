<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=League Spartan:wght@700&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cagliostro:wght@400&display=swap"
    />
</head>
<body>
<div class="bc-5pm">
    <div class="bc-5pm-child"></div>
    <img class="bc-5pm-item" alt="" src="./public/rectangle-10@2x.png" />

    <div class="bc-5pm-inner" id="rectangleContainer">
        <div class="instance-child"></div>
    </div>
    <div class="rectangle-div">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner1">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner2">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner3">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner4">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner5">
        <div class="instance-child"></div>
    </div>
    <div class="bc-5pm-inner6">
        <div class="instance-child"></div>
    </div>
    <b class="am-1000">9:00 AM - 10:00 AM</b>
    <b class="am-1100">10:00 AM - 11:00 AM</b>
    <b class="am-1200">11:00 AM - 12:00 AM</b>
    <b class="am-100">12:00 AM - 1:00 PM</b>
    <b class="pm-300">2:00 PM - 3:00 PM</b>
    <b class="pm-400">3:00 PM - 4:00 PM</b>
    <b class="pm-500">4:00 PM - 5:00 PM</b>
    <b class="pm-600">5:00 PM - 6:00 PM</b>
    <div class="kotak-atas"></div>
    <div class="bc-5pm-child1"></div>
    <div class="contact-us">Contact Us</div>
    <img
        class="psj-transparent-3"
        alt=""
        src="./public/psj-transparent-3@2x.png"
    />

    <div class="articles">Articles</div>
    <div class="programmes">Programmes</div>
    <div class="about-us">About Us</div>
    <div class="home">Home</div>
    <img class="polygon-icon" alt="" src="./public/polygon-1@2x.png" />

    <div class="my-account" id="myAccountContainer">
        <div class="my-account1">My Account</div>
    </div>
    <img class="kotak-atas-icon" alt="" src="./public/kotak-atas@2x.png" />

    <div class="timeslot-booking">Timeslot Booking</div>
    <div class="psj-transparent-4-parent">
        <img
            class="psj-transparent-4"
            alt=""
            src="./public/psj-transparent-4@2x.png"
        />

        <div class="projek-sedekah-jariah-container">
            <p class="projek-sedekah-jariah">Projek Sedekah Jariah Abd Ghani,</p>
            <p class="projek-sedekah-jariah">
                318b, Kg masjid, Taman Setia Budi,
            </p>
            <p class="projek-sedekah-jariah">08600 Sungai Petani, Kedah</p>
        </div>
        <div class="projek-sedekah-jariah-container1">
            <p class="projek-sedekah-jariah">Projek Sedekah Jariah Abd Ghani</p>
        </div>
        <div class="privacy-policy-terms-container">
            <p class="projek-sedekah-jariah">Privacy Policy Terms Condition</p>
        </div>
        <div class="no-telefon-016-container">
            <p class="projek-sedekah-jariah">No Telefon:</p>
            <p class="projek-sedekah-jariah">016</p>
            <p class="projek-sedekah-jariah">&nbsp;</p>
            <p class="projek-sedekah-jariah">Email:</p>
        </div>
        <div class="frame-child"></div>
    </div>
    <div class="bc-5pm-child2"></div>
    <div class="rectangle-parent">
        <div class="frame-item"></div>
        <div class="are-you-sure-container">
            <p class="projek-sedekah-jariah">Are you sure want to proceed ?</p>
        </div>
        <img class="kotak-atas-icon1" alt="" src="./public/kotak-atas@2x.png" />

        <div class="booking-confirmation">Booking confirmation</div>
        <div class="timeslot-500-pm">timeslot :5:00 PM - 6:00 PM</div>
        <div class="frame-inner"></div>
        <div class="rectangle-group" id="groupContainer">
            <div class="instance-child6"></div>
            <b class="yes">YES</b>
        </div>
        <div class="no-wrapper" id="groupContainer1">
            <b class="no">NO</b>
        </div>
    </div>
</div>

<script>
    var rectangleContainer = document.getElementById("rectangleContainer");
    if (rectangleContainer) {
        rectangleContainer.addEventListener("click", function (e) {
            window.location.href = "./BC9AM.html";
        });
    }

    var myAccountContainer = document.getElementById("myAccountContainer");
    if (myAccountContainer) {
        myAccountContainer.addEventListener("click", function (e) {
            // Please sync "User Profile" to the project
        });
    }

    var groupContainer = document.getElementById("groupContainer");
    if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
            window.location.href = "./Bookedslot.php";
        });
    }

    var groupContainer1 = document.getElementById("groupContainer1");
    if (groupContainer1) {
        groupContainer1.addEventListener("click", function (e) {
            window.location.href = "./Bookslot.html";
        });
    }
</script>
</body>
</html>
