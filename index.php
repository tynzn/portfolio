<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakare yusuf Portfolio</title>
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lobster">
    

<link rel="stylesheet" href="css/style.css">

</head>
<body class="">
 
    <div class="table section">  
    <?php 
    $t = date("H");

    if ($t <= "11") {
      echo "Good Morning!";
    }
    elseif($t <= "17") {
        echo "Good Afternoon!";
      }

    elseif($t >="18") {
        echo "Good Evening!";
    }  ?><!--
    <div class="row ">
        <h3 class="col-sm-1" > </h3>
        <div class="col-sm-2 name" ><h3>I </h3></div>
    </div>
    <div class="row ">
        <h3 class="col-sm-2" > </h3>
        <div class="col-sm-2 name" ><h3>Am </h3></div>
    </div>
    -->
       <div class="name">Bakare Yusuf</div>   
    
<div class="intro">
<h5>
        <p> 
        am in love with writing effective code that serves your need 
        </p>
        <p>
        I program Website applications and Websites using Php and Javascript  </p>
        </div>
</h5>
        <div class="row container main-bar">
            <a href="" class="col-4 btn link " >About</a>
            <a href="" class="col-4 btn  link">Projects</a>
            <a href="" class="col-4 btn link">Contact</a>
        </div>

        <div class="row  container">
        <div class="col-sm-6">
        <div class="name"> Goals</div>
      
           <ul>
               <li> Developing and Delivering Services right on time in the shortest time possible</li>
                <li>Programming and Deploying Software As A Service WebApp that ease the operation and Execution of Business related tasks</li>
                <li> Focused on developing Marketing conversion tools and utilities </li>

            </ul>
        </div>
        <div class="col-sm-6">
        <div class="name"> Skills</div>
      
      <ul>
          <li> Proficient with HTML5</li>
           <li>Vast with CSS and BootStrap for styling</li>
           <li> Good Understanding of Javascript and Vue.js as framework of choice </li>
           <li> Back-End with Php and Laravel </li>


       </ul>
  
        
        </div>
       
        


           
        </div>
        <div class="row">
<div class="col-sm-12 name"> Projects </div>


        </div>
        
    </div>






</body>
<script src="js/bootstrap.js"></script>
</html>