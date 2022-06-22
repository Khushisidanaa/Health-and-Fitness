<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
</head>
<body>
    <script>
        var calcTotalAuto = 0;
let calories = 0;

    </script>
<div class="calc-outer-wrap">
<div id="form-error" style="display:none;"></div>
<form class="calc-form" id="calc-form">
  <div class="form-fields">

    <div class="field-outer">
      <label for="distance" class="top-label">Age:</label>
      <div class="field-items">
        <div class="field field-large">         
          <input type="text" name="age" id="age" inputmode="numeric" pattern="[0-9]*">
        </div><!--  /.field-large -->
        
        <div class="field field-medium">
          <select name="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
                   
          </select>
          
        </div><!--  /.field-small -->
      </div><!--  /.field-items -->
    </div><!--  /.field-outer -->

    <div class="field-outer">
      <label for="height" class="top-label">Height:</label>
      <div class="field-items">
        <div class="field">
          <input type="text" name="height_ft" id="height-ft" inputmode="numeric" pattern="[0-9]*">
          <label for="height-ft">feet</label>
        </div><!--  /.field -->
        <div class="field">
          <input type="text" name="height_in" id="height-in" inputmode="numeric" pattern="[0-9]*">
          <label for="height-in">inches</label>
        </div><!--  /.field -->
       <div class="field">
          <input type="text" name="height_cm" id="height-cm" inputmode="numeric" pattern="[0-9]*">
          <label for="height-cm">or centimeters</label>
        </div><!--  /.field -->        
      </div><!--  /.field-items -->
    </div><!--  /.field-outer -->

    <div class="field-outer">
      <label for="weight" class="top-label">Your weight:</label>
      <div class="field-items">
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
    <button id="retry" onclick="reset()">Retry</button>
  </div>
  </div><!--  /.form fields -->


</form>
<div id="results">

</div>
</div><!--  /.calc-outer-wrap -->
<script src="calculator.js"></script>
<a href="main.php">Go back</a>
</body>
</html>