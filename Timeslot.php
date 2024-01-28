<?php
session_start();
$mykad = isset($_SESSION['mykad']) ? $_SESSION['mykad'] : '';
echo "Mykad: " . $mykad; // Debugging statement
//use ur own database
$mysqli = new mysqli('localhost', 'CatDBuser', 'CatDBpassword', 'psj');
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Function to check if mykad is already booked
function isMykadAlreadyBooked($mysqli, $mykad) {
    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM psj_booking WHERE user_id = ?");
    $stmt->bind_param("s", $mykad);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    return $count > 0;
}

// Fetch current total available slots for each time slot
$sql = "SELECT timeslot, available_slots FROM psj_timeslot";
$result = $mysqli->query($sql);

// Create an associative array to store available slots for each time slot
$availableSlots = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $availableSlots[$row['timeslot']] = $row['available_slots'];
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="Timeslot.css" />
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
<!--    <script>-->
<!--        --><?php
//        // Check if the session variable is set
//        if (isset($_SESSION['username'])) {
//            // Echo the PHP variable into the JavaScript code
//            echo "var username = " . json_encode($_SESSION['username']) . ";";
//        } else {
//            // If the session variable is not set, initialize the JavaScript variable as empty
//            echo "var username = '';";
//        }
//        ?>
<!--    </script>-->

</head>
<body>

<div class="bookslot">
    <div class="bookslot-child"></div>
<!--    <img class="bookslot-item" alt="" src="./public/rectangle-10@2x.png" />-->

    <div class="bookslot-inner" id="rectangleContainer">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer-slots"></div>
    </div>
    <div class="bookslot-inner1" id="rectangleContainer1">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer1-slots"></div>
    </div>
    <div class="bookslot-inner2" id="rectangleContainer2">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer2-slots"></div>
    </div>
    <div class="bookslot-inner3" id="rectangleContainer3">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer3-slots"></div>
    </div>
    <div class="bookslot-inner4" id="rectangleContainer4">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer4-slots"></div>
    </div>
    <div class="bookslot-inner5" id="rectangleContainer5">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer5-slots"></div>
    </div>
    <div class="bookslot-inner6" id="rectangleContainer6">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer6-slots"></div>
    </div>
    <div class="bookslot-inner7" id="rectangleContainer7">
        <div class="component-item"></div>
        <div class="AT" id="rectangleContainer7-slots"></div>
    </div>
    <b class="am-10008">9:00 AM - 10:00 AM</b>
    <b class="am-11008">10:00 AM - 11:00 AM</b>
    <b class="am-12008">11:00 AM - 12:00 PM</b>
    <b class="am-1008">12:00 PM - 1:00 PM</b>
    <b class="pm-3008">2:00 PM - 3:00 PM</b>
    <b class="pm-4008">3:00 PM - 4:00 PM</b>
    <b class="pm-5008">4:00 PM - 5:00 PM</b>
    <b class="pm-6008">5:00 PM - 6:00 PM</b>
    <div class="kotak-atas8"></div>
    <div class="bookslot-child1"></div>
    <div class="contact-us8" id="contactUsText">Contact Us</div>
    <img
        class="psj-transparent-38"
        alt=""
        src="./public/psj-transparent-3@2x.png"
    />

    <div class="articles8" id="articlesText">Articles</div>
    <div class="programmes8" id="programmesText">Programmes</div>
    <div class="about-us8" id="aboutUsText">About Us</div>
    <div class="home8" id="homeContainer">
        <div class="home9">Home</div>
    </div>
    <img class="bookslot-child2" alt="" src="./public/polygon-1@2x.png" />

    <img class="kotak-atas-icon16" alt="" src="./public/kotak-atas@2x.png" />

    <div class="timeslot-booking8">Timeslot Booking</div>
    <div class="psj-transparent-4-parent6">
        <img
            class="psj-transparent-48"
            alt=""
            src="./public/psj-transparent-4@2x.png"
        />

        <div class="projek-sedekah-jariah-container16">
            <p class="email-projeksedekahjariahgma">
                Projek Sedekah Jariah Abd Ghani,
            </p>
            <p class="email-projeksedekahjariahgma">
                318b, Kg masjid, Taman Setia Budi,
            </p>
            <p class="email-projeksedekahjariahgma">08600 Sungai Petani, Kedah</p>
        </div>
        <div class="projek-sedekah-jariah-container17">
            <p class="email-projeksedekahjariahgma">
                Projek Sedekah Jariah Abd Ghani
            </p>
        </div>
        <div class="privacy-policy-terms-container8">
            <p class="email-projeksedekahjariahgma">
                Privacy Policy Terms Condition
            </p>
        </div>
        <div class="no-telefon-013-286-container">
            <p class="email-projeksedekahjariahgma">No Telefon:</p>
            <p class="email-projeksedekahjariahgma">013-286 3301</p>
            <p class="email-projeksedekahjariahgma">&nbsp;</p>
            <p class="email-projeksedekahjariahgma">
                Email: projeksedekahjariah@gmail.com
            </p>
        </div>
        <div class="frame-child21"></div>
    </div>
    <div class="my-account12" id="myAccountContainer">
        <a class="my-account13" href="UserProfile.php">My Account</a>
    </div>

</div>


<script>

    var availableSlots = <?php echo json_encode($availableSlots); ?>;
    function isMykadAlreadyBooked(mykad) {
        return <?php echo json_encode(isMykadAlreadyBooked($mysqli, $mykad)); ?>;
    }
    function updateAvailableSlots(containerId, availableSlots) {
        var slotsElement = document.getElementById(containerId +'-slots');
        if (slotsElement) {
            slotsElement.textContent = "Available Slots: " + availableSlots;
        }
    }


    function bookTimeslot(timeslot, mykad, availableSlots) {
        if (isMykadAlreadyBooked(mykad)) {
            alert("You have already booked a slot. Multiple bookings are not allowed.");
            return;
        }
        var confirmation = confirm("Are you sure you want to book this timeslot: " + timeslot + "?\nAvailable slots: " + availableSlots);

        if (confirmation) {
            if (availableSlots > 0) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", 'Bookedslot.php?timeslot=' + encodeURIComponent(timeslot) + '&mykad=' + encodeURIComponent(mykad), true);

                xhr.onload = function () {
                    if (xhr.status === 200) {
                        if (xhr.responseText === "success") {
                            // Redirect to BookSlotSuccess page if the booking is successful
                            window.location.href = 'BookSlotSuccess.php';
                        } else {
                            // Show alert with the error message
                            alert(xhr.responseText);
                        }
                    } else {
                        alert("Error: " + xhr.statusText);
                    }
                };

                xhr.onerror = function () {
                    alert("Network error");
                };

                xhr.send();
            } else {
                alert("No available slots for this timeslot.");
            }
        }
    }


    var timeSlots = [

        {containerId: "rectangleContainer", timeslot: "9AM-10AM", availableSlots: 5 },
        { containerId: "rectangleContainer1", timeslot: "12PM-1PM", availableSlots: 5 },
        { containerId: "rectangleContainer2", timeslot: "11AM-12PM", availableSlots: 5 },
        { containerId: "rectangleContainer3", timeslot: "10AM-11AM", availableSlots: 5 },
        { containerId: "rectangleContainer4", timeslot: "2PM-3PM", availableSlots: 5 },
        { containerId: "rectangleContainer5", timeslot: "5PM-6PM", availableSlots: 5 },
        { containerId: "rectangleContainer6", timeslot: "4PM-5PM", availableSlots: 5 },
        { containerId: "rectangleContainer7", timeslot: "3PM-4PM", availableSlots: 5 }
    ];

    timeSlots.forEach(function (slot) {
        var container = document.getElementById(slot.containerId);
        if (container) {
            updateAvailableSlots(slot.containerId, availableSlots[slot.timeslot]); // Initialize available slots on page load

            container.addEventListener("click", function (e) {
                bookTimeslot(slot.timeslot, '<?php echo $mykad; ?>', availableSlots[slot.timeslot]);
            });
        }
    });

</script>
</body>
</html>
