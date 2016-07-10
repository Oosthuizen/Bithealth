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
<!-- ***************************bmi value and color needs to change according to bmi-->
                                <h1 class="title" style="padding-bottom: 50px; padding-top: 25px"> Your BMI is <b style="color: green">20.45 kg/m<sup>2</sup></b>  </h1>
                                <p class="description text-center" style="font-style: italic;">You don't get the ass you want by sitting on it.</p>
                            </div> <!--author end-->

                            <hr />
                            <div class="footer">
                                <div class="legend">
                                    <h4 class="title"><small>BMI Legend</small></h4>
                                    <i class="fa fa-circle text-success"></i>Normal
                                    <i class="fa fa-circle text-warning"></i>Underweight/Overweight
                                    <i class="fa fa-circle text-danger"></i>Obese
                                </div>
                            </div>
                        </div> <!-- content end-->
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">BMI statistics</h4>
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
            </div> <!-- col end-->
        </div> <!--second row end-->
    </div> <!-- container-fluid end-->
</div> <!--content end-->
<!-- end of content-->
<?php include __DIR__."/include/footer.php"; ?>
<?php include __DIR__."/include/closeHTML.php"; ?>
