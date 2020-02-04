<head>
    <meta charset="utf-8" />
    <title>CRM :: Mylas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/public/assets/images/favicon.png') }}">

    <!-- App css -->
    <link href="{{ asset('/public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>        
    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">                                
                            <div class="text-center mb-4">
                                <a href="index.html">
                                    <span><img src="{{ asset('/public/assets/images/logo_f1.png') }}" alt="" height="50"></span>
                                </a>
                            </div>
                            <form action="{{asset('/loginUser')}}" method="POST" class="pt-2" id="loginForm">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="emailaddress" id="uname">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                <div class="form-group mb-3">
                                    <a href="{{asset('forgotPwd')}}" class="text-muted float-right"><small>Forgot your password?</small></a>
                                    <label for="password" id="psw">Password</label>
                                    <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox-signin" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit" id="login"> Log In </button>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">Don't have an account? <a href="{{ asset('register')}}" class="text-dark ml-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <!-- Vendor js -->
    <script src="{{ asset('/public/assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('/public/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/jquery.validate.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
            // Hide displayed paragraphs
            $("#showcreate").click(function() {        	
                $("#main").attr("style","display:none");
                $("#create").attr("style","display:block");     
            });
             $("#signup").click(function() {            	
                $("#create").attr("style","display:none");
                $("#main").attr("style","display:block");
            });
            $("#showpswd").click(function() {             	  
                $("#main").attr("style","display:none");
                $("#pswd").attr("style","display:block");
            });
            $("#create-account").click(function() {             	  
                $("#create").attr("style","display:none");
                $("#main").attr("style","display:block");
            });
            $("#pswd-reset").click(function() {
                $("#pswd").attr("style","display:none");
                $("#main").attr("style","display:block");
            });

            /*$('#login').click(function() {
        		var username = $('#emailaddress').val();
        		var pass = $('#password').val();
        		if(username == 'mylas@tech.com' && password != '' && pass == 'mylas') {
        			window.location.href = "index.html";
        		}
        		else {
        			alert('credentails wrong');
        		}
        	});*/
            $("#loginForm").validate({
                rules:{
                    emailaddress:{
                        required: true
                    },
                    password:{
                        required: true
                    }
                },
                messages:{
                    emailaddress:{
                        required: 'Please enter registered Email-Id'
                    },
                    password:{
                        required:'Please enter password'
                    }
                },
                submitHandler:function(){
                    $("#loginForm")[0].submit();
                }
            })
        });		
	</script>        
</body>