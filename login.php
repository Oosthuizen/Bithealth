<?php
require_once("/ajax/jqSajax.class.php");
session_start();

function DoLogin($username,$Password){
    //for later
    $url = "http://localhost:53172/Surf.svc/Login/$username/$Password";
    $client = curl_init($url);
    $data = "username=$username&pwd=$Password";

    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($client,CURLOPT_POST,1);
    curl_setopt($client,CURLOPT_POSTFIELDS,$data);

    $response = curl_exec($client);
    curl_close($client);
    $result = json_decode($response);

    $_SESSION['Login'] = true;
    $_SESSION['user'] = $result;
    return 1;
}

//-----------------------------------------------------------
$ajax = new jqSajax(1, 1, 1); //the default jqSajax(1,1,1)
$ajax->request_type = "POST";
//$ajax->debug_mode = 1;
$ajax->friendly_url = 1;
$ajax->as_method = 1;
$ajax->export("page->DoLogin", "DoLogin");
$ajax->processClientReq();
//-----------------------------------------------------------

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitHealth | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="ajax/jquery.validate.min.js"></script>

    <!-- Login validation -->
    <script src="js/plugins/ValidationFormScript.js"></script>

</head>

    <body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class=ibox-content middle-box text-center loginscreen  animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">SC</h1>

                </div>
                <h3>Welcome to Surf Check</h3>
                <p>Login to see surf conditions</p>
                <form class="m-t" role="form" id="form1">
                    <div class="form-group">
                            <input id="Email" name="email" type="text" class="form-control input-md" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button id="Submit" type="button" class="btn btn-primary block full-width m-b">Login</button>

                </form>
                <p class="m-t"> <small>Service Computing : Mario Da Silva &copy; 2015</small> </p>
            </div>
        </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

        <script type="text/javascript">


            <?php
            //Prints the js required for the functions/methods created in php.
            $ajax->showJs();
            ?>
            $("#Submit").click(function() {
                var email = $('#Email').val();
                var password = $('#password').val();
                var result = ($.x_DoLogin(email,password));
                if (result == "1"){
                    window.location.replace("dashboard.php");
                }
                else {
                    console.log(result);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "onclick": null,
                        "showDuration": "400",
                        "hideDuration": "1000",
                        "timeOut": "7000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
                    toastr.error('with login','error!');
                }
            });
        </script>



    </body>

</html>
