
<?php 
      include '../includes/db.php';

      $sy_query= mysqli_query($conn,"SELECT * from school_year where status = '1' ");
      $sy_row=mysqli_fetch_assoc($sy_query);
      $dsy = $sy_row['sy'];
      $sy_id = $sy_row['sy_id'];
         ?>



 <ul class="nav navbar-nav side-nav">
 <?php if($_GET['request'] == 'home'){ ?>
                    <li class="active">
                        <a href="smis.php?request=home&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php }else{ ?>
                        <li>
                        <a href="smis.php?request=home&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <?php } ?>

                     <?php
                               
                             if($_GET['request'] == 'students_list'){
                            ?>
                           <li class='active'>
                                <a href="smis.php?request=student_list&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-users"></i> Student Profile</a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="smis.php?request=student_list&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-users"></i> Student Profile</a>
                            </li>
                            <?php  } ?>

                              <?php
                               
                             if($_GET['request'] == 'enroll_students'){
                            ?>
                           <li class='active'>
                                <a href="smis.php?request=enroll_students&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-list"></i> Enroll Student</a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="smis.php?request=enroll_students&sy=<?php echo $dsy ?>"><i class="fa fa-fw fa-list"></i> Enroll Student</a>
                            </li>
                            <?php  } ?>

                        
                    <?php if($_GET['request'] == 'student_grade_level' ){ ?>
                    <li class="active">
                        <a id="dem1" href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-th-list"></i> Enrolled Students       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php }else{ ?>
                    <li>
                        <a id="dem1" href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-th-list"></i> Enrolled Students       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php } ?>
                        <ul id="demo2" class="collapse">
                        <?php if($_GET['request'] == 'student_grade_level' && isset($_GET['grade_level']) == 'all'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem1').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_grade_level&grade_level=all"><i class="fa fa-fw fa-angle-right"></i>All</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_grade_level&grade_level=all"><i class="fa fa-fw fa-angle-right"></i>All</a>
                            </li>
                            <?php } ?>
                            <?php if($_GET['request'] == 'student_grade_level' && isset($_GET['grade_level']) == '7'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem1').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_grade_level&grade_level=7"><i class="fa fa-fw fa-angle-right"></i> Grade 7</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_grade_level&grade_level=7"><i class="fa fa-fw fa-angle-right"></i> Grade 7</a>
                            </li>
                            <?php } ?>
                         <?php if($_GET['request'] == 'student_grade_level' && isset($_GET['grade_level']) == '8'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem1').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_grade_level&grade_level=8"><i class="fa fa-fw fa-angle-right"></i> Grade 8</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_grade_level&grade_level=8"><i class="fa fa-fw fa-angle-right"></i> Grade 8</a>
                            </li>
                            <?php } ?>
                             <?php if($_GET['request'] == 'student_grade_level' && isset($_GET['grade_level']) == '9'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem1').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_grade_level&grade_level=9"><i class="fa fa-fw fa-angle-right"></i> Grade 9</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_grade_level&grade_level=9"><i class="fa fa-fw fa-angle-right"></i> Grade 9</a>
                            </li>
                            <?php } ?>
                             <?php if($_GET['request'] == 'student_grade_level' && isset($_GET['grade_level']) == '10'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem1').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_grade_level&grade_level=10"><i class="fa fa-fw fa-angle-right"></i> Grade 10</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_grade_level&grade_level=10"><i class="fa fa-fw fa-angle-right"></i> Grade 10</a>
                            </li>
                            <?php } ?>
                            
                            
                            

                        </ul>
                    
                    </li>
                         
                      <?php if($_GET['request'] == 'academic_record'){ ?>
                            <script>
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=academic_record"><i class="fa fa-fw fa-file-o"></i> Academic Records</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=academic_record"><i class="fa fa-fw fa-file-o"></i> Academic Records</a>
                            </li>
                            <?php } ?> 
                            
                      <?php if($_GET['request'] == 'honored_students'){ ?>
                            <script>
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=honored_students&grade=all"><i class="fa fa-fw fa-star"></i> Honored Students</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=honored_students&grade=all"><i class="fa fa-fw fa-star"></i> Honored Students</a>
                            </li>
                            <?php } ?>  

                             <?php if($_GET['request'] == 'student_promotion'){ ?>
                            <script>
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_promotion&sy=<?php echo $dsy ?>&status=1"><i class="fa fa-fw fa-list"></i> Students Promotion</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_promotion&sy=<?php echo $dsy ?>&status=1"><i class="fa fa-fw fa-list"></i> Students Promotion</a>
                            </li>
                            <?php } ?>  

                   
                     <?php if($_GET['request'] == 'subject_list' || $_GET['request'] == 'school_year'){ ?>
                    <li class="active">
                        <a id="dem6" href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-gears"></i> Maintenance       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php }else{ ?>
                    <li>
                        <a id="dem6" href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-gears"></i> Maintenance       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php } ?>
                        <ul id="demo5" class="collapse">
                        <?php if($_GET['request'] == 'subject_list'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem6').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=subject_list"><i class="fa fa-fw fa-file-o"></i> Subject List</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=subject_list"><i class="fa fa-fw fa-file-o"></i> Subject List</a>
                            </li>
                            <?php } ?>
                             <?php if($_GET['request'] == 'teacher_list'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem6').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=teacher_list"><i class="fa fa-fw fa-file-o"></i> Teacher List</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=teacher_list"><i class="fa fa-fw fa-file-o"></i> Teacher List</a>
                            </li>
                            <?php } ?>

                            <?php if($_GET['request'] == 'elnhs_setting'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem6').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=elnhs_setting"><i class="fa fa-fw fa-file-o"></i> Mr . and Miss ELNHS</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=elnhs_setting"><i class="fa fa-fw fa-file-o"></i> Mr . and Miss ELNHS</a>
                            </li>
                            <?php } ?>


                             <?php if($_GET['request'] == 'sy'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem6').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=sy"><i class="fa fa-fw fa-file-o"></i> School Year</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=sy"><i class="fa fa-fw fa-file-o"></i> School Year</a>
                            </li>
                            <?php } ?>
                            
                            

                        </ul>
                    
                    </li>
                            
                      <?php if($_GET['request'] == 'users'){ ?>
                          
                            <li style="background-color:black">
                                <a href="smis.php?request=users"><i class="fa fa-fw fa-users"></i> Users</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=users"><i class="fa fa-fw fa-users"></i> Users</a>
                            </li>
                            <?php } ?>  
                    <!--
                      <?php
                               
                             if($_GET['page'] == 'database'){
                            ?>
                           <li class='active'>
                                <a href="rms.php?page=database"><i class="fa fa-fw fa-database"></i>Database</a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="rms.php?page=database"><i class="fa fa-fw fa-database"></i>Database</a>
                            </li>
                            <?php  } ?>
                             <?php
                               
                             if($_GET['page'] == 'logs'){
                            
                             ?>
                        
                           <li class="active">
                                <a href="rms.php?page=logs"><i class="fa fa-fw fa-history"></i>Logs</a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="rms.php?page=logs"><i class="fa fa-fw fa-history"></i>Logs</a>
                            </li>
                            <?php  } ?>  
                </ul>

                -->
                  <?php if($_GET['request'] == 'subject_list' || $_GET['request'] == 'school_year'){ ?>
                    <li class="active">
                        <a id="dem7" href="javascript:;" data-toggle="collapse" data-target="#demo8"><i class="fa fa-fw fa-file"></i> Reports       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php }else{ ?>
                    <li>
                        <a id="dem7" href="javascript:;" data-toggle="collapse" data-target="#demo8"><i class="fa fa-fw fa-file"></i> Reports       <i class="fa fa-fw fa-caret-down pull-right"></i></a>
                        <?php } ?>
                        <ul id="demo8" class="collapse">
                       
                             <?php if($_GET['request'] == 'promoted'){ ?>
                            <script>
                              $(document).ready(function(){
                                 $('#dem7').click();                        
                              });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=promoted_report"><i class="fa fa-fw fa-file-o"></i> Promoted Student</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=promoted_report"><i class="fa fa-fw fa-file-o"></i> Promoted Student</a>
                            </li>
                            <?php } ?>

                                <?php if($_GET['request'] == 'student_list'){ ?>
                            <script>
                        $(document).ready(function(){
                         $('#dem7').click();
                        
                        });
                        </script>
                            <li style="background-color:black">
                                <a href="smis.php?request=student_list_report&grade=all"><i class="fa fa-fw fa-file-o"></i> Enrolled Students</a>
                            </li>
                            <?php }else{ ?>
                             <li>
                                <a href="smis.php?request=student_list_report&grade=all"><i class="fa fa-fw fa-file-o"></i> Enrolled Students</a>
                            </li>
                            <?php } ?>

                        </ul>
                    
                    </li>
                            
                   