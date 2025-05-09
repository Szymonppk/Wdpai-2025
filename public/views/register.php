<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Lugrasimo&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <link href="public/styles/register.css" rel="stylesheet">
</head>
<body id="register-page">
    
    <div id="left-register"></div>
    <div id="right-register" class="container-start-center-column">
    <div id="form-box" class="container-center-center-column">
        <a href="/home">
        <img src="/images/logo_alpa_event_black_circle_big.svg" alt="AlpaEvent logo" class="AlpaEvent-logo">
        <h1 class="logo-text">AlpaEvent</h1>
        </a>
        <div class="error-message">
            <?php if(isset($messages))
                {
                    foreach($messages as $message)
                    {
                        echo $message;
                    }
                }
                ?>
        </div>
            <form id="form-register" class="container-start-center-column" method="POST">
                <input name = "username" placeholder="username" type="username" class="input">
                <input name = "email" placeholder="email" type="email" class="input">
                <input name = "password" placeholder="password" type="password" class ="input">
                <button type = "submit" class="button-submit">Register</button>
            </form>
       
        </div>
    </div>
    
</body>
</html>