  @include('layouts.header')

        <div class="container">

                <div class="panel panel-defult">
                    <div class="panel-heading">
                        <h2>User Login <span class="pull-right"><strong> Now </strong> <? php date_default_timezone_set('Asia/Dhana'); . echo ":" . date("Y:m:d h:i:s Asia");?></span></h2>
                    </div>    
                    <div class="panel-body">
                        <?php if (isset($userLogin)) { echo "string";} ?>
                        <form class="form" action="#" method="POST" enctype="multipart/form-date" autocomplete="off">
                            <div class="row">
                                <div class="col-md-3"></div>

                                <div class="col-md-6"><div class="header"><h2>Login Form</h2></div>

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
                                        <label for="mobile">Mobile Number</label> 
                                        <input type="mobile" class="form-control" id="mobile" name="mobile"  placeholder="Enter User Mobile  Number" required="Please Enter Your Mobile Number" />
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Password</label> 
                                        <input type="password" class="form-control" id="password" name="pass"  placeholder="Enter User Password" required="Please Enter Your PassWord" />
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" name="Register" type="submit">Register</button>
                                        <input class="btn btn-primary" name="Insert" type="submit" value="Insert" />
                                        <button class="btn btn-primary" name="save" type="submit">Save</button>
                                        <button class="btn btn-danger" name="delete" type="submit">Delete</button>
                                        <button class="btn btn-warning" name="Delete" type="submit">Delete</button>
                                        <button class="btn btn-info" name="edit" type="submit">Edit</button>
                                        <p>New Member Registration First <a href="{{url('registration')}}">Sing Up Here </a></p>
                                        
                                    </div>


                                </div>
                            
                                <div class="col-md-3"></div>
                            
                            </div>
                        </form>

                    </div>
                     
               </div>  
                 


                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <!-- <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path> -->
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <!-- <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path> -->
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
