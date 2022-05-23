

<?php
    include 'config.php';

            $id_courses= $_POST['exam_id'];
            $result1 = $_POST['result1'];
            $result2 = $_POST['result2'];
            $result3 = $_POST['result3'];
            $result4 = $_POST['result4'];
            $result5 = $_POST['result5'];

                $sql= "SELECT * FROM courses WHERE id='$id_courses'" ;
                $result = mysqli_query($conn, $sql);

                foreach ($result as $row)
                {
                    if ($result1===$row['ans1']) 
                    {
                        $res1=20;
                    }
                    elseif ($result1 != $row['ans1']) 
                    {
                        $res1=0;
                    }


                    if ($result2===$row['ans2']) 
                    {
                        $res2=20;
                    }
                    elseif ($result2 != $row['ans2']) 
                    {
                        $res2=0;
                    }


                    if ($result3===$row['ans3']) 
                    {
                        $res3=20;
                    }
                    elseif ($result3 != $row['ans3']) 
                    {
                        $res3=0;
                    }


                    if ($result4===$row['ans4']) 
                    {
                        $res4=20;
                    }
                    elseif ($result4 != $row['ans4']) 
                    {
                        $res4=0;
                    }


                    if ($result5===$row['ans5']) 
                    {
                        $res5=20;
                    }
                    elseif ($result5 != $row['ans5']) 
                    {
                       $res5=0;
                    }

                    $marks=$res1+$res2+$res3+$res4+$res5;
                    $_SESSION['marks']= $marks;
                    $id_courses=$_POST['exam_id'];
                    $user_id=$_POST['user_id'];
                    $sql1= "SELECT * FROM users WHERE id=$user_id";
                    $result1 = mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_array($result1);
                    $id_users=$row['id'];

                    $sql0 = "SELECT * FROM marksheet WHERE id_courses = '$id_courses' AND id_users='$id_users'";
                    $result0 = mysqli_query($conn, $sql0);

                    if (!$result0->num_rows > 0)
                        {

                            $sql2 =  "INSERT INTO marksheet (id_users, id_courses, result) VALUES('$id_users','$id_courses','$marks')";
                            $result2=mysqli_query($conn,$sql2);

                            if ($result2)
                                {
                                    $id_users="";
                                    $id_courses="";
                                    $marks="";
                                    // echo "<script>alert('You have got to his exam $marks %')</script>";
                                    
                                    header('Location: ../courses.php');
                                    echo '
                                    <div class="position-fixed bottom-0 end-0" style="z-index: 11">
                                      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-success" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-success">Exam submitted successfully</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>You have got to his exam '.$_SESSION['marks'].' %</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';
                                    
                                }
                            else
                                {
                                    // echo "<script>alert('Oops!!-->Something went wrong with your exam')</script>";
                                    header('Location: ../courses.php');
                                    echo '
                                    <div class="position-fixed bottom-0 end-0" style="z-index: 11">
                                      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-danger">Exam submittion failed</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>OOPS--->Something went wrong with your exam</p>
                                          <p>Contact the admin !!</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';

                                }
                        }
                    else
                        {
                            // echo "<script>alert('Oops!!-->You are already done this exam .')</script>";
                            header('Location: ../courses.php');
                            echo '
                                    <div class="position-fixed bottom-0 end-0" style="z-index: 11">
                                      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-danger">Exam submittion failed</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>OOPS--->You are already done this exam .</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';
                        }
                }                    

?>











