<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'oldtown');

    if(isset($_POST['editevent']))
    {   
        $id = $_POST['update_id'];

        $name = $_POST['name'];
        $price = $_POST['price'];
        $date = $_POST['date'];


        $query = "UPDATE product SET name='$name', price='$price', date='$date' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:manage.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>