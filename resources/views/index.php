<?php include "inc/Header.php"; ?>

    <div class="container-fluid" style="margin-top:20px">
      <div class="container">
      <h1>My First Insert Form Data In MYSQL DataBase Using PHP</h1>
      <p>This is some text.</p>
			<form action="Insert.php", method ="POST";>
			<div class="row">
			  <div class="col-md-3"><h2>Left Side</h2></div>
			  <div class="col-md-6">
				<div class="header"><h2>Login Form </h2></div>
					Full Name : <input class="form-control" name="name" placeholder="Enter Your Name" type="text"/>
					Address : <input class="form-control" name="address" placeholder="Enter Your Address" type="text"/>
					Relation: <input class="form-control" name="relation" placeholder="Enter Your Relation Status" type="text"/>
					Gender: <input class="form-control" name="sex" placeholder="Enter Your Gender" type="text"/>
					GPA: <input class="form-control" name="gpa" placeholder="Enter Your GPA Point" type="text"/>
					Email : <input class="form-control" name="email" placeholder="Enter Your Email" type="text"/>
					Password: <input class="form-control" name="pass" placeholder="Enter Your Password" type="text"/>
					Mobile: <input class="form-control" name="mobile" placeholder="Enter Your Mobile Number" type="text"/></br>
				  <input class="btn btn-success" name="submit" type="Submit" value="Insert"/>
				  <button class="btn btn-primary" name="save" type="submit">Save</button>
				  <button class="btn btn-danger" name="delete" type="submit">Delete</button>
				  <button class="btn btn-warning" name="update" type="submit">Update</button>
				  <button class="btn btn-info" name="edit" type="submit">Edit</button>
				  <p>
					Already is A Member <a href="register.html"> Sign In Here </a>
				  </p>
			  </div>
			  <div class="col-md-3"><h2>Right Side</h2></div>
			</div>
			</form> 

    </div> 
     <div class="row">
      <div class="col-md-4">1</div>
      <div class="col-md-4">2</div>
      <div class="col-md-4">3</div>
      </div>
	<div class="row">
	  <div class="col-md-4">1</div>
      <div class="col-md-4">2</div>
      <div class="col-md-4">3</div>
	</div>

<!-- Or let Bootstrap automatically handle the layout -->
<div class="row">
  <div class="col">One - 1</div>
  <div class="col">Two - 2</div>
  <div class="col">Three - 3</div>
</div>
</div>
 <!-- Control the column width, and how they should appear on different devices -->


</body>
</html>