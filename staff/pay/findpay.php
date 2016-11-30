<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sid=$_GET["sid"];
	$sql="SELECT * FROM `payroll` WHERE sid=".$sid;
	$result=$conn->query($sql);
?>
 <table width="100%" border="1">
  <tbody>
    <tr>
      <th scope="col">Wage</th>
      <th scope="col">Hours</th>
      <th scope="col">Time</th>
      <th scope="col">Method</th>
		<th scope="col">Select</th>
    </tr>
    <tr>
      <td><strong>New</strong></td>
      <td><strong>New</strong></td>
      <td><strong>New</strong></td>
      <td><strong>New</strong></td>
      <td><button class="btn btn-primary" type="button" id="button0" onClick="selectPayNumber(0)">Select</button</td>
    </tr>
    <?php
		  while($row = $result->fetch_assoc()){
			   echo ("<tr>");
			        echo ("<td>" . $row['wage'] . "</td>");
			        echo ("<td>" . $row['hours'] . "</td>");
			        echo ("<td>" . $row['time'] . "</td>");
			        echo ("<td>" . $row['payType'] . "</td>");
			        echo ("<td><button class=\"btn btn-primary\" type=\"button\" id=\"button" . $row['payID'] . "\" onClick=\"selectPayNumber(" . $row['payID'] . ")\">Select</button>");
			        echo ("</tr>");
		  }
		  ?>
  </tbody>
</table>
<?php
			$conn->close();
		?>