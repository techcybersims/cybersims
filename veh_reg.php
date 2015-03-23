<html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/vstyle.css"</link>
 </head>
<body>
<nav>
<header>Vehicle Registration</header>
<div class="center2">
</div>
<div class="toprow">
   <ul>
    <li><a href="../index.html">Main Page</a></li>
   </ul>
</div>
</nav>
<?php
try {
    require_once '../includes/connect.php';
    $sql = "INSERT INTO vehicle_tbl
   (veh_make, veh_model, veh_year, veh_vin, veh_license, date_purchased, seller, seller_phone, lien_holder, note, Picture)
   VALUES
   ('$_POST[veh_make]','$_POST[veh_model]','$_POST[veh_year]','$_POST[veh_vin]','$_POST[veh_license]','$_POST[date_purchased]','$_POST[seller]','$_POST[seller_phone]','$_POST[lien_holder]','$_POST[note]','$_POST[Picture]')";
	$result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
echo "1 vehicle added";
$db->close();
?>
</body>
</html>
