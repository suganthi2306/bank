<!DOCTYPE html>
</html>
<head>
    <style>
          @import url('https://fonts.googleapis.com/css?family=Balsamiq+Sans|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
       /* body{
           background-image:url(bank.jpg);
            background-repeat: no-repeat;
           width: 100%;
            height: auto;
             overflow: hidden;
            background-size: cover;  
           
        } */
        .background {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      /*-webkit-filter: blur(10px); 
      filter: blur(7px);*/
      
      box-shadow: 7px 7px 60px #000;
                background-color:rgba(100,100,100,0.6);
      
      
      color:black;
      }
     
     label{
         font-size: 20px;
     }

         
        .table{
           font-size: 20px;
            text-align: center;
            align:center;
        }
        .container{
            align:center;
        }
        td{
            width:200px;
            background-color:blanchedalmond;
            color:black;
            align:center;
        }
        tr{
            width:40px;
            height: 70px;
            
        }
        th{
            background-color:blanchedalmond;
        }
        form{
            align-content: center;
            margin-left: 850px;
            margin-top: 100px;
            color:white;
        }
        #box{
            height:40px;
            width:200px;
            
            margin-bottom: 40px;
            
        }
        #succ{
            font-size: 20px;
        color: white;
        text-align: center;
        }
        .button{
            height:40px;
            width:250px;
            
            margin-left: 110px;
            margin-top: 5px;
            background-color: blanchedalmold;
            color:#000;
            border-color: blanchedalmond;
            font-family:"Balsamiq Sans";
            font-size: 16px;
            box-shadow:4px 4px peru;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
           
            margin: 30px;

        }

        .button:hover{
            height:40px;
            width:250px;
            
            margin-left: 200px;
            margin-top: 5px;
            color: white;
            background-color: transparent;
            color:#000;
            border-color: blanchedalmond;
            font-family:"Balsamiq Sans";
            font-size: 16px;
            box-shadow:4px 4px peru;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
           
            margin: 30px;
        }
        #trans{
           
            color:white;
            font-weight: bold;
            font-size: large;
        }


       
        
        </style>
       
<title>customers</title>
</head>
<body>
<div>
            <img class="background" src="bank.png">
</div>

<?php
include_once "config1.php";
            if(isset($_GET['submit'])){
                $fid=$_GET['id'];
                $gid=$_GET['id'];
                $gamount=$_GET['amount'];
                if(($gamount)<0)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("error-negative value")';
                    echo '</script>';
                }
            
        
                else if($gamount==0)
                {
                    echo '<script type="text/javascript">';
                    echo'alert("error- 0 balance")';
                    echo'</script>';
                }
                $sql="SELECT balance FROM user WHERE id='$gid'";
                //$query="SELECT balance FROM user WHERE idf='$fid'";
                $total=0;
                $res=$conn->query($sql);
               // $res1=$conn->query($query);
                while($rows=mysqli_fetch_assoc($res)){
                    $am = $rows['balance'];
                    $total = $am+$gamount;
                    $ded=$am-$gamount;
                    
                    
                }
                
                $db="UPDATE user SET balance='$total' WHERE id='$gid'";
                //$dbb="UPDATE user SET balance='$ded' WHERE idf='$fid'";
                $res=$conn->query($db);
               // $res1=$conn->query($dbb);
               
        
        }

    ?>

    
<form method="get" > 
<label id="from">From A/C : </label>
<input type="text" name="idf" id="box"><br>
<label id="from">To A/C: &nbsp;  &nbsp; </label>
<input type="text" name="id" id="box"><br>
<label id="from">Amount: </label>
<input type="number" name="amount" id="box"><br>
<button name="submit" class="button">Transfer</button>

        </form>




<?php



?>
<?php
       include 'config1.php';
       if(isset($_GET['submit'])){
           
        $fid=$_GET['id'];
        $gid=$_GET['id'];

        $sql="SELECT * FROM user WHERE id='$gid'";
        $result=mysqli_query($conn,$sql);
       
        
       

       while($rows=mysqli_fetch_assoc($result)){
            
        
        ?>
        <div class="container">
       <p id="succ">****YOUR TRANSACTION IS SUCCESSFUL****</p>

    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
            <table border="1px solid black" cell spacing="0" align="center" class="table">
        
            <thead style="color:black;">
        <tr>
            <th scope="col" class="text-centre py-2">Account No</th>
            <th scope="col" class="text-centre py-2">Account Holder</th>
            <th scope="col" class="text-centre py-2">Email Id</th>
            <th scope="col" class="text-centre py-2">Account Balance</th>
        </tr></thead>
        <tbody>
    <tr style="color:black;">
            <td class="py-2"><?php echo $rows['id']?></td>
            <td class="py-2"><?php echo $rows['name']?></td>
            <td class="py-2"><?php echo $rows['email']?></td>
            <td class="py-2"><?php echo $rows['balance']?></td>
           <!-- <td><a href="?id=<?php echo $rows['id'];?>"><button type="button" class="btn" style="background-color:blue;">-->
</tr>  
<?php
       }
}
?>  
    </tbody>
</table>
        </div>
    </div>
</div>
    </div>


</body>
</html>