<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music picks`</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
<style>
#close-modal {

      color: black;
    }
    body {
      background: #1f1e1e;
	 color:white;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }

    }

    div.modal-content {
      position: relative;
      bottom: 0;
      right: 0;
      width: 500px;
      border: 3px solid rgb(255, 128, 0);
	  color:rgb(255, 64, 0);
    }


    input[type=text],
    input[type=password],input[type=date],select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
	   border-radius: 5px;
    }
 button {
      background-color:rgb(255, 64, 0);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
	  border-radius: 5px;
    }
    #register{
      display:none; 
          }
</style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Music picks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#myModal" data-toggle="modal" data-target="#myModal">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Music picks</h1>
          <h2 class="masthead-subheading mb-0">Discover a part of yourself</h2>
          <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5 btn btn-info btn-lg" data-toggle="modal" data-target="#LoginModal">Login</a>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/rock1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Rock</h2>
              <p>Rock music is a broad genre of popular music that originated as "rock and roll" in the United States in the early 1950s, and developed into a range of different styles in the 1960s and later, particularly in the United Kingdom and in the United States.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/ic2.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Indian classical</h2>
              <p>Indian classical music is a genre of South Asian music.It has two major traditions: the North Indian classical music tradition is called Hindustani, while the South Indian expression is called Carnatic.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/sufi.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Sufi</h2>
              <p>Sufi music is the devotional music of the Sufis,qawwali is the most well known form of Sufi music, and is most commonly found in the Sufi culture in South Asia.Sufi love songs are often performed as ghazals and Kafi</p>
            </div>
          </div>
        </div>
      </div>
    </section>

	
	
	
	
	  
        <div class="col-md-6">
<center>
        
        <!-- Modal -->
        <div class="modal fade" id="LoginModal" role="dialog" align="center">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title">Login</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="login.php" method="POST">
                <table align="center">
                  <tr>
                    <td>
                      <label>
                        <b>Email: </b>
                      </label>
                    </td>
                    <td>
                      <input type="text" placeholder="Enter Email" name="email" required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <b>Password: </b>
                      </label>
                    </td>
                    <td>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                    </td>
                  </tr>
                  <tr>
                  <td id="txthint">  </td>
                   </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <button name="SubmitLog" type="submit">Login</button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <span class="psw">
                        <a href="#">Forgot password?</a>
                      </span>
                    </td>
                  </tr>
                </table>
              </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
  </center>
      </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		
		
          <h3 class="modal-title">Registration</h3>
		
		<button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
          
        </div>
        <div class="modal-body">
          <form action="register.php" method="POST" enctype="multipart/form-data" >
                <table align="center">

                  <tr>
                    <td>
                      <label>
                        <h6>First Name: </h6>
                      </label>
                    </td>
                    <td>
                      
                      <input type="text" placeholder="Enter Firstname" id="fname" name="fname" required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <h6>Last Name: </h6>
                      </label>
                    </td>
                    <td>
                      <input type="text" placeholder="Enter Lastname" id="lname" name="lname" required>
                    </td>
                  </tr>
                   
                
                 
                  <tr>
                    <td>
                      <label>
                        <h6>Gender: </h6>
                      </label>
                    </td>
                    <td>
                   &nbsp&nbsp&nbsp&nbsp
                     <label>Male &nbsp<input type="radio" id="male" name="gen" value="male" required></label>
                     &nbsp&nbsp&nbsp&nbsp
                     <label>Female &nbsp<input type="radio" id="female" name="gen" value="female" required></label>
  
                    </td>
                  </tr>
                  
                  
                
                  <tr>
                    <td>
                      <label>
                        <h6>Email: </h6>
                      </label>
                    </td>
                    <td>
                      <input id="email" placeholder="Enter email"  name="email" type="email" required></input>
                    </td>
                  </tr>
				  
				  <tr>
                    <td>
                      <label>
                        <h6>contact: </h6>
                      </label>
                    </td>
                    <td>
                      <input id="contact" placeholder="Enter contact"  name="contact" type="number" required></input>
                    </td>
                  </tr>
				  
				   <tr>
                    <td>
                      <label>
                        <h6>Language Preferences: </h6>
                      </label>
                    </td>
                    <td>
                      &nbsp&nbsp&nbsp&nbsp
                     <label>Kannada &nbsp<input type="checkbox" id="Kannada" name="pref[]" value="kannada" ></label>
                     &nbsp&nbsp&nbsp&nbsp
                     <label>Tamil &nbsp<input type="checkbox" id="Tamil" name="pref[]" value="Tamil" ></label>
					 &nbsp&nbsp&nbsp&nbsp
                     <label>Telugu &nbsp<input type="checkbox" id="Telugu" name="pref[]" value="Telugu" ></label>
                     &nbsp&nbsp&nbsp&nbsp
                     <label>English &nbsp<input type="checkbox" id="English" name="pref[]" value="English"></label>
					 &nbsp&nbsp&nbsp&nbsp
                     <label>Hindi &nbsp<input type="checkbox" id="Hindi" name="pref[]" value="Hindi" ></label>
                     &nbsp&nbsp&nbsp&nbsp
                     <label>Punjabi &nbsp<input type="checkbox" id="Punjabi" name="pref[]" value="Punjabi" ></label>
				    
					
					
					
					
					
				
					  </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <h6>Display picture: &nbsp&nbsp</h6>
                      </label>
                    </td>
                    <td>
                        <input type="file" id="fileToUpload" name="fileToUpload" accept="image/jpeg">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        <h6>Password: </h6>
                      </label>
                    </td>
                    <td>
                      <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
                    </td>
                  </tr>
                  <tr>
                      <td>
                        <label>
                           <h6>Your fav song name?</h6> &nbsp&nbsp&nbsp&nbsp
                        </label>
                      </td>
                      <td>
                      <input type="text" placeholder="Enter your answer" id="secans" name="secans" required>
                      </td>
                    </tr>
                  <tr>
                    <td colspan="2" align="center" >
                      <button type="submit" id="register" name="SubmitReg" class="s">submit</button>
                    </td>
                  </tr>
				  
				  
                </table>
              </form>
                    <button class="btn btn-success"  onclick="validate()"> Register </button>
        </div>
       
      </div>
      
    </div>
  </div>
	
	
	
	
	
	
	
	
	
	
    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Music picks 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
function validate()
{
  var phoneno = /^\d{10}$/;
  var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var ph = document.getElementById("contact").value;
  var em = document.getElementById("email").value;
  if(ph.match(phoneno))
  {
    if(em.match(email))
    {
      var but = document.getElementById("register");
      but.click();
    }
    else
    {
      alert("Improper Email");
    }
 
  }
  else{
    alert("Improper Contact Number");
  }


}
</script>
  </body>
 
</html>
