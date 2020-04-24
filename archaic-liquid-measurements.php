<?php
$pageTitle = "Arcane Liquid Converter";
include_once("includes/header.php");

include_once("includes/functions.php");

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if(!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convert_volume($fromValue, $fromUnit, $toUnit);
}

?>
  <div id="main-content">

    <h1>Outdated Irish Length Converter</h1>

    <form action="" method="post">
      
      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>">&nbsp;
        <select name="fromUnit">
          <option value="buckets"<?php if($fromUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
          <option value="butts"<?php if($fromUnit == 'butts') { echo " selected"; } ?>>Butts</option>
          <option value="firkins"<?php if($fromUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
          <option value="hogsheads"<?php if($fromUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
          <option value="pints"<?php if($fromUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          <option value="imperial gallons"<?php if($fromUnit == 'imperial gallons') { echo " selected"; } ?>>Imperial Gallons</option>
        </select>
      </div>
          
      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php echo $toValue; ?>">&nbsp;
        <select name="toUnit">
          <option value="buckets"<?php if($toUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
          <option value="butts"<?php if($toUnit == 'butts') { echo " selected"; } ?>>Butts</option>
          <option value="firkins"<?php if($toUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
          <option value="hogsheads"<?php if($toUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
          <option value="pints"<?php if($toUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          <option value="imperial gallons"<?php if($toUnit == 'imperial gallons') { echo " selected"; } ?>>Imperial Gallons</option>   
        </select>
      </div>
          
      <input type="submit" name="submit" value="Submit">
    </form>

    <br>
    <a href="index.php">Return to menu</a>
      
  </div>
  </body>
<?php 
  include_once("includes/footer.php");
?>
</html>
