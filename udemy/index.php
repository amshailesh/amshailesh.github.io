<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">

    <title>Dr. Pal blog</title>
<style>

  *{

    box-sizing: border-box;
    font-family: verdana;
  }

  #logo{

    margin: 0 0 0 45%;
  }

  #menu{

   background-image: linear-gradient(grey, blue);
  }

  #menulinks li{

    display: inline;
    float: left;
    margin: 0 0 0 10%;
    color: white;
    
  }

  #menulinks li:hover{

    background: orange;
    color: red;
  } 

.fontg{
  font-family: 'Sansita Swashed', cursive;
}

.border1{

  border: 1px black solid;
}


#slogan{
  font-size: 45px;
  text-align: center;
}

.txtcenter{

  text-align: center;
}



@media only screen and (max-width:600px){

  #menu{
    width: 100%;
    height: 100%;
    float: left;
  }

  #menulinks ul{

    width: 100%;
    height: 100%;

  }

  #menu ul{
    width: 100%;
    height: 100%;
    
    float: left;
  }



#menulinks li{

    width: 100%;
    height: 100%;
    float: left;
  }

  #slogan{

    font-size: 20px;
  }


}




</style>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
          <img src="http://www.genesisindia.net.in/images/logo.png" width="100px" height="100px" id="logo" />

          <h1 class="txtcenter">Dr. Pal's Blog</h1>
        </div>
      </div>

      <div class="row">

        <div id="menu">
          
          <ul id="menulinks" class="fontg">
            
            <li>Home</li>
            <li>About Us</li>
            <li>Services</li>
            <li>Contact Us</li>
            <li>Downloads</li>

          </ul>

        </div>
        
      </div>
<div class="container-fluid" >

  <div class="row">
<div class="col-12 col-md-12 col-lg-12 col-xl-12 p-5 mt-5 text-justify fontg border1" id="slogan">
  Imagination •  Innovation  • Implementation

</div>
  </div>

</div>


<div class="container-fluid" >

  <div class="row">
<div class="col-12 col-md-12 col-lg-12 col-xl-12 p-5 mt-5 text-justify fontg border1" id="poem">
<?php $file=fopen("poem.txt","r") or exit("Unable to open file");

  while (!feof($file)) {
    echo fgets($file);
  }
  fclose($file);

  ?>
</div>
  </div>

</div>

      

    </div>

   
      
    
 

    <!-- Optional JavaScript; choose one of the two! -->

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>