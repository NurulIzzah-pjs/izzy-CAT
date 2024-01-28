<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./AboutUs.css" />
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
        href="https://fonts.googleapis.com/css2?family=Changa:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Krona One:wght@400&display=swap"
    />
</head>
<body>
<div class="about-us">
    <div class="about-us-child"></div>
    <div class="psj-transparent-4-parent">

        <!-- SDG SECTION -->

        <section class="u-n-s-d-gs-frame">
            <div class="p-s-j-the-u-n-s-d-gs">
                <div class="where-we-are">
                    <div class="psj-the-container">
                        <p class="psj-the">PSJ & The UN Sustainable</p>
                        <p class="development-goals">Development Goals</p>
                    </div>
                    <div class="read-more-link" id="readMoreLink">
                        <div class="read-more">READ MORE</div>
                    </div>
                </div>
                <div class="where-we-are1">
                    <div class="where-are-we">Where are We?</div>
                    <div class="read-more-wrapper" id="frameContainer">
                        <div class="read-more1">READ MORE</div>
                    </div>
                </div>
            </div>



            <div class="frame-child"></div>
    </div>
    <img class="about-us-item" alt="" src="./public/rectangle-45@2x.png" />

    <div class="projek-sedekah-jariah-container2">
        <p class="projek-sedekah-jariah">Projek Sedekah Jariah</p>
        <p class="projek-sedekah-jariah">Abd Ghani</p>
    </div>
    <img class="about-us-inner" alt="" src="./public/rectangle-46@2x.png" />


    <div class="rectangle-div"></div>
    <div class="latar-belakang-projek">
        Latar Belakang Projek Sedekah Jariah Abd Ghani
    </div>
    <img class="rectangle-icon" alt="" src="./public/rectangle-49@2x.png" />

    <div class="about-us-child1"></div>
    <div class="aktiviti-projek-sedekah">Aktiviti Projek Sedekah Jariah</div>
    <div class="projek-sedekah-jariah-container3">
        <p class="projek-sedekah-jariah">
            Projek Sedekah Jariah Abd Ghani Haron ialah salah satu Pertubuhan Bukan Kerajaan (NGO), yang diasaskan oleh almarhum Encik Cikgu Abd Ghani Haron, seorang pegawai PPD (Pejabat Pendidikan Daerah) yang bersaradan guru. Ia merupakan organisasi amal yang terletak di Sungai Petani,Kedah, yang secara khusus memberikan sokongan menyeluruh kepada mereka yang memerlukan, terutamanya ibu tunggal dan keluarga mereka.
        </p>
    </div>
    <div class="bantuan-bulanan-kepada-container">
        <ul class="bantuan-bulanan-kepada-ibu-tun">
            <li class="bantuan-bulanan-kepada">
                Bantuan Bulanan kepada Ibu Tunggal/ Anak Yatim
            </li>
        </ul>
        <p class="projek-sedekah-jariah">berdaftar</p>
        <ul class="bantuan-bulanan-kepada-ibu-tun">
            <li class="bantuan-bulanan-kepada">Program Wakaf Katil Hospital</li>
            <li class="bantuan-bulanan-kepada">
                Program Bantuan Kerayaan (Aidilfitri, Aidiladha)
            </li>
            <li>Program Bantuan Sekolah</li>
        </ul>
    </div>
    <div class="projek-sedekah-jariah4">
        Projek Sedekah Jariah Abd Ghani merupakan satu platform untuk membantu
        golongan memerlukan khususnya ibu tunggal.
    </div>
    <div class="kotak-atas-parent">
        <div class="kotak-atas"></div>
        <div class="frame-item"></div>
        <div class="contact-us" id="contactUsText">Contact Us</div>
        <div class="articles" id="articlesText">Articles</div>
        <div class="programmes" id="programmesText">Programmes</div>
        <div class="home" id="homeText">Home</div>
        <div class="about-us9" id="AboutUsText3">About Us</div>

    </div>
    <img
        class="psj-transparent-3"
        alt=""
        src="./public/psj-transparent-3@2x.png"
    />
</div>



<script>
    var contactUsText = document.getElementById("contactUsText");
    if (contactUsText) {
        contactUsText.addEventListener("click", function (e) {
            window.location.href = "./HD.html";
        });
    }

    var articlesText = document.getElementById("articlesText");
    if (articlesText) {
        articlesText.addEventListener("click", function (e) {
            window.location.href = "./Article.php";
        });
    }

    // for sdg allignment
    var readMoreLink = document.getElementById("readMoreLink");
    if (readMoreLink) {
        readMoreLink.addEventListener("click", function (e) {
            window.location.href = "./SDG.php";
        });
    }

    // for where are we

    var frameContainer = document.getElementById("frameContainer");
    if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
            window.location.href = "./WRW.php";
        });
    }

    var programmesText = document.getElementById("programmesText");
    if (programmesText) {
        programmesText.addEventListener("click", function (e) {
            window.location.href = "./p-r-o-g-r-a-m-m-e.html";
        });
    }

    var homeText = document.getElementById("homeText");
    if (homeText) {
        homeText.addEventListener("click", function (e) {
            window.location.href = "./homepage.html";
        });
    }

    var AboutUsText3= document.getElementById("AboutUsText3");
    if (AboutUsText3) {
        homeText.addEventListener("click", function (e) {
            window.location.href = "./index.html";
        });
    }
</script>
</body>
</html>

