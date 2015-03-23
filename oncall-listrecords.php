<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List Records</title>
    <link href="../css/oncall.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>List records</h1><br/>
  <nav>
   <ul>
  	  <li><a href="../onCallLog.html">Main page</a></li>
  	  <li><a href="../onCallReg.html">Register On Call</a></li>
  </ul>
  </nav>
  <br/>
<?php
try {
    require_once '../includes/mysqli_connect.php';
    $sql = 'SELECT * FROM oncalllog_tbl
            ORDER BY id';
    $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>  
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
$numrows = $result->num_rows;
if (!$numrows) {
    echo '<p>No results found.</p>';
} else {
    echo "<p>Total results found: $numrows.</p>";
?>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>FI</th>
        <th>Incident Number</th>
        <th>Description</th>
        <th>Resolution</th>
        <th>Action Items</th>
        <th>Primary Engineer</th>
        <th>Secondary Engineer</th>
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
        <td><?php echo $row[8]; ?></td>
    </tr>
    <?php } ?>
</table>
<?php } // end else
$db->close();
?>
</body>
</html>
