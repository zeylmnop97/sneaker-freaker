<?php

// session_start();
// session_unset();


?>

<!DOCTYPE html> 
<html>
<head>

<title>
Pair-adox
</title>

<style>
	body{
		
		font-family: helvetica;
		background-image:linear-gradient(to bottom,#004d40,#00251a 100%);

	}
	label,b{
		color: black;
	}
	.main{
		max-width: 670px;
		margin-left: 26%;
		background-color: #ffff;
		padding: 30px;
		color: white;
		border-radius: 6px;
		border:1px grey solid;
	}

	@media(max-width: 950px){
		.main{
			margin-left: 0px;
			width: 100%;
		}
	}

	.icon img{
		width: 170px;
		height: 40px;
		background-color: #004d40;

	} .icon{
		width: 200px;
		height: 60px;
		padding: 10px;
		background-color: #004d40;
		border-radius: 7px;
	}

	.fname{
		float: left;
		margin-right: 2px;
	}

	.fname input{
		width: 330px;
	}

	.lname input{
		width: 330px;
	}

	.lname{
		float: left;
	}

	.width input{
		width: 100%;
	}

	.width select{
		width: 100%;
	}

	.button button{
		float: right;
		width: 330px;
		height: 25px;
	}

	.uname a{
		color: purple;
		font-weight: bold;
	}

	input,select{
		padding: 6.5px;
		border-radius: 3px;
		border: 1px grey solid;

	}

	.widthHalf input{
		width: 50%;
	}

</style>
</head>

<body>

<div class="main">
	
	<div class="icon">
		<a href="project.html"><img src="pair-adox.png"></a>
	</div>


		<h2 style="color: black;">Please Enter Your Details</h2>
		
	<div class="name">
		<div class="fname">
			<form>
			<label>Name</label><br><br> <input type="text" placeholder="First Name"><br><br>
			</form>
		</div><br><br><br><br>

		<div class="lname">
			<form>
			<input type="text" placeholder="Last Name">	
			</form>
		</div>
	</div><br><br><br><br>

	<div class="address widthHalf">
		<form>
			<label class="width">Address</label><br><br>
			<input type="text" name=""><br><br>
			<input type="text" name="">
		</form>
	</div><br>

	<div class="country width">
		<form>
			<label>Country/Region</label><br><br>
			<select>
				<option> Pakistan</opton>
				<option> Singapore</opiton>
				<option> China</opiton>
				<option> Japan</opiton>
				<option> USA</opiton>
				<option>UK</option>
				<option>Malaysia</option>
				<option>UAE</option>
				<option>Turkey</option>
			</select>
		</form>
	</div><br>

	<div>
		<form>
			<label>Gender</label><br><br>
			<b>Male</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br><br><b>Female</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="a">
		</form>
	</div><br>

	<div class="cc">
		<form style="float: left;">
			<label>Contact Number</label><br><br>
			<select style="width:100%;">
				<option> Pakistan<span>(+92)</span></opton>
				<option><span> Singapore(+65)</span></opiton>
				<option><span> China(+86)</span></opiton>
				<option><span> Japan(+81)</span></opiton>
				<option> <span>USA(+1)</span></opiton>
				<option><span>UK(+44)</span></option>
				<option><span>Malaysia(+60)</span></option>
				<option><sapn>UAE(+971)</span></option>
				<option>Turkey(+90)</option>
			</select>			
		</form>
	
		<form style="float: left;margin-top: 36px; margin-left: 30px;">
			<input type="number" style="width: 100%">
		</form>
	</div><br><br><br><br><br>

	<button style="width: 90px; height: 35px; color: white; background-color: rgb(0,102,232); border:1px blue solid; border-radius: 5px; " type="submit">Submit</button>

</div>

</body>
</html>