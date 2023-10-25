<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="device-width, initial-scale=1.0">
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
    background-image: url("Street photography-bg.jpg");
    background-size: cover;
    background-position: center;
    height: 680px;
    text-align: center;
    width: 100%;
    

}
#welcome h2{
    font-size: 190%;   
}
#welcome p{
    font-size: 120%;
    max-width: 750px;
}
#welcome input{
    border: solid 1px #fff;
    border-radius: 5px;
}
#welcome input::placeholder{
    font-size: 15px;
    position: relative;
    left: 25px;
}

#welcome h2, #welcome p{
    display: flex;
    align-content: center;
    position: relative;
    top: 40%;
    left: 3%;
}

#btn-submit{
    height: 45px;
    width: 200px;
    cursor: pointer;

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
/*
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

*/
/*Images section*/
.images{
    position: relative;
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
        height: 70%;
        max-width: 700px;
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
          <!--Container for the nav links and header-->
            <div class="top-header">

            <div class="container">
                
                <!--logo-->
                <img src="https://images.unsplash.com/photo-1618685959528-2700ba389504?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHNtaWxleSUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" id="logo" width="30px">

                <input type="search" placeholder="Search Photos" id="search1">

                <!--Links-->
                <a href="Explore.php" id="links" class="link1">Explore</a>
                <a href="About.php" id="links" class="link2">About</a>
                <a href="Trends.php" id="links" class="link3" hidden>Trending Today</a>

                <span id="span1">|</span>

                <a href="login2.php" id="links link4">Login / Sign up</a>

                

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
                <a href="Street Photography.php"><u>Street Photography</u></a>
                <a href="Experimental.php">Experimental</a>
                <a href="Experimental.php">Textures & Patterns</a>
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

            </div>

               <!--Welcome to Unsplash Section-->

               <!--*********Remember has a background image*********-->
               <section id="welcome">

                <h2><b>Wallpapers</b></h2>
                <p>From epic drone shots to inspiring moments in nature — submit your best</p>
                 <p>desktop and mobile backgrounds.</p>

<!--
                <p><button type="submit" id="btn-submit">Submit to <b>Street Photography</b></button></p>
-->   
            </section>
          

            </div>
        

            <!--Images section-->

            <section class="images">

            

                <span id="image-container">
                    

                        <ul>
    
                        <li><img src="https://plus.unsplash.com/premium_photo-1673893476811-e8d1389870b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" id="img1" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1674449930186-94a31d0f9471?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDd8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" id="img2" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1674407728563-f30774195b0f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEyfGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img3" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1674266411369-95a37f460e11?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE2fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img4" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1674367694162-018eb775ae66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE0fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img5" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1625629107875-bea4360fd003?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI2fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img6" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1674050288049-7008419cd2ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM0fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img7" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673901159004-cf765b562280?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQwfGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img8" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673418854201-f7dd85539055?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ5fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img9" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673941733064-2445362593ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ2fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img10" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673925863788-88817a07a12e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img11" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673419229354-284ca2e29e4c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDUwfGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img12" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1646515594088-e56bc44212cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDY0fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img13" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673192573046-efc73501bd5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDc0fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img14" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673667617558-91300594284c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDc4fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img15" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1670444340931-1cd9a66c54cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDk3fGJvOGpRS1RhRTBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" id="img16" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673831792426-8cedbe848c34?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEwNHxibzhqUUtUYUUwWXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" id="img17" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1667381495010-e02b1d4a41ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDExMXxibzhqUUtUYUUwWXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" id="img18" loading="lazy"></li>
                        <li><img src="https://images.unsplash.com/photo-1673322062448-6a50cf43876a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEyMnxibzhqUUtUYUUwWXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" id="img19" loading="lazy"></li>
    
                        </ul>
                    </span>
                
                </section>
    
                <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
    
                <script src="mainscript.js"></script>

    </body>
</html>