<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./SignUpPage.css" />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Changa One:wght@400&display=swap"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"
    />
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

            var name = document.forms["signupForm"]["name"].value;
            var mykad = document.forms["signupForm"]["mykad"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;
            var confirm_password = document.forms["signupForm"]["confirmpass"].value;
            var phonenum = document.forms["signupForm"]["phonenum"].value;
            var address = document.forms["signupForm"]["address"].value;
            var dependent = document.forms["signupForm"]["dependent"].value;

            if (name == "" || mykad == "" || email == "" || password == "" || confirm_password == "" || phonenum == "" || address == "" || dependent == "") {
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
<form id="signupForm" method="post" action="SignUpSubmit.php" onsubmit="return validateForm();">
    <div class="sign-up-page">
        <div class="rect-white-parent">
            <div class="rect-white"></div>
            <div class="welcome-to-psj">Welcome to PSJ</div>
            <div class="frame-wrapper">
                <div class="name-parent">
                    <div class="name">Name</div>
                    <div class="rect-name-parent">
                        <div id="rect-container">
                            <img class="rect-name-icon" alt="" src="./public/rect-name.svg" />
                            <input class="input-name" type="text" name="name"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame-container">
                <div class="frame-parent">
                    <div class="frame-group">
                        <div class="label-ic-parent">
                            <div class="label-ic">Identification Card</div>
                            <div class="rect-ic-parent">
                                <img class="rect-ic-icon" alt="" src="./public/rect-ic.svg" />
                                <input class="input-ic" type="text" name="mykad"  />
                            </div>

                        </div>
                        <div class="password-parent">
                            <div class="password">Password</div>
                            <div class="rect-pass-parent">
                                <img
                                        class="rect-pass-icon"
                                        alt=""
                                        src="./public/rect-ic.svg"
                                />

                                <input class="input-pass" type="text" name="password"  />
                            </div>
                            <div class="phone-number-wrapper">
                                <div class="phone-number">Phone Number</div>
                            </div>
                        </div>
                        <div class="frame-div">
                            <div class="rect-phonenum-parent">
                                <img
                                        class="rect-phonenum-icon"
                                        alt=""
                                        src="./public/rect-ic.svg"
                                />

                                <input class="input-phonenum" type="text" name="phonenum"  />
                            </div>
                        </div>
                        <div class="address">Address</div>
                    </div>
                    <div class="frame-wrapper1">
                        <div class="frame-parent1">
                            <div class="email-address-parent">
                                <div class="email-address">Email Address</div>
                                <div class="rect-email-parent">
                                    <img
                                            class="rect-email-icon"
                                            alt=""
                                            src="./public/rect-ic.svg"
                                    />

                                    <input class="input-email" type="text" name="email"  />
                                </div>
                            </div>
                            <div class="frame-parent2">
                                <div class="confirm-password-wrapper">
                                    <div class="confirm-password">Confirm Password</div>
                                </div>
                                <div class="rect-confirm-pass-parent">
                                    <img
                                            class="rect-confirm-pass"
                                            alt=""
                                            src="./public/rect-ic.svg"
                                    />

                                    <input class="input-confirm-pass" type="text" name="confirmpass" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame-wrapper2">
                <div class="rect-address-parent">
                    <div class="rect-address"></div>
                    <textarea class="input-address" name="address"  type="text" rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="frame-wrapper3">
                <div class="label-num-dependent-parent">
                    <div class="label-num-dependent">Number of Dependent</div>
                    <div class="dependent-input">
                        <div class="input-dependent">
                            <img
                                    class="rect-dependent-icon"
                                    alt=""
                                    src="./public/rect-ic.svg"
                            />

                            <input class="input-dependent1" type="text" name="dependent" />
                        </div>
                    </div>
                </div>
            </div>
            <button class="next-button-frame"type="submit" id="buttonNext">
                <div class="next-button">
                    <div class="button-next"</div>
                <div class="next">Next</div>
        </div>
        </button>
    </div>
</form>
</body>
</html>