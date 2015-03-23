<?php
try {
    require_once '../includes/connect.php';
    $sql = 'SELECT * FROM event_tbl';
    $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>some-text</title>
    <link href="../css/vstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header>List services</header>
  <nav>
   <ul>
     <li><a href="../index.html">Main Page</a></li>
     <li><a href="../add_srvc.html">Register Service</a></li>
     <li><a href="../find_prvdr.html">Find a Provider</a></li>
   </ul>
  </nav>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
$numrows = $result->num_rows;
if (!$numrows) {
    echo '<p>No results found.</p>';
} else {
    echo "<p>Total results found: $numrows.</p>";
?>
<table border='1'align='center'>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Vehicle ID</th>
        <th>Description</th>
	<th>Odometer</th>
        <th>Provider</th>
        <th>Cost</th>
	<th>Note</th>
    </tr>
    <?php while ($row = $result->fetch_row()) { ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
    	<td><?php echo $row[6]; ?></td>
	<td><?php echo $row[7]; ?></td>
	</tr>
    <?php } ?>
</table>
<?php } // end else
$db->close();
?>
</body>
</html>
