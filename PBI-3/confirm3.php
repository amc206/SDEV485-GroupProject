<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../PBI-1/styles/PBI-1-styles.css">
    <title>Student Plan</title>

</head>
<body>
<div id ="main" class ="container">
    <div class="jumbotron">
        <h2 class="display-4"><center><b>New Plan</b></center></h2>
        <p><code id="output"></code></p>
    </div>


    <?php
    if (isset($_POST['send'])){
        $to = 'email'; //email address
        $subject = 'Student Plan';

        $message = 'Advisor: ' . $_POST['advisor'] . "\r\n\r\n";
        //$message .= 'Student Name: ' . $_POST['name'] . "\r\n\r\n";
        $message .= 'Fall: ' . $_POST['fall'] . "\r\n\r\n";
        $message .= 'Winter: ' . $_POST['winter'] . "\r\n\r\n";
        $message .= 'Spring: ' . $_POST['spring'] . "\r\n\r\n";
        $message .= 'Summer: ' . $_POST['summer'];

        //echo $message;
        $success = mail($to, $subject, $message,'-campos.angel@student.greenriver.edu');
    }
    ?>

    <?php if (isset($success) && $success){ ?>
        <div id="print">
            <!--<button onclick="window.print()">Print</button>-->
            <a class="btn btn-info btn-lg" onclick="window.print()">
                <span class="glyphicon glyphicon-print">Print</span>
            </a>
        </div>

        <p>Last Updated: <input type="datetime-local" id="timestamp" name="timestamp"></p>
    <h1>See Your Plan Below:</h1>


        <?php
        $advisor = $_POST['advisor'];
        //$name = $_POST['name'];
        $fall = $_POST['fall'];
        $winter = $_POST['winter'];
        $spring = $_POST['spring'];
        $summer = $_POST['summer'];

        echo "<p><b>Advisor:</b> $advisor</p>";
        //echo "<p><b>Student Name:</b> $name</p>";
        echo "<p><b>Fall:</b> $fall</p>";
        echo "<p><b>Winter:</b> $winter</p>";
        echo "<p><b>Spring:</b> $spring</p>";
        echo "<p><b>Summer:</b> $summer</p>";
        ?>
    <?php } else { ?>
    <h1>Oops!</h1>
    Sorry, there was a problem.
    <?php } ?>



</div>

<script src="../PBI-3/script3/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
