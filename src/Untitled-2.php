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
        <div class="col-md3">
            <div class="card">
                <div class="card-body">
                    <?php echo '  <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="400" class="img-thumnail" />  
                        '; ?>
                    <h4 class="card-title">PICTURE NAME:<?php echo $row['name'];?> </h4>
                    <h3 class="card-title">PICTURE BY:<?php echo $row['imageby'];?> </h4>
                </div>
            </div>
        </div>

    <?php
       }  
       ?>

</form>