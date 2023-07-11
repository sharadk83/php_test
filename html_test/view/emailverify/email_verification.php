<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://'.$_SERVER['HTTP_HOST']; ?>/html_test/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://'.$_SERVER['HTTP_HOST']; ?>/html_test/css/styles.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>          

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Generate more leads with a professional landing page!</h1>                        
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddress" type="email"
                                        placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">
                                        Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email
                                        Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                        type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white"
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php  
include $_SERVER['DOCUMENT_ROOT']."/html_test/config.php";
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];

$sql=mysqli_query($con,"SELECT * FROM userregistration WHERE activationcode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
$result =mysqli_query($con,"SELECT id FROM userregistration WHERE activationcode='$code' and status='$st'");
$result4=mysqli_fetch_array($result);
if($result4>0)
 {
$st=1;
$server_protocol = $_SERVER['REQUEST_SCHEME'] . '://'.$_SERVER['HTTP_HOST'];
$result1=mysqli_query($con,"UPDATE userregistration SET status='$st' WHERE activationcode='$code'");
echo $msg='<div class="container position-relative">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center text-success">
                <!-- Page heading-->
                <h1 class="mb-5">Your account is activated</h1>
                <a href="'.$server_protocol.'/html_test#login">Login</a>                        
            </div>
        </div>
    </div>
</div>';
}
else
{
echo $msg ='<div class="container position-relative">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center text-info">
                <!-- Page heading-->
                <h1 class="mb-5">Your account is already active, no need to activate again</h1> 
                <h6><a href="'.$server_protocol.'/html_test#login">Login</a> </h6>                       
            </div>
        </div>
    </div>
</div>';
}
}
else
{
echo $msg ='<div class="container position-relative">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center text-danger">
                <!-- Page heading-->
                <h1 class="mb-5">Wrong activation code.</h1>                        
            </div>
        </div>
    </div>
</div>';
}
}
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/html_test/view/footer.php");