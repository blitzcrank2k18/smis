<?php
    $year = $_GET['sy'];  
 ?>
<div id="page-wrapper" style="min-height: 355px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:0"    >EFEGENIO LIZARES NATIONAL HIGH SCHOOL</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php
                                include('../includes/db.php');
                                    $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '7' AND school_year.sy = '$year' AND student_sy_status.sy_status !='Transferee'")); 
                                        
                               
                                    echo '<div class="huge">'.$count.'</div>';
                                      ?>
                                    <div>GRADE 7</div>
                                </div>
                            </div>
                        </div>
                        <a href = "smis.php?request=student_grade_level&grade_level=7">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
                                include('../includes/db.php');
                                    $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '8' AND school_year.sy = '$year' AND student_sy_status.sy_status !='Transferee'"));                                         
                               
                                    echo '<div class="huge">'.$count.'</div>';
                                      ?>
                                    <div>GRADE 8</div>
                                </div>
                            </div>
                        </div>
                        <a href="smis.php?request=student_grade_level&grade_level=8">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php
                                include('../includes/db.php');
                                    $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '9' AND school_year.sy = '$year' AND student_sy_status.sy_status !='Transferee'")); 
                                        
                               
                                    echo '<div class="huge">'.$count.'</div>';
                                      ?>
                                    <div>GRADE 9</div>
                                </div>
                            </div>
                        </div>
                        <a href="smis.php?request=student_grade_level&grade_level=9">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php
                                include('../includes/db.php');
                                    $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '10' AND school_year.sy = '$year' AND student_sy_status.sy_status !='Transferee'")); 
                                        
                               
                                    echo '<div class="huge">'.$count.'</div>';
                                      ?>
                                    <div>GRADE 10</div>
                                </div>
                            </div>
                        </div>
                        <a href="smis.php?request=student_grade_level&grade_level=10">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>LOCATION</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d22273.91790634767!2d123.00675678083954!3d10.736808455778005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sEFIGENIO+LIZARES+NATIONAL+HIGH+SCHOOL!5e0!3m2!1sen!2sph!4v1533480703183" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
</div>