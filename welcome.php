<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>

</body>
</html>





<!DOCTYPE html>
<html>
    <head>
        <title>spLaSH IT</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="png/image" href="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZnVybml0dXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"/>

        <link rel="stylesheet" type="text/css" href="index.css">

        <link rel="stylesheet" type="text/css" href="index-mobile.css">
		
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		 
		 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>

        <style>
		a{
			word-break:break-word;
		}
		
		body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

   
}

.bg{
    height: 100%;
    background-position:top;
    background-size:cover;
    background-repeat: no-repeat;
    overflow: hidden;
	
	
	
}

section{
	position:relative;
	top:20%;
}


header{
    display: flex;
}

header h3{
    font-style: bold;
    font-weight:bolder;
    border: solid 1px inherit;
    border-radius: 20px;


    position: relative;
    left:1em;

    background: burlywood;
    padding: 15px;
	width:184px;
}



nav a{
    font-style: bold;
    text-decoration: none;
    padding: 5px 2em;
	height:25px;
	
    color:#fff;
    font-weight: 900;
    border: solid 1px inherit;
    border-radius: 15px;
    background: rgba(0, 0, 0, 0.363);

    transition: background 1s ease-in;
    -webkit-transition: background 1s ease-in;
    -moz-transition: background 1s ease-in;
    -o-transition: background 1s ease-in;
    
}

nav a:hover{
    color: #deb887;
    background: #000;
    border: solid 1px inherit;
    border-radius: 15px;
}



.welcome-stat{
    height: 100%;
    display: flex;
    flex-flow: row wrap;
    float: right;
	justify-content:center;
    position: relative;
    top: 35%;
    right: 5em;
    color:rgb(0, 0, 0);
}

#welcome-stat{
    font-size: 155%;
    max-width:20em;

}

#To-Home{
    position: relative;
    top:65%;
    left: 15em;
    float: right;

    text-decoration: none;
    border:solid 1px inherit;
    background: #f7fb79fa;
    border-radius: 15px;
    padding: 12px 60px;

    transition: background 1.5s, color 1s ease-in-out;
    -webkit-transition: background 1.5s, color 1s ease-in-out;
    -moz-transition: background 1.5s, color 1s ease-in-out;
    -o-transition:background 1.5s, color 1s ease-in-out;

}

#To-Home:hover{
    background: #000;
    color:#cfd2d6;
}



.bg{
	height: 100%;
    background-position:top;
    background-size:cover;
    background-repeat: no-repeat;
    overflow: hidden;
	}
		</style>

    </head>

    <body>   
	
	

        <div class="bg">
		
		<header>
                <a href="index.php" id="head"> <h2> spLash IT</h2> </a>
				<style>
                    body{
                        background:url("image-8.jpg");
                        background-size:cover;
                        background-position:center;
                    }
				#head{
					text-decoration:none;
                    color:#fff;
                    background:#000;
                    width:100%;
					
					
				}
				
					header{
						display:flex;
						width:100%;
					}
					
					
					nav{
						
						display:flex;
						justify-content:center;
						flex-flow:row wrap;
						width:100%;
						/*
						position:relative;
						left:5;*/
					}
					
					
					<!--------------------------------Handheld Devices------------------------------>
					
	@media screen and (max-width:650px){
    nav a{
        text-decoration:underline;
    }
	
	@media screen and (min-width:544.5px) and (max-width:630px){
    body{
        font-size:80%;
    }

    header{
        height:60px;
    }

    header h3{
    font-size:16px;
        width:10px;
       
        height:15px;
        

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:17px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:12px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-650px;
       position:relative;
       margin-right:20em;
       font-size:17px;
       width:61px
   }
}

@media screen and (min-width:490.5px) and (max-width:544.5px){
    body{
        font-size:70%;
    }

    header{
        height:60px;
    }

    header h3{
    font-size:16px;
        width:10px;
        
        height:15px;
        

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
       
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:17px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:12px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-650px;
       position:relative;
       margin-right:20em;
       font-size:17px;
       width:61px
   }
}

@media screen and (min-width:440.5px) and (max-width:490.5px){
    body{
        font-size:60%;
    }

    header{
        height:60px;
    }

    header h3{
    font-size:15px;
        width:10px;
        padding:0;
        height:12px;
        

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:15px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:12px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-670px;
       position:relative;
       margin-right:20em;
       font-size:16px;
       width:57px
   }
}

@media screen and (min-width:390.5px) and (max-width:440.5px){
    body{
        font-size:50%;
    }

     header{
        height:60px;
    }

    header h3{
    font-size:13.5px;
        width:10px;
        padding:0;
        height:10px;
        

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:12px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:10px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-670px;
       position:relative;
       margin-right:20em;
       font-size:15px;
       width:54px
   }
}

@media screen and (min-width:350.5px) and (max-width:390.5px){
    body{
        font-size:43%;
    }

     header{
        height:60px;
    }

    header h3{
    font-size:13.5px;
        width:10px;
        padding:0;
        height:10px;
        

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:9px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:9px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-700px;
       position:relative;
       margin-right:20em;
       font-size:13px;
       width:47px
   }
}

@media screen and (min-width:299.5px) and (max-width:350.5px){
    body{
        font-size:34%;
    }

    header{
        height:60px;
    }

    header h3{
    font-size:12px;
        width:8px;
        padding:0;
        height:10px;

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:8.5px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:8px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-700px;
       position:relative;
       margin-right:20em;
       font-size:11px;
       width:40px
   }
}

@media screen and (min-width:259.5px) and (max-width:299.5px){
    body{
        font-size:25%;
    }

      header{
        height:60px;
    }

    header h3{
    font-size:10px;
        width:8px;
        padding:0;

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:7.5px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:6.8px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-700px;
       position:relative;
       margin-right:20em;
       font-size:10.5px;
       width:38px
   }
}

@media screen and (min-width:200.5px) and (max-width:259.5px){
    
    body{
        font-size:20%;
    }

    header{
        height:60px;
    }

    header h3{
    font-size:10px;
        width:8px;
        padding:0;

        position:relative;
        top:1em;
    }

    nav{
        align-items:center;
        left:20px;
        padding:1px 20px;
        background:none;
        margin:0 5px;
        height:60px;
    }
    nav a{
        font-size:7px;
        background:none;
        padding:0;
    }

    .welcome-stat{
        justify-content:center;
        font-size:6.6px;
        margin-top:-50px;
        padding:0;
        
    }

   #To-Home {
       margin-top:-700px;
       position:relative;
       margin-right:20em;
       font-size:10px;
       width:36px
   }
}
					
					</style>
                
    
            </header>
			
			

        
			
			
			<!---------------Integration-------------------->
			<section>
			
			
			 <h1 class="recog">Hi, <b id="user_name"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to spLaSH IT Your Ultimate High End Images Destination.</h1>
             
			 <style>
			 .recog{
				 color:#000;
                 background:#fff;
				padding:8px 0;
			 }
			 
			 #user_name{
				 color:orange;
				text-align:center;
				
				text-decoration:underline wavy 1px;
				 
			 }
			 </style>
	<p>
	
	
	
	<div class="user-mgmt">
	
        <a href="reset-password.php" id="btns">Reset Your Password</a>
        <a href="logout.php" id="btns">Sign Out of Your Account</a>
		
		</div>
		
		
		
	
		
		
		
		<style>
		
		.user-mgmt{
			display:flex;
			flex-flow:row, wrap;
			justify-content:center;
		}
		#btns{
			margin:0 18px;
			font-size:20px;
			padding:10px 15px;
			
			border:solid 1px inherit;
			
		}
		
		#btns:nth-child(1){
			color:#000;
			background:#fff;
			text-decoration:none;
			
			border-radius:20px 0 20px 0;
			
			transition:transform 1s, box-shadow 1.2s ease-in;
			transform:scale(1);
		}
		
		#btns:nth-child(1):hover{
			box-shadow:3px 3px 12px 2.5px #000;
			transform:scale(1.1);
		}
		
		#btns:nth-child(2){
			color:#fff;
			background:#000;
			text-decoration:none;
			
			border-radius:0 20px 0 20px;
			
			transition:transform 1s, box-shadow 1.3s ease-in;
			transform:scale(1);
		}
		
		#btns:nth-child(2):hover{
			box-shadow:3px 3px 18px 2.5px burlywood;
			transform:scale(1.1);
		}
		
		
		</style>
    </p>
	
	<!--
	
	<a href="comm.php" id="To-page"> Back to Page </a>
	<style>
	#To-page{
		text-decoration:none;
		border:solid 1px inherit;
		border-radius:7px;
		background:lightblue;
		padding:10px 30px;
		font-size:125%;
		
		position:relative;
		top:5em;
		
		animation:light ease-in-out 2s infinite;
	}
	
	@keyframes light{
		50%{
			background:orange;
			opacity:.2
		}
		
		100%{
			background:hotpink;
		}
	}
	
	#To-page:hover{
		animation:none;
	}
	</style>
	
	-->

            <div class="welcome-stat">
    
            <p id="welcome-stat">
            </p>

            </div>
         
            <a href="comm.php" id="To-Home">Lets go... </a>
    

</section>

        </div>
        
    </body>
</html>