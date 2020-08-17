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
       <div class="name">Bakare Yusuf
      <p> <a href="https://github.com/tynzn"><Github</a>
      <a href="https://twitter.com/Yeagit_ng">Twitter</a>
    
    </p>

       </div> 

       
        
    <div class="intro">
<h5>
    <p> am in love with writing effective code that serves your need </p>
     <p>I program Website applications and Websites using Php and Javascript  </p>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>