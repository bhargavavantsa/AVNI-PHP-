<head>
    <meta charset="utf-8" />
    <title>CRM :: Mylas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/public/assets/images/favicon.ico')}}">
    <!-- App css -->
    <link href="{{ asset('/public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
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
                                <p class="text-muted mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                            </div>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ asset('/forgotpwdUser') }}" class="pt-2" id="forgotPassword" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" name="emailaddress" id="emailaddress" placeholder="Enter your email">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> Reset Password </button>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">Back to <a href="{{ asset('login') }}" class="text-dark ml-1"><b>Log in</b></a></p>
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
            $("#forgotPassword").validate({
                rules:{
                    emailaddress:{
                        required: true
                    }
                },
                messages:{
                    emailaddress:{
                        required: "Please enter registered Email-Id"
                    }
                },
                submitHandler:function(){
                    $("#forgotPassword")[0].submit();
                }
            });
        });
    </script>    
</body>