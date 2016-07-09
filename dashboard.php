<?php
    $title = "BitHealth | DASHBOARD";
?>

<?php include __DIR__."/include/openHTML.php"; ?>
<?php include __DIR__."/include/navigation.php"; ?>

<div class="content" >
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card card-user">
                        <div class="image" style="background-color: #1F77D0; opacity: 0.7">
                        </div>
                        <div class="content">
                            <div class="author">
                                <img class="avatar border-gray" src="assets/img/running.jpg" alt="..."/>
<!-- *****************************user name, age, gender here-->
                                <h4 class="title" style="padding-bottom:10px"> Jihyun, 22 <i class="pe-7s-female" style="font-size: 25px; margin-left: 3px; line-height: 10px; width: 25px;"></i><br />
                                    <small>Midrand, Gauteng, South Africa</small>
                                </h4>
                                <h1 class="title" style="padding-bottom: 50px; padding-top: 25px"> current progress </h1>
                                <p class="description text-center" style="font-style: italic;">You don't get the ass you want by sitting on it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--col end-->

<!-- ********goals here-->
            <div class="col-sm-3">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Today's Goals</h4>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Run 4km</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Eat more green</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>check bmi</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Unfollow 5 unhealthy people on twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="footer">
                                    <div class="stats">
 <!--*******************************update info here-->                                       
                                        <i class="fa fa-clock-o"></i> Updated 2 minutes ago
                                    </div>
                                </div>
                    </div>
                </div><!--card end-->
            </div> <!--col end-->
        </div> <!-- row end-->

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Statistics</h4>
                        <p class="category">Last Performance</p>
                    </div>
                    <div class="content">
                        <!--chart.js chart here-->
                        <canvas id="bmiChart" height="100px"></canvas>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div> 
            </div> <!--first col end-->

             <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--second col end-->

             <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">other chart shit</h4>
                        <p class="category">put sth else</p>
                    </div>
                    <div class="content">
                        
                    </div>
                </div>
            </div> <!--thrid col end-->
        </div> <!--second row end-->
    </div> <!-- container-fluid end-->
</div> <!--content end-->
<!-- end of content-->
<?php include __DIR__."/include/footer.php"; ?>
<?php include __DIR__."/include/closeHTML.php"; ?>
