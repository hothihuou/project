<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th style =" width:400px">User Pass</th> 
            <th style =" width:400px">User E-mail</th>
            <th>CMND</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  

        // kiểm tra kết nối
        $conn = mysqli_connect("localhost", "root","","hotel");
        if($conn){
            //echo"Đã kết nối đến DATABASE";
        }
        else{
            die("Không thể kết nối đến DATABSE");
        }

        $admin_query="select * from register";//select query for viewing users.  
        $run=mysqli_query($conn,$admin_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];
            $user_sdt=$row[4];
            $user_cmnd=$row[5];
            $user_adrress=$row[6];
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td style =" width:400px"><?php echo $user_name;  ?></td>  
            <td style =" width:400px"><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>
            <td><?php echo $user_sdt;  ?></td>
            <td><?php echo $user_cmnd;  ?></td>
            <td><?php echo $user_adrress;  ?></td>  
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
  
</html>  