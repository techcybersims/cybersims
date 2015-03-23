<html>
<head><title>Add_service_php</title>
<link rel="stylesheet" type="text/css" href="../css/vstyle.css">
</head>
<body>
<header>Service Registration</header>
<nav>
  <ul>
    <li><a href="../add_service.html">Enter another service</a></li>
    <li><a href="../index.html">Main Page</a></li>
    <li><a href="list_srvc.php">List Records</a></li> 
 </ul>
</nav>
<?php
try {
    require_once '../includes/connect.php';
    $sql = "INSERT INTO event_tbl
   (date,veh_id,descrip,odometer,srv_provider,cost,note)
   VALUES
   ('$_POST[date]','$_POST[veh_id]','$_POST[descrip]','$_POST[odometer]','$_POST[srv_provider]','$_POST[cost]','$_POST[note]')";
        $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
echo "1 service added";
$db->close();
?>
</body>
</html>
