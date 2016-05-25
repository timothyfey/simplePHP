
<?php

$servername = "localhost";

$username = "";

$password = "";

$database = "cdr";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT destination number, billsec, acccountcode from cdr order by start_stamp desc";

$result = $conn->query($sql);

if ($result->num_rows > 0 ){
	while($row = $result->fetch_assoc()){
		echo "Acct Code: " . $row["accountcode"]. " -- Destination #: " . $row["destination_number"]. " -- Billsec: " . $row["billsec"]. "<br>" 
	}
}
else{
	echo: "No Results"
}
$conn->close();

?>