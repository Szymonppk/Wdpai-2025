<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="public/styles/user-profile-friends.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Lugrasimo&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a849d8267.js" crossorigin="anonymous"></script>
    <script src="public/scripts/rooms-events.js" defer></script>
    <script src="public/scripts/user-profile-friends.js" defer></script>
    <title>Friends</title>
</head>

<body id="user-profile-friends-bg" class="container-center-center-column">
    <nav class="container-space-between-row nav-top">

        <ul class="container-center-center-row logo-home">
            <a href="/home-logged">
                <li>
                    <img src="/images/logo_alpa_event_black_circle_big.svg" class="AlpaEvent-logo">
                </li>
                <li class="logo-text">
                    AlpaEvent
                </li>
            </a>
        </ul>

        <ul class="container-center-center-row tekst-home desktop-icons">
            <a href="/user-events">
                <li class="nav-tekst">
                    EVENTS
                </li>
            </a>
            <a href="/user-rooms">
                <li class="nav-tekst">
                    ROOMS
                </li>
            </a>
            <a href="/forum">
                <li class="nav-tekst">
                    FORUM
                </li>
            </a>
        </ul>
        <a href="/user-profile">
            <div class="container-center-center-row login-register-home user-panel">
                <i class="fa-solid fa-user"></i>
            </div>
        </a>
        <ul class="mobile-icons">
            <li id="hamburger-menu">
                <i class="fa-solid fa-bars"></i>
            </li>

        </ul>

    </nav>
    <main class="container-center-center-column">
        <aside id="mobile-menu" class="container-center-center-column">
            <ul class="container-space-around-column">
                <a href="/user-events">
                    <li class="nav-tekst">
                        EVENTS
                    </li>
                </a>
                <a href="/user-rooms">
                    <li class="nav-tekst">
                        ROOMS
                    </li>
                </a>
                <a href="/forum">
                    <li class="nav-tekst">
                        FORUM
                    </li>
                </a>
                <li>
                    <a href="/user-profile">
                        <div class="container-center-center-row user-panel">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </aside>
        <p class="main-text">Friends</p>

        <div class="main-content container-start-center-column">
            <input type="Search" placeholder="Search friend..." class="input">
            <div class="search-result container-center-center-column"></div>
            <hr>
            <p class="your-friends">Your friends</p>
            <div class="static-friend container-center-center-column">

            </div>

    </main>

</body>

</html>