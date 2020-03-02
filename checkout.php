<!-- Vishwa Wani 8622587 -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Checkout Page</title>
    <style>
        .form{
            margin:50px 350px 350px ;
            padding:10px 150px;
            

        }
        .button {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            border-radius: 12px;
            transition-duration: 0.4s;
            font-size: 20px;
            margin-left: 120px;
        }
        .button:hover {
            background-color: #008CBA; 
            color: white;
}
    </style>
</head>
<body>
    <?php

        // file requirement
        require('header.php');
        session_start();
        $id = $_REQUEST['ID'];
        $_SESSION["bID"] = $id;

        require('buy.php');
    ?>

    <!-- making a form -->
    <h1 style = "text-align:center">Chekout Form</h1>
    <p style = "text-align:center">* is required field</p>
    <form class="form" action="" method="POST">
        FirstName: <input type="text" name="fname" size="30" maxlength="60" placeholder = "Enter only characters">*<br><br>
        LastName: <input type="text" name="lname" size="30" maxlength="60" placeholder = "Enter only characters">*<br><br>
        Payment Method: <br>
                <input type="radio" name="payment" <?php if (isset($payment) && $payment=="Cash On Delivery") echo "checked";?> value="Cash On Delivery">Cash On Delivery
                <input type="radio" name="payment" <?php if (isset($payment) && $payment=="Credit Card") echo "checked";?> value="Credit Card">Credit Card<br>
                <input type="radio" name="payment" <?php if (isset($payment) && $payment=="Debit Card") echo "checked";?> value="Debit Card">Debit Card
                <input type="radio" name="payment" <?php if (isset($payment) && $payment=="Master Card") echo "checked";?> value="Master Card">Master Card
                <br><br>
        <input class="button" type="submit" name="submit" value="Checkout">
    </form>
</body>
</html>
