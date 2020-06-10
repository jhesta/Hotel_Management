<!DOCTYPE html>
<html>
<body>

<style type="text/css">
html, 
body {
height: 100%;
width: 100%;
}

body {
background-image: url(images/hd.jpeg);
background-repeat: no-repeat;
background-size: 100% 100%;
}

</style>
<?php

echo "<table style='border: solid 1px white;'>";
 echo "<tr>
		<th>Customer Id</th>
		<th>Customer Name</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Email</th>
		</tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 200px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel management";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT customer_id, cust_name, address, phone_no, email FROM CUSTOMER"); 
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
</body>
</html>