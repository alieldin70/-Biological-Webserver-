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
        $ipch = $_POST['userch'];
        $rd = $_POST['radio'];
        switch($rd)
        {
            case 'select':
                $sql = "SELECT * FROM u7
                            where ID = '$ipch'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "chromosome: " . $row["ID"]. " - Refseq: " . $row["chromosome"]. " -Sequence" . $row["Sequence"]. "<br>";
                  }
                } else {
                  echo "0 results";
                }
                break;
            case 'delete':
                $sql = "DELETE FROM u7 WHERE ID=$ipch";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                } 
                break;
        }
        $conn->close();
        ?>
</body>
</html>