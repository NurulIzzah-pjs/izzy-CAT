<?php
session_start();
// Check if the button is already activated
$MallbuttonActivated = isset($_SESSION['MallbuttonActivated']) ? $_SESSION['MallbuttonActivated'] : false;

if (isset($_POST['MallactivateButton'])) {
    // Activate the button and store the state in a session
    $_SESSION['MallbuttonActivated'] = true;
    $MallbuttonActivated = true;
} elseif (isset($_POST['MalldeactivateButton'])) {
    // Deactivate the button and remove the session variable
    unset($_SESSION['MallbuttonActivated']);
    $MallbuttonActivated = false;
}

// Check if the button is already activated
$sekolahbuttonActivated = isset($_SESSION['sekolahbuttonActivated']) ? $_SESSION['sekolahbuttonActivated'] : false;

if (isset($_POST['sekolahactivateButton'])) {
    // Activate the button and store the state in a session
    $_SESSION['sekolahbuttonActivated'] = true;
    $sekolahbuttonActivated = true;
} elseif (isset($_POST['sekolahdeactivateButton'])) {
    // Deactivate the button and remove the session variable
    unset($_SESSION['sekolahbuttonActivated']);
    $sekolahbuttonActivated = false;
}

// Check if the button is already activated
$RayabuttonActivated = isset($_SESSION['RayabuttonActivated']) ? $_SESSION['RayabuttonActivated'] : false;

if (isset($_POST['RayaactivateButton'])) {
    // Activate the button and store the state in a session
    $_SESSION['RayabuttonActivated'] = true;
    $RayabuttonActivated = true;
} elseif (isset($_POST['RayadeactivateButton'])) {
    // Deactivate the button and remove the session variable
    unset($_SESSION['RayabuttonActivated']);
    $RayabuttonActivated = false;
}
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
        // If the button is activated, show deactivation option
        $MallButtonLabel = $MallbuttonActivated ? 'Deactivate' : 'ACTIVATE';
        $MallButtonAction = $MallbuttonActivated ? 'MalldeactivateButton' : 'MallactivateButton';
        ?>
        <form class="mall-activation" method="post" action="" id="mALLACTIVATION" style="display: flex; flex-direction: row; align-items: center; box-sizing: border-box;width: 300px;height: 63px; margin-top: 50px;">
            <input class="sekolah-activation" type="submit" name="<?= $MallButtonAction ?>" value="<?= $MallButtonLabel ?>" id="mALLACTIVATION" style="cursor: pointer; border: 1px solid var(--color-black); padding: var(--padding-6xs); background-color: var(--color-lightsteelblue); width: 300px; border-radius: var(--br-3xs); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); justify-content: center; z-index: 2; font-size: var(--font-size-xl);font-family: var(--font-krona-one);">
        </form>
    </section>
    <section class="school-assistance1">
        <div class="kotak-event-11"></div>
        <h1 class="bantuan-persekolahan1">
          <span class="bantuan-persekolahan-txt-container1">
            <p class="bantuan2">BANTUAN</p>
            <p class="persekolahan1">PERSEKOLAHAN</p>
          </span>
        </h1>
        <!--        <button class="sekolah-activation" id="sEKOLAHACTIVATION">-->
        <!--            <div class="activate1">ACTIVATE</div>-->
        <?php
        // If the button is activated, show deactivation option
        $sekolahButtonLabel = $sekolahbuttonActivated ? 'Deactivate' : 'ACTIVATE';
        $sekolahButtonAction = $sekolahbuttonActivated ? 'sekolahdeactivateButton' : 'sekolahactivateButton';
        ?>
        <form class="sekolah-activation" method="post" action="" id="sEKOLAHACTIVATIONButton" style="display: flex; flex-direction: row; align-items: center; box-sizing: border-box;width: 300px;height: 63px;margin-top: 50px;">
            <input class="sekolah-activation" type="submit" name="<?= $sekolahButtonAction ?>" value="<?= $sekolahButtonLabel ?>" id="sEKOLAHACTIVATIONButton" style="cursor: pointer; border: 1px solid var(--color-black); padding: var(--padding-6xs); background-color: var(--color-lightsteelblue); width: 300px; border-radius: var(--br-3xs); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); justify-content: center; z-index: 2; font-size: var(--font-size-xl);font-family: var(--font-krona-one);">
        </form>
        <!--          </button>-->

        <!--        </button>-->
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
            <!--            <button class="eid-activation" id="eIDACTIVATION">-->
            <!--                <div class="activate2">ACTIVATE</div>-->
            <!--            </button>-->
            <?php
            // If the button is activated, show deactivation option
            $RayaButtonLabel = $RayabuttonActivated ? 'Deactivate' : 'ACTIVATE';
            $RayaButtonAction = $RayabuttonActivated ? 'RayadeactivateButton' : 'RayaactivateButton';
            ?>
            <form class="eid-activation" method="post" action="" id="eIDACTIVATIONButton" style="display: flex; flex-direction: row; align-items: center; box-sizing: border-box;width: 300px;height: 63px;margin-top: 50px;">
                <input class="sekolah-activation" type="submit" name="<?= $RayaButtonAction ?>" value="<?= $RayaButtonLabel ?>" id="eIDACTIVATIONButton" style="cursor: pointer; border: 1px solid var(--color-black); padding: var(--padding-6xs); background-color: var(--color-lightsteelblue); width: 300px; border-radius: var(--br-3xs); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); justify-content: center; z-index: 2; font-size: var(--font-size-xl);font-family: var(--font-krona-one);">
            </form>
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

something wrong with the activation button for both button fix it
ChatGPT
It looks like there's an issue with the activation buttons in your PHP code. The problem lies in the form elements where you define the buttons. You are using the same name for both the activation and deactivation buttons for each section, which could lead to conflicts.

Here's a modified version of your PHP code to fix the issue:

php
Copy code
<?php
session_start();

// Check if the button is already activated
$buttonActivated = isset($_SESSION['buttonActivated']) ? $_SESSION['buttonActivated'] : false;

if (isset($_POST['activateButton'])) {
    // Activate the button and store the state in a session
    $_SESSION['buttonActivated'] = true;
    $buttonActivated = true;
} elseif (isset($_POST['deactivateButton'])) {
    // Deactivate the button and remove the session variable
    unset($_SESSION['buttonActivated']);
    $buttonActivated = false;
}

// Check if the Raya button is already activated
$RayabuttonActivated = isset($_SESSION['RayabuttonActivated']) ? $_SESSION['RayabuttonActivated'] : false;

if (isset($_POST['RayaactivateButton'])) {
    // Activate the Raya button and store the state in a session
    $_SESSION['RayabuttonActivated'] = true;
    $RayabuttonActivated = true;
} elseif (isset($_POST['RayadeactivateButton'])) {
    // Deactivate the Raya button and remove the session variable
    unset($_SESSION['RayabuttonActivated']);
    $RayabuttonActivated = false;
}
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
        // If the button is activated, show deactivation option
        $mallButtonLabel = $muttonActivated ? 'DEACTIVATE' : 'ACTIVATE';
        $mallButtonAction = $buttonActivated ? 'deactivateButton' : 'activateButton';
        ?>
        <form class="mall-activation" method="post" action="" id="mALLACTIVATION" style="display: flex; flex-direction: row; align-items: center; box-sizing: border-box;width: 300px;height: 63px">
            <input class="mall-activation" type="submit" name="<?= $mallButtonAction ?>" value="<?= $mallButtonLabel ?>" id="mALLACTIVATIONButton" style="cursor: pointer; border: 1px solid var(--color-black); padding: var(--padding-6xs); background-color: var(--color-lightsteelblue); width: 300px; border-radius: var(--br-3xs); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); justify-content: center; z-index: 2; font-size: var(--font-size-xl);font-family: var(--font-krona-one);">
        </form>
<!--        <button class="mall-activation" id="mALLACTIVATION">-->
<!--            <div class="activate">ACTIVATE</div>-->
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
<!--        <button class="sekolah-activation" id="sEKOLAHACTIVATION">-->
<!--            <div class="activate1">ACTIVATE</div>-->
            <?php
            // If the button is activated, show deactivation option
            $sekolahButtonLabel = $buttonActivated ? 'DEACTIVATE' : 'ACTIVATE';
            $sekolahButtonAction = $buttonActivated ? 'deactivateButton' : 'activateButton';
            ?>
           <form class="sekolah-activation" method="post" action="" id="sEKOLAHACTIVATIONButton" style="display: flex; flex-direction: row; align-items: center; box-sizing: border-box;width: 300px;height: 63px">
               <input class="sekolah-activation" type="submit" name="<?= $sekolahButtonAction ?>" value="<?= $sekolahButtonLabel ?>" id="sEKOLAHACTIVATIONButton" style="cursor: pointer; border: 1px solid var(--color-black); padding: var(--padding-6xs); background-color: var(--color-lightsteelblue); width: 300px; border-radius: var(--br-3xs); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); justify-content: center; z-index: 2; font-size: var(--font-size-xl);font-family: var(--font-krona-one);">
           </form>
<!--          </button>-->

<!--        </button>-->
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
<!--            <button class="eid-activation" id="eIDACTIVATION">-->
<!--                <div class="activate2">ACTIVATE</div>-->
<!--            </button>-->
            <?php
            // If the Raya button is activated, show deactivation option
            $RayaButtonLabel = $RayabuttonActivated ? 'Deactivate' : 'ACTIVATE';
            $RayaButtonAction = $RayabuttonActivated ? 'RayadeactivateButton' : 'RayaactivateButton';
            ?>
            <form class="eid-activation" method="post" action="" id="eIDACTIVATIONButton">
                <input type="submit" name="<?= $RayaButtonAction ?>" value="<?= $RayaButtonLabel ?>" id="eIDACTIVATIONButton">
            </form>
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

