<html>
<?php session_start(); ?>
<head>
    <title>Assembled Computer store</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="logoheader.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: verdana;
        }

        body {
            margin: 0;
            padding: 0;
        }

        #main {
            width: 100%;
            height: 100%;
        }

        #logo {
            width: 100%;
            height: 100px;
            background: #1F6521;
            float: left;
        }

        #logo img {

            margin: 12.5px 0 0 12.5px;
            width: 75px;
            height: 75px;
            float: left;
            padding-right: 12.5px;
        }

        #logo h1 {
            color: white;

        }
        #divlogobox{
            float:left;
            width:70%;
            height:100px;
        }
        
        #divlogoboxright{
            float:left;
            width:30%;
            height:100px;
            background: yellow;
        }

        #divlinks {
            width: 20%;
            height: 600px;
            background: #86C232;
            float: left;
        }
        
        #divlinks ul li{
            color:white;
        }

        #divlinkscontent {
            width: 80%;
            height: 600px;
            background: #FBE8A6;
            float: left;
            overflow-y: scroll;
        }

        .container {
            width: 100%;
            height: 100%;
        }

        .container p {
            padding-left: 25px;
            padding-right: 25px;
        }

        .container h1 {
            padding-left: 25px;

        }

        .listing {
            width:auto;
            height:auto;
            background:white;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            float: left;
        }
        .listing table{
            border-collapse: collapse;
        }
        .dispatch{
            background: lightgreen;
            width:100%;
            height:100%;
        }
        .remove{
            background:red;
        }
        .cancelorder{
            background: red;
        }

         .navbutton h1{
            background: yellow;
        }
        
        table ~ h1{
            background: yellow;
            margin:0;
            padding:0;
            width:auto;
            display:inline-block;
        }
        #footer {
            width: 100%;
            height: 100px;
            background: orange;
            text-align: center;
            float: left;
        }
        
        @media only screen and (max-width:600px)
        {
            #main{
                width:100%;
                float:left;
            }
            #logo{
                width:100%;
                height: 200px;
                float:left;
            }
            #divlogobox{
                width:100%;
                float:left;
            }
            
            #divlogobox h1{
                font-size:15px;
                
            }
            #divlogoboxright{
                
                width:100%;
                float:left;
            }
            #divlinks{
                display:none;
                width:100%;
                height:auto;
                float:left;
            }
            #divlinks ul{
                width:100%;
                float:left;
            
            }
            $divlinks ul li{
                
                width:100%;
                float:left;
                
                
            }
            #divlinkscontent{
                width:100%;
                float:left;
                height:auto;
            }
            .container{
                width:100%;
                height:auto;
            }
            .container h1{
                font-size: 20px;
            }
            .listing{
                width:100%;
            }
            .listing table{
                width:90%;
                border:0;
            }
            .listing table thead{
                display:none;
            }
            .listing table tr{
                width:100%;
                margin-bottom:20px;
                display:block;
                border-bottom:2px solid black;
                box-shadow: 2px 2 px 1px black;
                background: aqua;
                
            }
            .listing table td{
                display:block;
                text-align:right;
                
            }
            .listing table td:last-child{
                border-bottom: 0;
            }
            .listing table td:before{
                content:attr(data-label);
                float:left;
                font-weight:bold;
            }
            #footer{
                width:100%;
            }
            
        }

    </style>
    <script src="jquery-3.4.1.js"></script>
    <script src="jQuery-ui.js"></script>
    <script>
        $(document).ready(function() {
            
            $("#divorders").show();
            $("#divlinks ul li a").click(function() {
                $(".container").hide();
                var id = this.id;

                $("#div" + id).show();
            });
        });

    </script>

</head>

<body>
    <div id="main">
        <div id="logo">
            <div id="divlogobox">
           <a href="indexmain.php"> <img src="img/logo.png" />
            <h1>Assembled Computer Store</h1></a>
                </div>
            <div id="divlogoboxright">
                            



                
               <h5><a href="login.php">Login</a>&nbsp;&nbsp;<a href="logout.php">Logout</a>
        </h5>
                
                <h5>Welcome, <?php if(isset($_SESSION["cusername"])){ echo "<b style='color:red;'>".$_SESSION["cusername"]."</b>&nbsp;&nbsp;<a id='yorders'>Your Orders</a>"; }else{ echo "Guest"; } ?></h5>
 
   
                
            </div>
        </div>
        <div id="divlinks">
            <ul>
                <!--<li><a id="processor">(1)Processor</a></li>
                <li><a id="motherboard">(2)Motherboard</a></li>
                <li><a id="cpucooler">(3)CPU Cooler</a></li>
                <li><a id="gpu">(4)Graphic Card</a></li>
                <li><a id="ram">(5)RAM</a></li>
                <li><a id="psu">(6)PSU or Power Supply Unit</a></li>
                <li><a id="hdd">(7)HDD or SDD</a></li>
                <li><a id="cabinet">(8)CPU Cabinet</a></li>-->
            </ul>
        </div>
        <div id="divlinkscontent">
            
            <div id="orders" class="container">
                
                    
                    <h1>Customer Information</h1>
                
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                    <th>Custid</th>
                        <th>Name</th>
                    <th>Address</th>

                    </tr>
                    </thead>
                    
                    <tbody id="orderinfo">
                        
                       <?php
                        if(isset($_SESSION["username"]))
                        {
include("dbconnect.php");
                        
        
$cusername=$_REQUEST["icusername"];

$sqlcust="select * from customers1 where username='$cusername'";

$resultcust=mysqli_query($con,$sqlcust) or die(mysqli_error($con));

while($rescust=mysqli_fetch_array($resultcust)){
    
    echo "
                        <tr>
                    <td data-label='custid'>".$rescust["cust_id"]."</td>
                    <td data-label='name'>".$rescust["cust_name"]."</td>
                    <td data-label='address'>".$rescust["address"]."</td>
                    
                    </tr>";
                            
}
    
                        }else{
            echo "<h1>You are not authorized to access this page</h1>";
        }
                            
                            ?>
                    </tbody>
                    </table>
                    
                
            
            </div>
            
            </div>
            
            </div>
            </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
    </div>
</body>

</html>
