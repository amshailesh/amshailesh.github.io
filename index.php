<html>

<head>
    <title>Assembled Computer store</title>
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

        #divlinks {
            width: 20%;
            height: 500px;
            background: #86C232;
            float: left;
        }

        #divlinkscontent {
            width: 80%;
            height: 500px;
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
            width: 25%;
            height: 100px;
            background: orange;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            float: left;
        }

        #footer {
            width: 100%;
            height: 100%;
            background: orange;
            text-align: center;
            float: left;
        }

    </style>
    <script src="jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#divprocessor").show();
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
        <div id="logo"><img src="img/logo.png" />
            <h1>Assembled Computer Store</h1>
        </div>
        <div id="divlinks">
            <ul>
                <li><a id="cabinet">CPU Cabinet</a></li>
                <li><a id="processor">Processor</a></li>
                <li><a id="cpucooler">CPU Cooler</a></li>
                <li><a id="motherboard">Motherboard</a></li>
                <li><a id="ram">RAM</a></li>
                <li><a id="gpu">Graphic Card</a></li>
                <li><a id="psu">PSU or Power Supply Unit</a></li>
                <li><a id="hdd">HDD or SDD</a></li>
            </ul>
        </div>
        <div id="divlinkscontent">
            <div id="divcabinet" class="container">
                <h1>CPU Cabinet</h1>
                <p>CPU Cabinet is a Box in which all the CPU parts are fitted.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divprocessor" class="container">
                <h1>Processor</h1>
                <p>Processor or CPU(Central Processing Unit) is a small electronic chip which plugs into motherboard. It is the hardware part which process all the data in the computer.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divcpucooler" class="container">
                <h1>CPU Cooler</h1>
                <p>Its a fan that cools the CPU.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divmotherboard" class="container">
                <h1>Motherboard</h1>
                <p>Motherboard is a biggest electronic chip in a computer. All parts of a PC are connected with each other through the motherboard.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divram" class="container">
                <h1>RAM or Random Access Memory</h1>
                <p>RAM or Random Access Memory is a temporary space in a chipset which loads all the programs & softwares so that computer can do its task.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divgpu" class="container">
                <h1>GPU or Graphic Card</h1>
                <p>GPU or Graphic Card is a temporary space in a chipset which loads all the programs & softwares so that computer can do its task.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divpsu" class="container">
                <h1>PSU or Power Supply Unit</h1>
                <p>PSU or Power Supply Unit is a part that supplies all computer parts with electricity.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
            <div id="divhdd" class="container">
                <h1>HDD or SDD or Storage</h1>
                <p>HDD or SDD is a pc part where all data is stored.</p>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
                <div class="listing"><input type="submit" value="Add" /></div>
            </div>
        </div>
        <div id="footer">Address: Seed Infotech, Thane.</div>
    </div>
</body>

</html>
