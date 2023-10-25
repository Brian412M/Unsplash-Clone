<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Explore.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">  

<style>
    body{
    background: url("Explore-bg.jpg");
    background-size:cover;
    background-position: center;
}

header{
    text-align: center;
    background: #1e01018a;
    box-shadow:0px 5px 35px 1px #fff;
    padding: 10px 0;
    font-family: "Regular 400", Anton;
    font-size: 30px;
}
.bg{
    color: aliceblue;
}
    
.description{
background: #00000093;
background-size: cover;
}



.description{
    font-family: "Bold 700 Italic", Josefin Sans;
    font-size: 20px;
}

.images{
    display: flex;
    justify-content: center;
    flex-flow: row wrap;
}

.images #img{
    min-width:250px;
    margin:10px;

    transition: transform 1s ease-in-out;
    transform: scale(1);
    
}

.images #img:hover {
    cursor: pointer;
    border-radius:7px;
    transform:scale(1.2);
    z-index: 2;
}
.nav-home{
    display: flex;
    justify-content: center;
}

</style>
</head>

<body>

<section class="bg">
<header>
    <h2><a href="index.php">spLaSH IT</a></h2>

    <style>
        header h2 a{
        color:aliceblue;
        text-decoration:none;
        }
    </style>
</header>

<section class="description">
    <table>
    <tr>
        <td><p>View our extensive category of images in high resolution from various creatives.</p><td>
    <tr>

    <tr>
    <td><p>The categories include:photographs, wallpapers, 3D renders, and textures, in categories ranging from travel and nature to architecture and fashion.</p></td>
    </tr>

<table>
</section>

<div class="container"> 

</div>

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
</body>
</html>
