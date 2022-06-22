
<?php if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bodily.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodily</title>
</head>
<body>
<?php include('function.php')?>




<div class="navs">


<div class="logo">
<a href="main.php">
    <img src="images/logoblacktext.png" alt="">
  </a>
</div>


<button class="logout">
    <a href="logout.php">Log Out</a>
</button>
</div>

    <div class="white-section">
        <h1>
            Welcome to Bodily,<?php echo $_SESSION["user_first_name"]?>!
        </h1>
    <div class="image-holder1">
        <img src="images/bodily1.png" alt="">
    </div>
    </div>
<div class="bodilyinfo">
    <div class="heading-left">
        We care for your body,
    </div>
    <div class="heading-right">
        just as much as you do 🙌🏻
    </div>

    <div class="main-heading">
        Here's what you can expect:
    </div>
    <ul>
        <li>
        Fitness blogs across a plethora of topics 
        </li>
        <li>
        Build a fitness regime based on your prefered form of activity
        </li>
        <li>
        Enjoy yourself while smashing your fitness goals
        </li>
    </ul>

    <div class="workingout">
        <img src="images/bodily2.png" alt="">
    </div>
    </div>
    
  
    <div class="featured-articles">
        <h6>
        Featured articles
        </h6>



<div class="features-row">
        
        
        <?php 

$s="select *from features";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{

?>

<div class="features-card">
<div class="features-img">
    <img src="images/<?php echo "$data[1]";?> " height="140"  width="140"alt="features image" > 
</div>
    <div class="features-text">
        <h3 class="features-title">
        <?php echo "$data[2]";?>
        </h3>
         <p class="features-subtext"><?php echo "$data[3]";?></p>
        </div>
</div>
<?php
}
?>
         
    </div>


    <div class="working-out" id="header">
        <h6>
            Workout blogposts highlight !
        </h6>
    </div>
    
    <div id="extras" class="extras">
   
    <div class="saved">
        View Saved videos: 
        <button class="savebtn" onclick="opensaved()">

        
        <i class="fa fa-bookmark"></i>
        </button>
    </div>
</div>

<div id="extras1" class="extras1">
   

    <div class="saved">
        View All videos: 
        <button class="savebtn" onclick="closesaved()">

        
        <i class="fa fa-bookmark-o"></i>
        </button>
    </div>
</div>
    <section class="foodily" id="foodily">




    <div class="row ">

  
 

<script>
   
</script>
    <?php 

    $s="select *from bodily";
    $result=mysqli_query($cn,$s);
    $r=mysqli_num_rows($result);

    while($data=mysqli_fetch_array($result))
{

?>

<div class="col-md-3">
    <div class="card ">
        <img src="images/<?php echo "$data[3]";?> " height="450" alt="food image" class="card-img"> 
        <div class="card-img-overlay">
            <div class="recipe-spec recipe<?php echo "$data[0]";?>;">
            <div class="card-spec">
                <span> <img src="images/clock.png" height="24px" width="24px" alt=""><?php echo "$data[1]";?></span>
                <span> <img src="images/check.png" height="24px" width="24px"alt=""><?php echo "$data[2]";?></span>
            </div>
            <h3 class="card-title">
            <?php echo "$data[4]";?>
            </h3>
             <p class="card-text"><?php echo "$data[5]";?></p>

             <?php 
                    if($data
                    ['Counter']=="0") 
                    {
                        ?>
<div class="bookmark-open">
<a href="bactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctions(this)" class="fa fa-bookmark-o aria-hidden="true""></i> </a>
</div>              
<?php
} 

                     
                    else 
                    {
                        ?>
<div class="bookmark-black">
<a href="bdeactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctiond(this)" class="fa fa-bookmark aria-hidden="true""></i> </a> 
</div>
<?php
                    }

                    ?>
        
       

        <script>
            function myFunctions(x) {
  x.classList.toggle("fa fa-bookmark");

  function myFunctiond(x) {
  x.classList.toggle("fa fa-bookmark-o");
}
        </script>
           
        </div>
        <button  class="plus"> <?php echo "$data[7]";?>
        </button>


           
    </div>
</div>
</div>
<?php
}
?>





</div>   
</section>


<section class="foodily1" id="foodily1">




 <div class="row ">

<?php 

$s="select *from bodily where Counter=1 ";
$result=mysqli_query($cn,$s);


while($data=mysqli_fetch_array($result))
{

?>

<div class="col-md-3">
<div class="card ">
    <img src="images/<?php echo "$data[3]";?> " height="450" alt="food image" class="card-img"> 
    <div class="card-img-overlay">
        <div class="recipe-spec recipe<?php echo "$data[0]";?>;">
        <div class="card-spec">
            <span> <img src="images/clock.png" height="24px" width="24px" alt=""><?php echo "$data[1]";?></span>
            <span> <img src="images/check.png" height="24px" width="24px"alt=""><?php echo "$data[2]";?></span>
        </div>
        <h3 class="card-title">
        <?php echo "$data[4]";?>
        </h3>
         <p class="card-text"><?php echo "$data[5]";?></p>

         <?php 
                if($data
                ['Counter']=="0") 
                {
                    ?>
<div class="bookmark-open">
<a href="bactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctions(this)" class="fa fa-bookmark-o aria-hidden="true""></i> </a>
</div>              
<?php
} 

                 
                else 
                {
                    ?>
<div class="bookmark-black">
<a href="bdeactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctiond(this)" class="fa fa-bookmark aria-hidden="true""></i> </a> 
</div>
<?php
                }

                ?>
    
   

    <script>
        function myFunctions(x) {
x.classList.toggle("fa fa-bookmark");

function myFunctiond(x) {
x.classList.toggle("fa fa-bookmark-o");
}
    </script>
       
    </div>
        <button  class="plus"> <?php echo "$data[7]";?>
        </button>


       
</div>
</div>
</div>
<?php
}

?>






</div>     

</section>


<script>
var foodily=document.getElementById("foodily");
var foodily1=document.getElementById("foodily1");

function opensaved(){
    foodily.style.display="none";
    foodily1.style.display="block";
    extras1.style.display="flex"
    extras.style.display="none"
}

function closesaved(){
    foodily.style.display="block";
    foodily1.style.display="none";
    extras.style.display="flex";
    extras1.style.display="none"
}
</script>

<div class="workout">
<h6>
Here is a video library to get you started </h6>
</div>

<section class="foodily" id="foodily">




<div class="row ">

<?php 

$s="select *from workout";
$result=mysqli_query($cn,$s);


while($data=mysqli_fetch_array($result))
{

?>

<div class="col-md-3">
<div class="card ">
<iframe  src="<?php echo "$data[1]";?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="card-body">
   
    <h3 class="card-title">
    <?php echo "$data[2]";?>
    </h3>
     <p class="card-text"><?php echo "$data[3]";?></p>
   
</div>
    <button  class="plusi"> <?php echo "$data[4]";?>
    </button>


   

</div>
</div>
<?php
}

?>






</div>     

</section>

<div class="bonus">
Bonus!</div>
<div class="bonus1">
Here are gyms and fitness centers near you!</div>

<div id="map"></div>


<script>
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: { lat: 19.038, lng: 73.07},
  });

  setMarkers(map);
}

const beaches = [
  ["Physc Gym ", 19.050054347486878, 73.07316822773767, 4],
  ["Cult Fit",19.035270398965213, 73.06408115264686, 5],
  ["Revamp", 19.05263413750612, 73.07520381622773, 3],
  ["11:11 Fitness", 19.07222084977229, 73.07443134010015, 2],
];

function setMarkers(map) {
  // Adds markers to the map.
  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.
  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  const image = {
    url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32),
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

  for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];

    new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3],
    });
  }
}</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBETVq9yUY560YZIvaU5WDHKSeuZtrOIh8&callback=initMap" async defer></script>

<div class="checkout">
<h4>
Click here to checkout our food section , just for you <a href="foodily.php"><i class="fa fa-cutlery"></i></a></h4></div>

<br><br><br><br>
</body>
</html>