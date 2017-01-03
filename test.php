<?php
$servername = "localhost";
$username = "root";
$password = "ubuntu";
$dbname = "moods";
// function setMood($mood){
//   if($mood === '1'){
//     return 'Happy';
//   }
//   if($mood === '2'){
//     return 'Not Happy';
//   }
//   if($mood === '3'){
//     return 'Neutral';
//   }
// }
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO officemoods (office, date, mood)
    VALUES (:office, :date, :mood)");
    $stmt->bindParam(':office', $office);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':mood', $mood);

    // insert a row
    $office = "New York";
    $date = date("Y-m-d H:i:s");
    $mood = $_GET['mood'];
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
