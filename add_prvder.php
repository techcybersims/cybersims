<html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/vstyle.css"</link>
 </head>
<body>
<header>Register Provider</header>
<nav>
	<ul>
	 <li><a href="../index.html">Main Page</a></li>
	 <li><a href="../add-prvder.html">Register Another Provider</a></li>
	 <li><a href="list_cntrs.php">List Providers</a></li>
	</ul
</nav>	
</header>

<?php
try {
    require_once '../includes/connect.php';
    $sql = "INSERT INTO srvProvider_tbl
   (srv_cntr, address, phone, email, website, note)
   VALUES
   ('$_POST[srv_cntr]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[website]','$_POST[note]')";
	$result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
echo "1 provider added";
$db->close();
?>

</body>
</html>
