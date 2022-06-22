<?php if(!isset($_SESSION)){
    session_start();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foodily.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Foodily</title>
</head>
<body>
<?php include('function.php')?>

<script>
    var calories=0;
    var calCount=0;
    var calInput=0;
    var calorycount=0;
</script>
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

<h1 class="main-header">
    Welcome To Foodily, <?php echo $_SESSION["user_first_name"]?>!
</h1>

<div class="sec-one">


<div class="text-one">
    <h5 class="start">
        Here's what you can expect:
</h5>
<ul>
    <li>
    Find recipes suited to your taste and preference of <span> cuisine </span
    </li>
    <li>
    Be mindful while enjoying, with a separate <span> calorie count </span> section
    </li>
</ul>
</div>

<div class="image-one">
    <img src="images/foodily1.png" alt="">
</div>

</div>

<div class="sec-two">



<div class="image-two">
    <img src="images/foodily2.png" alt="">
</div>

<div class="text-2">
    <h4 class="step-one">
        Step 1. 
    </h4>
     <p>Add your goal calories for the day </p>

     <p>Ps. you can take our <span>calory quiz</span> to determine your daily calory consumption </p>


    <h4 class="step-two"> Step Two 
    </h4> 
        <p>
            Sit back and browse through <span>easy recipes </span> and reach your health goals with us. 
        </p>
        </div>


</div>

<div class="pref-header">
    Pick your dietary preference
    </div>

<div class="preferences"id="preferences">
    
    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Vegan</a>
    </div>
    </div>

    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Dairy Free</a>
    </div>
    </div>

    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Gluten Free</a>
    </div>
    </div>

    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Nut free</a>
    </div>
    </div>

    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Keto</a>
    </div>
    </div>

    <div class="pref-box">
    <div class="pref-img">
<img src="images/food.png" alt="">
    </div>
    <div class="pref-text">
<a href="#">Paleo</a>
    </div>
    </div>
</div>

<!-- popular -->
<div class="header" id="header">
<div class="pref-header">
Popular on foodily this week
</div>

<div class="count">

<form id="form" onsubmit="return false;">
<div class="div">
    <label for="CaloryNo">Enter your daily calories:</label>
<input type="text" id="CaloryNo">
<input type="submit" onclick="savecalory()" class="submit" value="GO!">
</div>

</form>

</div>
</div>

<div id="extras" class="extras">
    <div class="pp">
    <div class="daily">
        Your daily calorie limit is :
        <span  id="limit">

        </span>
    </div>

    <div class="intakel">
        Your calorie intake today :
        <span  id="intake">
0
        </span>
    </div>
    </div>

    <div class="saved">
        View Saved recipes: 
        <button class="savebtn" onclick="opensaved()">

        
        <i class="fa fa-bookmark"></i>
        </button>
    </div>
</div>

<div id="extras1" class="extras1">
    <div class="pp">
    <div class="daily">
        Your daily calorie limit is :
        <span  id="limit1">

        </span>
    </div>

    <div class="intakel">
        Your calorie intake today :
        <span  id="intake1">
0
        </span>
    </div>
    </div>

    <div class="saved">
        View All recipes: 
        <button class="savebtn" onclick="closesaved()">

        
        <i class="fa fa-bookmark-o"></i>
        </button>
    </div>
</div>

<section id="calculator">
     <script>
        var calcTotalAuto = 0;
    

    </script>
<div class="calc-outer-wrap">

<div class="welcome">
    Welcome to the 
</div>
<div class="food-health">
    Foodily Health Quiz
</div>
<div class="info">
Hi <span>
<?php echo $_SESSION["user_first_name"]?>
</span>, let’s help you determine your calorie goals!
</div>
<div id="form-error" style="display:none;"></div>
<form class="calc-form" id="calc-form">
  <div class="form-fields">

    <div class="field-outer">
      <label for="distance" class="top-label">AGE:</label>
      <div class="field-items">
        <div class="field field-large abc" >         
          <input type="text" name="age" id="age" inputmode="numeric" pattern="[0-9]*">
        </div>
        </div>
        </div><!--  /.field-large -->
        
    <div class="field-outer">
        <label for="gender">GENDER:</label>
        <div class="field field-medium">
          <select name="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
                   
          </select>
          
        </div>
        </div><!--  /.field-small -->
     <!--  /.field-items -->
   <!--  /.field-outer -->

    <div class="field-outer">
      <label for="height" class="top-label">HEIGHT:</label>
      <div class="field-items">
        <div class="height">
          <input type="text" name="height_ft" id="height-ft" inputmode="numeric" pattern="[0-9]*">
          <label for="height-ft">FEET</label>
        
          <input type="text" name="height_in" id="height-in" inputmode="numeric" pattern="[0-9]*">
          <label for="height-in">INCHES</label>
        </div><!--  /.field -->   
      </div><!--  /.field-items -->
    </div><!--  /.field-outer -->

    <div class="field-outer">
      <label for="weight" class="top-label">WEIGHT:</label>
      <div class="field-items abcd">
        <div class="field field-large">
          <input type="text" name="weight" id="weight" inputmode="numeric" pattern="[0-9]*">
        </div><!--  /.field-large -->
        <div class="field field-small">
          <select name="weight_unit">
            <option value="lb">lb</option>
            <option value="kg">kg</option>
          </select>
        </div><!--  /.field-small -->
      </div><!--  /.field-items -->
    </div><!--  /.field-outer -->
   <div class="btn-wrap field-outer">
    <button class="form-submit">Calculate</button>
  </div>
  </div><!--  /.form fields -->


</form>

</div><!--  /.calc-outer-wrap -->

</section>



<section class="foodily" id="foodily">




    <div class="row ">

  
 

<script>
   
</script>
    <?php 

    $s="select *from foodily";
    $result=mysqli_query($cn,$s);
    $r=mysqli_num_rows($result);

    while($data=mysqli_fetch_array($result))
{

?>

<div class="col-md-3">
    <div class="card ">
        <img src="images/<?php echo "$data[4]";?> " height="450" alt="food image" class="card-img"> 
        <div class="card-img-overlay">
            <div class="recipe-spec recipe<?php echo "$data[0]";?>;">
            <div class="card-spec">
                <span> <img src="images/clock.png" height="24px" width="24px" alt=""><?php echo "$data[1]";?></span>
                <span> <img src="images/check.png" height="24px" width="24px"alt=""><?php echo "$data[2]";?></span>
                <span> <img src="images/cal.png" height="24px" width="24px"alt=""><?php echo "$data[3]";?> cal</span>
            </div>
            <h3 class="card-title">
            <?php echo "$data[5]";?>
            </h3>
             <p class="card-text"><?php echo "$data[6]";?></p>

             <?php 
                    if($data
                    ['Counter']=="0") 
                    {
                        ?>
<div class="bookmark-open">
<a href="activate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctions(this)" class="fa fa-bookmark-o aria-hidden="true""></i> </a>
</div>              
<?php
} 

                     
                    else 
                    {
                        ?>
<div class="bookmark-black">
<a href="deactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctiond(this)" class="fa fa-bookmark aria-hidden="true""></i> </a> 
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
            <button  class="plus" id="<?php echo "$data[7]";?>">
    <i class="fa fa-plus"></i>
            </button>


           
    </div>
</div>
</div>
<?php
}
?>





</div>     <!--end of row
<!-- end of foodily -->
</section>


<section class="foodily1" id="foodily1">




    <div class="row ">

<?php 

$s="select *from foodily where Counter=1 ";
$result=mysqli_query($cn,$s);
mysqli_close($cn);


while($data=mysqli_fetch_array($result))
{

?>

<div class="col-md-3">
<div class="card ">
    <img src="images/<?php echo "$data[4]";?> " height="450" alt="food image" class="card-img"> 
    <div class="card-img-overlay">
        <div class="recipe-spec recipe<?php echo "$data[0]";?>;">
        <div class="card-spec">
            <span> <img src="images/clock.png" height="24px" width="24px" alt=""><?php echo "$data[1]";?></span>
            <span> <img src="images/check.png" height="24px" width="24px"alt=""><?php echo "$data[2]";?></span>
            <span> <img src="images/cal.png" height="24px" width="24px"alt=""><?php echo "$data[3]";?> cal</span>
        </div>
        <h3 class="card-title">
        <?php echo "$data[5]";?>
        </h3>
         <p class="card-text"><?php echo "$data[6]";?></p>

         <?php 
                if($data
                ['Counter']=="0") 
                {
                    ?>
<div class="bookmark-open">
<a href="activate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctions(this)" class="fa fa-bookmark-o aria-hidden="true""></i> </a>
</div>              
<?php
} 

                 
                else 
                {
                    ?>
<div class="bookmark-black">
<a href="deactivate.php?id=<?php echo "$data[0]"?>" > <i onclick="myFunctiond(this)" class="fa fa-bookmark aria-hidden="true""></i> </a> 
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
        <button  class="plus" id="<?php echo "$data[7]";?>">
<i class="fa fa-plus"></i>
        </button>


       
</div>
</div>
</div>
<?php
}

?>





</div>     

</section>

<div class="calc" id="calc">
Or customise your daily calory count : 
<button class="float " id="float" onclick="hidemain()" >
    <i class= "fa fa-calculator my-float"></i>
</button>
</div>

</section>


</div>

<div class="checkout" id="checkout">
<h4>
Click here to checkout our workout section , just for you <a href="bodily.php"><i class="fa fa-bicycle"></i></a></h4></div>
<script >

var mainpage=document.getElementById("foodily");
var calcpage=document.getElementById("calculator")
var calcbutton=document.getElementById("float");
var header=document.getElementById("header");
var extras=document.getElementById("extras");
var extras1=document.getElementById("extras1");
var foodily=document.getElementById("foodily");
var foodily1=document.getElementById("foodily1");
var limit=document.getElementById("limit");
var limit1=document.getElementById("limit1");
var intake=document.getElementById("intake");
var intake1=document.getElementById("intake1");
var calc=document.getElementById("calc");
var checkout=document.getElementById("checkout");

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

function hidemain(){
        mainpage.style.display="none"
        calcpage.style.display="block"
        header.style.display="none"
        extras.style.display="none"
        calc.style.display="none"
        checkout.style.display="none"

    }
    
    

 

var caltotal = 0;
(function () {
    const form = document.getElementById('calc-form');
    console.log(form)
    const errors = document.getElementById('form-error');

    /**
     * Display a form validation error
     *
     * @param   {String}  msg  The validation message
     * @return  {Boolen}       Returns false
     */
    function errorMessage(msg) {
        errors.innerHTML = msg;
        errors.style.display = '';
        return false;
    }

    /**
     * Display the calculation results
     *
     * @param   {Integer}  calories   The calories burned
     * @param   {Integer}  distance   The distance run
     * @param   {String}   unit       The distance unit (miles or kilometers)
     * @param   {Integer}  burnRate   The calories per distance burn rate
     * @param   {Integer}  calsPerHr  The calories burned per hour
     */


    /**
     * Handle form submit
     */
    function submitHandler(e) {
        e.preventDefault();

        // Age
        let age = parseFloat(form.age.value);
        //let unit = form.distance_unit.value;
        if (isNaN(age) || age < 0) {
            return errorMessage('Please enter a valid age');
        }

        // Height
   

            let heightFeet = parseFloat(form.height_ft.value);
            if (isNaN(heightFeet) || heightFeet < 0) {
                return errorMessage('Please enter a valid Height in feet or centimeters');
            }
            let heightInches = parseFloat(form.height_in.value);
            if (isNaN(heightInches) || heightInches < 0) {
                heightInches = 0;
            }
            let heightCM = (2.54 * heightInches) + (30.4 * heightFeet)

        

        let weight = parseFloat(form.weight.value);
        if (isNaN(weight) || weight < 0) {
            return errorMessage('Please enter a valid weight');
        }

        if (form.weight_unit.value == 'lb') {
            weight = 0.453592 * weight;
        }


        if (form.gender.value == 'Female') {
            //females =  655.09 + 9.56 x (Weight in kg) + 1.84 x (Height in cm) - 4.67 x age   
            calories = 655.09 + (9.56 * weight) + (1.84 * heightCM) - (4.67 * age);
        } else {
            calories = 66.47 + (13.75 * weight) + (5 * heightCM) - (6.75 * age);
        }

        // Display results
        console.log(calorycount)
        calInput=calories;
        limit.innerHTML= calInput;
        limit1.innerHTML= calInput;
        mainpage.style.display="block"
    header.style.display="flex"
    extras.style.display="flex"
   calc.style.display="block"
   calcpage.style.display="none"
   checkout.style.display="block"


    }

   

    // Add Event Listeners
    form.addEventListener('submit', submitHandler);


})();







    



var calc1=document.getElementById("calc1");
document.getElementById ("calc1").addEventListener ("click", myFunctioncalc1);

function myFunctioncalc1() {
    calCount=calCount+456;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
        else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}



document.getElementById ("calc2").addEventListener ("click", myFunctioncalc2);

function myFunctioncalc2() {
    
    calCount=calCount+206;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
        else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}
document.getElementById ("calc3").addEventListener ("click", myFunctioncalc3);

function myFunctioncalc3() {
    calCount=calCount+316;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
        else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}
document.getElementById ("calc4").addEventListener ("click", myFunctioncalc4);

function myFunctioncalc4() {
    calCount=calCount+286;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
        else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}

document.getElementById ("calc5").addEventListener ("click", myFunctioncalc5);

function myFunctioncalc5() {
    calCount=calCount+126;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
        else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}
document.getElementById ("calc6").addEventListener ("click", myFunctioncalc6);

function myFunctioncalc6() {
    calCount=calCount+116;
    intake.innerHTML=calCount;
    intake1.innerHTML=calCount;
        console.log(calCount)
        if(calInput==0){
            alert('Please enter your daily limit of calorie intake')
        }
       else if(calCount>calInput)
        {
            alert('Your daily limit is reached !')
        }
}

var form=document.getElementById("form")

function savecalory(){
     calInput = document.getElementById("CaloryNo").value;
    console.log(calInput)
    limit.innerHTML=calInput
    limit1.innerHTML=calInput
    alert('Okay! we have noted your limit')
    form.style.display="none"


}





    </script>


</body>
</html>