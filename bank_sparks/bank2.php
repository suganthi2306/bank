<<!doctype html>
<html>
    
<head>
    
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    
    <style>
         @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
         @import url('https://fonts.googleapis.com/css?family=Balsamiq+Sans|Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Montserrat');
        body{
           background-image:url(bank.png);
            background-repeat: no-repeat;
           width: 100%;
            height: auto;
             overflow: hidden;
            background-size: cover;  
            
        } 
        button:hover{
            height: 60px;
            width: 280px;
            color:whitesmoke;
            background-color: transparent;
            font-family: "Balsamiq Sans";
            font-weight: bold;
            font-size: 20px;
            border-color:snow;
        
            
        }  
        button{
            border-color:burlywood  ;
            height: 60px;
            width: 280px;
       
            color:black;
            background-color: blanchedalmond;
            font-family: "Balsamiq Sans";
            font-weight: bold;
            font-size: 20px;
            
        }
        #one{
            margin-top: 350px;
            margin-left: 250px;
            
        }
        #two{
            margin-left: 100px;
          
        }
        #three{
            margin-left: 100px;
        
        }
        a{
            text-decoration: none;
            color:black;
        }
        </style>
        <button id="one" type="submit" href="customer.php"><a href="customer.php">View Customers</a></button>
        <button id="two"type="submit"><a href="new.php">Make Transaction</a></button>
        <button id="three"><a href="thistory.php"> Transaction History</a></button>
</html>