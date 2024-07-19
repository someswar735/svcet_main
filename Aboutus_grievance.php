<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Venkateswara College of Engineering & Technology</title>
    <?php include 'header.php'; ?>
    <style>
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .main-content {
            padding-top: 100px;
        }
    </style>
</head>

<body>

    <div class="body">
        <?php include 'header.php'; ?>

        <div role="main" class="main">

                        <section class="page-header page-header-modern page-header-md" style="background-color:#840103; height:6px; margin-Bottom:-10px; padding-top:20px"
">
                <div class="container">
                    <div class="row" style="margin-top:-5px;">

                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 style="font-size:large;">GOVERNING COUNCIL BOARD</h1>
                            <span class="sub-title">About Us</span>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Grievance Redressal Committee</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <?php include 'aboutus_sidebar.php'; ?>



                    <div class="col">
                        <div class="card-body">
                            <form class="shadow-sm p-3 mb-5 bg-white rounded" action="form.php" method="POST">
                                <div class="row mb-3">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label text-2">First Name</label>
                                        <input type="text" class="form-control text-3 h-auto py-2" name="firstname" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label text-2">Last Name</label>
                                        <input type="text" class="form-control text-3 h-auto py-2" name="lastname" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label text-2">Email Address</label>
                                        <input type="email" class="form-control text-3 h-auto py-2" name="email" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label text-2">Mobile Number</label>
                                        <input type="tel" class="form-control text-3 h-auto py-2" name="phone" required required pattern="[0-9]{10}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label text-2">Message</label>
                                        <textarea class="form-control text-3 h-auto py-2" name="message" rows="8" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>

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