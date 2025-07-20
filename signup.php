
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HYDRAPEAK</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class = "navbar navbar-default navbar-fixed-top">  
        <div class = "navbar-brand" style = "font-size:20px;">
            HYDRAPEAK
        </div>
        <div class = "collapse navbar-collapse" id="myNavbar">
            <ul class = "nav navbar-nav navbar-right">
                <li><a href = "">WATER BOTTLES</a></li>
                <li><a href = "">FOOD STORAGE</a></li>
                <li><a href = "">PETS</a></li>
                <li><a href = "">ACCESSORIES</a></li>
                <li><a href = "">SUPPORT</a></li>
                <li><a href = "">ABOUT</a></li>
                <li>
                    <form class = "navbar-form navbar-right" role="search" style = "padding-left:20px; padding-right:15px;">
                        <div class="search-bar-wrapper">
                            <input type = "text" class = 'navbar-search-input' placeholder = 'SEARCH'>
                            <button type = "submit" class = 'btn btn-search'>
                                <img src = "vecteezy_magnifier-icon-search-symbol-vector-illustration_7125967-1.jpg" alt = "Search" style = "width:20px; height:20px;"> <!--Search icon-->
                            </button> 
                        </div>
                        
                    </form>
                </li>
                <li><a href = ""><img src = "online-shopping.png" style = "width:18px; height:18px;"></a></li> <!--Cart-->
                <li><a href = ""><img src = "avatar.png" style = "height:17px; width:17px;"></a></li> <!-- User picture -->
            </ul>
        </div>
    </nav>
    <!--Body of the website-->
    <main>
        <h2>Sign Up</h2>
        <form action = "signup_logic.php" method = 'POST'>

            <h4>
                Name
            </h4>
            <input type = "text" placeholder = "Username" name = "username" required>
            <input type = 'text' placeholder = 'Forename' name = 'forename' required>
            <input type = 'text' placeholder = 'Surname' name ='surname' required>
            <br>
            
            <h4>
                Email
            </h4>
            <input type = 'text' placeholder = 'Email' name = 'email' required>

            <h4>
                Password
            </h4>
            <div>
                <input name = 'password' type = 'password' id = 'password' placeholder = 'Password' required>
                <i class = 'fa-solid fa-eye' id = 'togglePassword' style = 'cursor: pointer;'></i>
            </div>
            <div>
                <input name = 'confirm' type = 'password' id='confirmPassword' placeholder='Confirm Password' required>
                <i class = 'fa-solid fa-eye' id = 'toggleConfirmPassword' style = 'cursor: pointer;'></i>
            </div>
            <br>
            <button type = 'submit' id = 'signUpButton'>Sign Up</button>
        </form>
    </main>
    <!--Bottom of navbar-->
    <div class="navbar-bottom">
    </div>
</body>
</html>
