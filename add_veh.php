<html>
<head><title>Add_vehicle_php</title>
<link rel="stylesheet" type="text/css" href="../css/vstyle.css">
</head>
<body>
<header>Vehicle Registration</header>
<nav>
  <ul>
    <li><a href="../add_service.html">Enter another service</a></li>
    <li><a href="../index.html">Main Page</a></li>
    <li><a href="list_veh.php">List Vehicles</a></li>
  </ul>
</nav>
<?php
try {
    require_once '../includes/connect.php';
    $sql = "INSERT INTO vehicle_tbl
   (make, model, year, vin, license, engine, trans, note)
   VALUES
   ('$_POST[make]','$_POST[model]','$_POST[year]','$_POST[vin]','$_POST[license]','$_POST[engine]','$_POST[trans]','$_POST[note]')";
        $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
echo "1 vehicle added";
$db->close();
?>
</body>
</html>
