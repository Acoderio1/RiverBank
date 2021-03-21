<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">riverbank</a>
            </div>
                <ul class="nav navbar-nav">
                    <li><a href="user.php">user</a></li>
                    <li class="active"><a href="thistory.php">Transaction History</a></li>
                </ul>
            </div>
    </nav>
<div class="container">
    <div>
        <h2>Transaction History</h2>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-hover table-condensed ">
            <thead class="thead-dark">
                <th scope="col">ID</th>
                <th scope="col">Sender</th>
                <th scope="col">Receiver</th>
                <th scope="col">Amount</th>
                <th scope="col">Time</th>
            </thead>
            <tbody>
            <?php
                include 'sqlconn.php';
                $sql="select * from transaction";
                $query=mysqli_query($conn,$sql);
                while($rows = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $rows['ID']; ?></td>
                <td><?php echo $rows['sender']; ?></td>
                <td><?php echo $rows['receiver']; ?></td>
                <td><?php echo $rows['balance']; ?></td>
                <td><?php echo $rows['datetime']; ?></td>

            
            <?php
            
            }
            
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>