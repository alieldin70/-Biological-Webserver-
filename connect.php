<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html
        {
            background-image: url(backgroun2.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "seqdb";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Connection failed: ". $conn->connect_error);
        }
        else
        { 
            echo "Connected successfully"; 
        }
        $ipid = $_POST['ipid'];
        $ipch = $_POST['ipch'];
        $ipseq = $_POST['ipseq'];
        $sql = "INSERT INTO user (ID, chromosome, Sequence)
        VALUES ('$ipid', '$ipch', '$ipseq')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
</body>
</html>