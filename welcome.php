<?php 

session_start();

if (!isset($_SESSION['hospitalname'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="heading">

        <div class="left-side" style="background-image:url(covid-logo.png)">
        </div>

        <div class="right-side">
            <div class="buttons-wrapper">
                <a href="welcome.php"> Home</a>
            </div>

            <div class="buttons-wrapper">
                <a href="tracker.html"> Tracker</a>
            </div>

            <div class = "buttons-wrapper">
                <a href="logout.php">Logout</a>
            </div>
    </div>
</div>

<div class="main-body">
    <div class="left-side-news">
        <div class = "slider">
            <div class = "slides">
    
                <input type = "radio" name = "radio-btn" id = "radio1">
                <input type = "radio" name = "radio-btn" id = "radio2">
                <input type = "radio" name = "radio-btn" id = "radio3">
                <input type = "radio" name = "radio-btn" id = "radio4">
    
                <div class = "slide first">
                    <img src = "1.png" alt ="">
                </div>
                <div class = "slide">
                    <img src ="2.jpg" alt = "">
                </div>
                <div class = "slide">
                    <img src ="3.jpg" alt = "">
                </div>
                <div class = "slide">
                    <img src ="4.jpg" alt = "">
                </div>
                
                <div class = "navigation-auto">
                    <div class = "auto-btn1"></div>
                    <div class = "auto-btn2"></div>
                    <div class = "auto-btn3"></div>
                    <div class = "auto-btn4"></div>
                </div>
    
            </div>
                <div class = "navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>    
                </div>

            <script type="text/javascript">
                var counter =1;
                setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                        if(counter > 4){
                        counter = 1;
                        }
                    } ,2000);
            
            </script>

        </div>
    </div>
<div class="right-side-news">
        <div class="right-img-background" style="background-image:url(hospit.gif)">
            <div class="img-text-wrapper">
                <div class="fontstyle_wrapper">
                    <i><b>COVID TRACKER SYSTEM</b></i>
                    </div>
                    <div class="description"><small>
                        This system is designed to monitor the total number of COVID-19 patients every day. 
                        It covers the study about the information of COVID-19 cases in the Philippines. 
                        It gathers information from hospitals that accepts COVID-19 patients and licensed laboratories. </small>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class = "totalC">
        <font face="Verdana">
            <h5>TOTAL CASES</h5>
            <h1>2,434,753</h1>
    </div>
    
    <div class = "TotalD">
        <font face="Verdana">
        <h5>TOTAL DEATHS</h5>
        <h2>37,405</h2>
    </div>
    
    <div class = "totalRec">
        <font face="Verdana">
        <h5>TOTAL RECOVERIES</h5>
        <h2>2,231,558</h2>
    </div>

    <div class = "text">
      <h2>NATIONWIDE CASES DATA</h2>
    </div>

    <div class = "text2">
      <p>Confirmed cases as of September 23, 2021.</p>
    </div>
    
    <div class="footer" style="background-image:url(f5.png)">
    </div>


    
</body>
</html>