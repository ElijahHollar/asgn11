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
  
  $toValue = convert_length($fromValue, $fromUnit, $toUnit);
}

$pageTitle = "Irish Length Converter";
include_once("includes/header.php");
include_once("includes/form-start.php");
?>
            <option value="grains"<?php if($fromUnit == 'grains') { echo " selected"; } ?>>Grains</option>
            <option value="thumb-lengths"<?php if($fromUnit == 'thumb-lengths') { echo " selected"; } ?>>Thumb-lengths</option>
            <option value="palms"<?php if($fromUnit == 'palms') { echo " selected"; } ?>>Palms</option>
            <option value="fists"<?php if($fromUnit == 'fists') { echo " selected"; } ?>>Fists</option>
            <option value="feet"<?php if($fromUnit == 'feet') { echo " selected"; } ?>>Feet</option>
            <option value="steps"<?php if($fromUnit == 'steps') { echo " selected"; } ?>>Steps</option>
            <option value="double-steps"<?php if($fromUnit == 'double-steps') { echo " selected"; } ?>>Double-steps</option>
            <option value="rods"<?php if($fromUnit == 'rods') { echo " selected"; } ?>>Rods</option>

<?php include_once("includes/form-middle.php"); ?>

            <option value="grains"<?php if($toUnit == 'grains') { echo " selected"; } ?>>Grains</option>
            <option value="thumb-lengths"<?php if($toUnit == 'thumb-lengths') { echo " selected"; } ?>>Thumb-lengths</option>
            <option value="palms"<?php if($toUnit == 'palms') { echo " selected"; } ?>>Palms</option>
            <option value="fists"<?php if($toUnit == 'fists') { echo " selected"; } ?>>Fists</option>
            <option value="feet"<?php if($toUnit == 'feet') { echo " selected"; } ?>>Feet</option>
            <option value="steps"<?php if($toUnit == 'steps') { echo " selected"; } ?>>Steps</option>
            <option value="double-steps"<?php if($toUnit == 'double-steps') { echo " selected"; } ?>>Double-steps</option>
            <option value="rods"<?php if($toUnit == 'rods') { echo " selected"; } ?>>Rods</option>
<?php 
  include_once("includes/form-end.php");
  include_once("includes/footer.php"); 
?>
</html>
