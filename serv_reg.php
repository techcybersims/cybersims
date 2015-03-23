<html>
<head><title>Add_service_php</title>
<link rel="stylesheet" type="text/css" href="../css/vstyle.css">
</head>
<body>
<nav>
<div class="header"><h1>Service Registration</h1></div>
<div class="center2">
<div class="toprow">
<ul>
 <li><a href="../add_service.html">Enter another service</a></li><br />
 <li><a href="../update_srv.html">Update service record</a></li>
 <li><a href="../index.html">Main Page</a></li>
 <li><a href="list_records.php">List all Records</a></li>
 <li><a href="../update_veh.html">Update Vehicle</a></li>
 <li><a href="../update_pro.html">Update Provider</a></li>
</ul> 
</div>
<?php
/*include "reg.php"*/
$conn = mysqli_connect("localhost","geezerga_veh","l00k@me");
 if (!$conn)  {
  die('Could not connect: ' . mysqli_error());
  }
mysqli_select_db("geezerga_vehicles");

$sql="INSERT INTO services_tbl
(srv_date,veh_id,mileage,provider_id,description,cost,note)
VALUES
('$_POST[srv_date]','$_POST[veh_id]','$_POST[mileage]','$_POST[provider_id]','$_POST[description]','$_POST[cost]','$_POST[note]')";

if (mysqli_query($sql,$conn))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 service registered";

mysqli_close($conn)
?>
</div>
</body>
</html>
