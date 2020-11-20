<!DOCTYPE html>
<html lang="en">
<title>After Sprints</title>
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
    <h1>After the Sprints had finnished:</h1>
      <h5 class="w3-padding-32">17-11</h5>
      <p class="w3-text-grey">This lesson was the first lesson in a while where he has not had a sprint as we had finished them all, but even then, we were still touching up our website. But before we did some touch ups, I was working on my portfolio which I plan to do in Laravel and then deploy on MariaDB for ease of access. But my work was cut short after Adon had had a meeting with a member of our group and gave us a list of issues that he had found whist looking over our deployed website. He had also told our group member that he did not expect us to fix these issues as it was so close to the end of the semester. Both of my teammates were ready to throw in the towel but I suggested that we still had an hour left of this session, why don’t we all crowd around my computer and get these changes done for both our client, and so we have some more stuff it talk about on our portfolio. So, for the rest of the lesson I was looking up fixes, adding the fixes whilst also getting help and suggestions from my group members. In the end we got all the changes completed.</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">19/11</h5>
      <p class="w3-text-grey">This was our final lesson where every group presented their website in front of the class so that we could show off what features we had completed over the sprints. This is also where both Adon, Grayson as well as the class could give us some feedback on our website and give them some feedback and ask questions about there website. In the end we had another list that we had recorded from the feedback to complete by then end of the semester. We still had an hour in class so once again we crowded around my computer and I was looking up fixes for our issues and implementing them as my team gave me suggestions and feedback. In the end we got all of our changes implemented including appropriate error messages, redirecting errors so that we don’t go to a Laravel or Heroku error page, better prompts for users, saving the users information if we refresh the page and little changes here and there. The only fix that we couldn’t do is the groups feature. This is because the groups feature was quite a large feature that was being worked on by another team member during our final few sprints. In the end he could not get it completely finished and working how he wanted too, but he got it to the point were parts of it were working, an  the parts he couldn’t fix he tried to make as finished as possible without outright removing them. With only two days left until our hand in as well as working on our portfolio and other exams and assignments sue in at the same time we decided that we could not entirely fix this but we would deploy what we had done already. And with that done we were at the end of the semester.</p>
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
