<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/myjava.js"></script>
    <title>Health and Witness website </title>

    </script>
<!--js--> 


</head>

<!-- <body onload="myFunction()"> -->
    <body>
        

<div class="main-div">


<?php include('function.php'); ?>

<?php include('top.php'); ?>




<!-- <div id="loading">
<div id='logos' class="logo">
<img src="images/logo.png" alt=""></div>

</div>  -->


<section>

<script>
    var calories=0;
    var calCount=0;
    var calInput=0;
    var calorycount=0;
</script>
<div class="trigger"></div>

<div class=" panel a" id="a">

<h4>
The <span id="int"> intuitive </span>health and fitness website for everyone 
</h4>

<p>
    Personalise your experience with us
</p>
  
</div>

<div class="panel c" id="c">
    <img src="images/landing1.png" alt="" width="400px" height="400px">
</div>
</section>

<div class="break">

</div>

<script>



// $(document).ready(function(){
//   $('#showmain').click(function(){
//     $('#foodily').css("transform","translate(0px,40px)");
//   });
// });

        gsap.to(".c", {
            scrollTrigger: {
                trigger: '.trigger',
                start: "top top",
                end: "bottom top",
                scrub: true,
              
            },
            y: -100,


        })
        gsap.to(".a", {
            scrollTrigger: {
                trigger: '.trigger',
                start: "top top",
                end: "bottom top",
                scrub: true,
            },
            y: 300,


        })


    </script>

<section  id="about">
<h4 class="about">
    About <span>Health and Welness</span>
</h4>
<div class="box-1">
    <div class="box-row1">
    <div class="box-sec1">
            <div class="div1">
                
            </div>

            <div class="text1">
                <div class="head1">
                Recipes to fit your calorie goals
                </div>
                <div class="subhead1">
                Select from a wide range of recipes to suit your calorie goals!
                </div>
            </div>
        </div>
        <div class="box-sec1">
            <div class="div1">
                
            </div>

            <div class="text1">
                <div class="head1">
                Recipes to fit your calorie goals
                </div>
                <div class="subhead1">
                Select from a wide range of recipes to suit your calorie goals!
                </div>
            </div>
        </div>
    </div>
    <div class="box-row1">
    <div class="box-sec1">
            <div class="div1">
                
            </div>

            <div class="text1">
                <div class="head1">
                Recipes to fit your calorie goals
                </div>
                <div class="subhead1">
                Select from a wide range of recipes to suit your calorie goals!
                </div>
            </div>
        </div>
        <div class="box-sec1">
            <div class="div1">
                
            </div>

            <div class="text1">
                <div class="head1">
                Recipes to fit your calorie goals
                </div>
                <div class="subhead1">
                Select from a wide range of recipes to suit your calorie goals!
                </div>
            </div>
        </div>
    </div>
</div>

</section>
    <script>
//         var preloader=document.getElementById('loading');
//         var logos =document.getElementById('logos');

//           function myFunction(){
//          setTimeout(removeLoader, 2000);
// }
  
// function removeLoader(){
//     preloader.style.display="none";
//     preloader.style.opacity=0;
//     logos.classList.add('fade');
// }



  



var text = [ "efficient ", "convenient ", "intuitive "];
var counter = 0;
var elem = document.getElementById("int");
var inst = setInterval(change, 2000);



function change() {
  elem.innerHTML = text[counter];
  counter++;
  if (counter >= text.length) {
    counter = 0;
    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
  }
}

$(document).ready(function() {
   $('[data-toggle="popover"]').popover({
      placement: 'top',
      trigger: 'hover'
   });
});

    </script>


</body>
</html>