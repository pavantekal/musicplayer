<!DOCTYPE html>
<html lang="en">
<?php session_start();
$_SESSION['filter']="";
?>
  <head>
    <script>
   document.addEventListener("play", function(evt)
{
    if(window.$_currentlyPlaying && window.$_currentlyPlaying != evt.target)
    {
        window.$_currentlyPlaying.pause();
    } 
    window.$_currentlyPlaying = evt.target;
}, true);
      </script>
      <script>
    function alert1()
    {
    alert("Logged Out Succesfully");
    document.getElementById("logout").click();
    }
    </script>
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
</style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src=<?php echo $_SESSION['dp'];  ?> alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><?php echo $_SESSION['name']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pup">Private playlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#prp">Public playlist</a>
          </li>
          <li class="nav-item">
          <input type="submit" onclick="alert1()" value="logout">
            <form action="logout.php">
                <input type="submit" id="logout" style="display:none"; value="logout">
            </form>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
        <div class="my-auto">
            <div class="topnav">
                <h1>MUSIC PICKS</h1>
                <form action="" method="get">
                <select name="selected" id="selected">
                <option> Preference </option>
                <option> most Played </option>
                <option> Romantic </option>
                <option> Classical </option>
                <option> Rock </option> 
              
              
              
              
              </select>
                <input type="text" placeholder="Search..">
                <input type="submit" value="submit" name="prefe">
                <input type="submit" value="clear filter" name="cfilter">
</form>
              </div>
              <br><br><br>
			<table id="c1">
  <tr>
    <th><center>Song</center></th>
    <th><center>Artists</center></th>
    <th><center>Genre</center></th>
    <th><center>Album</center></th>
    <th><center>Player</center></th>
    <th><center>Vote</center></th>
    <th><center>Private Playlist</center></th>
    <th><center>Public Playlist</center></th>
  </tr>
  <?php
  $email = $_SESSION['email'];
   require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
 

   $client = new MongoDB\Client;
   $musicpicks = $client->musicpicks;
   $songsdb = $musicpicks->songsdb;
   $result = $songsdb->find();
   
      if(isset($_GET['prefe']))
      {
          $pref = $_GET['selected'];
          if($pref == 'Classical' || $pref=='Romantic' || $pref=='Rock')
          {
            foreach($result as $res)
            {
              if($res['genre']==$pref)
              {
             $songname =  $res['song'];
             $salbum = $res['album'];
             $sartist = $res['artist'];
             $slanguage = $res['language'];
             $sgenre = $res['genre'];
             $screen = $res['songscreen'];
             $songpath = $res['songpath'];
             $addtoprivate = "<form action='addtoplaylist.php' method='post'><input type='hidden' value='$songname' name='songname'><input type='submit' name='private' value='Add'></form>"; 
   $addtopublic = "<form action='addtoplaylist.php' method='post'><input type='hidden' value='$songname' name='songname'><input type='submit' name='public' value='Add'></form>";  
             echo "<tr><td><img src=$screen alt=$screen height='150px' width='150px'><br>$songname</td>
             <td>$sartist</td>
            <td>$sgenre</td>
            <td>$salbum</td>
            
            <td><audio id='player' controls>
                <source src='$songpath' type='audio/mp3'>
              </audio></td>
              <td><center><select>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
              </select></center></td>";
              $client = new MongoDB\Client;
              $musicpicks = $client->musicpicks;
              $userdb = $musicpicks->userdb;
              $result = $userdb->findOne(
                ['email' => $email,'privateplaylist'=>$songname]
              );
              if($result)
              echo "<td>Added!</td>";
              else
              echo "<td>$addtoprivate</td>";
              $result1 = $userdb->findOne(
                ['email' => $email,'publicplaylist'=>$songname]
              );
              if($result1)
              echo "<td>Added!</td>";
              else
              echo "<td>$addtopublic</td>";
          echo"</tr>";
            }

          }
          }
      }
      else
      {
        foreach($result as $res)
        {
         $songname =  $res['song'];
         $salbum = $res['album'];
         $sartist = $res['artist'];
         $slanguage = $res['language'];
         $sgenre = $res['genre'];
         $screen = $res['songscreen'];
         $songpath = $res['songpath'];
         $addtoprivate = "<form action='addtoplaylist.php' method='post'><input type='hidden' value='$songname' name='songname'><input type='submit' name='private' value='Add'></form>"; 
   $addtopublic = "<form action='addtoplaylist.php' method='post'><input type='hidden' value='$songname' name='songname'><input type='submit' name='public' value='Add'></form>";  
         echo "<tr><td><img src=$screen alt=$screen height='150px' width='150px'><br>$songname</td>
         <td>$sartist</td>
        <td>$sgenre</td>
        <td>$salbum</td>
        
        <td><audio id='player' controls>
            <source src='$songpath' type='audio/mp3'>
          </audio></td>";
          $userresult = $songsdb->aggregate(
            array(
              ['$match'=>['song'=>$songname]],
              ['$unwind'=>'$users']
              )
            
          );
          $flag=0;
          foreach($userresult as $ur)
          {
           if($ur['users']==$email)
           {
             $flag=1; 
              break;
              }
            }
          {
            if($flag==1)
            {
              echo "<td>Already Voted!</td>";
            }
            else{
              echo "<td><form action='updaterating.php' method='post'><input type='hidden' value='$songname' name='songname'><center><select class='form-control' name='rate'>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
              <option value=4>4</option>
              <option value=5>5</option>
            </select></center><input type='submit' value='submit'name='updaterating' class='btn btn-success'></form></td>";
            }
          }
          
          $client = new MongoDB\Client;
          $musicpicks = $client->musicpicks;
          $userdb = $musicpicks->userdb;
          $result = $userdb->findOne(
            ['email' => $email,'privateplaylist'=>$songname]
          );
          if($result)
          echo "<td>Added!</td>";
          else
          echo "<td>$addtoprivate</td>";
          $result1 = $userdb->findOne(
            ['email' => $email,'publicplaylist'=>$songname]
          );
          if($result1)
          echo "<td>Added!</td>";
          else
          echo "<td>$addtopublic</td>";
      echo"</tr>";
        }
      }
      if(isset($_GET['cfilter']))
      {
        unset($_GET['prefe']);
      }
    ?>
  </table>
  

		 

  

		 
		 
		 
		 
          
        </div>
      </section>

	  
	  
	  
	  
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="pup">
        <div class="my-auto">
          <section>
  
  <h1>MY PLAYLIST</h1>
 
  <table id="c1">
    <tr>
      <th><center>Song</center></th>
      <th><center>Artists</center></th>
      <th><center>Genre</center></th>
      <th><center>Album</center></th>
      <th><center>Player</center></th>
      <th><center>Actions</center></th>
    </tr>
    <tr>
    <?php
  $email = $_SESSION['email'];
   require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
 

   $client = new MongoDB\Client;
   $musicpicks = $client->musicpicks;
   $userdb = $musicpicks->userdb;
   $resuu = $userdb->findOne(
     ['email'=>$email]
   );
   if($resuu)
   {
    $result = $userdb->aggregate(
      array(
        ['$match'=>['email'=>$email]],
        ['$unwind'=>'$privateplaylist']
        )
      
    );
    foreach($result as $res)
    {
      $musicpicks = $client->musicpicks;
   $songsdb = $musicpicks->songsdb;
   $songresult = $songsdb->find(
    ['song'=>$res['privateplaylist']] 
   );
   foreach($songresult as $song)
   {
    $prsongname =  $song['song'];
    $prsalbum = $song['album'];
    $prsartist = $song['artist'];
    $prslanguage = $song['language'];
    $prsgenre = $song['genre'];
    $prscreen = $song['songscreen'];
    $prsongpath = $song['songpath'];
    echo "<tr><td><img src=$prscreen alt=$prscreen height='150px' width='150px'><br>$prsongname</td>
    <td>$prsartist</td>
   <td>$prsgenre</td>
   <td>$prsalbum</td>
   
   <td><audio id='player' controls>
       <source src='$prsongpath' type='audio/mp3'>
     </audio></td>
     <td><form action='removeplaylist.php' method='post'><input type='hidden' value='$prsongname' name='songname'><input type='submit' name='private' value='Delete' class='btn btn-danger'></form>";
   }
  }
  }
   ?>
   
  </table>
</section>

        </div>
      </section>

	  
	  
	  
	  
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="prp">
        <div class="my-auto">
         
        <section>
  
  <h1>PUBLIC PLAYLIST</h1>
  <table id="c1">
    <tr>
      <th><center>Song</center></th>
      <th><center>Artists</center></th>
      <th><center>Genre</center></th>
      <th><center>Album</center></th>
      <th><center>Player</center></th>
      <th><center>Action</center></th>
    </tr>
    <?php
    $email = $_SESSION['email'];
   require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
 

   $client = new MongoDB\Client;
   $musicpicks = $client->musicpicks;
   $userdb = $musicpicks->userdb;
   $resuu = $userdb->findOne(
     ['email'=>$email]
   );
   if($resuu)
   {
    $result = $userdb->aggregate(
      array(
        ['$match'=>['email'=>$email]],
        ['$unwind'=>'$publicplaylist']
        )
    );
    foreach($result as $res)
    {
      $musicpicks = $client->musicpicks;
   $songsdb = $musicpicks->songsdb;
   $songresult = $songsdb->find(
    ['song'=>$res['publicplaylist']] 
   );
   foreach($songresult as $song)
   {
    $prsongname =  $song['song'];
    $prsalbum = $song['album'];
    $prsartist = $song['artist'];
    $prslanguage = $song['language'];
    $prsgenre = $song['genre'];
    $prscreen = $song['songscreen'];
    $prsongpath = $song['songpath'];
    echo "<tr><td><img src=$prscreen alt=$prscreen height='150px' width='150px'><br>$prsongname</td>
    <td>$prsartist</td>
   <td>$prsgenre</td>
   <td>$prsalbum</td>
   
   <td><audio id='player' controls>
       <source src='$prsongpath' type='audio/mp3'>
     </audio></td>
     <td><form action='removeplaylist.php' method='post'><input type='hidden' value='$prsongname' name='songname'><input type='submit' name='public' value='Delete' class='btn btn-danger'></form>";
   }
  }
  }
   ?>
      
  
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
