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
    <title>Add Car</title>
</head>
<body>
    <?php
    $countcar = $_SESSION['countcar'];
    $totalspace = $_SESSION['totalspace'];
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $carno = $_POST['carno'];
        if($countcar>=$totalspace) { ?>
          <script>alert("Parking Full")</script>  
       <?php } else {
            $sql = "insert into parking(name,carno) values('$name','$carno')";
            $res = mysqli_query($con,$sql);
            if($res) {
                echo "Value inserted";
                header('Location:index.php'); exit();
            } else {
                echo "Value not inserted";
            }
        }
    }
    ?>
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
    <section class="form-wrapper">
        <div class="container">
            <form class="add-form" action="" method="POST">
                <label class="label">Name</label>
                <input type="text" name="name" id="name" required>
                <label class="label">Car No.</label>
                <input type="text" name="carno" id="carno" required>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>