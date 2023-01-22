<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/PBI-1-styles.css">
    <title>Confirm</title>

</head>
<body>

<div id ="main" class ="container">
    <div class="jumbotron">
        <h2 class="display-4"><center><b>Student Plan</b></center></h2>
        <!--<p><code id="output"></code></p>-->

        <div id="print">
            <!--<button onclick="window.print()">Print</button>-->
            <a class="btn btn-info btn-lg" onclick="window.print()">
            <span class="glyphicon glyphicon-print">Print</span>
            </a>
        </div>


    </div>

    <p>Last Updated: <input type="datetime-local" id="timestamp" name="timestamp"></p>

    <?php

        $fall = $_GET['fall'];
        $winter = $_GET['winter'];
        $spring = $_GET['spring'];
        $summer = $_GET['summer'];

        echo "<p><b>Fall:</b> $fall</p>";
        echo "<p><b>Winter:</b> $winter</p>";
        echo "<p><b>Spring:</b> $spring</p>";
        echo "<p><b>Summer:</b> $summer</p>";

    ?>

</div>
<script src="scripts/PBI-1-scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
