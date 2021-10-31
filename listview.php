<?php
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM events;");
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP PROTOCOL</title>
</head>

<body>
    <button onclick="logout()">logout</button>
    <button onclick="goBack()">Go Back</button>
    <table align="center" border="2px">
        <tr>
            <th colspan="2">participation list</th>
        </tr>
        <tr>

            <th>rollnumber</th>
            <th>EVENT NAME</th>
            <th>DATE</th>
            <th>PROOF</th>
            <th>VERIFIED</th>

        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $rows['rollnumber']; ?></td>
            <td>
                <?php echo $rows['eventname']; ?>
            </td>
            <td>
                <?php echo $rows['date']; ?>
            </td>
            <td>
                <?php echo $rows['proof']; ?>
            </td>
            <td>
                <?php echo $rows['verified']; ?>
            </td>
        </tr>
        <?php      }
        ?>
    </table>

    <script>
    function goBack() {
        window.history.back();
    }

    function logout() {
        window.location.href = "index.html";
    }
    </script>

</body>

</html>