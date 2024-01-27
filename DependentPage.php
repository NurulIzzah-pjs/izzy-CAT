<?php
session_start();
$mykad = isset($_SESSION['mykad']) ? $_SESSION['mykad'] : '';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./DependentPage.css" />
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
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"
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
        href="https://fonts.googleapis.com/css2?family=League Spartan:wght@700&display=swap"
    />

    <script>
        function validateForm() {
            // Perform your form validation here
            // You can use JavaScript to validate the form fields
            // For simplicity, let's assume all fields are required

            var name = document.forms["DependentForm"]["dependentname"].value;
            var mykad = document.forms["DependentForm"]["dependentmykad"].value;
            var age = document.forms["DependentForm"]["age"].value;
            var relay = document.forms["DependentForm"]["relay"].value;


            if (name == "" || mykad == "" || age == "" || relay== "" ) {
                alert("All fields must be filled out");
                return false;
            }

            var confirmation = confirm("Are you sure the data is correct?");
            if (confirmation) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<form id="DependentForm" method="post" action="DependentSubmit.php" onsubmit="return validateForm();">
    <div class="dependent-page">
        <main class="background-putih">
            <section class="top-level-frame"></section>
            <h1 class="title-dependent">Dependent</h1>
            <section class="dependent-label">
                <div class="dependent-form">
                    <div class="dependent-name-frame">
                        <div class="dependent-name">
                            <div class="label-name">Name</div>
                            <div class="i-c-label-frame">
                                <div class="dependent-age-label">
                                    <img
                                        class="rect-name-icon"
                                        alt=""
                                        src="./public/rect-name.svg"
                                    />

                                    <input
                                        class="input-name"
                                        placeholder="Fareez Aidid"
                                        type="text"
                                        name="dependentname"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="relay-frame">
                            <div class="dependent-ic">
                                <div class="label-ic">Identification Card</div>
                                <div class="input-i-c-input-age">
                                    <div class="rect-ic-parent">
                                        <img
                                            class="rect-ic-icon"
                                            alt=""
                                            src="./public/rect-name.svg"
                                        />

                                        <input
                                            class="input-ic"
                                            placeholder="83XXXXXXXXX"
                                            type="text"
                                            name="dependentmykad"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="dependent-age">
                                <div class="label-age">Age</div>
                                <div class="dependent-age-inner">
                                    <div class="rect-age-parent">
                                        <img
                                            class="rect-age-icon"
                                            alt=""
                                            src="./public/rect-name.svg"
                                        />

                                        <input class="input-age" placeholder="12" type="text" name="age" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dependent-relay">
                        <div class="label-relationship">Relationship</div>
                        <div class="submit-button-frame">
                            <img
                                class="rect-relay-icon"
                                alt=""
                                src="./public/rect-name.svg"
                            />

                            <input class="input-relay" placeholder="Son" type="text" name="relay"/>
                        </div>
                    </div>
                </div>
                <button class="submit" type="submit" >
                    <div class="button-submit" id="buttonSubmit"></div>
                    <div class="submit1">Submit</div>
                </button>
            </section>
        </main>
    </div>
</form>
</body>
</html>
