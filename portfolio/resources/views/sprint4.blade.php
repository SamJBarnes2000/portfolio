<!DOCTYPE html>
<html lang="en">
<title>Sprint 4</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/portfolio/public/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="/portfolio/public/sprint1" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 1</a>
    <a href="/portfolio/public/sprint2" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 2</a>
    <a href="/portfolio/public/sprint3" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 3</a>
    <a href="/portfolio/public/sprint4" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 4</a>
    <a href="/portfolio/public/sprint5" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 5</a>
    <a href="/portfolio/public/sprint6" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 6</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Sam Barnes Portfolio</h1>
  <p class="w3-xlarge">in602</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">14/9</h5>
      <p class="w3-text-grey">This was the first part of our fourth sprint where for the first time in a while we had each member of the group present. This made it super easy to merge all our work into the master branch which did break some things but all of us worked together to fix it. I had to fix some stuff on the navigation bar and on the search to allow us to modify our website into a car website. Adon came around to test all our stuff and suggested to me that we needed test classes to make sure that everything is working. That is what I will be working on this sprint. Once I have finished that I think I will help fix up some of the naming conventions for the website, as well as nailing down the CRUD app to keep the users inputs in the edit and restrict what the user can entre in a field (aka can’t put a year that doesn’t exist). </p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">17/9</h5>
      <p class="w3-text-grey">This was the first time I had tried to make a proper unit/feature test for html. First, I wanted to make up a test and make sure that all the example tests were working and the one I made was being recognized as a test. I had a lot of issues understanding the code behind unit testing and where each method was being called from and where it was going. It took a lot of trial and error just to get the firsts tests working with me and Adon researching and trying a bunch of fixes. In the end I had to re update the composer and uncomment a line in the php.ini file which is in the c drive which allows my tests to use sqllite. After all this trial and error, the first 2 example tests were working.</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">21/9</h5>
      <p class="w3-text-grey">This class I wanted to try and get my image upload test working but I knew I had picked maybe one of the more difficult ones to understand and get working. After a while of failing but making some progress in getting it to a state where just my code was the problem, I was able to start a new test where it would test authentication on our sign in page. After not too long this test was working and was displaying an output that showed that our auth was working well. Hopefully, all of this working through to get one test working will allow me to make a range of tests for each of the parts of our website that could quite easily fail. </p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">12/10</h5>
      <p class="w3-text-grey">This was our first day back after the holiday break where we started our 5th sprint. This sprint is where I am going to dedicate to getting all the little issues that we are having out of the way. For instance, I want to finalise the navigation bar with the dropdown menu inside as the hamburger model was not showing and the mobile view was not working the way I want it too. There are many other issues as well including naming conventions till being games instead of cars in some places, wrong colours or ugly displays that could be re sized to better fit the web page, a responsive footer that serves some purpose and more. I also just want to help my group more and try and work on some things together as I feel like I am only really working solo now whereas we should be helping each other. By the end of this lesson I had the nav bar working how I want too but there is just one issue I will need to fix for next time. </p>
      <p class="w3-text-grey">Desktop View</p>
      <img src="../public/img/mergerequest.png" alt="Sprint 3 Merge Request">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Sprint Outlines:</h1>
      <h5 class="w3-padding-32">Professional Achievement:</h5>

      <p class="w3-text-grey"></p>
    </div>

    <div class="w3-twothird">
      <h5 class="w3-padding-32">Technical Achievement:</h5>

      <p class="w3-text-grey"></p>
    </div>

    <div class="w3-twothird">
      <h1>Agile Evidence:</h1>
      <h5 class="w3-padding-32">Values:</h5>
      <p class="w3-text-grey"></p>
      
      <h5 class="w3-padding-32">Principles:</h5>
      <p class="w3-text-grey"></p>
      
      <h1>Personal Reflection:</h1>
      <h5 class="w3-padding-32">What did you do well?</h5>
      <p class="w3-text-grey"></p>
    
      <h5 class="w3-padding-32">What could you have done better?</h5>
      <p class="w3-text-grey"></p>
    
      <h5 class="w3-padding-32">What lessons did you learn?</h5>
      <p class="w3-text-grey"></p>
    
      <h5 class="w3-padding-32">What barriers did you encounter?</h5>
      <p class="w3-text-grey"></p>
    </div>
  </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Barnsj2</h1>
    <h1 class="w3-margin w3-xlarge">1000067926</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
 <p>Link to our Website: <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">link</a></p>
</footer>

</body>
</html>
