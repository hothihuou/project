<?php
    $connect = mysqli_connect("localhost", "root", "", "hotel");
    if($connect){
        echo "Kết nối thành công!";
    }
    else{
        echo "Kết nối không thành công!";
    }
    if(isset($_POST['sub'])){
        $sql = "select * from payment where id='$_POST[id]'";
$result = $connect->query($sql);
$row;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integartion (Stripe)</title>
    <link rel="stylesheet" href="./css/_style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<button type="button" onclick="goback()" class="back">Go Back</button> 
<div class="row">
    <div class="col-md-6">
        <div class="form-container">
            <form autocomplete="off" action="checkout-charge.php" method="POST">
                <div>
                    <?php echo  $row["fname"]." ".$row["lname"];?>
                    <label>Customer Name</label>
                </div>
                <div>
                    <?php echo $row['cin']; ?>
                    <label>Check In</label>
                </div>
                <div>
                    <?php echo $row['cout']; ?>
                    <label>Check Out</label>
                </div>
                <div>
                    <input type="text"  name="product_name" value="<?php echo $row['ttot'];?>" disabled required/>
                    <label>Product name</label>
                </div>
                <div>
                    <input type="text"  name="price" value="<?php echo $row['fintot']?>" disabled required/>
                    <label>Price</label>
                </div>
               
                    <input type="hidden" name="amount" value="<?php echo $row['fintot']?>">
                    <input type="hidden" name="product_name" value="<?php echo  $row["fname"]." ".$row["lname"] ?>">
                
                <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51Icn3FFeiQWdrGinoYWF5Y7MNBn3y84d8wq19YmzinrXRMMWCfs4Ew13WhwWh7i73VeB7zMIcvh2wxRfMHxBWXRB006cpMIVdH"
                data-amount=<?php echo $row['fintot'];?>
                data-name="<?php echo $row['fname']?>"
                data-description="<?php echo $row['lname']?>"
                data-currency="inr"
                data-locale="auto">
                </script>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="checkout-container">
            <h4>Customer Name&nbsp;:&nbsp;<?php echo $row['fname']?></h4>
            <span>Price &nbsp;:&nbsp;<?php  echo $row['fintot']?></span>
        </div>
    </div>
</div> 

<?php
}
} else {
  echo "0 results";
}
    }
  if(isset($_GET)){
  }
?>
<script>
    function goback(){
        window.history.go(-1);
    }

    $('#ph').on('keypress',function(){
         var text = $(this).val().length;
         if(text > 9){
              return false;
         }else{
            $('#ph').text($(this).val());
         }
         
    });
</script>
</body>
</html>