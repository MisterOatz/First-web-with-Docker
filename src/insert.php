<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0">

    <link rel="stylesheet" href="style_1.css">

    <title> Insert Picture</title>

    
</head>
<body>

<div class="box-area">
    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="home.php">Taonu Gallery</a>
        </div>

        <nav>
             <a href="home.php">Home</a>
             <a href="insert.php">Insert</a>
             <a href="gallery.php">Gallery</a>
             <a href="logout.php">LOG OUT</a>
        </nav>
    </div>
</header>

    <div class="banner-area">
        <h2>Insert Picture</h2>
    </div>

    <div class="content-area">
        <div class="wrapper" >
        <center>
        <table bgcolor ="white">
        <Tr><td>
        <font color ="black"><h2>Please Insert Picture to your Gallery</h2></font>
        </br>
        </br>
        </br>
        <form action=" " method="POST" enctype="multipart/form-data">
         <label><h3>Choose Picture : </h3></lable><br>
         <input type="file" name="image" id="image" /><br>
         
         <label><h3>Enter Picture name : </h3></lable><br>
         <input type="text" name="name" placeholder="Enter Picture Name" /><br>

         <label><h3>Image By : </h3></lable><br>
         <input type="text" name="imageby" placeholder="Enter Picture By" /><br>

         <input type="Submit" name="upload" value="Upload image/Data" /><br>

        </form>
        </td>
            </table>
        </center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "taonudb");
            if($conn) {
        echo " ";
        }

        if(isset($_POST['upload']))
        {
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $name = $_POST['name'];
            $imageby = $_POST['imageby'];

            $query = "INSERT INTO `myimage`(`image`,`name`,`imageby`) VALUES ('$file','$name','$imageby') ";
            $query_run = mysqli_query($conn,$query);

            if($query_run)
            {
                echo '<script type="text/javascript"> alert("image update!") </script>';
            }
        }
        ?>
         </div>
    </div>
