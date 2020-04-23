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
            $(".container").hide();
            $("#divdisplaycheckoutitems").show();
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
            $("#yorders").click(function(){
                $(".container").hide();
                $("#orders").show();
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
                             <?php


if(isset($_COOKIE["productmodel"]))
{
   $arr=explode("-",$_COOKIE["productmodel"]);
    $count=count($arr);
}
else{
    $count=0;
}?>
                
               <h5><a href="customerlogin.php">Login</a>&nbsp;&nbsp;<a href="logout.php">Logout</a>&nbsp;&nbsp;<a href="checkout.php">(<?php echo $count; ?>)Checkout</a>
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
                <div class="listing">
                    
                    <h1>Orders</h1>
                <p>Here we will receive all orders list.</p>
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                    <th>Orderid</th>
                        <th>Odate</th>
                    <th>Proid</th>
                    <th>Moboid</th>
                    <th>Coolid</th>
                    <th>Gpuid</th>
                    <th>RAMid</th>
                    
                    <th>Psuid</th>
                    <th>Storageid</th>
                    <th>Caseid</th>
                    
                    <th>Total Rs.</th>
                    <th>Reorder</th>
                    <th>Cancel</th>
                    </tr>
                    </thead>
                    
                    <tbody id="orderinfo">
                        
                       <?php
                        
include("dbconnect.php");
                        
                    
$cusername=$_SESSION["cusername"];

$sqlcust="select * from orders where cusername='$cusername'";

$resultcust=mysqli_query($con,$sqlcust) or die(mysqli_error($con));

while($rescust=mysqli_fetch_array($resultcust)){
    
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
                    <td><a href='#' class='dispatch'>Reorder</a></td>
                    <td><a href='#' class='cancelorder' >Cancel</a></td>
                    </tr>";
                            
}

                            
                            ?>
                    </tbody>
                    </table>
                    
                    
                </div>
                

                
                </div>
            
            </div>
            <div id="divdisplaycheckoutitems" class="container">
                <h1>Checkout</h1>
                <p>Checkout & Place order</p>
                <div class="listing">
                
                <table border="1">
                    <thead>
                    <tr>
                   
                    
                    <th>ProductModel</th>
                    
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total Rs.</th>
                    <th>Remove cart</th>
                        

                    </tr>
                        </thead>
                    <tbody id="#checkoutitems">
                        
                    
                        <?php
                        
                        
                        
include("dbconnect.php");

                        if(isset($_COOKIE["productmodel"]))
{
   $arr=explode("-",$_COOKIE["productmodel"]);
    $count=count($arr);
                            
    
                            
    $arrp=explode("-",$_COOKIE["productprice"]);
    
                            
    $arrq=explode("-",$_COOKIE["productqty"]);
    
                            
                        }
$total=0;
$prd0=0;
$prd1=0;
$prd2=0;
$prd3=0;
$prd4=0;
$prd5=0;
$prd6=0;
$prd7=0;

    for($i=0;$i<$count;$i++)
    {
        $productmodel=$arr[$i];
        $producttype=substr($productmodel,3);
        $subtotal=1*$arrp[$i];
   
        $total+=$subtotal;
        


        echo "
                
    
                    <tr>
                    
                    <td data-label='Product-Model'>".$arr[$i]."</td>
                    
                    <td data-label='Price'>"."Rs."."$arrp[$i]</td>
                    <td data-label='Qty'>1</td>
                    
                    <td data-label='Total-Rs'>Rs.".$subtotal."</td>
                    <td data-label='Remove-cart'><a href='removeproductcookie.php?iproductmodel=$productmodel' class='remove'>Remove</a></td></tr>
                    
                    
                    ";
    

    
}
                       if(isset($total)) 
                       {
                        echo "<tr>
                        <td></td>
                        <td></td>
                        <td>Grand Total</td>
                        <td>Rs.".$total."</td>
                        <td></td>
                        </tr>";
                       }
                        if($count<8)
                        {
                                                        echo "<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h1 style='color:red;background:yellow;'>Select all 8 PC parts first</h1></td>
                        </tr>";
                        }
                        else if($count>=8 && (isset($_SESSION["cusername"])))
                        {
                            $prd0=$arr[0];
                            $prd1=$arr[1];
                            $prd2=$arr[2];
                            $prd3=$arr[3];
                            $prd4=$arr[4];
                            $prd5=$arr[5];
                            $prd6=$arr[6];
                            $prd7=$arr[7];
                            $date=date("Y-m-d");
                            echo "<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href='orderpay.php?ip0=$prd0&ip1=$prd1&ip2=$prd2&ip3=$prd3&ip4=$prd4&ip5=$prd5&ip6=$prd6&ip7=$prd7&itotal=$total&idate=$date' class='dispatch'>Pay & Confirm Order</a></td>
                        </tr>";
                        }
                        else{
                            
                            echo "<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h1 style='color:red;background:yellow;'><a href='customerlogin.php'>Please Login to Pay & Confirm order</a></h1></td>
                        </tr>";
                            
                            
                        }
    

                        
                        ?>
                    
                    
                    
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="divcabinet" class="container">
                <h1>STEP8: Select CPU Cabinet</h1>
                <p>CPU Cabinet is a Box in which all the CPU parts are fitted.</p>
                <div class="listing">
                <table border="1">
                    <thead>
                    <tr>
                   
                    <th>Cabinetid</th>
                    <th>Cabinet brand</th>
                    <th>Cabinet name or Model</th>
                    <th>Cabinet image</th>
                    <th>Cabinet Type</th>
                    
                    
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                    </thead>
                    <tbody id="#cabinetlist">
                        
                    
                        <?php
                        
include("dbconnect.php");

$sql="select * from case1";

$resultcabinet=mysqli_query($con,$sql) or die(mysqli_error($con));

while($rescabinet=mysqli_fetch_array($resultcabinet)){
    
    $casemodel=$rescabinet["casemodel"];
    
    echo "
                    <tr>
                    <td>".$rescabinet["caseid"]."</td>
                    <td>".$rescabinet["casebrand"]."</td>
                    <td>".$rescabinet["casemodel"]."</td>
                    <td><a href='".$rescabinet["caseimage"]."'><img src='".$rescabinet["caseimage"]."' width='50px' height='50px' /></a></td>
                    <td>".$rescabinet["casetype"]."</td>
                    
                    
                    <td>".$rescabinet["caprice"]."</td>
                    <td><a href='addproductcookie.php?iproductmodel=$casemodel' class='dispatch'>Add to cart</a></td></tr>";
    
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
                    <th>Ramtype</th>
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                        </thead>
                    <tbody id="#processorlist">
                        
                        <?php
                        
include("dbconnect.php");
                        
                        if(isset($_SESSION["cpuproductmodel"])){
                            
                           echo "<h2 class='message'>You have selected processor. Click next button</h2>";
                            $sql="select * from processor where cpumodel='".$_SESSION["cpuproductmodel"]."'";
                        }
                        else{
                            $sql="select * from processor";
                        }


$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($res=mysqli_fetch_array($result)){
    
    $cpumodel=$res["cpumodel"];
    $cpusocket=$res["cpusocket"];
    $relationname=$res["relationname"];
    $cputdp=$res["tdp"];
    $cpubrand=$res["cpubrand"];
    $ramtype=$res["ramtype"];
    
    echo "
                
    
                    <tr>
                    
                    <td data-label='cpumodel'>".$res["cpumodel"]."</td>
                    <td data-label='cpuimage'><a href='".$res["cpuimage"]."'><img src='".$res["cpuimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='cpusocket'>".$res["cpusocket"]."</td>
                    <td data-label='corecount'>".$res["corecount"]."</td>
                    <td data-label='coreclock'>".$res["coreclock"]." GHz"."</td>
                    <td data-label='boostclock'>".$res["boostclock"]." GHz"."</td>
                    <td data-label='tdp'>".$res["tdp"]." W"."</td>
                    <td data-label='sthreading'>".$res["sthreading"]."</td>
                    <td data-label='integratedgraphics'>".$res["integratedgraphics"]."</td>
                    <td data-label='ramtype'>".$res["ramtype"]."</td>
                    <td data-label='price'>".$res["price"]."</td>
                    <td data-label='addcart'><a href='addproductcookie.php?iproductmodel=$cpumodel&icpusocket=$cpusocket&icputdp=$cputdp&icpubrand=$cpubrand&iramtype=$ramtype' class='dispatch'>Add to cart</a></td></tr>
                    
                    
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
                <div class="listing">
                <table border="1">
                <thead>
                <tr>
                <th>Cpucoolid</th>
                    <th>CPUcooler Model</th>
                    <th>CPUcooler image</th>
                    <th>Fan RPM</th>
                    <th>Noise Level</th>
                    <th>CPU TDP</th>
                    <th>Size Lxbxh(cm)</th>
                    <th>Price</th>
                    <th>Add Cart</th>
                </tr>    
                </thead>
                <tbody>
                    <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if(isset($_SESSION["cputdp"]))
                       {
                            
                        
                        
                        
                        $cputdp=$_SESSION["cputdp"];
$sqlcpucooler="select * from cpucooler where cputdp='$cputdp'";
    
    $resultcpucooler=mysqli_query($con,$sqlcpucooler) or die(mysqli_error($con));

while($rescpucooler=mysqli_fetch_array($resultcpucooler)){
    
    $cpucoolermodel=$rescpucooler["cpucoolermodel"];
    echo "
                    <tr>
                    <td data-label='cpucoolerid'>".$rescpucooler["cpucoolerid"]."</td>
                    <td data-label='cpucoolermodel'>".$rescpucooler["cpucoolermodel"]."</td>
                    <td data-label='cpucoolerimage'><a href='".$rescpucooler["cpucoolerimage"]."'><img src='".$rescpucooler["cpucoolerimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='fanrpm'>".$rescpucooler["fanrpm"]."</td>
                    <td data-label='noiselevel'>".$rescpucooler["noiselevel"]."</td>
                    <td data-label='cputdp'>".$rescpucooler["cputdp"]." W"."</td>
                    <td data-label='size'>".$rescpucooler["sizel"]."x".$rescpucooler["sizeb"]."x".$rescpucooler["sizeh"].'(cm)'."</td>
                    <td data-label='price'>".$rescpucooler["price"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$cpucoolermodel' class='dispatch'>Add to cart</a></td></tr>";
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                </tbody>
                </table>
                    
                <h1 id="nextgpu" class="navbutton">NEXT</h1>
                    <h1 id="prevmobo" class="navbutton">PREVIOUS</h1>
                </div>
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
                    <th>Ramtype</th>
                    <th>Price</th>
                    <th>Add to cart</th>

                    </tr>
                        </thead>
                    <tbody id="#motherboardlist">
                        
                    
                        <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"])) && (isset($_SESSION["cpubrand"])))
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $cpubrand=$_SESSION["cpubrand"];
                        $ramtype=$_SESSION["ramtype"];

    
$sqlmotherboard="select * from motherboard where cpusocket='$cpusocketmobo' and cpubrand='$cpubrand'";
    
    $resultmotherboard=mysqli_query($con,$sqlmotherboard) or die(mysqli_error($con));

while($resmotherboard=mysqli_fetch_array($resultmotherboard)){
    
    $motherboardmodel=$resmotherboard["motherboardmodel"];
    $ramtype=$resmotherboard["ramtype"];
    
    echo "
                    <tr>
                    <td data-label='Motherboardid'>".$resmotherboard["motherboardid"]."</td>
                    <td data-label='Motherboard-Model'>".$resmotherboard["motherboardmodel"]."</td>
                    <td data-label='Motherboard-Image'><a href='".$resmotherboard["motherboardimage"]."'><img src='".$resmotherboard["motherboardimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='Type'>".$resmotherboard["motherboardtype"]."</td>
                    <td data-label='Cpusocket'>".$resmotherboard["cpusocket"]."</td>
                    <td data-label='Max-Memory'>".$resmotherboard["motherboardmemorymax"]." GB"."</td>
                    <td data-label='Memory-Slots'>".$resmotherboard["motherboardmemoryslots"]."</td>
                    <td data-label='PCI-Slots'>".$resmotherboard["motherboardpcislots"]."</td>
                    <td data-label='ramtype'>".$resmotherboard["ramtype"]."</td>
                    <td data-label='Price'>".$resmotherboard["mprice"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$motherboardmodel' class='dispatch'>Add to cart</a></td></tr>";
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
                 <div class="listing">
                <table border="1">
                <thead>
                     <th>ramid</th>
                    <th>rambrand</th>
                    <th>rammodel</th>
                    <th>ramimage</th>
                    <th>rammemory</th>
                    <th>ramtype</th>
                    <th>Price</th>
                    <th>Add cart</th>
                </thead>
                <tbody id="ramlist">
                     <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"])) && (isset($_SESSION["cpubrand"])) )
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $cpubrand=$_SESSION["cpubrand"];
                        
                        $ramtype=$_SESSION["ramtype"];
    
$sqlram="select * from ram";
    
    $resultram=mysqli_query($con,$sqlram) or die(mysqli_error($con));

while($resram=mysqli_fetch_array($resultram)){
    
    $rammodel=$resram["rammodel"];
    
    
    echo "
                    <tr>
                    <td data-label='ramid'>".$resram["ramid"]."</td>
                    <td data-label='rambrand'>".$resram["rambrand"]."</td>
                    <td data-label='rammodel'>".$resram["rammodel"]."</td>
                    <td data-label='ramimage'><a href='".$resram["ramimage"]."'><img src='".$resram["ramimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='Memory'>".$resram["rammemory"]."</td>
                    <td data-label='ramtype'>".$resram["ramtype"]."</td>
                    <td data-label='Price'>".$resram["rprice"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$rammodel' class='dispatch'>Add to cart</a></td></tr>";
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                </tbody>
                </table>
                
                <h1 id="nextpsu" class="navbutton">NEXT</h1>
                    <h1 id="prevgpu" class="navbutton">PREVIOUS</h1>
                </div>
            </div>
            <div id="divgpu" class="container">
                <h1>STEP4: Select GPU or Graphic Card</h1>
                <p>GPU or Graphic Card is a temporary space in a chipset which loads all the programs & softwares so that computer can do its task.</p>
                <div class="listing">
                 <table border="1">
                <thead>
                     <tr>
                    <th>gpuid</th>
                    <th>gpubrand</th>
                    <th>gpumodel</th>
                    <th>gpuimage</th>
                    <th>gpumemory</th>
                    <th>coreclock</th>
                    <th>boostclock</th>
                    <th>gpuinterface</th>
                    <th>Price</th>
                    <th>add cart</th>
                    </tr>
                </thead>
                <tbody id="gpulist">
                <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"]))&& (isset($_SESSION["cpubrand"])))
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $cpubrand=$_SESSION["cpubrand"];
                        

    
$sqlgpu="select * from gpu where gpubrand='$cpubrand'";
    
    $resultgpu=mysqli_query($con,$sqlgpu) or die(mysqli_error($con));

while($resgpu=mysqli_fetch_array($resultgpu)){
    
    $gpumodel=$resgpu["gpumodel"];
    $gpuinterface=$resgpu["gpuinterface"];
    
    echo "
                    <tr>
                    <td data-label='gpuid'>".$resgpu["gpuid"]."</td>
                    <td data-label='gpubrand'>".$resgpu["gpubrand"]."</td>
                    <td data-label='gpumodel'>".$resgpu["gpumodel"]."</td>
                    <td data-label='gpu-Image'><a href='".$resgpu["gpuimage"]."'><img src='".$resgpu["gpuimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='Memory'>".$resgpu["gpumemory"]." GB"."</td>
                    <td data-label='coreclock'>".$resgpu["coreclock"]."</td>
                    <td data-label='boostclock'>".$resgpu["boostclock"]."</td>
                    <td data-label='gpuinterface'>".$resgpu["gpuinterface"]."</td>
                    
                    <td data-label='Price'>".$resgpu["gprice"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$gpumodel&igpuinterface=$gpuinterface' class='dispatch'>Add to cart</a></td></tr>";
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                         
                </tbody>
                </table>
                
                <h1 id="nextram" class="navbutton">NEXT</h1>
                    <h1 id="prevcpucool" class="navbutton">PREVIOUS</h1>
                    </div>
            </div>
            <div id="divpsu" class="container">
                <h1>STEP6: Select PSU or Power Supply Unit</h1>
                <p>PSU or Power Supply Unit is a part that supplies all computer parts with electricity.</p>
                
                <div class="listing">
                 <table border="1">
                <thead>
                     <tr>
                    <th>psuid</th>
                    <th>psubrand</th>
                    <th>psumodel</th>
                    <th>psuimage</th>
                    <th>psutdp</th>
                    <th>formfactor</th>
                    <th>Price</th>
                    <th>Add cart</th>
                    </tr>
                </thead>
                <tbody id="psulist">
                    <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"]))&& (isset($_SESSION["cpubrand"])))
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $cpubrand=$_SESSION["cpubrand"];
                        $psutdp=$_SESSION["cputdp"];

    
$sqlpsu="select * from psu where psutdp='$psutdp'";
    
    $resultpsu=mysqli_query($con,$sqlpsu) or die(mysqli_error($con));

while($respsu=mysqli_fetch_array($resultpsu)){
    
    $psumodel=$respsu["psumodel"];
    
    
    echo "
                    <tr>
                    <td data-label='psuid'>".$respsu["psuid"]."</td>
                    <td data-label='psubrand'>".$respsu["psubrand"]."</td>
                    <td data-label='psumodel'>".$respsu["psumodel"]."</td>
                    <td data-label='psu-Image'><a href='".$respsu["psuimage"]."'><img src='".$respsu["psuimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='tdp'>".$respsu["psutdp"]." W"."</td>
                    <td data-label='formfactor'>".$respsu["psuformfactor"]."</td>
                   
                    <td data-label='Price'>".$respsu["pprice"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$psumodel' class='dispatch'>Add to cart</a></td></tr>";
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                </tbody>
                </table>
                
                <h1 id="nexthdd" class="navbutton">NEXT</h1>
                    <h1 id="prevram" class="navbutton">PREVIOUS</h1>
                    </div>
            </div>
            <div id="divhdd" class="container">
                <h1>STEP7: Select HDD or SDD or Storage</h1>
                <p>HDD or SDD is a pc part where all data is stored.</p>
                <div class="listing">
                 <table border="1">
                <thead>
                     <tr>
                    <th>hddid</th>
                    <th>hddbrand</th>
                    <th>hddmodel</th>
                    <th>hddimage</th>
                    <th>hddtype</th>
                    <th>capacity</th>
                    <th>Price</th>
                    <th>Add cart</th>
                    </tr>
                </thead>
                <tbody id="hddlist">
                    <?php
                        
include("dbconnect.php");
                        
                        
                    
                        if((isset($_SESSION["cpusocket"]))&& (isset($_SESSION["cpubrand"])))
                       {
                            
                        
                        $cpusocketmobo=$_SESSION["cpusocket"];
                        $cpubrand=$_SESSION["cpubrand"];
                        $psutdp=$_SESSION["cputdp"];

    
$sqlhdd="select * from hdd";
    
    $resulthdd=mysqli_query($con,$sqlhdd) or die(mysqli_error($con));

while($reshdd=mysqli_fetch_array($resulthdd)){
    
    $hddmodel=$reshdd["hddmodel"];
    
    
    echo "
                    <tr>
                    <td data-label='psuid'>".$reshdd["hddid"]."</td>
                    <td data-label='psubrand'>".$reshdd["hddbrand"]."</td>
                    <td data-label='psumodel'>".$reshdd["hddmodel"]."</td>
                    <td data-label='psu-Image'><a href='".$reshdd["hddimage"]."'><img src='".$reshdd["hddimage"]."' width='50px' height='50px' /></a></td>
                    <td data-label='type'>".$reshdd["hddtype"]."</td>
                    <td data-label='capacity'>".$reshdd["hddcapacity"]." TB"."</td>
                   
                    <td data-label='Price'>".$reshdd["hprice"]."</td>
                    <td data-label='Add-cart'><a href='addproductcookie.php?iproductmodel=$hddmodel' class='dispatch'>Add to cart</a></td></tr>";
}
                        
                        }
else{
    echo "<h1 style='color:red;background:yellow;'>Please SELECT PROCESSOR FIRST</h1>";
}



                        ?>
                </tbody>
                </table>
                
                <h1 id="nextcabinet" class="navbutton">NEXT</h1>
                    <h1 id="prevpsu" class="navbutton">PREVIOUS</h1>
                    
                    </div>
            </div>
            </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
    </div>
</body>

</html>
