 @include('layouts.header')


	<div class="container">
		  <h1>My First Insert Form Data In MYSQL DataBase Using PHP</h1>
			<form action="Insert.php", method ="POST">
				<div class="row">
					<div class="col-md-6">
					  	<div class="header"><h2>Login Form </h2></div>

					  	Name : <input class="form-control" name="name" placeholder="Enter Your Name" type="text"></br>
						Email : <input class="form-control" name="email" placeholder="Enter Your Email" type="text"></br>
				   		User Name :<input class="form-control" name="user" placeholder="Enter Your User Name" type="text"></br>
				    	Password: <input class="form-control" name="pass" placeholder="Enter Your Password" type="text"></br>
				    	<input class="btn btn-success" name="submit" type="Submit" value="Insert"/>
				    	<button class="btn btn-primary" name="save" type="submit">Save </button>
				      	<button class="btn btn-danger" name="delete" type="submit">Delete </button>
				     	<button class="btn btn-warning" name="delete" type="submit">Delete </button>
				     	<button class="btn btn-info" name="edit" type="submit">Edit </button>

				     	<p>New Member Registration Here<a href="registration"> Sign Up Here </a></p>

				    </div> 

				    <div class="col-md-6">
					  		<div class="header"><h2>Registration Form </h2></div>
							<div class="form-group">
							      <label for="name">Full Name:</label>
							      <input class="form-control" id="name" name="name" placeholder="Enter Your Name" type="text" />
							</div>
							<div class="form-group">
							      <label for="fname">Father's Name:</label>
							      <input class="form-control" id="fname" name="fname" placeholder="Enter Your Father's Name" type="text" />
							</div>
							<div class="form-group">
							      <label for="mname">Mother's Name:</label>
							      <input class="form-control" id="mname" name="mname" placeholder="Enter Your Mother's Name" type="text" />
							</div>
							<div class="form-group">
							      <label for="sname">Spouse's Name:</label>
							      <input class="form-control" id="sname" name="sname" placeholder="Enter Your Spouse's Name" type="text" />
							</div>
							<div class="form-group">
							    <label for="email">Email:</label>
							    <input class="form-control" id="email" name="email" placeholder="Enter Your Email" type="text"/>
							</div>
							<div class="form-group">
							      <label for="username">User Name:</label>
							      <input class="form-control" id="username" name="username" placeholder="Enter User Name"type="text"/>
							</div>
							<div class="form-group">
								<label for="pwd"> Password:</label>
							    <input class="form-control" id="pass"name="pass" placeholder="Enter Your Password" type="text"/>
							</div>
							<div class="form-group">
								<label for="phone"> Phone :</label>
							    <input class="form-control" id="phone"name="phone" placeholder="Enter Your Phone Numver" type="text"/>
							</div>
							<div class="form-group">

								<button class="btn btn-success" name="Register" type="submit">Register</button>
								<input class="btn btn-primary" name="Insert" type="submit" value="Insert" />
								<button class="btn btn-primary" name="save" type="submit">Save</button>
						      	<button class="btn btn-danger" name="delete" type="submit">Delete</button>
						      	<button class="btn btn-warning" name="Delete" type="submit">Delete</button>
						      	<button class="btn btn-info" name="edit" type="submit">Edit</button>
							    <p>Already is A Member <a href="login"> Sign In Here </a></p>       
						 	</div>
					</div>
				</div>
			</form>
		  
		</div>

		<!-- Or let Bootstrap automatically handle the layout -->
		<div class="container">
			<div class="row">
				<div class="col-md-3">Start - 0</div>
				<div class="col-md-3">One - 1</div>
				<div class="col-md-3">Two - 2</div>
				<div class="col-md-3">Three - 3</div>
			</div>
		</div>
	</div>
 <!-- Control the column width, and how they should appear on different devices -->

</body>
</html>