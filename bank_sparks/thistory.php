<!DOCTYPE html>
<head>
    <style>
          @import url('https://fonts.googleapis.com/css?family=Balsamiq+Sans|Ubuntu');
        body{
           background-image:url(bank.png);
            background-repeat: no-repeat;
           width: 100%;
            height: auto;
             overflow: hidden;
            background-size: cover;  
            
        }   
        .table{
            
            text-align: center;
            margin-top: 50px;
            margin-left: 650px;
            border-color: blanchedalmond;
         
        }
        .container{
            align:center;
        }
        td{
            width:150px;
            background-color:transparent;
            color:white;
            font-family: Balsamiq Sans;
        }
        tr{
            width:40px;
            height: 60px;
        }
        th{
            background-color:blanchedalmond;
        }
        a{
            text-decoration: none;
        }
        </style>
<title>customers</title>
</head>
</html>
<?php
include 'config1.php';
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
?>
<div class="container">
    
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
            <table border="1px solid black" cell spacing="0" align="center" class="table">
        
            <thead style="color:black;">
        <tr>
            <th scope="col" class="text-centre py-2">ACCOUNT NO</th>
            <th scope="col" class="text-centre py-2">ACCOUNT HOLDER</th>
            <th scope="col" class="text-centre py-2">EMAILID</th>
            <th scope="col" class="text-centre py-2">ACCOUNT BALANCE</th>
            <th scope="col" class="text-centre py-2">DATE</th>
        </tr></thead>
        <tbody><?php
        while($rows=mysqli_fetch_assoc($result)){
        ?>
    <tr style="color:black;">
            <td class="py-2"><?php echo $rows['id']?></td>
            <td class="py-2"><?php echo $rows['name']?></td>
            <td class="py-2"><?php echo $rows['email']?></td>
            <td class="py-2"><?php echo $rows['balance']?></td>
            <td class="py-2"><?php echo $rows['date']?></td>
           <!-- <td><a href="?id=<?php echo $rows['id'];?>"><button type="button" class="btn" style="background-color:blue;">-->
</tr>  
<?php
}
?>  
    </tbody>
</table>
        </div>
    </div>
</div>
    </div>
</body>
<html>