<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Admission enquiry</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-medical.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-medical.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
        <?php include 'header.php'; ?>

			<div role="main" class="main">
                 
				            <section class="page-header page-header-modern page-header-md" style="background-color:#840103; height:6px; margin-Bottom:-10px; padding-top:20px"
">
					<div class="container" >
						<div class="row" style="margin-top:-5px;">

							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 style="font-size:large;">Admissons</h1>
								<span class="sub-title">Admission Enquiry</span>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-end breadcrumb-light">
									<li><a href="index.php">Home</a></li>
									<li class="active">Admission Enquiry</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
                 
				<div class="container">

					<div class="row mt-5 mb-4">
                    <?php include 'admissionsidebar.php'; ?>
						<div class="col">
                            
                            <form  method="post" action="admissionform.php" class="shadow-sm p-3 mb-5 bg-white rounded">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="course">Course</label>
                                        <select class="form-control" id="course" name="course" required>
                                            <option value="btech">BTech</option>
                                            <option value="mtech">MTech</option>
                                            <option value="mba">MBA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="branch">Branch</label>
                                        <select class="form-control" id="branch" name="branch" required>
                                            <option value="cse">CSE</option>
                                            <option value="eee">EEE</option>
                                            <option value="ece">ECE</option>
                                            <option value="mech">Mech</option>
                                            <option value="civil">Civil</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        

						</div>
					</div>

				</div>

			</div>

			<?php include 'footer.php'; ?>
		

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-medical.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
