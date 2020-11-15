<!DOCTYPE html>
<html lang="en">
<title>Sprint 1</title>
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
      <h5 class="w3-padding-32">31/8</h5>
      <p class="w3-text-grey">This was the first day of our third sprint where we set ourselves a new set of goals to complete by the end of the sprint. Before I wanted to get into any new stuff, I wanted to first fix the issues with the layout of the website and the navigation bar. The layout I had to fix by getting one of our teammates to send me over his layout.blade.php file which for some reason he was not able to push to master, once I had that file it was just a matter of putting that as well as the background image and the CSS files in the master branch. Next, I got a hand from Adon to figure out why the navigation bar was not displaying properly. He used the inspect element of the web page to find out where the errors where occurring and he was making fixes in the webpage. I had no idea you could do this so him showing me this will help me in my work or adding more to the layout of the website in the future. But for now, this allowed me to fix up the nav bar and push it to the master so each member can navigate around our webpages with ease. </p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">4/9</h5>
      <p class="w3-text-grey">this class was spent on finally fixing up the navigation bar and introducing the hamburger model as well so when the website was on  a mobile device or on a smaller monitor all links would be put in the hamburger models navigation bar. At this point the navigation bar is looking exactly how I want it but there are still some issues with the hamburger model that will not take long to fix. Only two of us were here today and only one of the people that was not here let us know what happened but only after the class was over. I think we may need to work on letting each other know when we won’t be there so we can prepare what we need to individually do to keep us on track.</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">7/9</h5>
      <p class="w3-text-grey">This was the class where I finally had to bite the bullet and modify the entire app.css and layout.css file to be into one style.less file. My main goal was to change all the colours in the files into a variable that can be used by any teammate for their own CSS changes. It took nearly the entire 2 hours to go through the more than 10,000 lines and assign each colour in the document to a value. In the end there were around 30 different values which I did shrink down as the CSS file did have a lot of very minor changes between values (these could be background variants or border variants). This was also the lesson where our big twist came out where we were to change our entire website from a games review website to a car view website. This came as a bit of a shock but the more we discussed it the better we felt about it. We would have to change our migrations for our tables and values for our tables which will be the biggest hassle, but the rest should be fine. Since I am working on layouts, I think I can help with just re-naming a lot of the values in our folder so we can move on as quick as possible.</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">10/9 </h5>
      <p class="w3-text-grey">From the previous lesson I had a fully completed style.less file but it was currently not working. I have done less in the past, but I needed to spend a bit of time doing some research on how to load in the less.js file and how to order everything. Once I did some research, I had a fully set up less file and the website was looking good. Once I finished this I crated a merge request as this was the last day of our third sprint and I just spent the rest of the lesson helping out our teammates, one with creating a new page to view the cars and another with fixing issues with the database.</p>
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
