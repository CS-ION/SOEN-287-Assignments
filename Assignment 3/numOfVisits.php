<?php
$count = 1;
$lastVisit = '';
if (isset($_COOKIE['count'])) {
  $count = intval($_COOKIE['count']) + 1;
}
setcookie('count', strval($count), time() + 86400 * 30);
if (isset($_COOKIE['lastVisit'])) {
  $lastVisit = $_COOKIE['lastVisit'];
}
date_default_timezone_set('EST');
$today = date('D M j H:i:s T Y');
setcookie('lastVisit', $today, time() + 86400 * 30);
if ($count == 1) {
  echo "Welcome to my webpage! It is your first time that you are here.";
} else {
  echo "Hello, this is the " . $count . " time that you are visiting my webpage.<br>";
  if (!empty($lastVisit)) {
      echo "Last time you visited my webpage on: " . $lastVisit . "<br>";
  }
  echo "(EST= Eastern Standard Time Zone)";
}
?>