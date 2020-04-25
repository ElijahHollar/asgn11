<?php

const VOLUME_TO_GALLON = array(
  "buckets" => 4,
  "butts" => 108,
  "firkins" => 9,
  "hogsheads" => 54,
  "pints" => 0.125,
  "imperial gallons" => 1
);

function convert_to_gallons($value, $fromUnit) {
  if(array_key_exists($fromUnit, VOLUME_TO_GALLON)) {
    return $value * VOLUME_TO_GALLON[$fromUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_from_gallons($value, $toUnit) {
  if(array_key_exists($toUnit, VOLUME_TO_GALLON)) {
    return $value / VOLUME_TO_GALLON[$toUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_volume($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($gallonValue, $toUnit);
  return $newValue;
}

const LENGTH_TO_CENTIMETERS = array(
  "grains" => .7,
  "thumb-lengths" => 2.1,
  "palms" => 3.3,
  "fists" => 10.4,
  "feet" => 25,
  "steps" => 62.5,
  "double-steps" => 1500,
  "rods" => 3000
);

function convert_to_centimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LENGTH_TO_CENTIMETERS)) {
    return $value * LENGTH_TO_CENTIMETERS[$fromUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_from_centimeters($value, $toUnit) {
  if(array_key_exists($toUnit, LENGTH_TO_CENTIMETERS)) {
    return $value / LENGTH_TO_CENTIMETERS[$toUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $centimeterValue = convert_to_centimeters($value, $fromUnit);
  $newValue = convert_from_centimeters($centimeterValue, $toUnit);
  return $newValue;
}

?>