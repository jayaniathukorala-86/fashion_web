<!DOCTYPE html>
<?php
$message = "hide";

if(isset($_POST['add_product'])){
	
    $query = "INSERT INTO fc_products(fc_product_name, fc_product_details, fc_product_price, fc_product_discount) 
    VALUES('".$_POST['product_name']."','".$_POST['product_info']."','".$_POST['product_price'] ."','".$_POST['discount']."')";
    
	if(!mysqli_query($connection, $query)) {
		echo("<p>Error adding product details.</p>");
	}else{
		if(isset($_FILES['pro_image'])){
			$file_name = $_FILES['pro_image']['name'];   
			$temp_file_location = $_FILES['pro_image']['tmp_name']; 

			require 'vendor/autoload.php';

			$s3 = new Aws\S3\S3Client([
				'region'  => '-- your region --',
				'version' => 'latest',
				'credentials' => [
					'key'    => "-- access key id --",
					'secret' => "-- secret access key --",
				]
			]);		

			$result = $s3->putObject([
				'Bucket' => '-- bucket name --',
				'Key'    => $file_name,
				'SourceFile' => $temp_file_location			
			]);

			var_dump($result);

		}
		header('Location: /product_list');
	}

    $message = "show";
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
        	<section class="our-services">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-12">
						<h1 style="color: DodgerBlue">Add New Product Detail</h1>						
						</div>
					</div>
					<div class="row">
						<form action="" autocomplete="on" method = "POST" enctype="multipart/form-data">
							<div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                	<label class="control-label">Product Name:</label><br/>
									<input class="form-control" type="text" name="product_name" >                                  
                                </div>
							</div>

							<div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                	<label class="control-label">Product Info:</label><br/>
									<input class="form-control" type="text" name="product_info" >
                                </div>
							</div>

							<div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                	<label class="control-label">Product Price:</label><br/>
									<input class="form-control" type="text" name="product_price" >
								</div>
							</div>

							<div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                	<label class="control-label">Product Discount:</label><br/>
									<input class="form-control" type="text" name="discount" >
                                </div>
							</div>

							<div class="col-sm-8 col-xs-12">
                                <div class="form-group">
                                	<label class="control-label">Image:</label><br/>
									<input type=file name="pro_image" class="form-control">
                                </div>
							</div>

							<div class="col-sm-8 col-xs-12">
                        		<div class="blue-button">                                  
                                	<input style="background-color:#4883ff;color:white;" name="add_product" class="btn" id="form-submit" type="submit" value="Add product" />
                            	</div>
                        	</div>

						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>