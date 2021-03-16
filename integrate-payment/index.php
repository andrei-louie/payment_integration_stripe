<?php require_once "header.php"; ?>
<div class="container">
    <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
    <form action="./charge.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
            <input type="text" name ="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
            <div id="card-element" class="form-control">
            <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display Element errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
    </form>
</div>


<?php require_once "footer.php"; ?>