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
                            <h5><a href="login.php"><img src="img/admin.png" /></a></h5>
                            <h5><a href="logout.php">Logout</a></h5>
                        </div>
        </div>
        
        <div id="panel">
        <?php
session_start();
            
if(isset($_SESSION["username"]))
{


echo "<h4>Welcome to Admin panel, User <b style='color:red;'>".$_SESSION["username"]."</b></h4>";
}
else{
    
    header("location:login.php");
}
?>
        </div>
        
        
        <div id="divlinks">
            <ul>
                <li><a id="orders">Orders</a></li>
                <li><a id="products">Products Settings</a></li>
                <li><a id="adminsettings">Admin Settings</a></li>
            </ul>
        </div>
        <div id="divlinkscontent">
            <div id="divadminsettings" class="container">
            <div id="signup">
                    <div class="listing">
    <div id="signupbox">
        <h1>Add Admin</h1>
<form action="signup.php" method="post">
    <p>Enter Name<input type="text" name="icust_name" /></p>
    <p>Enter Username<input type="text" name="iusername" /></p>
    <p>Enter Password<input type="password" name="ipassword" /></p>
    <p>Security Question: What is your first school name?<input type="text" name="isecurityanswer" /></p>
    <p>Address:<textarea name="iaddress" ></textarea></p>
    <p><input type="submit" value="Signup" /></p>
       

</form>
        </div>
</div>
                </div>
            
            </div>
            
            <div id="divorders" class="container">
      
                <h1>Orders</h1>
                <p>Here we will receive all orders list.</p>
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                    <th>Orderid</th>
                    <th>ODate</th>
                    
                    <th>Proid</th>
                    <th>Moboid</th>
                    <th>Cpucoolerid</th>
                    
                    <th>Gpuid</th>
                    <th>RAMid</th>
                    
                    <th>Psuid</th>
                    <th>Storageid</th>
                    <th>Caseid</th>
                    
                    <th>Price</th>
                    <th>Cusername</th>
                    <th>Dispatch</th>
                    <th>Cancel</th>
                    </tr>
                        
                    </thead>
                    <tbody id="orderinfo">
                        
                        <?php
                        
include("dbconnect.php");
                        


                 


$sqlcust="select * from orders";

$resultcust=mysqli_query($con,$sqlcust) or die(mysqli_error($con));

while($rescust=mysqli_fetch_array($resultcust)){
    $cusername=$rescust["cusername"];
    
    echo "
                        <tr>
                    <td data-label='orderid'>".$rescust["orderid"]."</td>
                    <td data-label='odate'>".$rescust["odate"]."</td>
                    <td data-label='proid'>".$rescust["proid"]."</td>
                    <td data-label='moboid'>".$rescust["moid"]."</td>
                    <td data-label='cpucoolerid'>".$rescust["coolid"]."</td>
                    <td data-label='gpuid'>".$rescust["gpuid"]."</td>
                    <td data-label='ramid'>".$rescust["ramid"]."</td>
                    <td data-label='psuid'>".$rescust["psuid"]."</td>
                    <td data-label='hddid'>".$rescust["hddid"]."</td>
                    <td data-label='caseid'>".$rescust["caseid"]."</td>
                    <td data-label='Total'>".$rescust["total"]."</td>
                    <td data-label='Cusername'><a href='customerinfo.php?icusername=$cusername'>".$rescust["cusername"]."</a></td>
                    <td><a href='#' class='dispatch'>Reorder</a></td>
                    <td><a href='#' class='cancelorder' >Cancel</a></td>
                    </tr>";
                            
}

                            
                            ?>
                    </tbody>
                    
                    </table>
                </div>
                
            </div>
            <div id="divproducts" class="container">
                          
                <h1>Products Settings</h1>
                <p>This is product settings page.</p>
                
                
                <div class="listing">
                <table border="1">
                    <tr>
                    <th>RelationName</th>
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
                    <th>Edit</th>
                    <th>Delete</th>
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
                    <td><a href="#" class="dispatch">Edit</a></td>
                    <td><a href="#" class="cancelorder" >Delete</a></td>
                    </tr>
                    </table>
                </div>
                <div id="productsettings">
                <div class="listing">
                    <h3>STEP1:Add Processors</h3>
    <form action="insertprocessor.php" method="post" enctype="multipart/form-data">
                   
        <p>CPU Brand<input type="text" name="icpubrand" /><?php $branderror; ?></p>
        <p>CPU Model/Name<input type="text" name="icpumodel" /></p>
        <p>CPU Image<input type="file" name="icpuimage" /></p>
        <p>CPU Socket<input type="text" name="icpusocket" /></p>
        <p>Core Count<input type="text" name="icorecount" /></p>
        <p>Core Clock<input type="text" name="icoreclock" /></p>
        <p>Boost Clock<input type="text" name="iboostclock" /></p>
        <p>TDP<input type="text" name="itdp" /></p>
        <p>Simutaneous threading<select name="isthreading"><option>yes</option><option>no</option></select></p>
        <p>Integrated Graphics<select name="iintegratedgraphics"><option>yes</option><option>no</option></select></p>
        <p>Price<input type="text" name="iprice" /></p>
        <p>Qty<input type="text" name="ipqty" /></p>
        <p>Relation Name<input type="text" name="irelationname" /></p>
        <p>Ramtype(ddr4,ddr5)<input type="text" name="iramtype" /></p>
        
        <?php 
        $cpubrand=$cpumodel=$cpusocket=$corecount=$coreclock=$boostclock=$tdp=$sthreading=$intergratedgraphics=$price=$pqty=$relationname=$ramtype="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $cpubrand=test_input($_REQUEST["icpubrand"]);
            $cpumodel=test_input($_REQUEST["icpumodel"]);
            $cpusocket=test_input($_REQUEST["icpusocket"]);
            $corecount=test_input($_REQUEST["icorecount"]);
            $coreclock=test_input($_REQUEST["icoreclock"]);
            $boostclock=test_input($_REQUEST["iboostclock"]);
            $tdp=test_input($_REQUEST["itdp"]);
            $sthreading=test_input($_REQUEST["isthreading"]);
            $integratedgraphics=test_input($_REQUEST["iintegratedgraphics"]);
            $price=test_input($_REQUEST["iprice"]);
            $pqty=test_input($_REQUEST["ipqty"]);
            $relationname=test_input($_REQUEST["irelationame"]);
            $ramtype=test_input($_REQUEST["iramtype"]);
        }
        
        function test_input($data){
            $data=trim($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        ?>
        <p><input type="submit" value="Add Processor" /></form></p>
        <p><form action="processordb.php" method="post"><input type="submit" value="Edit Processor" /></form></p>

                    
                </div>
                
                
                
                    
                    <div class="listing">
                    <h3>STEP2:Add Motherboard</h3>
    <form action="insertmotherboard.php" method="post" enctype="multipart/form-data">
                   
        <p>Motherboard Brand<input type="text" name="imotherboardbrand" /></p>
        <p>Motherboard Model/Name<input type="text" name="imotherboardmodel" /></p>
        <p>Motherboard Image<input type="file" name="imotherboardimage" /></p>
        <p>Motherboard (Form Factor) Type<input type="text" name="imotherboardtype" /></p>
        <p>CPU Socket<input type="text" name="icpusocket" /></p>
        <p>Memory max<input type="text" name="imotherboardmemorymax" /></p>
        <p>Memory slots<input type="text" name="imotherboardmemoryslots" /></p>
        <p>PCI slots<input type="text" name="imotherboardpcislots" /></p>
        <p>Price<input type="text" name="imprice" /></p>
        <p>Qty<input type="text" name="imqty" /></p>
        <p>Ramtype(ddr4,ddr5) Name<input type="text" name="iramtype" /></p>
        <p><input type="submit" value="Add Motherboard" /></p>
</form>
                    
                </div>
                    
                    
                    
                    <div class="listing">
                    <h3>STEP3:Add CPU Cooler</h3>
    <form action="insertcpucooler.php" method="post" enctype="multipart/form-data">
                   
        
        <p>CPUcooler Model<input type="text" name="icpucoolermodel" /></p>
        <p>CPUcooler Image<input type="file" name="icpucoolerimage" /></p>
        <p>Fan RPM<input type="text" name="ifanrpm" /></p>
        <p>Noise Level<input type="text" name="inoiselevel" /></p>
        <p>CPU TDP<input type="text" name="icputdp" /></p>
        <p>Size length(cm)<input type="text" name="isizel" /></p>
        <p>Size breadth(cm)<input type="text" name="isizeb" /></p>
        <p>Size height(cm)<input type="text" name="isizeh" /></p>
        
        
        <p>Price<input type="text" name="iprice" /></p>
        <p>Qty<input type="text" name="icoolerqty" /></p>
        <p>Retation Name<input type="text" name="irelationname" /></p>
        <p><input type="submit" value="Add CPU Cooler" /></p>
</form>
                    
                </div>
                    
                    
                    <div class="listing">
                    <h3>STEP4:Add GPU</h3>
    <form action="insertgpu.php" method="post" enctype="multipart/form-data">
                   
        <p>GPU brand<input type="text" name="igpubrand" /></p>
        <p>GPU Model/Name<input type="text" name="igpumodel" /></p>
        <p>gpu Image<input type="file" name="igpuimage" /></p>
        <p>GPU Memory<input type="text" name="igpumemory" /></p>
        <p>Core Clock<input type="text" name="icoreclock" /></p>
        <p>Boost Clock<input type="text" name="iboostclock" /></p>
        <p>GPU PCI Interface(isa,pci,pciexpress,pcix,agp)<input type="text" name="igpuinterface" /></p>
        <p>Price<input type="text" name="igprice" /></p>
        <p>Qty<input type="text" name="igqty" /></p>
        
        <p><input type="submit" value="Add Motherboard" /></p>
</form>
                    
                </div>
                    
                    
                    <div class="listing">
                    <h3>STEP5:Add Ram</h3>
    <form action="insertram.php" method="post" enctype="multipart/form-data">
                   
        <p>Ram brand<input type="text" name="irambrand" /></p>
        <p>Ram Model/Name<input type="text" name="irammodel" /></p>
        <p>Ram Image<input type="file" name="iramimage" /></p>
        <p>Ram Memory<input type="text" name="irammemory" /></p>
        <p>RAM type(DDR4,DDR5)<input type="text" name="iramtype" /></p>
        
        
        <p>Price<input type="text" name="irprice" /></p>
        <p>Qty<input type="text" name="irqty" /></p>
        
        <p><input type="submit" value="Add Ram" /></p>
</form>
                    
                </div>
                    
                   <div class="listing">
                    <h3>STEP6:Add PSU</h3>
    <form action="insertpsu.php" method="post" enctype="multipart/form-data">
                   
        <p>psu brand<input type="text" name="ipsubrand" /></p>
        <p>psu Model/Name<input type="text" name="ipsumodel" /></p>
        <p>psu Image<input type="file" name="ipsuimage" /></p>
        <p>PSU tdp<input type="text" name="ipsutdp" /></p>
        <p>Form Factor<input type="text" name="ipsuformfactor" /></p>
        
        
        <p>Price<input type="text" name="ipprice" /></p>
        <p>Qty<input type="text" name="ipqty" /></p>
        
        <p><input type="submit" value="Add PSU" /></p>
</form>
                    
                </div> 
                    
                    
                    <div class="listing">
                    <h3>STEP7:Add Storage</h3>
    <form action="inserthdd.php" method="post" enctype="multipart/form-data">
                   
        <p>hdd brand<input type="text" name="ihddbrand" /></p>
        <p>hdd Model/Name<input type="text" name="ihddmodel" /></p>
        <p>hdd Image<input type="file" name="ihddimage" /></p>
        <p>hdd type<select name="ihddtype"><option>hdd</option><option>ssd</option></select></p>
        <p>hdd capacity<select name="ihddcapacity"><option>1</option><option>2</option></select></p>
        
        
        <p>Price<input type="text" name="ihprice" /></p>
        <p>Qty<input type="text" name="ihqty" /></p>
        
        <p><input type="submit" value="Add HDD" /></p>
</form>
                    
                </div> 
                    
                  <div class="listing">
                    <h3>STEP8:Add Case</h3>
    <form action="insertcase.php" method="post" enctype="multipart/form-data">
                   
        <p>Case brand<input type="text" name="icasebrand" /></p>
        <p>Case Model/Name<input type="text" name="icasemodel" /></p>
        <p>Case Image<input type="file" name="icaseimage" /></p>
        <p>Case type<select name="icasetype"><option>atx</option><option>fulltower</option><option>midtower</option><option>ninitower</option><option>slimline</option><option>ssf</option></select></p>
        
        
        
        <p>Price<input type="text" name="icaprice" /></p>
        <p>Qty<input type="text" name="icaqty" /></p>
        
        <p><input type="submit" value="Add Case" /></p>
</form>
                    
                </div>   
                    

                </div>
                
                
                
            </div>
            
        </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
        </div>
    </body>

</html>



