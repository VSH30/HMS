<html>
    <head>
        <?php
            include('functions.php');
            $conn = dbconn();

            $result = mysqli_query($conn,"SELECT * FROM bookings");
            if (!$result)
                die("FAILED TO GET DATA<br>" . mysqli_error($conn));
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <button onclick="window.location.href='index.php'">Home</button>
        <h1 align=center>BOOKINGS INFORMATION MODULE</h1>
        <table border=2 align=center>
            <tr>
                <th>ID</th><th>G NO</th><th>H NO</th>
                <th>R NO</th><th>FROM</th><th>TO</th>
            </tr>
            <?php
                while($arr=mysqli_fetch_row($result))
                {
                    echo "<tr>
                            <td>$arr[0]</td>
                            <td>$arr[1]</td>
                            <td>$arr[2]</td>
                            <td>$arr[3]</td>
                            <td>$arr[4]</td>
                            <td>$arr[5]</td>
                        </tr>";
                }
            ?>
        </table>
    </body>
</html>