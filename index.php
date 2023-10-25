<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="update.css">

        <style>
            body{
    width: 100%;
    overflow-x: hidden;
}
input:focus{
    outline: none;
}
body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.header{
    margin: 20px 0;
}

.top-header{
    position: fixed;
    z-index: 900;
    background: #fff;
    width: 100%;
    top:-20px ;
    padding-top:30px ;
    
}

.container #search1{
    height: 28px;
    background: rgba(0, 0, 0, 0.081);
    border: 1px solid #fff;
    border-radius: 15px;
    padding:0 20px;
    
}

@media only screen and (min-width:300px) {

    .container #search1{
        width:20%;
    }
}

.container{
    display: flex;
    justify-content: space-between;
}
.container #search1::placeholder{
    color: #1e1e1e;

}

.container a{
    color: #000;
    
}

.container .link3{
    color: blue;
}

.container #span1{
    height: 5px;
    width: 0.5px;
    
}

#logo2{
    position: relative;
    right: 25px;
}

/*Slider section*/
#header2{
    position: relative;
    top:20px;

}

#underline{
    border-bottom: 1px solid #000;
    width:80px;
    display: inline-block;
    position: relative;
    right: 66px;
    top: 20px;
    z-index: 800;
    padding: 0;
    

}
#edit{
    display: inline-block;
    /*border-bottom: 1px solid #000;*/
    padding-bottom: 8px;
    width: fit-content;
    
}
#edit a{
    color: #000;
    position: relative;
    left: 10px;
    text-decoration: none;
}

#split2{
    color: rgb(165, 154, 154);
    border: solid 1px #a59a9a;

    position: relative;
    right: 60px;
    top: 5px;
    padding: 10px 0px;
}

#scroll{
    width:92%;
    font-size: 72%;
    position: relative;
    left: 90px;
    top: -38px;
    /*border: solid 1px red;*/
    height: 50px;
    overflow: hidden;
    
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.scrl{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    overflow-x: hidden;

}

.scrl a{
    color: #000;
    text-decoration: none;
    padding: 0 10px;
}

/*Welcome to Unsplash Section*/
#welcome{
    color: #fff;
    /*border: solid 2px pink;*/
    background-image: url("scenery.jpg");
    background-size: cover;
    background-position: center;
    height: 550px;
    text-align: center;
    width: 100%;

}
#welcome h2{
    font-size: 190%;   
}
#welcome p{
    font-size: 120%;
}

/*Search for photos*/
#welcome input{
    border: solid 1px #fff;
    border-radius: 5px;
}
#welcome input::placeholder{
    font-size: 15px;
    position: relative;
    
}
#welcome input[type=search]:focus{
outline:none;
}
#welcome h2, #welcome p,#welcome input{
    display: flex;
    position: relative;
    top: 20%;
    left: 20%;
}

#welcome input{
    width: 60%;
    height: 60px;
    padding:0 50px;
}

#alert{
    background: url('underwater.jpg');
    background-position: center;
    background-size: cover;
    height: 200px;
    width: 100%;
    position: relative;
    top:50px;

    display: flex;
    justify-content: center;
    align-items: center;
}
#cont3{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    width: 400px;
    height: 200px;
    align-items: center;

    color: #fff;
}

#cont3 a{
    color: #fff;
}

/*Images section*/
.images{
    position: relative;
    top: 100px;
    width: auto;
    height: fit-content;
    

    display: flex;
    
    
        
}
 
#image-container{
    width: 100%;
    display: flex;
    justify-content: center;
    overflow-x: hidden;
}
#image-container ul{
    display: flex;
    flex-wrap:wrap;
    justify-content: space-evenly;
    list-style: none;
    width: 100%;
    
}

#image-container li{
    /*margin: 5px 0;
    flex-grow: 1;
    width: 20vh;*/
    
    height: 45vh;
    flex-grow: 1 5 auto;
    align-items: stretch;
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
    vertical-align: bottom;
    margin: 10px;
    
  
    
}


#image-container li::after{
    content: '';
    flex-grow: 10;
}
#image-container img{
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    vertical-align: bottom;
}

body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

@media only screen and (min-width:359.5px) {
    /*body{
        overflow-x:hidden;
    }*/
}

/*-----------------------------------------------------------------------------------------*/
/*Modal Styling*/
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 50px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 70%;
    height: 80%;
    max-width: 1000px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 55px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
 @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
        </style>
    </head>
    <body>

       
        <!--nav-->
        <div class="header">

            <div class="container">
                
                <!--logo-->
                <img src="https://images.unsplash.com/photo-1618685959528-2700ba389504?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHNtaWxleSUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" id="logo" width="30px">

                <input type="search" placeholder="Search Photos" id="search1">

                
                <a href="Explore.php" id="links" class="link1">Explore</a>
                <a href="About.php" id="links" class="link2">About</a>
                <a href="Trends.php" id="links" class="link3" hidden>Trending Today</a>

                <span id="span1">|</span>


                <a href="login.php" id="links link4">Login / Sign up</a>

                <!--
                <a href="#">Submit</a>
-->

                <a href="#"><img src="icons8-heart-100.png" id="logo2" width="10px" height="10px"></a>
                    
               

               </div>

               <!--Container End-->

               <!--Next header with scroll-->
               <section id="header2">
                <span id="edit">
                    

                <a href="index.php"><strong>Editorial</strong></a> 

                <span id="underline"></span>

                </span> <span id="split2"></span>
                
                <span id="scroll">
                <!--Scroll links-->

                <span class="scrl">

                <a href="wallpaper.php">Wallpapers</a>
                <a href="3D Renders.php">3D Renders</a>
                <a href="Travel.php">Travel</a>
                <a href="Nature.php">Nature</a>
                <a href="Street Photography.php">Street Photography</a>
                <a href="Experimental.php">Experimental</a>
                <a href="Textures&Patterns.php">Textures & Patterns</a>
                <a href="Animals.php">Animals</a>
                <a href="Architecture&Interiors.php">Architecture & Interiors</a>
                <a href="Fashion&Beauty.php">Fashion & Beauty</a>
                <a href="Film.php">Film</a>
                <a href="Food&Drink.php">Food & Drink</a>
                <a href="People.php">People</a>
                <a href="Spirituality.php">Spirituality</a>
                
                </span>
                </span>
               </section>

               <!--Welcome to Unsplash Section-->

               <!--*********Remember has a background image*********-->
               <section id="welcome">

                <h2><b>spLash IT</b></h2>
                <p>The internet's source for visuals.</p>
                <p>Powered by creators everywhere.</p>

                <!--
                <input type="search" placeholder="Search photos" id="search2">
                -->
                
                <p><strong>Trending:flower,Wallpapers,backgrounds,happy,love</strong></p>
               </section>


               <!--Winner Announcement section-->

               <!--*****Has Background image(Mural art)*****-->
               <section id="alert">

                <span id="cont3">
                    
                <h3><strong>spLash IT Awards 2023</strong></h3>
                <p>The results are in. Celebrate this year's finalists</p>

                <p><a href="About.php">Learn more</a></p>

                </span>
               </section>
            </div>
        

            <!--Images section-->

            <section class="images">

            

                <span id="image-container">

                    <ul>
                    <div id="cont">
                    <li><img src="image-1.jpg" id="img1" loading="lazy"></li>
                    <p> <a href="#" id="download-link1"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-2.jpg" id="img2" loading="lazy"></li>
                    <p> <a href="#" id="download-link2"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-3.jpg" id="img3" loading="lazy"></li>
                    <p> <a href="#" id="download-link3"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-4.jpg" id="img4" loading="lazy"></li>
                    <p> <a href="#" id="download-link4"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-5.jpg" id="img5" loading="lazy"></li>
                    <p> <a href="#" id="download-link5"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-6.jpg" id="img6" loading="lazy"></li>
                    <p> <a href="#" id="download-link6"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-7.jpg" id="img7" loading="lazy"></li>
                    <p> <a href="#" id="download-link7"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-8.jpg" id="img8" loading="lazy"></li>
                    <p> <a href="#" id="download-link8"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-9.jpg" id="img9" loading="lazy"></li>
                    <p> <a href="#" id="download-link9"></i> Download</a></p>
</div>
<!--
                    <div id="cont">
                    <li><img src="image-10.jpg" id="img10" loading="lazy"></li>
                    <p> <a href="#" id="download-link10"></i> Download</a></p>
</div>


                    <div id="cont">
                    <li><img src="image-11.jpg" id="img11" loading="lazy"></li>
                    <p> <a href="#" id="download-link11"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-12.jpg" id="img12" loading="lazy"></li>
                    <p> <a href="#" id="download-link12"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-13.jpg" id="img13" loading="lazy"></li>
                    <p> <a href="#" id="download-link13"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-14.jpg" id="img14" loading="lazy"></li>
                    <p> <a href="#" id="download-link14"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-15.jpg" id="img15" loading="lazy"></li>
                    <p> <a href="#" id="download-link15"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-16.jpg" id="img16" loading="lazy"></li>
                    <p> <a href="#" id="download-link16"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-17.jpg" id="img17" loading="lazy"></li>
                    <p> <a href="#" id="download-link17"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-18.jpg" id="img18" loading="lazy"></li>
                    <p> <a href="#" id="download-link18"></i> Download</a></p>
</div>

                    <div id="cont">
                    <li><img src="image-19.jpg" id="img19" loading="lazy"></li>
                    <p> <a href="#" id="download-link19"></i> Download</a></p>
</div>
-->
<style>
    #cont{
        text-align:center;
    }

    .images a{
        color:#000;
        background:#fff;
        padding:7px;
        border-radius:10px;
    }
    
</style>

                    </ul>
                </span>
                
            
            </section>

            
<!-- Create a script to handle the download -->
<script>
    /*
  // Get the download link and the sample image source
  const downloadLink1 = document.getElementById('download-link1');
  const sampleImage = 'image-1.jpg';

  const downloadLink2 = document.getElementById('download-link2');
  const sampleImage2 = 'image-2.jpg';

  const downloadLink3 = document.getElementById('download-link3');
  const sampleImage3 = 'image-3.jpg';

  const downloadLink4 = document.getElementById('download-link4');
  const sampleImage4 = 'image-4.jpg';

  const downloadLink5 = document.getElementById('download-link5');
  const sampleImage5 = 'image-5.jpg';

  const downloadLink6 = document.getElementById('download-link6');
  const sampleImage6 = 'image-6.jpg';

  const downloadLink7 = document.getElementById('download-link7');
  const sampleImage7 = 'image-7.jpg';

  const downloadLink8 = document.getElementById('download-link8');
  const sampleImage8 = 'image-8.jpg';

  const downloadLink9 = document.getElementById('download-link9');
  const sampleImage9 = 'image-9.jpg';

   // Get the download link and the sample image source
   const downloadLink1 = document.getElementById('download-link10');
  const sampleImage10 = 'image-10.jpg';

  const downloadLink2 = document.getElementById('download-link11');
  const sampleImage11 = 'image-11.jpg';

  const downloadLink3 = document.getElementById('download-link12');
  const sampleImage12 = 'image-12.jpg';

  const downloadLink4 = document.getElementById('download-link13');
  const sampleImage13 = 'image-13.jpg';

  const downloadLink5 = document.getElementById('download-link14');
  const sampleImage14 = 'image-14.jpg';

  const downloadLink6 = document.getElementById('download-link15');
  const sampleImage15 = 'image-15.jpg';

  const downloadLink7 = document.getElementById('download-link16');
  const sampleImage16 = 'image-16.jpg';

  const downloadLink8 = document.getElementById('download-link17');
  const sampleImage17 = 'image-17.jpg';

  const downloadLink9 = document.getElementById('download-link18');
  const sampleImage18 = 'image-18.jpg';

  const downloadLink9 = document.getElementById('download-link19');
  const sampleImage19 = 'image-19.jpg';

  // Add an event listener for when the download link is clicked
  downloadLink1.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-1.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/

  // Add an event listener for when the download link is clicked
  downloadLink2.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-2.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink3.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-3.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink4.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-4.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink5.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-5.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink6.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-6.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink7.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-7.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink8.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-8.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink9.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-9.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });




  // Add an event listener for when the download link is clicked
  downloadLink10.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-10.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/

  // Add an event listener for when the download link is clicked
  downloadLink11.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-11.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink12.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-12.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink13.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-13.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink14.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-14.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink15.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-15.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink16.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-16.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink17.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-17.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink18.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-18.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

  /*---------------------------------------------------------*/
  // Add an event listener for when the download link is clicked
  downloadLink19.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-19.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = this+'.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

*/


  
</script>

            </div>
            

             <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>































<!--
      <section class="images">

<div id="cont">
    <img src="image-1.jpg" id="img"  height="350px">
   <p> <a href="#" id="download-link1"></i> Download</a></p>
</div>
<div id="cont">
    <img src="image-2.jpg" id="img"  height="350px">
   <p> <a href="#" id="download-link2"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-3.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link3"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-4.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link4"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-5.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link5"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-6.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link6"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-7.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link7"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-8.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link8"></i> Download</a></p>
</div>
    <div id="cont">
    <img src="image-9.jpg" id="img" height="350px">
   <p> <a href="#" id="download-link9"></i> Download</a></p>
</div>
-->
<style>
    #cont{
        text-align:center;
    }

    .images a{
        color:#000;
        background:#fff;
        padding:7px;
        border-radius:10px;
    }
    
</style>


</section>

<section class="nav-home">
<input type ="button" id ="tohome" onclick="tohome()" value="See More">
</section>

</div>

<script>
    function tohome(){
    window.location.href="index.php";
     }
    </script>



<!-- Create a script to handle the download -->
<script>
  // Get the download link and the sample image source
  const downloadLink1 = document.getElementById('download-link1');
  const sampleImage = 'image-1.jpg';

  const downloadLink2 = document.getElementById('download-link2');
  const sampleImage2 = 'image-2.jpg';

  const downloadLink3 = document.getElementById('download-link3');
  const sampleImage3 = 'image-3.jpg';

  const downloadLink4 = document.getElementById('download-link4');
  const sampleImage4 = 'image-4.jpg';

  const downloadLink5 = document.getElementById('download-link5');
  const sampleImage5 = 'image-5.jpg';

  const downloadLink6 = document.getElementById('download-link6');
  const sampleImage6 = 'image-6.jpg';

  const downloadLink7 = document.getElementById('download-link7');
  const sampleImage7 = 'image-7.jpg';

  const downloadLink8 = document.getElementById('download-link8');
  const sampleImage8 = 'image-8.jpg';

  const downloadLink9 = document.getElementById('download-link9');
  const sampleImage9 = 'image-9.jpg';

  // Add an event listener for when the download link is clicked
  downloadLink1.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = sampleImage;

    // Set the download attribute of the anchor to the desired filename
    download.download = 'sample-image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/

  // Add an event listener for when the download link is clicked
  downloadLink2.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-2.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink3.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-3.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink4.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-4.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink5.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-5.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink6.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-6.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

   // Add an event listener for when the download link is clicked
   downloadLink7.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-7.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });


  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink8.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-8.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });

  /*---------------------------------------------------------*/
  
  // Add an event listener for when the download link is clicked
  downloadLink9.addEventListener('click', () => {
    // Create a new anchor element to initiate the download
    const download = document.createElement('a');

    // Set the href attribute of the anchor to the sample image source
    download.href = 'image-9.jpg';

    // Set the download attribute of the anchor to the desired filename
    download.download = 'image.jpg';

    // Simulate a click on the anchor element to initiate the download
    download.click();
  });



  
</script>
    
                <script src="mainscript.js"></script>            
        
    </body>
</html>