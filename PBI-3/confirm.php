<?php
    include("includes/header.html");
?>

<div id ="main" class ="container">
    <div class="jumbotron">
        <h1 class="display-4">Angel's Pizza Place</h1>
        <p class="lead">The most heavenly pizza you'll ever taste!</p>
        <hr class="my-4">
        <p> Write something here...</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
    </div>


    <?php
        /*
        echo "<prev>";
        var_dump($_GET);
        echo "</prev>";
        */

        //Turn on error reporting- always add to top of every php script
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        //$x=3;
        //echo $x++; //prints 3 after it's been used it will increment- post fixed


    //Move form data into variables
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $email = $_GET['email'];
        $method = $_GET['method'];
        $size = $_GET['size'];
        $comment = $_GET['comment'];
        $toppings = implode(", ", $_GET['toppings']);
        $delivery = $_GET['method'];

        //Define Constants
        define("TAX_RATE", 0.065);
        define("TOPPING_PRICE", 0.50);
        define("DELIVERY_FEE", 5.00);

        //Get the number of toppings
        $numToppings = sizeof($_GET['toppings']);

        //Calculate price of pizza
    //TODO: Replace with function and update size options
        $price = 0.0;
        if ($size == "small")
        {
            $price = 10.00;
        }
        else if ($size == "medium")
        {
            $price = 15.00;
        }
        else
        {
            $price = 20.00;
        }

        $deliveryfee = 0.0;
        if ($delivery == "delivery")
        {
            $deliveryfee = 5.00;
        }
        else
        {
            $deliveryfee = 0.00;
        }

        //Add cost of toppings
        //$price = $price + ($numToppings * TOPPING_PRICE);
        $price += $numToppings * TOPPING_PRICE; //another way to do it

        //Add sales tax
        $price += $price * TAX_RATE + $deliveryfee;

        //Format Price
        $price = number_format($price, 2);
        $deliveryfee = number_format($deliveryfee, 2);


        thanks($fname);
        //thanks();
        //echo "<h1>Thank you for your order, $fname!</h1>";
        echo '<h3>Order Summary</h3>';


        //Display Result
        //Display an Order Summary
        //echo "<p>" . $fname . " " . $lname . "</p>"; //the dot is the concatenation operator
        //echo "<h3> Order Summary </h3>";
        echo "<p>Name: $fname $lname</p>"; //produces same output as above
        echo "<p>Email: $email</p>";
        echo "<p>Delivery Method: $method</p>";
        echo "<p>Pizza Size: $size</p>";
        echo "<p>Comments: $comment</p>";
        echo "<p>Toppings: $toppings</p>";
        echo "<p>Delivery Fee: $$deliveryfee</p>";
        echo "<p>Total Cost: $$price</p>"; //format price above and then use this
        //echo "<p>Total Cost: " .number_format($price, 2). "</p>"; //or use this concatenated version

        //Format Output
        function thanks($name = "") //if they  input name, use it otherwise print empty string
        {
            $msg = "<h1>Thank you for your order";
            if($name != "")
            {
                $msg .= ", $name";
            }
            $msg .= "!</h1>";
            echo $msg;


            //Redundant Version of Above logic
            /*if ($name == "")
            {
                echo "<h1>Thank you for your order!</h1>";
            }
            else
            {
                echo "<h1>Thank you for your order, $name!</h1>";
            }*/

            //echo"<h1>Thank you for your order, $name!</h1>";
        }

        include ("includes/sendemail.php");



        //Short Circuiting example
        /*if ($isSunny or $isSat)
        {
            echo "Go to Park";
        }*/

        //Add 3 more rows to pizza table SQL

        /*
         * CREATE TABLE pizza
(
    order_id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   	fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    address VARCHAR(50),
    size VARCHAR(10) NOT NULL,
    toppings VARCHAR(50),
    method VARCHAR(10) NOT NULL,
    price DECIMAL(6,2) NOT NULL, #Up to 9999.99
    comment TEXT,
    order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

        INSERT INTO pizza (`fname`, `lname`, `address`, `size`, `toppings`, `method`, `price`, `comment`)
        VALUES ('Gavin', 'Sherman', NULL, 'small', 'pepperoni, sausage', 'pickup', 9.95, NULL);
         */

/*
        //Send an Email to the pizza shop owner
        $toEmail = "campos.angel@student.greenriver.edu"; // use your own info
        $fromName = "Angel's Pizza Place"; //pizza website
        $fromEmail = "noreply@angelspizza.com";
        $subject = "New Pizza Order was Placed";
        $headers = "From: $fromName <$fromEmail>";

        $message = "A new order has been placed.\n";
        $message = $message . "Name: $fname $lname\n"; //concatenate
        $message .= "Toppings: $toppings\n";


        //Sends the email
        $success = mail($toEmail, $subject, $message, $headers);
        //If the email failed to send
        if (!$success)
        {
            echo "<p>There was a problem placing your order, please call us.</p>";
        }

*/

    ?>

</div>
</body>
</html>