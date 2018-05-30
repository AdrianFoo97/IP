<?php
  function getSubnet($ip) {
    $subnet = substr($ip, strpos($ip, '/') + 1);
    echo 'subnet = ' . $subnet;
    $range = 0;
    if ($subnet == 0) {
      $range = 4294967296;
    }
    else if ($subnet == 8) {
      $range = 16777216;
    }
    else if ($subnet == 16) {
      $range = 65535;
    }
    else if ($subnet == 24) {
      $range = 256;
    }
    else if ($subnet == 25) {
      $range = 128;
    }
    else if ($subnet == 26) {
      $range = 64;
    }
    else if ($subnet == 27) {
      $range = 32;
    }
    else if ($subnet == 28) {
      $range = 16;
    }
    else if ($subnet == 29) {
      $range = 8;
    }
    else if ($subnet == 30) {
      $range = 4;
    }
    else if ($subnet == 31) {
      $range = 2;
    }
    else if ($subnet == 32) {
      $range = 0;
    }
  return $range;
  }
  $check = getSubnet('10.33.24.68/30');
  echo 'range = ' . $check;

  function findIP ($ipIn, $ipStart, $range) {

   $ipIn = explode(".", $ipIn);

   $ipStart = explode(".",$ipStart);

   echo 'ipStart = ' . $ipStart[3];

   $last = (int)$ipStart[3] + $range - 1;

   if ($ipIn[3] <= $last && $ipIn[3] >= $ipStart[3]) {
        echo "hi";
    }
   else {
      echo "no";
    }
  echo 'ipin = ' . $ipIn[3];
  echo 'iplast = ' .$last;
  echo 'ipstart = ' .$ipStart[3];

  }
  findIP('10.23.0.20', '10.23.0.13', 5);
?>
