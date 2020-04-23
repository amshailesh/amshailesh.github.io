<html>

<head>
    <title>Assembled Computer store</title>
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

    </style>
    <script src="jquery-3.4.1.js"></script>
    <script src="jQuery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $(".container").hide();
            $("#divprocessor").show();
            $("#divlinks ul li a").click(function() {
                $(".container").hide();
                var id = this.id;

                $("#div" + id).show();
            });
            $("#nextmobo").click(function(){
                
                $(".container").hide();
                $("#divmotherboard").show();
            });
            
            $("#prevmobo").click(function(){
                
                $(".container").hide();
                $("#divmotherboard").show();
            });
            
            $("#prevpro").click(function(){
                
                $(".container").hide();
                $("#divprocessor").show();
            });
            
            
            $("#nextcpucool").click(function(){
                
                $(".container").hide();
                $("#divcpucooler").show();
            });
            
            $("#prevcpucool").click(function(){
                
                $(".container").hide();
                $("#divcpucooler").show();
            });
            
            $("#nextgpu").click(function(){
                
                $(".container").hide();
                $("#divgpu").show();
            });
            
            $("#prevgpu").click(function(){
                
                $(".container").hide();
                $("#divgpu").show();
            });
            
            $("#nextram").click(function(){
                
                $(".container").hide();
                $("#divram").show();
            });
            
            $("#prevram").click(function(){
                
                $(".container").hide();
                $("#divram").show();
            });
            
            $("#nextpsu").click(function(){
                
                $(".container").hide();
                $("#divpsu").show();
            });
            
            $("#prevpsu").click(function(){
                
                $(".container").hide();
                $("#divpsu").show();
            });
            
            $("#nexthdd").click(function(){
                
                $(".container").hide();
                $("#divhdd").show();
            });
            
            $("#prevhdd").click(function(){
                
                $(".container").hide();
                $("#divhdd").show();
            });
            
            $("#nextcabinet").click(function(){
                
                $(".container").hide();
                $("#divcabinet").show();
            });
            
            $("#prevcabinet").click(function(){
                
                $(".container").hide();
                $("#divcabinet").show();
            });
            
            
        });

    </script>

</head>

<body>
    <?php session_start(); ?>
    <div id="main">
        <div id="logo">
            <div id="divlogobox">
           <a href="indexmain.php"> <img src="img/logo.png" />
            <h1>Assembled Computer Store</h1></a>
                </div>
            <div id="divlogoboxright">
                             <?php



if(isset($_COOKIE["productmodel"]))
{
   $arr=explode("-",$_COOKIE["productmodel"]);
    $count=count($arr);
}
else{
    $count=0;
}?>
                <h5><a href="login.php">Login Admin / Customer Signup</a></h5>
                <h5><a href="logout.php">Logout</a>&nbsp;<a href="checkout.php">(<?php echo $count; ?>)Products</a></h5>
                
   
                
            </div>
        </div>
        <div id="divlinks">
            <ul>
                <li><a id="processor">(1)Processor</a></li>
                <li><a id="motherboard">(2)Motherboard</a></li>
                <li><a id="cpucooler">(3)CPU Cooler</a></li>
                <li><a id="gpu">(4)Graphic Card</a></li>
                <li><a id="ram">(5)RAM</a></li>
                <li><a id="psu">(6)PSU or Power Supply Unit</a></li>
                <li><a id="hdd">(7)HDD or SDD</a></li>
                <li><a id="cabinet">(8)CPU Cabinet</a></li>
                
                
                
            </ul>
        </div>
        <div id="divlinkscontent">
            <div id="divcabinet" class="container">
                <h1>STEP8: Select CPU Cabinet</h1>
                <p>CPU Cabinet is a Box in which all the CPU parts are fitted.</p>
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                   
                    <th>Cabinetid</th>
                    <th>Cabinet name or Model</th>
                    <th>Cabinet image</th>
                    <th>Cabinet Type</th>
                    <th>External Bays</th>
                    <th>Internal bays</th>
                    
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                    </thead>
                    <tbody id="#cabinetlist">
                        
                    
                        <?php
                        
include("dbconnect.php");

$sql="select * from cabinet";

$resultcabinet=mysqli_query($con,$sql) or die(mysqli_error($con));

while($rescabinet=mysqli_fetch_array($resultcabinet)){
    
    echo "
                    <tr>
                    <td>".$rescabinet["cabinetid"]."</td>
                    <td>".$rescabinet["cabinetmodel"]."</td>
                    <td><a href='".$rescabinet["cabinetimage"]."'><img src='".$rescabinet["cabinetimage"]."' width='50px' height='50px' /></a></td>
                    <td>".$rescabinet["cabinettype"]."</td>
                    <td>".$rescabinet["externalbays"]."</td>
                    <td>".$rescabinet["internalbays"]."</td>
                    
                    <td>".$rescabinet["cprice"]."</td>
                    <td><a href='#' class='dispatch'>Add to cart</a></td></tr>";
    
}

                        ?>
                    
                    
                    
                        </tbody>
                    </table>
                    
                     
                
                
                    <h1 id="prevhdd" class="navbutton">PREVIOUS</h1>
                </div>
            </div>
            <div id="divprocessor" class="container">
                <h1>STEP1: Please select Processor</h1>
                <p>Processor or CPU(Central Processing Unit) is a small electronic chip which plugs into motherboard. It is the hardware part which process all the data in the computer.</p>
                <div class="listing">
                
                <table border="1">
                    <thead>
                    <tr>
                   
                    
                    <th>CPU Model</th>
                    <th>Cpu image</th>
                    <th>Cpu socket</th>
                    <th>Core Count</th>
                    <th>Core Clock</th>
                    <th>Boost Clock</th>
                    <th>TDP</th>
                    <th>Simultaneous Threading</th>
                    <th>Integrated Graphics</th>
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                        </thead>
                    <tbody id="#processorlist">
                        
                    
                        <?php
                        
include("dbconnect.php");

$sql="select * from processor";

$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($res=mysqli_fetch_array($result)){
    
    $cpumodel=$res["cpumodel"];
    $cpusocket=$res["cpusocket"];
    $relationname=$res["relationname"];
    
    
    echo "
                
    
                    <tr>
                    
                    <td>".$res["cpumodel"]."</td>
                    <td><a href='".$res["cpuimage"]."'><img src='".$res["cpuimage"]."' width='50px' height='50px' /></a></td>
                    <td>".$res["cpusocket"]."</td>
                    <td>".$res["corecount"]."</td>
                    <td>".$res["coreclock"]."</td>
                    <td>".$res["boostclock"]."</td>
                    <td>".$res["tdp"]."</td>
                    <td>".$res["sthreading"]."</td>
                    <td>".$res["integratedgraphics"]."</td>
                    <td>".$res["price"]."</td>
                    <td><a href='addproductcookie.php?iproductmodel=$cpumodel&icpusocket=$cpusocket&irelationname=$relationname' class='dispatch'>Add to cart</a></td></tr>
                    
                    
                    ";
    
}

                        ?>
                    
                    
                    
                        </tbody>
                    </table>
                    <h1 id="nextmobo" class="navbutton">NEXT</h1>
                    
                </div>            
            </div>
            <div id="divcpucooler" class="container">
                <h1>STEP3: Select CPU Cooler</h1>
                <p>Its a fan that cools the CPU.</p>
                <table></table>
                
                <h1 id="nextgpu" class="navbutton">NEXT</h1>
                    <h1 id="prevmobo" class="navbutton">PREVIOUS</h1>
            </div>
            <div id="divmotherboard" class="container">
                <h1>STEP2: Select Motherboard</h1>
                <p>Motherboard is a biggest electronic chip in a computer. All parts of a PC are connected with each other through the motherboard.</p>
                <div class="listing">
                
                <table border="1">
                    <thead>
                    <tr>
                   
                    <th>Motherboardid</th>
                    <th>Motherboard Model</th>
                    <th>Motherboard image</th>
                    <th>Motherboard type</th>
                    <th>Cpu socket</th>
                    <th>Memory max</th>
                    <th>Memory Slots</th>
                    <th>PCI Slots</th>
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                        </thead>
                    <tbody id="#motherboardlist">
                        
                    
                        <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"])) && (isset($_SESSION["relationname"])))
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $relationnamemobo=$_SESSION["relationname"];

    
$sqlmotherboard="select * from motherboard where cpusocket='$cpusocketmobo' and relationname='$relationnamemobo'";
    
    $resultmotherboard=mysqli_query($con,$sqlmotherboard) or die(mysqli_error($con));

while($resmotherboard=mysqli_fetch_array($resultmotherboard)){
    
    echo "
                    <tr>
                    <td>".$resmotherboard["motherboardid"]."</td>
                    <td>".$resmotherboard["motherboardmodel"]."</td>
                    <td><a href='".$resmotherboard["motherboardimage"]."'><img src='".$resmotherboard["motherboardimage"]."' width='50px' height='50px' /></a></td>
                    <td>".$resmotherboard["motherboardtype"]."</td>
                    <td>".$resmotherboard["cpusocket"]."</td>
                    <td>".$resmotherboard["motherboardmemorymax"]."</td>
                    <td>".$resmotherboard["motherboardmemoryslots"]."</td>
                    <td>".$resmotherboard["motherboardpcislots"]."</td>
                    <td>".$resmotherboard["mprice"]."</td>
                    <td><a href='#' class='dispatch'>Add to cart</a></td></tr>";
    
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                    
                    
                    
                        </tbody>
                    </table>
                    
                    <h1 id="nextcpucool" class="navbutton">NEXT</h1>
                    <h1 id="prevpro" class="navbutton">PREVIOUS</h1>
                </div> 
            </div>
            <div id="divram" class="container">
                <h1>STEP5: Select RAM or Random Access Memory</h1>
                <p>RAM or Random Access Memory is a temporary space in a chipset which loads all the programs & softwares so that computer can do its task.</p>
                 <table></table>
                
                <h1 id="nextpsu" class="navbutton">NEXT</h1>
                    <h1 id="prevgpu" class="navbutton">PREVIOUS</h1>
            </div>
            <div id="divgpu" class="container">
                <h1>STEP4: Select GPU or Graphic Card</h1>
                <p>GPU or Graphic Card is a temporary space in a chipset which loads all the programs & softwares so that computer can do its task.</p>
                 <table></table>
                
                <h1 id="nextram" class="navbutton">NEXT</h1>
                    <h1 id="prevcpucool" class="navbutton">PREVIOUS</h1>
            </div>
            <div id="divpsu" class="container">
                <h1>STEP6: Select PSU or Power Supply Unit</h1>
                <p>PSU or Power Supply Unit is a part that supplies all computer parts with electricity.</p>
                 <table></table>
                
                <h1 id="nexthdd" class="navbutton">NEXT</h1>
                    <h1 id="prevram" class="navbutton">PREVIOUS</h1>
            </div>
            <div id="divhdd" class="container">
                <h1>STEP7: Select HDD or SDD or Storage</h1>
                <p>HDD or SDD is a pc part where all data is stored.</p>
                 <table></table>
                
                <h1 id="nextcabinet" class="navbutton">NEXT</h1>
                    <h1 id="prevpsu" class="navbutton">PREVIOUS</h1>
            </div>
        </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
    </div>
</body>

</html>
