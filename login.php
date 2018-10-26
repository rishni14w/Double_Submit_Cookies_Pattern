<!--IT15529732-->
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<style>
			td{
			    padding: 20px;
			}
		</style>
	</head>
	<body style="background-color: LIGHTSALMON">

		<div class="jumbotron text-center" style="margin-bottom:0;background-color: INDIANRED;color: white">
			<div class="container" style="margin-top:30px" >
			  	<div class="row">
				    <div class="col-sm-4" style="float: right">
						
					</div>
					<div class="col-sm-6" style="float: left">
						<h1 style="float: left;padding: 20px">R Bank</h1>
					</div>
			  		
		  		</div>
		  	</div>
		</div>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#" style="background-color: CRIMSON;color: white;font-size: larger;border-radius: 60%">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact Us</a>
		      </li>    
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li> 
		    </ul>
		  </div>  
		</nav>

		<div class="container" style="margin-top:0px;background-color: LIGHTSALMON">
			<div class="row">
			    <div class="col-sm-12">			    	
					<h2 style="text-align: center;color: BLACK;">Login</h2> 
					<form action="./classes/loginToken.php" method="post">
						<table border="0" align="center" style="background-color: SEASHELL">
							<tr>
						        <td>Username</td>
						        <td><input type="text" name="username"/></td>
						    </tr>
						    <tr>
						        <td>Password</td>
						        <td><input type="password" name="Password"></td>
						    </tr>
						    <tr>
						    	<td><input type="submit" class="btn btn-primary" value="Login"/></td>
						    </tr>						        
						</table>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
