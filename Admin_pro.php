<?php

include 'connect.php';

if(isset($_POST['submit0'])){
    $pname = $_POST['pname0'];
    $pimage = $_FILES['pimage0']['name'];
    $tmp_name = $_FILES['pimage0']['tmp_name'];

    $import = "INSERT INTO `latest` (`pname`, `pimage`) VALUES ('$pname', '$pimage')";
    $importing = mysqli_query($conn, $import);

    if($importing === true){
        move_uploaded_file($tmp_name, "latest-image/$pimage");
        echo '<script>alert("Product upload successfully")</script>';
        header("location: Admin.html");
    }else{
        echo '<script>alert("An Error occured and was unable to Upload")</script>';
    }

}

if(isset($_POST['submit1'])){
    $pname = $_POST['pname1'];
    $dprice = $_POST['dprice1'];
    $pprice = $_POST['price1'];
    $pimage = $_FILES['pimage1']['name'];
    $tprice = $_POST['price1'];
    $tmp_name = $_FILES['pimage1']['tmp_name'];
    $qty = 1;

    $import = "INSERT INTO `whole` (`pname`, `dprice`, `pprice`, `pimage`, `qty`, `tprice`) 
    VALUES ('$pname', '$dprice', '$pprice', '$pimage', '$qty', '$tprice')";

    $importing = mysqli_query($conn, $import);

    if($importing === true){
        move_uploaded_file($tmp_name, "latest-image/$pimage");
        header("location: Admin.html");
    }else{
        echo "An error Occured";
    }
}



if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $dprice = $_POST['dprice'];
    $pimage = $_POST['pimage'];
    $pprice = $_POST['pprice'];
    $pqty = 1;
    $tprice = $_POST['pprice'];
  
    $extract = "SELECT *FROM `cart` WHERE `pname`='$pname' AND `dprice`='$dprice' AND `pprice`='$pprice'";
    $extracting = mysqli_query($conn, $extract);
    if($extracting === false){
      // Output the error message if the query fails
      echo "Error in SELECT query: " . mysqli_error($conn);
    }
    if(mysqli_num_rows($extracting) > 0){
      echo '<script>alert("Product Already added to cart")</script>';
    }else{
      $import = "INSERT INTO `cart` (`pname`, `dprice`, `pimage`, `pprice`, `qty`, `tprice`) 
      VALUES ('$pname', '$dprice', '$pimage', '$pprice', '$pqty', '$tprice')";
      $importing = mysqli_query($conn, $import);
  
      if($importing === false){
        // Output the error message if the query fails
        echo "Error in INSERT query: " . mysqli_error($conn);
      }else{
        echo '<script>alert("Product Added to cart")</script>';
      }
    }
  }
  ?>