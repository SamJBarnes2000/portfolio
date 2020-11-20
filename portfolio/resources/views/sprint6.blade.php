<!DOCTYPE html>
<html lang="en">
<title>Sprint 6</title>
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
      <h5 class="w3-padding-32">2/11</h5>
      <p class="w3-text-grey">Today was the start of our final sprint that we will have for our car review website. By the time that this sprint is over I want to have the avatar upload test finished as I believe that once I finish it I will have completed a task that previously in the project I could not complete but now I believe I have the knowledge on how to overcome the task and finish it for the client. Besides that, I would like to just go over the website and try and fix any changes that we may have missed in our goings over once we had merged everything. Besides all of that this class I also spent some time helping another group member that had not pushed to master the previous sprint get all of his stuff merged and updated as he had some issues that I knew how to resolve.  </p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">5/11-9/11</h5>
      <p class="w3-text-grey">These lessons were spent just going over the website and fixing up a lot of changes that we may have missed. This includes this like changing all our URLs to routes to keep consistency, fixing our authorization redirections, fixing our routes, naming conventions, crud controller duplicates, CSS for tables and sizing and more. I thought I would take these jobs as I knew the other group members were working on their own software so I assumed that their time would be taken up by that. Next lesson will be much of the same as I do not want our website having any bugs.</p>
    </div>
  </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-32">12/11</h5>
      <p class="w3-text-grey">This would be the last in class lesson that we would have to finish our project before we present it to the client/class. I made the call to make sure everyone had pushed their work to their own branch and one by one we created a merge request on git hub and pushed all our work together. Once we completed that and we had all of our work on the master branch we huddled around my computer and tested all of our work, gave each other feedback and I would fix up the things that we pointed out. That could either be bad CSS, redirecting to the right sites, making sure the stuff we completed this sprint and previous sprints worked with others work, and then just some final touch ups. Once we did this the two other members deployed our website, one to Heroku and the other to MariaDB while I did another sweep of the website and then helped them out with commands. In the end I think we have an aesthetically pleasing website with quite a lot of functionality, and I don’t think a single project we worked on does not work. I am sure there will be some issues buried deep inside the website but on the surface, I believe we have done a pretty good job.</p>
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
      <p class="w3-text-grey">During the last few lessons, we worked very well as a team. There was a lot of communication between us and we all understood what we needed to do, and we got our head stuck in and done it. Besides that, whenever we had an issue with something another member had done, we were very excepting of making changes that as a group we felt fit.</p>
    </div>

    <div class="w3-twothird">
      <h5 class="w3-padding-32">Technical Achievement:</h5>
      <p class="w3-text-grey">Besides merging all our work together, the technical achievements were just touch ups to the website. A lot of that was figuring out why some CSS was laid out the way that it was and finding out how we could change them to the way we wanted. For example, our tables were not laid out how we wanted them with the grid style but after a while we figured it out by removing an overlapping colour for another component not associated with the table. </p>
    </div>

    <div class="w3-twothird">
      <h1>Agile Evidence:</h1>
      <h5 class="w3-padding-32">Values:</h5>
      <h5 class="w3-padding-32">Principles:</h5>
      <p class="w3-text-grey">11. The best architectures, requirements, and designs emerge from self-organizing teams: when we were all working together and giving each other feedback and suggestions we were able to fly through the work faster then we would have done by doing it separately.</p>
      <p class="w3-text-grey">4. Business people and developers must work together daily throughout the project & 6. The most efficient and effective method of conveying information to and within a development team is face-to-face conversation: this entire sprint was spent talking with each other and trying to make sure we had created the best website we could. We tired to get the most out of our website with the amount of time we had left for face to face work.</p>
      
      <h1>Personal Reflection:</h1>
      <h5 class="w3-padding-32">What did you do well?</h5>
      <p class="w3-text-grey">I believe that I worked well in a group and took a lot of responsibilities in making sure that we were all at the right stages to push and pull our work to avoid conflicts with each other. I also made sure that we got an equal amount of code reviewing as one member of our group was trying to do them all, but I made sure we got an even and fair amount of workload. Besides that, I was very efficient at implementing anyone’s suggestions and touch ups when we were huddled around my pc to keep the whole process flowing.</p>
    
      <h5 class="w3-padding-32">What could you have done better?</h5>
      <p class="w3-text-grey">I think I could have done something better with my time when the two other group members where tying to deploy our website on different platforms. I spent my time hovering between the two and trying to help out where I could but even though I did help out I feel my time could have been better spent either fixing up to git hub or doing other checks on the website.</p>
    
      <h5 class="w3-padding-32">What lessons did you learn?</h5>
      <p class="w3-text-grey">I learnt to be very contempt and pleased with the work that you have completed because I always felt throughout each sprint that I should have been doing more work then I should have, but when I look at our completed website I see that we have all done quite a lot of work on it and the work load was spread out quite evenly between each work member which I am really pleased with.</p>
    
      <h5 class="w3-padding-32">What barriers did you encounter?</h5>
      <p class="w3-text-grey">Besides from the time that I could of spent better when the others were working on the deployment, there was not a whole lot of intensive, confusing work that we had to do this sprint which is why I think the whole sprint moved really smoothly with no real confusing barriers we have to overcome. </p>
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
