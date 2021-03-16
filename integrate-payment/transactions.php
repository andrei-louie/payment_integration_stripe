<?php 
    require_once "config/db-command.php";
    require_once "models/transaction.php";

    // Instantiate Customer
    $transaction = new Transaction();

    // Get Customer
    $transaction = $transaction->getTransactions();

    require_once "header.php"; 
?>

<div class="container mt-4">
    <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-primary">Customers</a>
        <a href="transactions.php" class="btn btn-secondary">Transactions</a>
    </div>
    <hr>
    <h2>Transactions</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transaction as $t): ?>
            <tr>
                <td><?php echo $t->id; ?></td>
                <td><?php echo $t->customer_id; ?></td>
                <td><?php echo $t->product; ?></td>
                <td><?php echo sprintf('%.2f', $t->amount / 100); ?> <?php echo strtoupper($t->currency); ?></td>
                <td><?php echo $t->created_at; ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require_once "footer.php"; ?>