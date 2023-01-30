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
    <title>Home - My Finance goal</title>
</head>


<body>
<nav class="navigation max-width-3 m-auto">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Calculators
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="calculator.php">Compound Calculator</a>
                        <a class="dropdown-item" href="simplecalculator.php">Simple Calculator</a>
                        <a class="dropdown-item" href="sipcalculator.php">SIP Calculator</a>
                    </div>
                </li>
                <!-- <li><a href="goal_plan.php">Goal Plan</a></li> -->
                <li><a href="contact.php">Send Query</a></li>
            </ul>
        </div>
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>

<div class="home-articles max-width-1 m-auto font2">
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/team.jpg" alt="article" style="border-radius: 42px">
            </div>
            <div class="home-article-content font1">
                <h3>Our work</h3>
                <div>
                    <p>Keeping it Short, we are a group of financial Aficionados sharing our knowledge from past 
                        experiences with some of the industry experts. We are here to solve your queries and create
                         awareness about investing in your financial journey.
                    </p>
                    <p style="font-size: 17px"><strong><em>NOTE:</em> <br> We are not SEBI registered Financial advisors, information shared will be on educational purpose.</strong></p>
                </div>
            </div>
        </div>

<div class="footer">
        <p>Copyright &copy;My Finance Goal</p>
        <a href="https://www.vecteezy.com/free-vector/typewriter">Vector Credits: Vecteezy</a>
    </div>
</body>

</html>