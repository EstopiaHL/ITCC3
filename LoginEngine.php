<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("127.0.0.1:3307", "root", "P@ssw0rd", "laundrypalace");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $first_name = $_REQUEST['username'];
        $last_name = $_REQUEST['password'];

        $sql1 = "SELECT * FROM logininfo WHERE UserName = '$first_name'";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT * FROM logininfo WHERE Password = '$last_name'";
        $result2 = $conn->query($sql2);

        if ($result1->num_rows > 0 && $result2->num_rows > 0) {

            $row1 = $result1->fetch_assoc();

            $row2 = $result2->fetch_assoc();

            if ($row1['UserName'] === $row2['UserName']) {
                    header("Location: Main.html");
                    exit();
            } else {
                echo "Inputs come from different rows.";
            }

        } else {
            echo "Input value not found in the database!";
        }

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>