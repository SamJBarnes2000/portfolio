<!DOCTYPE html>
<html lang="en">
<title>Sprint 5</title>
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
    <a href="{{url('/')}}" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{url('/sprint1')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 1</a>
    <a href="{{url('/sprint2')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 2</a>
    <a href="{{url('/sprint3')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 3</a>
    <a href="{{url('/sprint4')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 4</a>
    <a href="{{url('/sprint5')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 5</a>
    <a href="{{url('/sprint6')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sprint 6</a>
    <a href="{{url('/aftersprints')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">After Sprints</a>
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
      <h5 class="w3-padding-32">12/10</h5>
      <p class="w3-text-grey">This was our first day back after the holiday break where we started our 5th sprint. This sprint is where I am going to dedicate to getting all the little issues that we are having out of the way. For instance, I want to finalise the navigation bar with the dropdown menu inside as the hamburger model was not showing and the mobile view was not working the way I want it too. There are many other issues as well including naming conventions till being games instead of cars in some places, wrong colours or ugly displays that could be re sized to better fit the web page, a responsive footer that serves some purpose and more. I also just want to help my group more and try and work on some things together as I feel like I am only really working solo now whereas we should be helping each other. By the end of this lesson I had the nav bar working how I want too but there is just one issue I will need to fix for next time. </p>
      <p class="w3-text-grey">Desktop View</p>
      <img src="{{asset('img/desktopview.png')}}" alt="Desktop View">
      <p class="w3-text-grey">Mobile View</p>
      <img src="{{asset('img/mobileview.png')}}" alt="Mobile View">
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">15/10</h5>
      <p class="w3-text-grey">After I completed some CSS and touch up stuff including the hamburger model, I wanted to do something that I’ve never really done before and through the authentication controller make a way for people to upload a profile image that they can change as they wish. This took a lot of in class researching to be able to figure out how to not only make the profile image and get it to upload but get it to work with our already created controller for authentication. This means that as a software engineer, I would need to pick apart someone else’s code and change it to fit my own, and in the end I got it to work with each logged in user.</p>
      <p class="w3-text-grey">User with default image</p>
      <img src="{{asset('img/defaultuser.png')}}" alt="Default Profile Picture">
      <p class="w3-text-grey">User Wanting to add an Image</p>
      <img src="{{asset('img/adduser.png')}}" alt="Profile Edit Page">
      <p class="w3-text-grey">User with new Image</p>
      <img src="{{asset('img/newuser.png')}}" alt="New Profile Picture">
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">19/10</h5>
      <p class="w3-text-grey">-Labour Day</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">29/10</h5>
      <p class="w3-text-grey">After I had completed to profile picture upload I wanted to have another try at creating the unit test for uploading an image, but this time use it for my profile picture upload as I understood this code much more now that I had actually had a go at creating the code behind the test, unlike the authorisation test where I did not work on the code that I tested on. In the end I ran out of time for the sprint as we had already missed a day due to labour day so I had to merge with my other workmate where he was having some issues with both the composer and the migrations of the tables but I was able to help him out and get his website back and displaying again.</p>
      <p class="w3-text-grey">Unfinished Code</p>
      <img src="{{asset('img/uploadcode.png')}}" alt="Upload Image Test Code (Not Working)">
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
      <p class="w3-text-grey">For the first part of this print I was fixing up a lot of issues that myself and the other members of the group had missed including some naming conventions, basic CSS, scripts and styles that weren’t in the right files etc. I also fixed my hamburger model and nav bar which I started during the first sprint as I did not want to leave any uncompleted code by the end of the project.</p>
    </div>

    <div class="w3-twothird">
      <h5 class="w3-padding-32">Technical Achievement:</h5>
      <p class="w3-text-grey">This sprint I made up a way for users to upload a profile image there would be a default image that every user is given but they are now able to change it to what ever they would like to customize their profile. I also did this to try and complete my test for my image upload as this time I will have worked with my own code so I get a greater understanding of how the test will work. </p>
    </div>

    <div class="w3-twothird">
      <h1>Agile Evidence:</h1>
      <h5 class="w3-padding-32">Principles:</h5>
      <p class="w3-text-grey">2. Welcome changing requirements, even late in development: working on my own image upload will hopefully allow me to change up my test in the hopes of getting it working.</p>
      <p class="w3-text-grey">9. Continuous attention to technical excellence and good design enhances agility: constantly fixing up little details on the site will continuously move the website forward towards a completed product.</p>
      
      <h1>Personal Reflection:</h1>
      <h5 class="w3-padding-32">What did you do well?</h5>
      <p class="w3-text-grey">I am happy with my work on the profile image upload as it was more difficult than I first anticipated which meant I needed to do my research and figure it out on my own which did not take me as long as I thought I would. </p>
    
      <h5 class="w3-padding-32">What could you have done better?</h5>
      <p class="w3-text-grey">I am still having issues with my testing on the image upload, however. I think this is holding me back as I am reluctant to start new work as I want to finish what I started first. As our project is nearly coming to an end, I will not be taking any large task, but my time will be spent on the test and any touch ups that are needed.</p>
    
      <h5 class="w3-padding-32">What lessons did you learn?</h5>
      <p class="w3-text-grey">I learn a new skill in uploading images which I needed as in other classes I have had issues with working with images so this will be a useful skill to know for the future.</p>
    
      <h5 class="w3-padding-32">What barriers did you encounter?</h5>
      <p class="w3-text-grey">The test continues to be a barrier which I cannot quite get over. Besides that, there was more researching that needed to be done for the image upload that I thought there would be but, in the end,, I was able to complete it. </p>
    </div>
  </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Barnsj2</h1>
    <h1 class="w3-margin w3-xlarge">1000067926</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
 <p>Link to our Website: <a href="{{url('http://share-your-car.herokuapp.com/cars/main')}}" target="_blank">http://share-your-car.herokuapp.com/cars/main</a></p>
</footer>

</body>
</html>
