<?php
session_start();
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["id_proof"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is a actual PDF or fake PDF
    if ($fileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if file upload size is within limits
    if ($_FILES["id_proof"]["size"] > 10000000) { // 10MB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Attempt to move the uploaded file
        if (move_uploaded_file($_FILES["id_proof"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["id_proof"]["name"])) . " has been uploaded.";
            
            // Insert loan data into the database
            $amount = $_POST['amount'];
            $purpose = $_POST['purpose'];
            $user_id = $_SESSION['user_id'];
            $loan_id = uniqid(); // Generate a unique loan ID

            $stmt = $pdo->prepare("INSERT INTO loans (loan_id, user_id, amount, purpose, id_proof) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$loan_id, $user_id, $amount, $purpose, $target_file]);

            echo "<p>Loan application submitted! Your Loan ID is: $loan_id</p>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Apply for Loan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"],
        input[type="text"],
        input[type="file"],
        input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            width: auto;
        }

        .btn {
            display: block;
            width: 100%;
            background-color: #337ab7;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #23527c;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            var terms = document.getElementById("terms");
            if (!terms.checked) {
                alert("You must agree to the terms and conditions before submitting.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>
    <section class="form-container">
        <h2>Apply for a Loan</h2>
        <form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label>Loan Amount:</label>
            <input type="number" name="amount" required>
            
            <label>Purpose:</label>
            <input type="text" name="purpose" required>
            
            <label>ID Proof (PDF):</label>
            <input type="file" name="id_proof" required>

            <label>
                <input type="checkbox" id="terms" name="terms" required>
                I agree to the <a href="terms.php" target="_blank">terms and conditions</a>.
            </label>
            
            <button type="submit" class="btn">Apply</button>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
