<?php 
    require_once "config/db-command.php";
    require_once "models/customer.php";

    // Instantiate Customer
    $customer = new Customer();

    // Get Customer
    $customer = $customer->getCustomers();

    require_once "header.php"; 
?>

<div class="container mt-4">
    <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-primary">Customers</a>
        <a href="transactions.php" class="btn btn-secondary">Transactions</a>
    </div>
    <hr>
    <h2>Customers</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($customer as $c): ?>
            <tr>
                <td><?php echo $c->customer_id; ?></td>
                <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                <td><?php echo $c->email; ?></td>
                <td><?php echo $c->created_at; ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require_once "footer.php"; ?>