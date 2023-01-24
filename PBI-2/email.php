<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/PBI-1-styles.css">
    <title>Student Plan</title>

</head>
<body>
<div id ="main" class ="container">
    <div class="jumbotron">
        <h2 class="display-4"><center><b>New Plan</b></center></h2>
        <p><code id="output"></code></p>
    </div>

    <form action="confirm2.php" method="post">

        <fieldset class="form-group">
            <div class="form-group">
                <p><label for="advisor">Advisor:</label></p>
                <textarea id="advisor" name="advisor" rows="1" cols="20"></textarea>
            </div>

            <div class = "form-group">
                <p><label for="name">Student Name:</label></p>
                <textarea id="name" name="name" rows="1" cols="20"></textarea>
            </div>

            <div class="form-group">
                <p><label for="email">Student Email:</label></p>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <p><label for="fall">Fall:</label></p>
                <textarea id="fall" name="fall" rows="4" cols="50"></textarea>
            </div>
            <!--<br>-->
            <div class="form-group">
                <p><label for="winter">Winter:</label></p>
                <textarea id="winter" name="winter" rows="4" cols="50"></textarea>
                <!--<br>-->
            </div>
            <div class="form-group">
                <p><label for="spring">Spring:</label></p>
                <textarea id="spring" name="spring" rows="4" cols="50"></textarea>
                <!--<br>-->
            </div>

            <div class="form-group">
                <p><label for="summer">Summer:</label></p>
                <textarea id="summer" name="summer" rows="4" cols="50"></textarea>
                <!--<br>-->
            </div>
        </fieldset>

        <button type="submit" name="send" class="btn btn-primary">Save</button>
        <!--<input type="submit" value="Save" id="save">-->
    </form>

    <?php

    ?>

</div>

<script src="scripts/PBI-1-scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
