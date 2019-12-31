<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music picks</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
<style>
#m {
    border-bottom: double;
	background-color: lightgrey;
    width: 180px;
    max-width: 180px;
    height: 180px;
    max-height: 180px;
    border: 5px solid orange;
    padding: 25px;
    margin: 25px;
}
#i{
  max-width: 100%;
  max-height: 100%;
}
#player{
  width:100%;
}
#c1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#c1 td, #c1 th {
    border-bottom: 1px solid #ddd;
    padding: 8px;
    color:white;
}

#c1 tr:nth-child(even){background-color: black;}

#c1 tr:hover {background-color: rgba(0, 0, 0, 0.212);}

#c1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #bd5d38;
    color: white;
}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}



.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border: 2px solid #bd5d38;
    border-radius: 4px;
}
#box {
    width:500px;
    margin: auto;
    border: 3px solid orange;
	color:#bd5d38;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #bd5d38;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
h2,h1{
color:#bd5d38;
}
</style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/abd.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">All Songs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#su">Song upload</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#t50">Top 50</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#t30">Top 30</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
	  <h1>All Songs</h1>
        <div class="my-auto">
            
                
                <input type="text" placeholder="Search.." style="width:30%;">
             
              <br><br><br>
			<table id="c1">
  <tr>
    <th><center>Song</center></th>
    <th><center>Artists</center></th>
    <th><center>Genre</center></th>
    <th><center>Album</center></th>
    <th><center>Player</center></th>
    <th><center>Vote</center></th>
  </tr>
  
  <tr>
      <td>
        <img src="img/vk.jpg" id="i">
       </td>
       <td></td>
      <td></td>
      <td></td>
      <td><audio id="player" controls>
          <source src="s2.mp3" type="audio/mp3">
        </audio></td>
        <td><center><select>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
        </select></center></td>
    </tr>
  

</table>
		 

  

		 
		 
		 
		 
          
        </div>
      </section>

	  
	  
	  
	  
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="su">
        <div class="my-auto">
          <section>
  
  
 
  <div id="box">
    <center><h1><u>Song Upload</u></h1></center>
    <form action="addsongs.php" method="post" enctype="multipart/form-data">
     <table align="center">
    
                      <tr>
                        <td>
                          <label>
                            <h2>Song: </h2>
                          </label>
                        </td>
                        <td>
                          
                          <input type="text" placeholder="Enter Song name" name="sname">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            <h2>Artists: </h2>
                          </label>
                        </td>
                        <td>
                          <input type="text" placeholder="Enter Artists" name="artist" >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            <h2>Album: </h2>
                          </label>
                        </td>
                        <td>
                          <input type="text" placeholder="Enter Album" name="album">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            <h2>Language: </h2>
                          </label>
                        </td>
                        <td>
                          
                          <input type="text" placeholder="Enter Language" name="language">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            <h2>Display picture:</h2
                          </label>
                        </td>
                        <td>
                            <input type="file" id="dp" name="dp" accept="image/jpeg">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>                 
                            <h2>Genre: </h2>
                          </label>
                        </td>
                        <td>
                          <input type="text" placeholder="Enter Genre" name="genre">
                        </td>
                      </tr>
              <tr>
                        <td>
                          <label>
                            <h2>Song:</h2
                          </label>
                        </td>
                        <td>
                            <input type="file" id="fileToUpload" name="fileToUpload" >
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center" >
                          <center><button type="submit" name="submit" class="button">Upload</button></center>
                        </td>
                      </tr>
              
              
                    </table>
</form>
      </div>
</section>

        </div>
      </section>

	  
	  
	  
	  
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="t50">
        <div class="my-auto">
         
        <section>
  
  <h1>Top 50</h1>
  <table id="c1">
    <tr>
      <th><center>Song</center></th>
      <th><center>Artists</center></th>
      <th><center>Genre</center></th>
      <th><center>Album</center></th>
      <th><center>Player</center></th>
      <th><center>Vote</center></th>
    </tr>
    
    <tr>
        <td>
          <img src="img/vk.jpg" id="i">
         </td>
         <td></td>
        <td></td>
        <td></td>
        <td><audio id="player" controls>
            <source src="s2.mp3" type="audio/mp3">
          </audio></td>
          <td><center><select>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
          </select></center></td>
      </tr>
     
        
  </table>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td></td>
          <td> </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
		<tr>
          <td></td>
          <td> </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
       
      </tbody>
    </table>
  </div>
</section>


		 
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="t30">
        <div class="my-auto">
         
        <section>
  
  <h1>Top 30</h1>
  <table id="c1">
    <tr>
      <th><center>Song</center></th>
      <th><center>Artists</center></th>
      <th><center>Genre</center></th>
      <th><center>Album</center></th>
      <th><center>Player</center></th>
      <th><center>Vote</center></th>
    </tr>
    
    <tr>
        <td>
          <img src="img/vk.jpg" id="i">
        </td>
         <td></td>
        <td></td>
        <td></td>
        <td><audio id="player" controls>
            <source src="s2.mp3" type="audio/mp3">
          </audio></td>
          <td><center><select>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
          </select></center></td>
      </tr>
     
         
         
  </table>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td></td>
          <td> </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
		<tr>
          <td></td>
          <td> </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
       
      </tbody>
    </table>
  </div>
</section>


		 
        </div>
      </section>
	  
	  
	  
	  
      
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
