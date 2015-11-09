


<html>
<head></head>
<body>
<p>Wikipedia test</p>

<form method="POST">
    <select name="selectID" id="selectID" onchange="this.form.submit()">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
    </select>
</form>
</body>

</html>


<?php
$sectionID = $_POST["selectID"];
$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "bd7768bee1ccf1",
    "b0434b31",
    "dm1406997"
);


$sql_query = "Select * From sectionText WHERE sectionID like ".$sectionID;
$qr = $db->query($sql_query);
while ($row = $qr->fetch_array()) {
    echo "<p>" . $row . "</p>";

}

if($db->connect_errno) {

    die('Connectfailed[' . $db->connect_error . ']');

$qr->close();
$db->close();
// test if connection was established, and print any errors





}