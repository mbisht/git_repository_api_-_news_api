<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      //background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GitHub</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Pull requests</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">Marketplace</a></li>
	  <li><a href="#">Explore</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3">
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-3 sidenav">
	<?php
		//$url= "https://api.github.com/users/supreetsingh247";
		//$data = file_get_contents($url);
		//$characters = json_decode($data);
		//$json = json_decode(file_get_contents('https://api.github.com/users/supreetsingh247'));
		
		ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1) Gecko/20090615 Firefox/3.5');
		$homepage = (file_get_contents('https://api.github.com/users/supreetsingh247'));
		$homepage1 = (file_get_contents('https://api.github.com/users/supreetsingh247/repos'));
		$data = json_decode($homepage);
		$data1 = json_decode($homepage1);
		
	?>
			<!--<img src="https://www.gettyimages.in/landing/assets/static_content/home/info-tabs3.jpg" class="img-rounded" alt="Cinque Terre" width="230" height="230">-->
			<img width="230" height="230" class="img-rounded" alt="" title="" src="<?php $avatar_url = $data->{'avatar_url'}; echo "${avatar_url} \n";?>">
		
		
<div class="" style="position: static; top: 0px; left: 184.5px; width: 229px;">
  <h4 class="">
    <span><?php $name = $data->{'name'}; echo "${name} \n";?></span>
    <span><?php $login = $data->{'login'}; echo "${login} \n";?></span>
  </h1>
  
  <p><?php $bio = $data->{'bio'}; echo "${bio} \n";?></p>
  <button type="button" class="btn btn-default btn-sm btn-block"><b>Follow</b></button>
  
  <br>
  <a href="#report-block-modal" class="btn-link text-small muted-link" rel="facebox">Block or report user</a>
  <hr>
  
  <p><?php $company = $data->{'company'}; echo "${company} \n";?> <br>
  <?php $location = $data->{'location'}; echo "${location} \n";?><br>
  <a href="#report-block-modal" rel="facebox"><?php $login = $data->{'login'}; echo "${login}";?>@gmail.com</a></p>
  
</div>
	
    </div>
	<div class="col-sm-3"></div>
	</div>
</div>	
	

    <div class="col-sm-9">
	
		<ul style="list-style-type: none;margin: 0;padding: 0;">
		  <li style="display: inline;"><a href="#" style="color:black"><b> Overview</b></a> </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <li style="display: inline;"><a href="#" style="color:black"><b> Repositories</b></a> <span class="badge">11</span></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <li style="display: inline;"><a href="#" style="color:black"><b> Stars</b></a> <span class="badge">6</span></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <li style="display: inline;"><a href="#" style="color:black"><b> Followers</b> <span class="badge">2</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <li style="display: inline;"><a href="#" style="color:black"><b> Following</b> <span class="badge">2</span></a></li>
		</ul>
      <hr>
	<div class="row">
		<div class="col-sm-7">
	<div class="form-group">
		<input type="text" class="form-control" id="usr">
	</div>
		</div>
		
		<div class="col-sm-2">
	<div class="form-group">
		<select class="form-control" id="sel1">
			<option>Type: All</option>
		</select>
	</div>	
		</div>
		
		<div class="col-sm-3">
	<div class="form-group">
		<select class="form-control" id="sel1">
			<option>Language: All</option>
		</select>
	</div>	
		</div>
	</div>	
	  
	  <hr>
	<?php
	foreach ($data1 as $data) 
{	
	?>
      <h3 style="color:#0366d6; display:inline;"><?php $name = $data->{'name'}; echo "${name} \n";?></h3>
      <h4><?php $description = $data->{'description'}; echo "${description} \n";?></h4>
      <h5><?php $language = $data->{'language'}; echo "${language} \n";?></span> <span class="glyphicon glyphicon-time"></span> Updated on <?php $updated_at = $data->{'updated_at'}; echo "${updated_at} \n";?></h5>
      <!--<h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>-->
	  <hr>
    <?php
	}
	?>  
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>© 2018 GitHub, Inc. Terms Privacy Security Status Help Contact GitHub API Training Shop Blog</p>
</footer>

</body>
</html>
