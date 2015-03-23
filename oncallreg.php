<html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/oncall.css"</link>
 </head>
<body>
<h1>Register Event</h1>
<nav>
	<ul>
	 <li><a href="../onCallLog.html">Main Page</a></li>
	 <li><a href="../onCallReg.html">Register On Call</a></li>
	 <li><a href="mysqli_listrecords.php">List Records</a></li>
	</ul
</nav>	
<br/>
<br/>
<br/>
<br/>
<article>
<?php
try {
    require_once '../includes/mysqli_connect.php';
    $sql = "INSERT INTO oncalllog_tbl
   (date, fi, incident_num, description, resolution, action_items, pri_eng, sec_eng, note)
   VALUES
   ('$_POST[date]','$_POST[fi]','$_POST[incident_num]','$_POST[description]','$_POST[resolution]','$_POST[pri_eng]','$_POST[sec_eng]','$_POST[note]')";
	$result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
echo "1 record added";
$db->close();
?>
</article>
</body>
</html>
