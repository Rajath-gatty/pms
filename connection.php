<html>
    <?php 
    $con = mysqli_connect("localhost","root","");
    if($con) {
        mysqli_select_db($con,"pms");
    } else {
        echo "Connection not established";
    }
    ?>
</html>