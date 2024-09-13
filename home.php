
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Vidyarthiloan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('image2.jpg') ;
           background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            
        } 
          h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align:center;
        }
        

         .hero-image {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
           height: 200px;
            width: 100%; 
            max-width: 1200px;
            margin: 20px auto;
            border-radius: 10px;
         
        } 
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        } 

        .feature {
            width: 30%;
            margin: 20px;
            text-align: center;
        }

       .feature-icon {
            font-size: 48px;
            color: #337ab7;
            margin-bottom: 10px;
        } 

        .btn {
            display: inline-block;
            background-color: #337ab7;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin: 10px;
            text-align:center;
        }

        .btn:hover {
            background-color: #23527c;
        }

        @media (max-width: 768px) {
            .feature {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .feature {
                width: 100%;
            }

            .hero-image {
                height: 150px;
            }
        } 
        
        .c{
            text-align:center;
        } 
       
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="homepage">
            <div class="hero-image"></div>
            <h1>Welcome to Vidyarthiloan!</h1>
            <p>
                <marquee><b>This platform allows students to apply for loans to cover tuition, coaching fees, and other small expenses.</b></marquee>
            </p>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-graduation-cap feature-icon"></i>
                    <h2>Easy Loan Application</h2>
                    <p>Apply for a loan in just a few clicks</p>
                </div>
                <div class="feature">
                    <i class="fas fa-lock feature-icon"></i>
                    <h2>Secure and Reliable</h2>
                    <p>Our platform is secure and reliable, ensuring your data is protected</p>
                </div>
            </div>
            <div class="c">
            <a  href="register.php" class="btn">Register</a>
            <a href="login.php" class="btn">Login</a>
    </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>







