<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Vidyarthiloan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('image2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
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

        .about-content {
            padding: 20px;
            text-align: center;
        }

        .about-content p {
            margin: 20px 0;
            line-height: 1.6;
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
            text-align: center;
        }

        .btn:hover {
            background-color: #23527c;
        }
        p{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="about">
            <div class="hero-image"></div>
            <h1>About Vidyarthiloan</h1>
            <div class="about-content">
                <p>
                    Welcome to Vidyarthiloan, a dedicated platform designed to help students manage their educational expenses efficiently. Our mission is to provide a simple, secure, and reliable way for students to apply for loans to cover tuition fees, coaching expenses, and other related costs.
                </p>
                <p>
                    At Vidyarthiloan, we understand the financial pressures that come with pursuing education, and we are here to support you in achieving your academic goals. Our platform is built with the user in mind, offering a streamlined application process and robust security measures to ensure that your personal information is protected.
                </p>
                <p>
                    Whether you need funds for a specific course, coaching, or any educational expense, Vidyarthiloan is here to help. Our team is committed to providing excellent service and assisting you throughout the loan application process.
                </p>
                <p>
                    Thank you for choosing Vidyarthiloan. We look forward to supporting your educational journey.
                </p>
                <a href="home.php" class="btn">Back to Home</a> 
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
