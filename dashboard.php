<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT loan_id, amount, purpose, status FROM loans WHERE user_id = ?");
$stmt->execute([$user_id]);
$loans = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .btn {
            display: inline-block;
            background-color: #337ab7;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px;
            text-align: center;
        }

        .btn:hover {
            background-color: #23527c;
        }

        .btn-container {
            text-align: center;
        }
        body {
            background-image: url('image2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #333;
        }

    </style>
</head>
<body>

<main>
    <section class="dashboard">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <h3>Your Loan Applications</h3>
        <table>
            <tr>
                <th>Loan ID</th>
                <th>Amount</th>
                <th>Purpose</th>
                <th>Status</th>
            </tr>
            <?php foreach ($loans as $loan): ?>
            <tr>
                <td><?php echo $loan['loan_id']; ?></td>
                <td><?php echo $loan['amount']; ?></td>
                <td><?php echo $loan['purpose']; ?></td>
                <td><?php echo ucfirst($loan['status']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="btn-container">
            <a href="apply_loan.php" class="btn">Apply for a New Loan</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
