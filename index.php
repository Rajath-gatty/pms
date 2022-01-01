<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php
    session_start();
    include("connection.php"); ?>
    <title>PMS</title>
</head>
<body>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <div class="main-hdng">
                    <a href="index.php"><h2>PMS</h2></a>
                </div>
                <div class="nav-menus">
                    <ul>
                        <li><a href="about.php" class="link">About</a></li>
                    </ul>
                </div>    
            </div>
        </div>
    </nav>
<?php 
 $totalspace = 5;
 $spaceavailable = 0;
 $sqltable = "create table if not exixts parking(id int AUTO_INCREMENT PRIMARY KEY,name varchar(20),carno varchar(20), dt DATETIME DEFAULT CURRENT_TIMESTAMP";
 $tableres = mysqli_query($con,$sqltable);
 $sqlcount = "select count(*) from parking";
 $rescount = mysqli_query($con,$sqlcount);
 $countcar = mysqli_fetch_array($rescount);
 $_SESSION['countcar'] = $countcar[0];
 $_SESSION['totalspace'] = $totalspace;
 if($countcar[0]<=$totalspace)
 $spaceavailable = $totalspace - $countcar[0];
?>
    <section>
        <div class="container">
            <div class="card-container">
                <div class="card">
                    <h2 class="hdng">Cars available to Park</h2>
                    <p class="num"><?php echo $spaceavailable ?></p>
                    <div class="add-btn">
                        <a href="add.php" class="btn-link" title="Add car"><i class="fas fa-plus fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="park-details">
        <div class="container">
        <p class="hdng-2">Parked cars</p>
        <div class="underline"></div>
            <div class="card-2">
                <table>
                    <tr class="table-hdng">
                        <th>Name</th>
                        <th>Car no.</th>
                        <th>Date of entry</th>
                    </tr>
                    <?php 
                    $sql = "select * from parking";
                    $res = mysqli_query($con,$sql);
                    if($res) {
                        while($row=mysqli_fetch_assoc($res)) { ?>
                            <tr class="table-data">
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['carno']; ?></td>
                                <td><?php echo $row['dt']; ?></td>
                                <td ><a class="rm-btn" href="remove.php?id=<?php echo $row['id']?>">Remove</a></td>
                            </tr>
                      <?php } 
                    }
                else { ?>
                        <script>alert("Something went wrong!")</script>
                   <?php }
                    ?>
                </table>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/b52e8bea83.js" crossorigin="anonymous"></script>
</body>
</html>