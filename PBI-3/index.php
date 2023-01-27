<?php
    include("includes/header.html");
    include("includes/functions.php");
?>

<div id ="main" class ="container">
        <div class="jumbotron">
            <h1 class="display-4">Angel's Pizza Place</h1>
            <p class="lead">The most heavenly pizza you'll ever taste!</p>
            <hr class="my-4">
            <p> Write something here...</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
        </div>

    <!--action: where the data will go
        method: how it will get there (get or post)-->
        <form id="pizza-form" action="confirm.php" method="get">

            <!--contact info-->
            <fieldset class="form-group">
                <legend class="col-form-label col-sm-3 pt-0">Contact Info:</legend>
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter First Name">
                    <span class="err" id="err-fname">Please Enter First Name</span>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name">
                    <span class="err" id="err-lname">Please Enter Last Name</span>
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                </div>
            </fieldset>

            <!--pickup or delivery-->
            <fieldset class="form-group">
                <!--<legend class="col-form-label pt-0">Pickup or Delivery</legend>-->
                <legend class="col-form-label col-sm-4 pt-0">Select Pickup or Delivery:</legend>
                <div class="form-check-inline">
                    <label class="form-check-label" for="pickup">
                        <input type="radio" class="form-check-input" id="pickup" name="method" value="pickup">Pickup
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label" for="delivery">
                        <input type="radio" class="form-check-input" id="delivery" name="method" value="delivery">Delivery
                    </label>
                </div>
                <span class="err" id="err-method">Please Choose Pickup or Delivery</span>
            </fieldset>

            <!--Toppings-->
            <fieldset class="form-group">
                <legend class="col-form-label col-sm-3 pt-0">Select Toppings:</legend>

                <?php

                $toppings = getToppings();
                foreach ($toppings as $topping)
                {
                    echo "<div class='form-check'>
                    <label class='form-check-label'>
                        <input type='checkbox' class='form-check-input' 
                        value='$topping' name='toppings[]'>".ucfirst($topping).
                    "</label>
                </div>";
                }

                ?>
                <!--<div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="sausage" name="toppings[]">Italian Sausage
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="canadian-bacon" name="toppings[]">Canadian Bacon
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="black-olives" name="toppings[]">Black Olives
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="mushrooms" name="toppings[]">Mushrooms
                    </label>
                </div>-->

                <span class="err" id="err-toppings">Please Select at least One Topping</span>
            </fieldset>

            <!--Pizza Size-->
            <fieldset class="form-group">
                <legend class="col-form-label col-sm-3 pt-0">Select Pizza Size:</legend>
                <div class="form-group">
                    <!--<label for="size">Select a Size:</label>-->
                    <select class="form-control" id="size" name="size">

                        <?php
                        $sizes = getSizes();
                        foreach($sizes as $key=>$desc)
                            echo"<option value='$key'>$desc</option>";
                        ?>
                    </select>
                        <!--<option value="none">Select a Size:</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>-->
                    <span class="err" id="err-size">Please Select a Size</span>
                </div>
            </fieldset>

            <!--Comment Field-->
            <div class="form-group">
                <label for="comment">Customize Your Order:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>

            <!--Email Signup-->
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked = "checked" name="discount"> Sign Up for Discounts
                </label>
            </div>

            <!--Order Button-->
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
</div>

<?php
    include('includes/footer2.html');
?>
