<?php
session_start();
include '../includes/config.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->query("SELECT loans.id, users.username, loans.amount, loans.purpose, loans.status 
                     FROM loans 
                     JOIN users ON loans.user_id = users.id");
$loans = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_style.css">
    <title>Manage Loans - Admin Dashboard</title>
</head>
<body>
    <div class="loan-management-container">
        <h2>Loan Applications</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Amount</th>
                    <th>Purpose</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $loan): ?>
                <tr>
                    <td><?php echo $loan['id']; ?></td>
                    <td><?php echo $loan['username']; ?></td>
                    <td><?php echo $loan['amount']; ?></td>
                    <td><?php echo $loan['purpose']; ?></td>
                    <td><?php echo ucfirst($loan['status']); ?></td>
                    <td>
                        <form method="POST" action="update_loan_status.php">
                            <input type="hidden" name="loan_id" value="<?php echo $loan['id']; ?>">
                            <select name="status">
                                <option value="pending" <?php echo $loan['status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                                <option value="approved" <?php echo $loan['status'] == 'approved' ? 'selected' : ''; ?>>Approved</option>
                                <option value="rejected" <?php echo $loan['status'] == 'rejected' ? 'selected' : ''; ?>>Rejected</option>
                            </select>
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
