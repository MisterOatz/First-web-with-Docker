<html>

    <title> Gallery </title>
    <link rel="stylesheet" href="style_3.css">

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
<div class="content-area">
        <div class="wrapper" >
<form action ="" method="POST" enctype="multipart/from-data">

  <?php
  $connection = mysqli_connect("db","root","123456");
  $db = mysqli_select_db($connection,'taonudb');
  if($connection) {
    echo "";
    }

  $query = " SELECT * FROM `myimage` ";
  $result = mysqli_query($connection, $query);
      
  ?>
  <?php
    while($row = mysqli_fetch_array($result))
        {  
        ?>
 
                    <?php echo '  <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="500" width="600" class="img-thumnail" />  
                        '; ?>

    <?php
       }  
       ?>

</form>
    </div>
    </div>
</body>
</html>