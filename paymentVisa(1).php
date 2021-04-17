<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Payment</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment</h4>
        </div>
        <div class="modal-body">
        <form name="form" method="post" enctype="multipart/form-data" >
                                               
                                            <div class="form-group">
                                                            <label for="price">Total</label>
                                                            <p>
                                                                    <input type="number" name="price" >
                                                            </p>
                                            </div>

                                            <div class="form-group">
                                                            <label for="image">Choose payment method</label>
                                                            <p>
                                                                  <a href="https://www.airpay.vn/lien-ket-ngan-hang/vietcombank"> <img src="images/air-pay.jpg" alt="" width="300"> </a>  
                                                                  <a> <img src="images/paypal-logo.png" alt="" width="300"> </a>  
                                                            </p>
                                            </div>

                                            <input type="submit" name="add" value="Paid" class="btn btn-primary"> 

                                        </form>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
