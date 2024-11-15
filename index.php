<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Css File -->
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <div id="pageContainer">
        <!-- Start Header -->
        <div id="headerContainer">
            <button class="navShowHide">
                <img src="imgs/icons/menu.png" alt="menu-icon">
            </button>

            <a href="index.php" class="logoContainer">
                <img src="imgs/icons8-youtube.svg" alt="logo">
            </a>

            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" name="term" class="searchBar" placeholder="Search...">
                    <button class="searchButton">
                        <img src="imgs/icons/search.png" alt="search-icon">
                    </button>
                </form>
            </div>

            <div class="rightIcons">
                <a href="upload.php">
                    <img src="imgs/icons/upload.png" alt="upload-icon">
                    <img src="imgs/profilePictures/default.png" alt="profile-icon">
                </a>
            </div>
        </div>
        <!-- End Header -->

        <!-- Start Side Nav -->
        <div id="sideNavContainer"></div>
        <!-- End Side Nav -->

        <!-- Start The Main Container -->
        <div id="mainSectionContainer">
            <div id="mainContentContainer">
                Hello World
            </div>
        </div>
        <!-- End The Main Container -->

    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Our JavaScript -->
    <script src="js/app.js"></script>
</body>

</html>
