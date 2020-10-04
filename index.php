<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Interactive Quiz</title>
        <style type="text/css">
            body {
                width: 100%;
                background: url(image/quiz4.jpg) ;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
		line-height: 1;
		margin: auto;
		padding: auto; 
            }
	html, body { 
		width: 100%;
		height: 100%;
		overflow: hidden;
	 }
	a:link { 
		text-decoration: none; 
	  	}
	.intro {
		 position: absolute; 
		 left: 0;
		 top:20%;
		 padding: 0 20px;
		 width: 100%;
		 text-align: center;
		}
  	h1  {
    		color: #4A235A;
    		font-size: 70px;
   		font-weight: 700;
    		letter-spacing: 0.025em;
  	     }
 
  	.btn {
   		 display: inline-block;
   		 padding: 15px 30px;
		 letter-spacing: 0.015em;
    		 font-size: 25px;
    		 font-weight: 600;
    		 line-height: 1;
    		 color: #4A235A;
    		 text-decoration: none;
    	     }
	.btn:hover {
 		   color: #000;
  		   background-color: #85C1E9;
  	    }
 	 h2 {
    		color: #2471A3;
    		font-size: 35px;
   		font-weight: 700;
    		letter-spacing: 0.015em;
  	    }
  
  	@media only screen and (max-width: 1000px) {
    	h1 {
      		font-size: 70px;
    	   }
  	}
  
  	@media only screen and (max-width: 800px) {
    	h1 {
      		font-size: 48px;
    	   }
 	 }
 	 @media only screen and (max-width: 550px) {
   	 .btn {
   		 display: inline-block;
   	 	 padding: 5px 15px;
    		 border: 2px solid #fff;
   	 	 letter-spacing: 0.009em;
    		 font-size: 13px;
    		 font-weight: 400;
    		 line-height: 1;
    		 color: #fff;
    		 text-decoration: none;
    		}
 	 }
  
  	@media only screen and (max-width: 430px) {
    	.btn {
   		 display: inline-block;
    		 padding: 5px 10px;
    		 border: 1px solid #fff;
    		 letter-spacing: 0.005em;
    		 font-size: 10px;
    		 font-weight: 400;
    		 line-height: 1;
    		 color: #fff;
    		 text-decoration: none;
    		}
  	}
  
 	 @media only screen and (max-width: 568px) {
   	 .intro {
     		 padding: 0 10px;
    		}
   	 h1 {
      		font-size: 30px;
    		}
   	 h1::after {
     		 height: 6px;
   	 }
    	p {
     		 font-size: 18px;
    	}
    	.btn {
     		 font-size: 16px;
   	 }
	  }
  
 	 @media only screen and (max-width: 320px) {
    	h1 {
     		 font-size: 28px;
    	}
   	 h1::after {
      		height: 4px;
    	}
  	}
        </style>
    </head>
    <body>
        <center>
            <div class="intro">
                <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTERACTIVE QUIZ </h1>
	<a href="admin.php" class="btn"> ADMIN </a>
                <a href="login.php" class="btn"> LOGIN </a>
                <a href="register.php" class="btn"> REGISTER </a>
            </div>
        </center>
    </body>
</html>