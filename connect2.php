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
        $ipid = $_POST['userrefseq'];
        $ipch = $_POST['userch'];
        $ipseq = $_POST['userseq'];
        $rd = $_POST['radio'];
        switch($rd)
        {
            case 'insert':
                $sql = "INSERT INTO user (ID, chromosome, Sequence)
                        VALUES ('$ipch', '$ipid', '$ipseq')";
                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                } 
                else 
                {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                    break;
            case 'update':
                $sql = "UPDATE u7 SET Sequence='$ipseq', chromosome = '$ipid' WHERE id='$ipch'";
                if ($conn->query($sql) === TRUE)
                {
                    echo "Record updated successfully";
                } 
                else
                {
                    echo "Error updating record: " . $conn->error;
                }
                break;
        }
        $conn->close();
        ?>
</body>
</html>