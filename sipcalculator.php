<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mobile.css?<?php echo mt_rand() ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Compounding</title>
    <style>
    @media screen and (max-width: 1200px) {
        .valueinput{
            font-size:10px;
            font-weight:bold;
            width:145%;    
            margin-left:-4rem;
        }
    }
    </style>
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
    <div class="calculator max-width-1 m-auto font2 ">
        <img src="img/payroll.svg" class="bg">
        <div class="max-width-3 m-auto mx-1">
            <h2 class="text-center mb-4">SIP Calculator</h2>
            <div class="container">
                <div class="col-xl-6 m-auto"id="col"
                    style=" padding:3rem; box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3); border-radius:5%; padding-left:6rem;">
                    <div class="values">
                        <div class="valueinput">
                            <label for="name" style="color:#bd6418;  ">Monthly Investment Amount:</label><br>
                            <input type="number" id="mi" placeholder="1000" style="width: 80%;padding: 8px; ">
                        </div>
                        <div class="valueinput">
                            <label for="name" style="color:#bd6418;  ">Expected Annual Returns (P.A %):</label><br>
                            <input type="number" id="ea" placeholder="15" style="width: 80%; padding:8px;">
                        </div>
                        <div class="valueinput" id="count">
                            <label for="years" style="color:#bd6418;  ">Investment period (in Months)</label><br>
                            <input type="number" id="noy" placeholder="25" style="width: 80%;padding:8px; ">
                        </div>
                        <div class="valueinput">
                            <button class="answer my-3" onclick="calculate()"
                                style="margin: auto;width: 80%; padding:.3rem;">Calculate Now</button>
                        </div>
                        <h2 id="text"class="text-center"
                        style="display: none; background-color: #efecd6; width:80%; font-size:1.2rem; box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3); 
                     padding:1rem; margin-top: 30px; border-radius:8%; ">
                            Your Future investment value is ₹ <span id="value_text"
                                style="color: #cd6c00; text-align:center;"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class=" footer">
        <p>Copyright &copy;My Finance Goal</p>
        <a href="https://www.vecteezy.com/free-vector/typewriter">Vector Credits: Vecteezy</a>
    </div>
    <script>
    // FV = P × ((1 + i)n - 1) / i) × (1 + i)
    let monthly_investment = document.getElementById("mi");
    let annual_return = document.getElementById("ea");
    let period = document.getElementById("noy");
    const calculate = () => {
        let P = parseInt(monthly_investment.value)
        let n = parseInt(period.value)
        let r = parseInt(annual_return.value)
        let i = r / 100 / 12
        let FV = P * ((Math.pow(1 + i, n) - 1) / i) * (1 + i);

        value_text.innerHTML = Math.round(FV);
        text.style.display = "block"
    };
    </script>
</body>

</html>

</html>