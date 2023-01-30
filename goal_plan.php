<?php

$insert = false;
if(isset($_POST['cage'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("Database not connected ".mysqli_connect_error());
}

$cage = $_POST['cage'];
$rage = $_POST['rage'];
$networth = $_POST['networth'];
$income = $_POST['income'];
$expense = $_POST['expense'];
$invest = $_POST['invest'];
$percent = $_POST['percent'];
$afterexpense = $_POST['afterexpense'];
$sql = "INSERT INTO `goalplane`.`goalplane` (`cage`, `rage`, `networth`, `income`, `expense`, `invest`, `percent`, `afterexpense`, `date`) VALUES ('$cage', '$rage', '$networth', '$income', '$expense', '$invest', '$percent', '$afterexpense', CURRENT_TIMESTAMP);";

if($con->query($sql) == true){
    // echo "Successfuly inserted";
    $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css?<?php echo mt_rand() ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Goal Plans</title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="94px" alt=""></span>
            </a>
            <h1>My Finance Goal</h1>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Calculators
            </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="calculator.php">Calculator</a>
          <a class="dropdown-item" href="simplecalculator.php">Simplecalculator</a>
          <a class="dropdown-item" href="sipcalculator.php">SIPcalculator</a>
        </div>
      </li>                <li><a href="goal_plan.php">Goal Plan</a></li>
                <li><a href="contact.php">Send Query</a></li>
            </ul>

        </div>

    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1" style="background-color: rgb(248, 239, 239, 0.5); text-align: center;">
            <h2>Plan your goals</h2>
            <?php
            if($insert == true){
                echo "<p class='submitmsg' style='color: green'>Your information has been successfully submitted.</p>";
            }
            ?>
            <form action="goal_plan.php" method="post">
                <div class="contact-form">
                    <div class="form-box">
                        <input name="cage" type="number" placeholder="Your current age" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="rage" type="number" placeholder="Retirement age" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="networth" type="number" placeholder="Current Net Worth" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="income" type="number" placeholder="Current monthly Income" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="expense" type="number" placeholder="Current monthly Expense" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="invest" type="number" placeholder="Monthly Investment possible" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="percent" type="number" placeholder="Percentage of return earning" style="padding: 6px;;">
                    </div>
                    <div class="form-box">
                        <input name="afterexpense" type="number"
                            placeholder="Monthly Expense per month after Retirement" style="padding:6px;">
                    </div>
                    <div class="form-box">
                        <button class="btn">Submit</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <div class="footer my-4">
        <p>Copyright &copy;My Finance Goal</p>
        <a href="https://www.vecteezy.com/free-vector/typewriter">Vector Credits: Vecteezy</a>
    </div>
</body>

</html>