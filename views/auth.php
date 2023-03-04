<!DOCTYPE html>
<script>
function submit() {
   return confirm('Do you really want to submit the form?');
}

function hide_div(event) {
    var element = document.getElementById('success_message');
    element.style.visibility = 'hidden';
}



</script>
<?php include '../db_connection.php'; 
$message = "hide";
if(isset($_POST['log_in'])){
    $query = "SELECT user_name,user_role,user_password FROM `fc_users` WHERE user_name='".$_POST['name'] ."'";
    
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_row($result);
   
    if (empty($data) or $data[2] != $_POST['password']){
        $message = "show";
    }else{
        header('Location: /admin');
    }
    
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Shopping Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content" style="border:2px;border-color: gray;border-style: groove;padding:10px;">
                    <div class="row">
                        <div>                        
                            <form id="login_form" action="" method="post">
                            <div class="row">
                                <a style="text-align:center;" href="/"><div class="logo">
                                    <img src="img/logo.png" alt="Venue Logo">
                                </div></a>
                            </div>
                            <div class="row">
                                <div style="padding-left:300px;" class="col-md-8">
                                    <div class="col-sm-12 col-xs-12">
                                        <div style="background-color: red;height:30px;padding:2px;" id="success_message" class='<?php echo $message ?>' data-closable>
                                            <h5 style="color:white;display:inline;">Authentication Error! </h5>
                                            <button style="float:right;background-color: red;border:none;" class="close-button" aria-label="Close alert" type="button" onclick="hide_div()" data-close>
                                                <span aria-hidden="true">&times;</span>
                                            </button>                
                                        </div>
                                        <br/>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Usename:</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Use name..." required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Password:</label>
                                            <input name="password" type="password" class="form-control" id="password" placeholder="Password..." required="true">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="blue-button">                                  
                                        <input style="background-color:#4883ff;color:white;" name="log_in" class="btn" id="log_in" type="submit" value="Login" />
                                        </div>
                                    </div>
                                </div>
                                    </form>
                                </div>
                            
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main>

</body>