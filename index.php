


<html>
<head></head>
<body>
<p>Wikipedia test</p>


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
?>
<form method="POST">
    <select name="selectID" id="selectID" onchange="this.form.submit()">
        <?php
        $sql_query = "Select subsectionID From subsections";
        $qr = $db->query($sql_query);
        while ($row = $qr->fetch_array()) {
            echo '<option value='.$row['subsectionID'].'>'.$row['subsectionID'];
        };
        ?>



    </select>
</form>
<?php
$sql_query = "Select * From sectionText, subsectionText WHERE sectionID like ". $sectionID . " and sectionText.sectionID = subsectionText.sectionID";
$qr = $db->query($sql_query);
while ($row = $qr->fetch_array()) {
    echo "<p>" . $row['sectionName'] . $row['text'] . "<br>" . "</p>";

}


if($db->connect_errno) {

    die('Connectfailed[' . $db->connect_error . ']');

$qr->close();
$db->close();
// test if connection was established, and print any errors





}
