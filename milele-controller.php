<?php
//Database credentials
$servername = "localhost";
$username = "milele";
$password = "A3!Fy9(!2L!B*j]J";
$dbhandle = mysqli_connect($servername, $username, $password, "milele-test");

//Months array and detecting when to start
$monthArray = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
$monthsOrder = array('','','','','','','','','','','','');
$currentMonth = date('m');
$startMonth = 1;
if($currentMonth == '01'){
  $startMonth = 11;
}else if($currentMonth == '02'){
  $startMonth = 12;
}else {
  $startMonth = $currentMonth-2;
}

try {
  //check if the call is for updating data or requesting data
  if ($_POST['update'] == 0) {
    echo "<table class='table results-table'><thead><tr>";
    $i =0 ;
    //printing the header months with inorder and start two month ago until the end of the list
    for ($x = $startMonth; $i < count($monthArray); $x++) {
      echo "<td class='input'>" . $monthArray[($x-1)] . "</td>";
      $monthsOrder[$i] = $monthArray[($x-1)];
      if($x == 12){
        $x = 0;
      }
      $i++;
    }
    echo "</tr></thead><tbody><tr>";
    //Done printing the header with the month name and starting to show the quantities
    foreach  ($monthsOrder as $month) {
      // Ordering from database by month and all the other filters
      $sql = "SELECT * FROM quantities WHERE supplier = '" . $_POST['supplier'] . "' AND whole_seller = '" . $_POST['whole_seller'] . "' AND steering_type = '" . $_POST['steering_type'] . "' AND model = '" . $_POST['model'] . "' AND sfx = '" . $_POST['sfx'] . "' AND variant = '" . $_POST['variant'] . "' AND color = '" . $_POST['color'] . "' AND month='".$month."';";
      $result = mysqli_query($dbhandle, $sql); 
      // the $count is to check if the value exist in the table or no 
      $count = 0;
      while ($row = mysqli_fetch_array($result)) {
        $count++;
        echo "<td class='input'><input onchange='handler_quantity(this);' name='quantity' supplier = '" . $_POST['supplier'] . "' whole_seller = '" . $_POST['whole_seller'] . "' steering_type = '" . $_POST['steering_type'] . "' model = '" . $_POST['model'] . "' sfx = '" . $_POST['sfx'] . "' variant = '" . $_POST['variant'] . "' color = '" . $_POST['color'] . "' year = '2023' month = '" . $month . "' value='" . $row{'quantity'} . "'></td>";
      }
      if($count == 0){
        echo "<td class='input'><input onchange='handler_quantity(this);' name='quantity' supplier = '" . $_POST['supplier'] . "' whole_seller = '" . $_POST['whole_seller'] . "' steering_type = '" . $_POST['steering_type'] . "' model = '" . $_POST['model'] . "' sfx = '" . $_POST['sfx'] . "' variant = '" . $_POST['variant'] . "' color = '" . $_POST['color'] . "' year = '2023' month = '" . $month . "' value='" . 0 . "'></td>";
      }
    }
    echo "</tr></tbody></table>";
    // Done printing the whole table
  } else {
    // Adding/Updating values in the database for the selected input fields
    $sql = "INSERT INTO quantities (supplier, whole_seller, steering_type, model, sfx, variant, color,month,year, quantity)
  VALUES ('" . $_POST['supplier'] . "','" . $_POST['whole_seller'] . "','" . $_POST['steering_type'] . "','" . $_POST['model'] . "','" . $_POST['sfx'] . "','" . $_POST['variant'] . "','" . $_POST['color'] . "','" . $_POST['month'] . "'," . $_POST['year'] . "," . $_POST['quantity'] . ")
ON DUPLICATE KEY UPDATE supplier = '" . $_POST['supplier'] . "',whole_seller = '" . $_POST['whole_seller'] . "',steering_type = '" . $_POST['steering_type'] . "',model = '" . $_POST['model'] . "',sfx = '" . $_POST['sfx'] . "',variant = '" . $_POST['variant'] . "',color = '" . $_POST['color'] . "',month = '" . $_POST['month'] . "',year = " . $_POST['year'] . ",quantity = " . $_POST['quantity'] . ";";
    if (mysqli_query($dbhandle, $sql)) {
      echo "Your record has been updated successfully.";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
    }
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>