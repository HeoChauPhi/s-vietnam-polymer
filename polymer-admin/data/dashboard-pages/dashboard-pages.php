<?php
//print_r($_SERVER);
$myFile = "dashboard-setting.json";

$logo           = $_POST['logo_val'];
$customlogo_val = $_POST['customlogo_val'];
$sitename_val   = $_POST['sitename_val'];
$homepage_val   = $_POST['homepage_val'];

if (isset($_POST['customlogo'])) {
  $customlogo     = "checked";
} else {
  $customlogo     = "";
}

if (isset($_POST['sitename'])) {
  $sitename     = "checked";
} else {
  $sitename     = "";
}

if (isset($_POST['homepage'])) {
  $homepage     = "checked";
} else {
  $homepage     = "";
}

$array = array(
  'logo' => array(
    "value" => $logo
  ),
  'customlogo' => array(
    "status"  => $customlogo,
    "value"   => $customlogo_val
  ),
  'sitename' => array(
    "status"  => $sitename,
    "value"   => $sitename_val
  ),
  'homepage' => array(
    "status"  => $homepage,
    "value"   => $homepage_val
  )
);

// encode array to json
$json = json_encode(array($array));

//write json to file
if (file_put_contents($myFile, $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";
