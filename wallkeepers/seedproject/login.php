<meta name="viewport" content="width=devicewidth" >
    <link rel="stylesheet" type="text/css" href="logoheader.css">

<style>
    *{
        box-sizing: border-box;
        font-family:verdana;
    }
    body{
        margin:0;
        padding:0;
    }
    #main{
        float: left;
        width:100%;
        height:100%;
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
    #login{
        float:left;
        width:50%;
        height: 600px;
        background: lightgrey;
        overflow-y: scroll;
    }
    #signup{
        float:left;
        width:50%;
        height: 600px;
        background:skyblue;
    }
    #loginbox{
        float:left;
        background: white;
        width:250px;
        height:280px;
        margin:5% 0 0 40%;
        border-radius:35px;
        text-align: center;
    }
    #loginbox p{
        padding-left:20px;
        padding-right:20px;
        border-radius:35px;
    }
    #signupbox{
        float:left;
        background: white;
        width:360px;
        height:auto;
        
        margin:5% 0 0 40%;
        border-radius:45px;
        
    }
    #signupbox p{
        padding-left:20px;
        padding-right:20px;
        border-radius:35px;
    }
    
    #footer {
            width: 100%;
            height: 100px;
            background: orange;
            text-align: center;
            float: left;
        }
    #forgotpassword{
        float:left;
        display: none;
        background: white;
        border-radius:35px;
        margin:0.5% 0 0 5%;
    }
    
    
    @media only screen and (max-width:600px)
        {
            #main{
                width:100%;
                height:auto;
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
            #divlogoboxright h3{
                padding-top: 10px;
            }
            
                       
            #login{
                width:100%;
                float:left;
                height:auto;
            }
            #loginbox{
                width:100%;
                float:left;
                margin:0;
                padding:0;
            }
            #forgotpassword{
                width:100%;
                float:left;
            }
            #signup{
                width:100%;
                float:left;
                height:auto;
            }
            #signupbox{
                width:100%;
                
                float:left;
                margin:0;
                padding:0;
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
         $("#bforgot").click(function(){
             
             $("#forgotpassword").show();
         });
        });

    </script>
<div id="main">
    
<div id="logo">
            <div id="divlogobox">
           <a href="indexmain.php"> <img src="img/logo.png" />
            <h1>Assembled Computer Store</h1></a>
                </div>
            <div id="divlogoboxright">
              
            </div>
        </div>
<div id="login">
    <div id="loginbox">
        <h1>Admin Login</h1>
<form action="logincheck.php" method="post">
    
    <p>Enter Username<input type="text" name="iusername" /></p>
    <p>Enter Password<input type="password" name="ipassword" /></p>
    <p><input type="submit" value="Login" /></p>
    <p><input type="button" value="Forgot password" id="bforgot" /></p>

</form>
        </div>
    <div id="forgotpassword">
        <h4>Forgot password</h4>
        <form action="forgotpassword.php" method="post">
    <p>Enter Username<input type="text" name="iusername" /></p>
    <p>Enter New Password<input type="password" name="inewpassword" /></p>
    <p>Security Question: What is your first school name?<input type="text" name="isecurityanswer" /></p>
    <p><input type="submit" value="Change Password" /></p>
    </form>
    </div>
    
    </div>
    <div id="signup">

    
    <div id="signupbox">
        <h1>Customer Login</h1>
<form action="customerlogincheck.php" method="post">
    <p>Enter Username<input type="text" name="iusername" /></p>
    <p>Enter Password<input type="password" name="ipassword" /></p>
    <p><input type="submit" value="Login" /></p>
    <p><input type="button" value="Forgot password" id="bforgot" /></p>

       

</form>
        </div>
</div>


            <div id="footer">Address: Seed Infotech, Thane.</div>
</div>

