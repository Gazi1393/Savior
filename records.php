<?php
$con=mysqli_connect("localhost","root","","savior");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM info");

echo "<table border='1'>
<tr>
<th>Type</th>
<th>Amount Required</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
