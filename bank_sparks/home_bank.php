
<!doctype html>
<html>
    
<head>
    
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Arvo|Ubuntu');
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
            float:left;
        }   
        #txt{
            margin-left: 750px;
            font-weight: bolder;
            font-size: 54px;
            font-family:"Arvo";
            color:white;
            margin-top: 100px;
            
        }
        #txt2{
             margin-left: 750px;
            font-weight:normal;
            font-size: 24px;
            font-family: "Balsamiq Sans";
            color:white;
             }
        #btn{
            background-color:blanchedalmond;
               opacity: inherit;
           
            margin-top: 20px;
             margin-left: 750px;
            font-size: 24px;
            width: 250px;
            border-color:blanchedalmond;
                height: 50px;
            color: black;
            font-family: "Balsamiq Sans";
        }
        #btn:hover{
            background-color:transparent;
           
               opacity: inherit;
               border-color:blanchedalmond;
            margin-top: 20px;
             margin-left: 750px;
            font-size: 24px;
            width: 250px;
           
                height: 50px;
            color: white;
            font-family: "Balsamiq Sans";
        }


        #name{
            font-family: "Balsamiq Sans";
            margin-top:2px;
            font-weight: bold;
            font-size: 20px;
            color:white;
            margin-left: 14px;
        }
        
        
        .topnav {
  overflow: hidden;
  
}

.topnav a {
  float: right;
  color: blanchedalmond;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: 700;
  font-family: "Balsamiq Sans";
}

.topnav a:hover {
  background-color: #102A33;
  color: white;
    font-style: bold;
    font-weight: 700;
}

.topnav a.active {
  background-color: #102A33;
  color: white;
    font-weight: 700;
    
}
        
        #link{
            color:black;
            text-decoration: none;
        }

        
    </style>
    
    <body id="body">
        <div class="topnav" style="display:flex">
           
            <p id="name">SM BANK</p>
            <a href="#" style="padding-left: 65%;">About Us</a>
            <a href="#contact">Contact Us</a>
            <a href="#about">Help</a>
        </div>
        <div>
            <p id="txt">Accept Payments<br> Everywhere</p>
            <p id="txt2">Meet the payments platform built for any business<br> and every customer journey.</p>
            <button   id="btn" type="submit"><a id="link" href="bank2.php">Get Started</a></button>
            
        </div>
    </body>
</html>
