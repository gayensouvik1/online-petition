<head>
<style>

body{
    background:#000000;
}
h1{
    color:#ffffff;
    text-align: center;
}

button{
    float:right;
    background-color: #F78743;
    color: black;
    padding: 5px 20px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

div {
    width:44%;
    background:#8CEF91;
    padding-bottom: 30px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 15px 50px 30px;
    border-style: solid;
    border-color: black;

}
div.left{
	float: left;
	
}
div.right {
	float: right;
	
}

</style>
</head>
</body>
<button onclick="location.href = 'http://nucleus.esy.es/home.php';">Write a petition</button>
<h1>All Petitions</h1>

<?php 

	
$servername = "mysql.hostinger.in";
$username = "u346462061_uname";
$password = "uname123";
$dbname = "u346462061_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, petition_title, petition_desc FROM mytab";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $str = "";
    $count = 0;
    while($row = $result->fetch_assoc()) {
        $pos;
        if($count<=0) $pos = "left";
        else $pos = "right";

        $str = "<div class='".$pos
         ."'>
	<h2>".$row['petition_title']."</h2>
	".$row['petition_desc']."<br><br>
		<p align='right'><b>".$row['name']."</b></p>
		</div><br><br>";
		echo $str;
        if($count<=0) $count += strlen($str);
        else $count -= strlen($str);
    }
} else {
    echo "0 results";
}

$conn->close();



?>
</body>



											