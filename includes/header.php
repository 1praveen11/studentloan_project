
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Loan Portal</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #f4f4f4;
    border-bottom: 1px solid #ddd;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1em;
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size:2.5em;
    font-family:'cursive';
}

.logo {
    width: 60px; /* Adjust the width to your liking */
    height: 60px; /* Adjust the height to your liking */
    margin-left: 15px; /* Space between heading and logo */
}

.header-container h1 {
    margin: 0; /* Remove default margin */
    font-size: 1.5em; /* Adjust font size */
    text-align: center; /* Center text */
    color:black;
}

.navbar {
    background-color:#FAF9F6;
    color: black;
    padding: 1em;
    display: flex;
    align-items: center;
    justify-content: center;
    margin:0px ;  
    
}


.nav-links {
    list-style: none;
    margin: 0px ;
    padding: 0px;
    display: flex;
    font-family:'brush script';
}

.nav-links li {
    margin-right: 50px;
}

.nav-links a {
    color: black;
    text-decoration: none;
    
}

.nav-links a:hover {
    color: #ccc;
}

        </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-content">
                <h1>Vidyarthi Loan</h1>
                <img src="logo.jpg" alt="Vidyarthi Loan Logo" class="logo">
            </div>
        </div>
        <nav class="navbar">
            <ul class="nav-links">
                <li><b><a href="home.php">Home</a></b></li>
                <li><b><a href="about.php">About</a></b></li>
                <li><b><a href="register.php">Register</a></b></li>
                <li><b><a href="login.php">Login</a></b></li>
                <li><b><a href="dashboard.php">Dashboard</a></b></li>
            </ul>
        </nav>
    </header>
</body>
</html>   


