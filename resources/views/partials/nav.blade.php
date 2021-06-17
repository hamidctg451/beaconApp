  <div class="container">

                <div class="panel panel-defult">
                    <div class="panel-heading">
                        <h2>User Login <span class="pull-right"><strong> Now </strong> <? php date_default_timezone_set('Asia/Dhana'); echo ":" . date("Y:m:d h:i:s A");?></span></h2>
                    </div>    
                    <div class="panel-body">
                        <?php if (isset($userLogin)) { echo "string";} ?>

                        <form class="form" action="#" method="POST" enctype="multipart/form-date" autocomplete="off">
                            <div class="row">
                                <div class="col-md-3"></div>

                                <div class="col-md-6"> 
                                    <div class="header"><h2>Login Form</h2></div>

                                    <h2>Create An Account</h2>
                                    <div class="form-group">
                                        <label for="name">Name</label> 
                                        <input type="name" class="form-control" id="name" name="name"  placeholder="Enter User name" required="Please Enter Your User Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email Address</label> 
                                        <input type="email" class="form-control" id="email" name="email"  placeholder="Enter User Email" required="Please Enter Your Email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label> 
                                        <input type="mobile" class="form-control" id="mobile" name="mobile"  placeholder="Enter User Mobile  Number" required="Please Enter Your Mobile Number" />
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Password</label> 
                                        <input type="password" class="form-control" id="password" name="pass"  placeholder="Enter User Password" required="Please Enter Your PassWord" />
                                    </div>

                                    <button> Login </button>
                                    <p>New Member Registration First <a href="index">Sing Up Here </a></p>

                                </div>
                                <div class="col-md-3"></div>
                            
                            </div>
                        </form>

                    </div>
                     
               </div> 