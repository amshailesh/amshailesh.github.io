<html>


<head>
<title>Admin Panel</title> 
        <link rel="stylesheet" type="text/css" href="logoheader.css">
    <style>
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
            background: orange;
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
        }
        .cancelorder{
            background: red;
        }
        #footer {
            width: 100%;
            height: 100px;
            background: orange;
            text-align: center;
            float: left;
        }
        #divproducts{
            display:grid;
            grid-template-columns:auto;
        }
        #productsettings{
            float:left;
            display:grid;
            grid-template-columns: 1fr 1fr;
        }
    </style>
<script src="jquery-3.4.1.js"></script>
    <script src="jQuery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $(".container").hide();
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
                       <a href="indexmain.php" > <img src="img/logo.png" />
                        <h1>Assembled Computer Store</h1></a>
                            </div>
                        <div id="divlogoboxright">
                            
                            <h5><a href="logout.php">Logout</a></h5>
                        </div>
        </div>
        
        <div id="panel">
        <?php
session_start();
            
if(isset($_SESSION["cusername"]))
{


echo "<h4>Welcome to Orders Page User <b style='color:red;'>".$_SESSION["cusername"]."</b></h4>";
}
else{
    
    header("location:indexmain.php");
}
?>
        </div>
        
        
        <div id="divlinks">
            <ul>
                <li><a id="orders">Orders</a></li>
            </ul>
        </div>
        <div id="divlinkscontent">
            <div id="divadminsettings" class="container">
            
            
            </div>
            
            <div id="divorders" class="container">
      
                <h1>Orders</h1>
                <p>Here we will receive all orders list.</p>
                <div class="listing">
                <table border="1">
                    <tr>
                    <th>Orderid</th>
                    <th>Caseid</th>
                    <th>Moboid</th>
                    <th>Cpuid</th>
                    <th>RAMid</th>
                    <th>Gpuid</th>
                    <th>Cpucoolerid</th>
                    <th>Psuid</th>
                    <th>Storageid</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Dispatch</th>
                    <th>Cancel</th>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="dispatch">Dispatch</a></td>
                    <td><a href="#" class="cancelorder" >Cancel</a></td>
                    </tr>
                    </table>
                </div>
                
            
                
            </div>
            
        </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
        </div>
    </body>

</html>



