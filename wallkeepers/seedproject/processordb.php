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
                
                    
                    <h1>Processor Information</h1>
                
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                    <th>Cpuid</th>
                        <th>model</th>
                        <th>image</th>
                        <th>cpusocket</th>
                    <th>corecount</th>
                    <th>coreclock</th>
                        <th>boostclock</th>
                        <th>tdp</th>
                        <th>sthreading</th>
                        <th>Graphics</th>
                        <th>price</th>
                        <th>qty</th>
                        <th>rname</th>
                        <th>cpubrand</th>
                        <th>ramtype</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    
                    <tbody id="processorinfo">
                        
                       <?php
                        
include("dbconnect.php");
                        
        


$sqlcust="select * from processor";

$resultcust=mysqli_query($con,$sqlcust) or die(mysqli_error($con));

while($rescust=mysqli_fetch_array($resultcust)){
    
    echo "
    <form action='editprocessorinfo.php' method='post' enctype='multipart/form-data' >
    
                        <tr>
                    <td data-label='cpuid'>".$rescust["cpuid"]." <input type='hidden' value='".$rescust["cpuid"]."' name='icpuid' /></td>
                    <td data-label='model'><input type='text' value='".$rescust["cpumodel"]."' name='icpumodel' /></td>
                    <td data-label='image'><a href='".$rescust["cpuimage"]."'><img src='".$rescust["cpuimage"]."' width='50px' height='50px' /></a><input type='file' name='icpuimage' /></td>
                    <td data-label='socket'><input type='text' value='".$rescust["cpusocket"]."' name='icpusocket' /></td>
                    <td data-label='corecount'><input type='text' value='".$rescust["corecount"]."' name='icorecount' /></td>
                    <td data-label='coreclock'><input type='text' value='".$rescust["coreclock"]."' name='icoreclock' /></td>
                    <td data-label='boostclock'><input type='text' value='".$rescust["boostclock"]."' name='iboostclock' /></td>
                    <td data-label='tdp'><input type='text' value='".$rescust["tdp"]."' name='itdp' /></td>
                    <td data-label='threading'><input type='text' value='".$rescust["sthreading"]."' name='isthreading' /></td>
                    <td data-label='graphics'><input type='text' value='".$rescust["integratedgraphics"]."' name='iintegratedgraphics' /></td>
                    <td data-label='price'><input type='text' value='".$rescust["price"]."' name='iprice' /></td>
                    <td data-label='qty'><input type='text' value='".$rescust["qty"]."' name='ipqty' /></td>
                    <td data-label='rname'><input type='text' value='".$rescust["relationname"]."' name='irelationname' /></td>
                    <td data-label='brand'><input type='text' value='".$rescust["cpubrand"]."' name='icpubrand' /></td>
                    <td data-label='ram'><input type='text' value='".$rescust["ramtype"]."' name='iramtype' /></td>
                    <td data-label='edit'><input type='submit' value='Edit' /></td>
                    </tr></form>";
                            
}
                            
                            ?>
                    </tbody>
                    </table>
                    
                
            
            </div>
            
            
            
            </div>
            </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
    </div>
</body>

</html>
