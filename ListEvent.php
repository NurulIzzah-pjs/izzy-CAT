<?php
session_start();
$MallbuttonActivated = isset($_SESSION['MallbuttonActivated']) ? $_SESSION['MallbuttonActivated'] : false;
$sekolahbuttonActivated = isset($_SESSION['sekolahbuttonActivated']) ? $_SESSION['sekolahbuttonActivated'] : false;
$RayabuttonActivated = isset($_SESSION['RayabuttonActivated']) ? $_SESSION['RayabuttonActivated'] : false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./ActivationPage.css" />
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
<div class="activation-page">
    <div class="activation-page-child"></div>
    <section class="programmes-and-articles1">
        <div class="frame-container">
            <div class="transparent-piece">
                <img
                    class="transparent-piece-child"
                    alt=""
                    src="./public/rectangle-10@2x.png"
                />

                <img
                    class="psj-transparent-33"
                    loading="eager"
                    alt=""
                    src="./public/psj-transparent-3@2x.png"
                />
            </div>
            <header class="student-frame">
                <div class="kotak-atas1"></div>
                <div class="stock-image">
                    <div class="stock-image-child"></div>
                    <div class="dropdown-menu">
                        <div class="home1" id="homeText">Home</div>
                        <div class="dropdown1">
                            <div class="contact-frame">
                                <div class="about-us1">About us</div>
                            </div>
                            <img
                                class="log-in-button"
                                alt=""
                                src="./public/list-of-event-text.svg"
                            />
                        </div>
                    </div>
                    <div class="programmes-articles">
                        <div class="programmes1" id="programmesText">Programmes</div>
                    </div>
                    <div class="programmes-articles1">
                        <div class="articles1" id="articlesText">Articles</div>
                    </div>
                    <div class="contact-us-text">
                        <div class="contact-us1" id="contactUsText">Contact Us</div>
                        <div class="log-in4" id="logInContainer">
                            <div class="log-in5" id="logInContainer">
                                <div class="login2">My Account</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="list-of-events">
            <img class="kotak-atas-icon1" alt="" src="./public/kotak-atas.svg" />

            <input
                class="list-of-event1"
                placeholder="List Of Event"
                type="text"
            />
        </div>
    </section>
    <section class="school-assistance">
        <div class="kotak-event-21"></div>
        <h1 class="psj-mall-session-container1">
          <span>
            <p class="psj1">PSJ</p>
            <p class="mall-session1">MALL SESSION</p>
          </span>
        </h1>
        <?php
        // Check if the button is activated
        if ($MallbuttonActivated) {
            echo '<a
                class="mall-activation"
                href="Timeslot.php"
                id="mALLACTIVATION"
              >
              <div class="activate2">BOOK SLOT</div>
              </a>';
        } else {
            echo '<p class = "notactivated">Booking slot is currently unavailable. Please try again later.</p>';
        }
        ?>
<!--        <button class="mall-activation" id="mALLACTIVATION">-->
<!--            <div class="activate2">BOOK SLOT</div>-->
<!--        </button>-->

    </section>
    <section class="school-assistance1">
        <div class="kotak-event-11"></div>
        <h1 class="bantuan-persekolahan1">
          <span class="bantuan-persekolahan-txt-container1">
            <p class="bantuan2">BANTUAN</p>
            <p class="persekolahan1">PERSEKOLAHAN</p>
          </span>
        </h1>
        <?php
        // Check if the button is activated
        if ($sekolahbuttonActivated) {
            echo '<a
                class="sekolah-activation"
                href="TimeslotSekolah.php"
                id="sEKOLAHACTIVATION"
              >
              <div class="activate2">BOOK SLOT</div>
              </a>';
        } else {
            echo '<p class = "notactivated">Booking slot is currently unavailable. Please try again later.</p>';
        }
        ?>
<!--                <button class="sekolah-activation" id="sEKOLAHACTIVATION">-->
<!--                    <div class="activate1">BOOK SLOT</div>-->
<!---->
<!--                </button>-->
    </section>
    <img
        class="n-1-icon1"
        loading="eager"
        alt=""
        src="./public/403696268-6664997716942271-340276118865567884-n-1@2x.png"
    />

    <img
        class="murid-sekolah-1-icon1"
        loading="eager"
        alt=""
        src="./public/muridsekolah-1@2x.png"
    />

    <img
        class="istockphoto-1372097107-612x612-icon1"
        loading="eager"
        alt=""
        src="./public/istockphoto1372097107612x612-1@2x.png"
    />

    <section class="eid-activation-text">
        <div class="e-i-d-activation-frame">
            <div class="kotak-event-31"></div>
            <h1 class="bantuan-hari-raya-container1">
            <span>
              <p class="bantuan3">BANTUAN</p>
              <p class="hari-raya1">HARI RAYA</p>
            </span>
            </h1>
            <?php
            // Check if the button is activated
            if ($RayabuttonActivated) {
                echo '<a
                class="eid-activation"
                href="TimeslotRaya.php"
                id="eIDACTIVATION"
              >
              <div class="activate2">BOOK SLOT</div>
              </a>';
            } else {

                echo '<p class = "notactivated2">Booking slot is currently unavailable. Please try again later.</p>';
            }
            ?>
<!--                        <button class="eid-activation" id="eIDACTIVATION">-->
<!--                            <div class="activate2">BOOK SLOT</div>-->
<!--                        </button>-->


        </div>
    </section>
    <section class="home-text1">
        <div class="no-contact-info">
            <img
                class="psj-transparent-41"
                loading="eager"
                alt=""
                src="./public/psj-transparent-4@2x.png"
            />

            <div class="sedekah-jariah-title">
                <div class="projek-sedekah-jariah-container2">
                    <p class="projek-sedekah-jariah4">
                        Projek Sedekah Jariah Abd Ghani,
                    </p>
                    <p class="b-kg-masjid1">318b, Kg masjid, Taman Setia Budi,</p>
                    <p class="sungai-petani-kedah1">08600 Sungai Petani, Kedah</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="terms-conditions-title">
        <div class="phone-email-info">
            <div class="no-telefon-013-286-container1">
                <p class="no-telefon1">No Telefon:</p>
                <p class="p1">013-286 3301</p>
                <p class="blank-line1">&nbsp;</p>
                <p class="email-projeksedekahjariahgma1">
                    Email: projeksedekahjariah@gmail.com
                </p>
            </div>
        </div>
        <div class="contact-details">
            <div class="privacy-policy-terms-container1">
                <p class="privacy-policy2">Privacy Policy Terms Condition</p>
            </div>
            <div class="policy-footer"></div>
        </div>
        <div class="projek-sedekah-jariah5">
            <div class="projek-sedekah-jariah-container3">
                <p class="projek-sedekah-jariah6">
                    Projek Sedekah Jariah Abd Ghani
                </p>
            </div>
        </div>
    </footer>
</div>

<script>
    var homeText = document.getElementById("homeText");
    if (homeText) {
        homeText.addEventListener("click", function (e) {
            // Please sync "Homepage" to the project
        });
    }

    var programmesText = document.getElementById("programmesText");
    if (programmesText) {
        programmesText.addEventListener("click", function (e) {
            // Please sync "PROGRAMME" to the project
        });
    }

    var articlesText = document.getElementById("articlesText");
    if (articlesText) {
        articlesText.addEventListener("click", function (e) {
            // Please sync "User Profile" to the project
        });
    }

    var contactUsText = document.getElementById("contactUsText");
    if (contactUsText) {
        contactUsText.addEventListener("click", function (e) {
            // Please sync "Feedback Form?" to the project
        });
    }

    var logInContainer = document.getElementById("logInContainer");
    if (logInContainer) {
        logInContainer.addEventListener("click", function (e) {
            // Please sync "About Us" to the project
        });
    }

    var logInContainer = document.getElementById("logInContainer");
    if (logInContainer) {
        logInContainer.addEventListener("click", function (e) {
            // Please sync "Login Page" to the project
        });
    }

    var mALLACTIVATION = document.getElementById("mALLACTIVATION");
    if (mALLACTIVATION) {
        mALLACTIVATION.addEventListener("click", function (e) {
            window.location.href = "./Bookslot.html";
        });
    }

    var sEKOLAHACTIVATION = document.getElementById("sEKOLAHACTIVATION");
    if (sEKOLAHACTIVATION) {
        sEKOLAHACTIVATION.addEventListener("click", function (e) {
            window.location.href = "./Bookslot.html";
        });
    }

    var eIDACTIVATION = document.getElementById("eIDACTIVATION");
    if (eIDACTIVATION) {
        eIDACTIVATION.addEventListener("click", function (e) {
            window.location.href = "./Bookslot.html";
        });
    }
</script>
</body>
</html>
