<?php
include 'header.php';
include 'db.php';

$sql = "SELECT * FROM news_upload"; // Adjust the table name and columns as per your database schema
$result = $conn->query($sql);
?>
<style>
    .about-us img {
        width: 150px;
        height: auto;
        margin-bottom: 20px;
    }

    .about-us .content {
        text-align: left;
    }

    .about-us h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .about-us p {
        text-align: left;
    }

    .about-us a.read-more {
        font-weight: bold;
        font-size: 14px;
    }
</style>
<section class="carsole">



    <div class="owl-carousel carousel-center-active-item-3 dots-modern mt-2 mb-0" data-plugin-options="{'items': 1, 'loop': true, 'margin': 60, 'autoplay': true, 'autoplayTimeout': 4000}">
        <div>
            <div class="img-thumbnail border-0 p-0 pb-3 d-block">
                <img class="img-fluid border-radius-0" src="img/BackgroungImg/bg1.jpg" alt="">
            </div>
        </div>
        <div>
            <div class="img-thumbnail border-0 p-0 pb-3 d-block">
                <img class="img-fluid border-radius-0" src="img/BackgroungImg/bg2.jpg" alt="">
            </div>
        </div>
        <div>
            <div class="img-thumbnail border-0 p-0 pb-3 d-block">
                <img class="img-fluid border-radius-0" src="img/BackgroungImg/bg.jpg" alt="">
            </div>
        </div>
        <div>
            <div class="img-thumbnail border-0 p-0 pb-3 d-block">
                <img class="img-fluid border-radius-0" src="img/BackgroungImg/bg3.jpg" alt="">
            </div>
        </div>
    </div>


    </div>

</section>
<section class="news_events_about" style="text-align: center;">
    <div class="news_events_about" style="text-align: center;">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">
                    <h2 style="text-align: left;">About Us</h2>
                    <div class="about-us">
                        <img src="img/index/svcetimg1.jpg" style="height: 150px; width: 350px;" alt="About Us Image">
                        <div class="content">
                            <p><b style="color: orange;">Sri Venkateswara College of Engineering & Technology (SVCET)</b>, Etcherla, was established in 2008 by the Vikas Educational Society (1997) with the objective of accelerating the growth of science and technology in the industrially backward Srikakulam district. The institution aims at providing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 style="text-align: left;">&nbsp;</h2>

                    <p class="mb-4" style="text-align: left;">

                        State-of-the-art technology to the student community to broaden their horizon for a better and more prospective tomorrow, in their own interest and in the interest of society at large.The college offers a range of undergraduate and postgraduate programs in various branches of engineering and technology. Each program is carefully designed to meet industry standards and demands, ensuring that graduates are well-prepared for their professional careers. The faculty at SVCET comprises experienced and dedicated educators who are committed to nurturing the intellectual and personal growth of students.</a>
                        <a href=" " class="read-more">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>

                    </p>

                    </p>
                </div>

                <div class="col-lg-4">
                    <div>
                        <h2>Events</h2>
                    </div>
                    <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-12 mb-4">
                <div class="recent-posts">
                    <article class="post">
                        <div class="post-date">
                            <span class="day">'.date("d", strtotime($row["date"])).'</span>
                            <span class="month">'.date("M", strtotime($row["date"])).'</span>
                        </div>
                        <h4><a href="#" class="text-decoration-none">'.$row["heading"].'</a></h4>';

        // Check if an image is present
        if (!empty($row["image_path"])) { // Assuming 'image' is the column name for the image path
            echo '<div class="post-image">
                    <img src="'.$row["image_path"].'" alt="News Image" class="img-fluid" width="50%"/>
                  </div>';
        }

        echo '<p class="mb-0" style="text-align: left;">'.$row["description"].'
                <a href="#" class="read-more font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
              </p>
            </article>
          </div>
        </div>';
    }
} else {
    echo "<p>No events found.</p>";
}
?>
                </div>
</section>

<div class="container appear-animation" data-appear-animation="fadeInUpShorter">

    <div class="row pt-5 pb-4 my-5">
    <h2 >Latest News</h2>

        <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
            <p class="lead">SVCET students participated in the event of "Professional Development through Innovative Thinking" on 16th Nov</p>
            <p class="mb-4">SVCET NSS unit  conducted the rally in our engineering campus on the
            event of constitution day on 26th Nov of every year</p>
        </div>

        <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
            <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="img/index/Screenshot 2024-06-17 135508.png" />
                    <p class="text-2 mb-0">FDP ON IOT BY ICT Academy.NIT Warangal</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="img/index/Screenshot 2024-06-17 135518.png" alt="" />
                    <p class="text-2 mb-0">FDP ON IOT BY ICT Academy.NIT Warangal</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                    <p class="text-2 mb-0">FDP ON IOT BY ICT Academy.NIT Warangal</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                    <p class="text-2 mb-0">FDP ON IOT BY ICT Academy.NIT Warangal</p>
                </div>
                
            </div>
        </div>
    </div>
</div>




<br>
<br>


<h1 style="margin-Left:40px;">SVCET  Provides</h1>
<section class="#" style="text-align: center;">
    <div class="row mt-7">
        <div class="col">
            <div class="row">
                <div class="col-lg-4 d-lg-block d-xl-block d-none">
                    <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                        <ul class="nav nav-tabs nav-flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#courseOfferedTab" data-bs-toggle="tab">Course
                                    Offered</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#resourcesTab" data-bs-toggle="tab">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#downloadResourcesTab" data-bs-toggle="tab">Download
                                    Resources</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="col-12 d-lg-none d-xl-none">
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="#courseOfferedTab" data-bs-toggle="tab">Course
                                Offered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resourcesTab" data-bs-toggle="tab">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#downloadResourcesTab" data-bs-toggle="tab">Download
                                Resources</a>
                        </li>
                    </ul>
                </nav>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane tab-pane-navigation active" id="courseOfferedTab">
                            <h4>Course Offered</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Branch</th>
                                        <th>Intake</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td>B.Tech</td>
                                        <td>Computer Science and Engineering</td>
                                        <td>120</td>
                                    </tr>
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Artificial-Intelligence and Machine-Learning</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Computer Science & Engineering (AIML)</td>
                                        <td>30</td>
                                    </tr>
                                    
                                </tbody>
                                <tbody id="collapsibleRows" style="display: none;">
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Electronics and Communication Engineering</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Civil Engineering</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Electrical and Electronics Engineering</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>B.Tech</td>
                                        <td>Mechanical Engineering</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>M.Tech</td>
                                        <td>Thermal Engineering</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>M.Tech</td>
                                        <td>Control Systems</td>
                                        <td>09</td>
                                    </tr>
                                    <tr>
                                        <td>M.Tech</td>
                                        <td>Power Electronics</td>
                                        <td>09</td>
                                    </tr>
                                    <tr>
                                        <td>M.Tech</td>
                                        <td>V L S I</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>M.Tech</td>
                                        <td>Computer Science and Engineering</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>M.B.A</td>
                                        <td>MBA</td>
                                        <td>120</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary mt-3" onclick="toggleCollapsibleRows()">Read More</button>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="resourcesTab">
                            <h4>Resources</h4>
                            <p>Placeholder text for Resources tab.</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="downloadResourcesTab">
                            <h4>Download Resources</h4>
                            <p>Placeholder text for Download Resources tab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7RduPuemT//+jJXB16zg6i8UQD3lV5uDC3Yc7bz29L33" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

<script>
    function toggleCollapsibleRows() {
        var collapsibleRows = document.getElementById("collapsibleRows");
        if (collapsibleRows.style.display === "none") {
            collapsibleRows.style.display = "table-row-group";
        } else {
            collapsibleRows.style.display = "none";
        }

        // Change the button text based on the visibility state
        var button = document.querySelector("#courseOfferedTab button");
        if (collapsibleRows.style.display === "none") {
            button.textContent = "Read More";
        } else {
            button.textContent = "Read Less";
        }
    }
</script>


<br>
<br>
<section clas="states">
    <div class="row pt-xl">


        <div class="col-md-12">
            <h2 class="mb-none text-color-dark" style="margin-left: 40px;">SVCET at a Glance</h2>
        </div>
    </div>
    <div class="row counters" style="margin: 20px; margin-top:-20px; padding:30px; background-color: #f2f2f2;">

        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                    <i class="fas fa-star"></i>
                    <strong data-to="15">0</strong>
                    <label style="color: black;">Years of Excellence</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="900">
                    <i class="fas fa-user"></i>
                    <strong data-to="1500" data-append="+">0</strong>
                    <label style="color: black;">Total Students</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
                    <i class="fas fa-user"></i>
                    <strong data-to="150" data-append="+">0</strong>
                    <label style="color: black;">Total Staff</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="1200">
                    <i class="far fa-chart-bar"></i>
                    <strong data-to="13">0</strong>
                    <label style="color: black;">Branches</label>
                </div>
            </div>
        </div>
        <div class="row" style="margin-Top: 15px;">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                    <i class="fas fa-star"></i>
                    <strong data-to="300" data-append="+">0</strong>
                    <label style="color: black;">PLACEMENT METER</label>
                </div>
            </div>

        </div>
    </div>

</section>


<br>
<br>
<div class="container">
    <div class="row pt-xl">
        <div class="col-md-12" style="margin-left: 20px;">
            <h2 class="mb-none text-color-dark">Our Placement Partners</h2>
            <p class="lead mb-sm" style="margin-top: -20px;">The future belongs to those who believe in the beauty of their dreams.</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 center">
            <div id="placement-carousel" class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000, 'loop': true, 'nav': false, 'dots': true}" style="position: relative; padding-bottom: 30px;">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/placementlogo.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/1.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/2.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/3.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/10.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/13.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/14.png" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/15.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/16.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/18.jpg" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="img-responsive" src="img/Companies/27.png" alt="" style="height: 90px; width: 120px; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #placement-carousel .owl-dots {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
    }
</style>



<br>
<br>

<section class="quick_links">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <h2>Quick Links</h2>
                </div>
                <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                    Courses Offered
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <li class="mb-0">Civil Engineering</li>
                                <li class="mb-0">Mechanical Engineering</li>
                                <li class="mb-0">Electrical & Electronics Engineering</li>
                                <li class="mb-0">Electronics & Communication Engineering</li>
                                <li class="mb-0">Computer Science & Engineering</li>
                                <li class="mb-0">Information Technology</li>
                                <li class="mb-0">Artificial Intelligence & Machine Learning</li>
                                <li class="mb-0">Thermal Engineering</li>
                                <li class="mb-0">Power Electronics</li>
                                <li class="mb-0">VLSI Design</li>
                                <li class="mb-0">Finance , HR</li>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingTwo">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false" aria-controls="collapse100One">
                                    Vision & Mission
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <li class="mb-0">INSTITUTE VISION:</li>
                                <li class="mb-0">INSTITUTE MISSION</li>
                                <li class="mb-0">QUALITY POLICY</li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div>
                    <h2>Picture Gallery</h2>
                </div>
                <div class="thumb-info
                            thumb-info-no-zoom thumb-info-no-borders thumb-info-bottom-info thumb-info-no-borders-radius">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4500, 'margin': 10, 'animateOut': 'fadeOut'}">
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/index/11.png">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/index/11.png">
                        </div>
                    </div>
                    <div class="thumb-info
                            -caption">
                        <p class="mb-0" style="text-align: left;">Cultural Activites held on our compus.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div>
                    <h2>Campus Location</h2>
                </div>
                <div class="thumb-info
                            thumb-info-no-zoom thumb-info-no-borders thumb-info-bottom-info thumb-info-no-borders-radius">
                    <div class="thumb-info
                            -side-image-wrapper">
                        <img src="img/index/10.png" class="img-fluid" alt="">
                    </div>
                    <div class="thumb-info
                            -caption">
                        <h4 class="font-weight-semibold line-height-4 text-4 mb-1" style="text-align: left;">Sri Venkateswara College of Engineering & Technology</h4>
                        <p class="mb-0" style="text-align: left;">Etcherla, Srikakulam, Andhra Pradesh, India</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>

<br>
<?php include 'footer.php'; ?>

</section>
</body>

</html>