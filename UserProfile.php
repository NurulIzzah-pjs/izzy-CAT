<?php
session_start();
$mykad = isset($_SESSION['mykad']) ? $_SESSION['mykad'] : '';
echo "Mykad: " . $mykad; // Debugging statement
$MallbuttonActivated = isset($_SESSION['MallbuttonActivated']) ? $_SESSION['MallbuttonActivated'] : false;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./UserProfile.css" />
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
            href="https://fonts.googleapis.com/css2?family=Moul:wght@400&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Changa One:wght@400&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=League Spartan:wght@700&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Archivo Black:wght@400&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Changa:wght@400;500&display=swap"
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
            href="https://fonts.googleapis.com/css2?family=Josefin Sans:wght@400&display=swap"
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
</head>
<body>
<div class="user-profile">
    <div class="frame32">
        <div class="frame33"></div>
        <div class="frame34">
            <div class="frame35">
                <div class="frame36">
                    <div class="profile-pic"></div>
                    <img class="image-2-icon" alt="" src="./public/image-2@2x.png" />
                </div>

                <div class="user-info-container"> <!--frame37-->

                    <?php
                    include 'connection.php'; // Include your database connection

                    $sql = "SELECT * FROM psj_signup WHERE mykad='$mykad'"; // Adjust the query as needed

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetching the single row
                        $row = $result->fetch_assoc();
                        // Now $row contains the data of the current row
                        echo "<div class='frame38'>";
                        echo "<div class='siti-aminah-binti'>" . htmlspecialchars($row['username']) . "</div>";
                        echo "<div class='div'>" . htmlspecialchars($row['mykad']) . "</div>";
                        echo "</div>";

                        echo "<div class='tabledetails-parent'>";
                        echo "<div class='tabledetails'>";
                        echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Phone No</div></div>";
                        echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row['phonenum']) . "</div></div>";
                        echo "</div>";

                        echo "<div class='tabledetails1'>";
                        echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Email</div></div>";
                        echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row['email']) . "</div></div>";
                        echo "</div>";

                        echo "<div class='tabledetails2'>";
                        echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Address</div></div>";
                        echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row['address']) . "</div></div>";
                        echo "</div>";

                        echo "<div class='tabledetails3'>";
                        echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Dependent</div></div>";
                        echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row['dependent']) . "</div></div>";
                        echo "</div>";


                        // Second query for timeslot
                        $sql_timeslot = "SELECT * FROM psj_booking WHERE user_id='$mykad'";
                        $result_timeslot = $conn->query($sql_timeslot);

                        if ($result_timeslot->num_rows > 0) {
                            $row_timeslot = $result_timeslot->fetch_assoc();
                            echo "<div class='tabledetails4'>";
                            echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Timeslot</div></div>";
                            echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row_timeslot['timeslot']) . "</div></div>";
                            echo "</div>";
                        } else {
                            echo "<div class='tabledetails4'>";
                            echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Timeslot</div></div>";
                            echo "<div class='email-container'><div class='share-your-thoughts-container'>" . "No timeslot found" . "</div></div>";
                            echo "</div>";
                        }

                        // third query for barcode
                        $sql_barcode = "SELECT * FROM psj_signup WHERE mykad='$mykad'";
                        $result_barcode = $conn->query($sql_barcode);

                        if ($result_barcode->num_rows > 0) {
                            $row_barcode = $result_barcode->fetch_assoc();
                            echo "<div class='tabledetails5'>";
                            echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Barcode</div></div>";
                            echo "<div class='email-container'><div class='share-your-thoughts-container'>" . htmlspecialchars($row_barcode['barcodeid']) . "</div></div>";
                            echo "</div>";
                        }
                        else {
                            echo "<div class='tabledetails5'>";
                            echo "<div class='email-wrapper'><div class='share-your-thoughts-container'>Barcode</div></div>";
                            echo "<div class='email-container'><div class='share-your-thoughts-container'>" . "No barcode found" . "</div></div>";
                            echo "</div>";
                        }


                        echo "</div>";
                    }
                else {
                    echo "0 results";
                }

                $conn->close();
                ?>

                </div>
            </div>
        </div>
    </div>

<!--    <div class="info-box">-->
<!--        <p class="name">Timeslot Raya :</p>-->
<!--        <p class="name1">Timeslot Sekolah :</p>-->
<!--    </div>-->

    <?php
    include 'connection.php'; // Include your database connection

        //timeslot raya
        $sql_timeslotraya = "SELECT * FROM psj_bookingraya WHERE user_id='$mykad'"; // Adjust the query as needed
        $result_timeslotraya = $conn->query($sql_timeslotraya);

        if ($result_timeslotraya->num_rows > 0) {
            $row_timeslotraya = $result_timeslotraya->fetch_assoc();
            echo "<div class='info-box'>";
            echo "<div class='name'>Timeslot Raya :</div>";
            echo "<div class='name-time'>" . htmlspecialchars($row_timeslotraya['timeslot']) . "</div>";
            echo "</div>";

        }

        else {
            echo "0 results";
        }

    $conn->close();
    ?>

        <?php
        include 'connection.php'; // Include your database connection
 if ($result->num_rows > 0) {
     //time slot sekolah
     $sql_timeslotsekolah = "SELECT * FROM psj_bookingsekolah WHERE user_id='$mykad'"; // Adjust the query as needed
     $result_timeslotsekolah = $conn->query($sql_timeslotsekolah);

     if ($result_timeslotsekolah->num_rows > 0) {
         $row_timeslotsekolah = $result_timeslotsekolah->fetch_assoc();
//         echo "<div class='info-box'>";
         echo "<div class='name1'>Timeslot Sekolah :</div>";
         echo "<div class='name1-time'>" . htmlspecialchars($row_timeslotsekolah['timeslot']) . "</div>";
//         echo "</div>";
     } else {
//         echo "<div class='info-box'>";
         echo "<div class='name1'>Timeslot Sekolah :</div>";
         echo "<div class='name1-time'>" . "No timeslot" . "</div>";
//         echo "</div>";
     }

     echo "</div>";
 }
    else {
        echo "0 results";
    }

    $conn->close();
    ?>

    <div class="frame39">
        <div class="frame40">
            <div class="frame41">
                <div class="frame42">
                    <div class="share-your-thoughts-container">
                        <p class="share-your-thoughts">Do you have any issues?</p>
                        <p class="share-your-thoughts">Click here</p>
                    </div>
                    <a
                            class="feedback-form-wrapper"
                            href="./Helpdesk.html"
                            id="frameLink"
                    >
                        <div class="booking-slot">HELPDESK FORM</div>
                    </a>
                    <div class="share-your-thoughts-container">
                        to contact us!
                    </div>
                </div>
                <div class="frame42">

                    <div class="share-your-thoughts-container">
                        <p class="share-your-thoughts">Ready to schedule?</p>
                        <p class="share-your-thoughts">Click here</p>
                    </div>
                    <a
                            class="feedback-form-wrapper"
                            href="ListEvent.php"
                            id="frameLink1"
                    >
                        <div class="booking-slot">BOOKING SLOT</div>
                    </a>


                    <div class="share-your-thoughts-container">
                        to secure your spot!
                    </div>
                </div>
            </div>
            <div class="log-out-wrapper">
                <div class="log-out">LOG OUT</div>
            </div>
        </div>
        <div class="frame44">
            <div class="frame45">
                <img
                        class="psj-transparent-410"
                        alt=""
                        src="./public/psj-transparent-4@2x.png"
                />

                <div class="frame46">
                    <div class="projek-sedekah-jariah-container19">
                        <p class="share-your-thoughts">
                            Projek Sedekah Jariah Abd Ghani,
                        </p>
                        <p class="share-your-thoughts">
                            318b, Kg masjid, Taman Setia Budi,
                        </p>
                        <p class="share-your-thoughts">08600 Sungai Petani, Kedah</p>
                    </div>

                    <div class="no-telefon-016-container8">
                        <p class="share-your-thoughts">No Telefon:</p>
                        <p class="share-your-thoughts">013-286 3301</p>
                        <p class="share-your-thoughts">projeksedekahjariah@gmail.com;</p>
                        <p class="share-your-thoughts">Email:</p>
                    </div>
                </div>
            </div>
            <div class="frame47">
                <div class="projek-sedekah-jariah-abd-ghan-wrapper">
                    <div class="share-your-thoughts-container">
                        <p class="share-your-thoughts">
                            Projek Sedekah Jariah Abd Ghani
                        </p>
                    </div>
                </div>
                <hr class="separator-line">
                <!-- Add a div for the line here
                <div class="separator-line"></div> -->

                <div class="privacy-policy-terms-condition-wrapper">
                    <div class="privacy-policy-terms-container9">
                        <p class="share-your-thoughts">
                            Privacy Policy Terms Condition
                        </p>
                    </div>
                </div>
            </div> <!--frame47-->
        </div>
    </div>
    <img class="kotak-atas-icon9" alt="" src="./public/kotak-atas@2x.png" />
    <div class="my-account1" >My Account</div>

    <!--MY ACCOUNT-->
<!--    <div class="my-account12">My Account</div>-->
<!--    <div class="header-hijau"></div>-->

    <div class="header-kelabu1"></div>
<!--    <img-->
<!--            class="psj-transparent-310"-->
<!--            alt=""-->
<!--            src="./public/psj-transparent-3@2x.png"-->
<!--    />-->

<!--    NAVIGATION BAR-->
    <div class="frame-parent">
        <div class="frame48">
            <div class="frame2">
                <img
                        class="psj-transparent-31"
                        alt=""
                        src="./public/psj-transparent-3@2x.png"
                />

                <div class="home9" id="homeText">Home</div>
                <div class="programmes8" id="programmes" >Programmes</div>
<!--            </div>-->

        <div class="frame49">
            <a class="articles9" href="./ARTIKEL.html" id="articles">Articles </a>
            <a class="contact-us8" href="./Helpdesk.html">Contact Us</a>
        </div>

    <div class="dropdown1">
        <div class="about-us1">About us</div>
        <!--<img
                class="dropdown-item"
                alt=""
                src="./public/polygon-3@2x.png"
        />-->
    </div>

    <!-- ni my account header -->
    <div class="my-account2" id="myAccountContainer">
        <div class="my-account3">My Account</div>
    </div>
</div>

<!--<div class="dropdown-container">
    <a class="dropdown4">
        <div class="about-us8">About us</div>
        <img class="dropdown-child2" alt="" src="./public/polygon-3@2x.png" />
    </a>
</div>-->

<div class="dropdown1">
    <div class="about-us1">About us</div>
    <!--<img
            class="dropdown-item"
            alt=""
            src="./public/polygon-3@2x.png"
    />-->
</div>
    <div class="dependents-list">
        <b class="list-of-dependents">LIST OF DEPENDENTS</b>
        <div class="tabledependant">
            <div class="tableheader">
                <div class="headername">
                    <div class="share-your-thoughts-container">Name</div>
                </div>
                <div class="headername">
                    <div class="share-your-thoughts-container">Identification No</div>
                </div>
                <div class="headername">
                    <div class="share-your-thoughts-container">Age</div>
                </div>
                <div class="headername">
                    <div class="share-your-thoughts-container">Relationship</div>
                </div>
            </div>

            <!--list of dependents-->
            <?php
            include 'connection.php'; // Include your database connection

            $sql = "SELECT Family_Name, Family_IC, Family_Age, Family_Relation FROM psj_userfamily WHERE User_IC='$mykad'"; // Adjust the query as needed
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='tableheader1'>";
                    echo "<div class='headername'><div class='share-your-thoughts-container'>" . $row["Family_Name"]. "</div></div>";
                    echo "<div class='headername'><div class='share-your-thoughts-container'>" . $row["Family_IC"]. "</div></div>";
                    echo "<div class='headername'><div class='share-your-thoughts-container'>" . $row["Family_Age"]. "</div></div>";
                    echo "<div class='headername'><div class='share-your-thoughts-container'>" . $row["Family_Relation"]. "</div></div>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>

        </div>
    </div>
</div>
</div>

<script>
    var homeText = document.getElementById("homeText");
    if (homeText) {
        homeText.addEventListener("click", function (e) {

            window.location.href = "./Homepage.html";
        });
    }

    var frameLink = document.getElementById("frameLink");
    if (frameLink) {
        frameLink.addEventListener("click", function (e) {
            window.location.href = "./Bookslot.html";
        });
    }

    var frameLink1 = document.getElementById("frameLink1");
    if (frameLink1) {
        frameLink1.addEventListener("click", function (e) {

            window.location.href = "Timeslot.php";
        });
    }



    var programmes = document.getElementById("programmes");
    if (programmes) {
        programmes.addEventListener("click", function (e) {
            window.location.href = "PROGRAMME.html";
        });
    }

    var articles = document.getElementById("articles");
    if (articles) {
        articles.addEventListener("click", function (e) {
            window.location.href = "ARTIKEL.html";
        });
    }

    var myAccountContainer = document.getElementById("myAccountContainer");
    if (myAccountContainer) {
        myAccountContainer.addEventListener("click", function (e) {
            window.location.href = "./UserProfile.html";
        });
    }
</script>
</body>
</html>

