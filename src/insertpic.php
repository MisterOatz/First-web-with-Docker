<?php
    ini_set('display_errors',0); // hide warning
    include("server.php");
   
    $p_id = $_POST['p_id'];
    $picname = $_POST['picname'];
    $picby = $_POST['picby'];
    $date = $_POST['date'];
   
    $file = $_FILES['picture']['name'];
    if($_FILES["picture"]["error"]>0) {
    echo "Error:" . $_FILES["picture"]["error"] . "<br/>";
    } else {

    move_uploaded_file($_FILES["picture"]["tmp_name"], "images/" . $_FILES["picture"]["name"]);
        //}
    }
    $sql = "Update picture SET picname= '$picname', picby='$picby', date = '$date',
    picture = '$file' WHERE p_id = $p_id";
    $rs = mysqli_query($conn, $sql);
    if($rs){
    //echo "Update Successful";
    echo"<script>alert('Update Successful'); window.location='gallery.php';</script>";
    exit(); 
    }else{ echo"<script>alert('Can not Update Product'); window.location='gallery.php';</script>";
    exit();
    }
       
?>