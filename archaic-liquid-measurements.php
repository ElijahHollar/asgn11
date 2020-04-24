<?php

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

$pageTitle = "Arcane Liquid Converter";
include_once("includes/header.php");
include_once("includes/form-start.php");
?>
            <option value="buckets"<?php if($fromUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($fromUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($fromUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($fromUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
            <option value="pints"<?php if($fromUnit == 'pints') { echo " selected"; } ?>>Pints</option>
            <option value="imperial gallons"<?php if($fromUnit == 'imperial gallons') { echo " selected"; } ?>>Imperial Gallons</option>

            <?php include_once("includes/form-middle.php"); ?>

            <option value="buckets"<?php if($toUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($toUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($toUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($toUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
            <option value="pints"<?php if($toUnit == 'pints') { echo " selected"; } ?>>Pints</option>
            <option value="imperial gallons"<?php if($toUnit == 'imperial gallons') { echo " selected"; } ?>>Imperial Gallons</option>   

<?php 
  include_once("includes/form-end.php");
  include_once("includes/footer.php");
?>
</html>
