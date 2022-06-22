<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="project.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Workout</title>
</head>
<body>
<?php include('top.php'); ?>

<script>
    $(document).ready(function(){
    $(".type2").click(function(){
        $(".workout-content").hide();
        $(".workout-content2").hide();
        $(".workout-content3").hide();
        $(".workout-content1").show();
    });
});
$(document).ready(function(){
    $(".type1").click(function(){
        $(".workout-content1").hide();
        $(".workout-content2").hide();
        $(".workout-content3").hide();
        $(".workout-content").show();
    });
});
$(document).ready(function(){
    $(".type3").click(function(){
        $(".workout-content1").hide();
        $(".workout-content").hide();
        $(".workout-content3").hide();
        $(".workout-content2").show();
    });
});
$(document).ready(function(){
    $(".type4").click(function(){
        $(".workout-content1").hide();
        $(".workout-content").hide();
        $(".workout-content2").hide();
        $(".workout-content3").show();
    });
});
</script>
    <div class="workout">
        <button class="type1">
            Type1
        </button>
        <button class="type2">
            Type 2 
        </button>
        <button class="type3">
            Type 3
        </button>
        <button class="type4">
            type4
        </button>
    </div>
<div class="wrapper">
    <div class="workout-content">
        <div class="video">
        <iframe width="400" height="200" src="https://www.youtube.com/embed/fvFQU6NvJo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            
        <iframe width="400" height="200" src="https://www.youtube.com/embed/fvFQU6NvJo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            
        </div>
        <div class="video">
            
        </div>
        <div class="video">
</div>
<div class="video">
            
        
        </div>
    </div>
    <div class="workout-content1">
        XYZ
    </div>
    <div class="workout-content2">
        XYZ
    </div>
    <div class="workout-content3">
        XYZ
    </div>
    </div>



    
</body>
</html>