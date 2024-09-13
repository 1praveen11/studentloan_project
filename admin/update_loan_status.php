php
   <?php
   session_start();
   include '../includes/config.php';

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $loan_id = $_POST['loan_id'];
       $status = $_POST['status'];

       $stmt = $pdo->prepare("UPDATE loans SET status = ? WHERE id = ?");
       $stmt->execute([$status, $loan_id]);

       header('Location: manage_loans.php');
   }
   ?>