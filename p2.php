<?php /*global variables here*/
$title = "BitHealth | title here";
?>

<?php include __DIR__."/include/openHTML.php"; ?>
<?php include __DIR__."/include/navigation.php"; ?>
<!-- CONTENT BEGIN -->
 <!--%<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Gym Graph</h4>
                        <p class="category">Here is graph of your gym activity</p>
                    </div>
                    <!--****************chart data here
                    <div class="content">
                        <canvas id="gymChart" height="100px"></canvas>
                    </div>
                </div> card end
            </div>  col end
        </div>  row end-->

        <!-- Roatating Card-->
        <div class="card-container">
            <div class="card col-md-6">
                <div class="front">
                    <div class="header">
                        <h4 class="title">Overall Running Distance</h4>
                    </div>
                    <div class="content">
                        <canvas id="runningChart" height="100px"></canvas>
                    </div>
                </div> <!-- end front panel -->

                <div class="back">
                    <div class="header">
                        <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h4 class="text-center">Job Description</h4>
                            <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                            <div class="stats-container">
                                <div class="stats">
                                    <h4>235</h4>
                                    <p>
                                        Followers
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>114</h4>
                                    <p>
                                        Following
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>35</h4>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="footer">
                        <div class="social-links text-center">
                            <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                            <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                            <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        </div>
                    </div>
                </div> <!-- end back panel -->
            </div> <!-- end card -->

        </div> <!-- end card-container -->

        <!--End Rotating Card-->

<!-- CONTENT END -->
<?php include __DIR__."/include/footer.php"; ?>
<?php include __DIR__."/include/closeHTML.php"; ?>

