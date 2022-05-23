<!-- admin page --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-- add account admin side -->

<?php
    include 'config.php';

    if(isset($_POST['admin_sign_in'])) 
        {
            $first_name = $_POST['first_name'];
            $last_name =  $_POST['last_name'];
            $birth_day =  $_POST['birth_day'];
            $email =      $_POST['email'];
            // $password =  md5($_POST['password']);
            // $cpassword = md5($_POST['cpassword']);
            $password =  ($_POST['password']);
            $cpassword = ($_POST['cpassword']);
            $role = ($_POST['role']);
            $image = ($_POST['image']);


            if ($password === $cpassword)
                {
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);

                    if (!$result->num_rows > 0) 
                        {
                            $sql =  "INSERT INTO users (first_name, last_name, birth_day, email, password,role,image) VALUES('$first_name','$last_name','$birth_day','$email','$password','$role','$image')";
                            $result=mysqli_query($conn,$sql);

                            if ($result) 
                                {
                                    echo "<script>alert('Wow!!-->User Registration Succed .')</script>";
                                    $first_name="";
                                    $last_name="";
                                    $birth_day="";
                                    $email="";
                                    $_POST['password'] ="";
                                    $_POST['cpassword']="";
                                    $_SESSION['email']= $email;
                                    header('Location: ../tables.php');
                                }
                            else
                                {
                                    echo "<script>alert('Oops!!-->Something went wrong')</script>";
                                    header('Location: ../tables.php');
                                }
                        }
                    else
                        {
                            echo "<script>alert('Oops!!-->Email Already Exists .')</script>";
                            header('Location: ../tables.php');
                        }
                }
            else
                {
                    echo "<script>alert('Oops!!-->Password not matched')</script>";
                    header('Location: ../tables.php');
                }
        }



// Update user data

    if (isset($_POST['updatebtn']))
        {
            $id= $_POST['edit_id'];
            $first_name = $_POST['edit_first_name'];
            $last_name =  $_POST['edit_last_name'];
            $birth_day =  $_POST['edit_birth_day'];
            $email =      $_POST['edit_email'];
            $password =  ($_POST['edit_password']);
            $user_image =  ($_POST['edit_image']);
            $role =  ($_POST['update_role']);

                       
                        $sql= "UPDATE users SET first_name='$first_name', last_name='$last_name', birth_day='$birth_day', email='$email', role='$role', password='$password', image='$user_image' WHERE id='$id'";
                        $result=mysqli_query($conn,$sql);

                        if ($result) 
                            {
                                header('Location: ../tables.php');
                                echo "<script>alert('User Updated')</script>";
                            }
                        else
                            {
                                header('Location: ../admin.php');
                                echo "<script>alert('Oops!!-->User not Updated')</script>";
                            }
                    
        }


// Delete user data

    if (isset($_POST['delete_btn']))
        {
            $id= $_POST['delete_id'];

            $sql = "DELETE FROM users WHERE id= '$id' ";
            $result=mysqli_query($conn,$sql);

            if ($result)
                {
                    echo "<script>alert('User was been Deleted')</script>";
                    header('Location: ../tables.php');
                }
            else
                {
                    echo "<script>alert('Oops!!-->User wasn't been Deleted')</script>";
                    header('Location: ../tables.php');
                }
        }

// Log in user data

    if (isset($_POST['admin_log_in']))
        {
            $email=$_POST['email'];
            $email_admin=$_POST['email'];
            $password=$_POST['password'];

            $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $role=mysqli_fetch_array($result);


            if ($role['role'] =="admin")
                {
                    $_SESSION['email']= $email;
                    $_SESSION['admin'] = $email_admin;
                    header('Location: welcome.php');
                }
            elseif ($role['role'] =="user")
                {
                    $_SESSION['email']= $email;
                    header('Location: welcome.php');
                }
            else
                {
                    header('Location: welcome.php');
                    echo "<script>alert('Oops!!-->Email or password is wrong')</script>";
                }
        }


// add course code

    if (isset($_POST['add_course'])) 
        {
            $course_id = $_POST['course_id'];
            $course_name = $_POST['course_name'];
            $course_intro = $_POST['course_intro'];
            $course_pdf = $_FILES['course_pdf']['name'];
            $course_img = $_FILES["course_img"]['name'];
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $ans1 = $_POST['ans1'];
            $ans2 = $_POST['ans2'];
            $ans3 = $_POST['ans3'];
            $ans4 = $_POST['ans4'];
            $ans5 = $_POST['ans5'];
            $q1opinion1 = $_POST['q1opinion1'];
            $q1opinion2 = $_POST['q1opinion2'];
            $q1opinion3 = $_POST['q1opinion3'];
            $q2opinion1 = $_POST['q2opinion1'];
            $q2opinion2 = $_POST['q2opinion2'];
            $q2opinion3 = $_POST['q2opinion3'];
            $q3opinion1 = $_POST['q3opinion1'];
            $q3opinion2 = $_POST['q3opinion2'];
            $q3opinion3 = $_POST['q3opinion3'];
            $q4opinion1 = $_POST['q4opinion1'];
            $q4opinion2 = $_POST['q4opinion2'];
            $q4opinion3 = $_POST['q4opinion3'];
            $q5opinion1 = $_POST['q5opinion1'];
            $q5opinion2 = $_POST['q5opinion2'];
            $q5opinion3 = $_POST['q5opinion3'];

                if (file_exists("../upload/".$_FILES["course_img"]["name"])) 
                    {
                        $store = $_FILES["course_img"]["name"];
                        $_SESSION['status'] = "Image already exists. '.$store.'";
                        header('Location: ../admin.php');
                    }
                else
                    {
                        $sql = "INSERT INTO courses (id,name,intro,pdf,image,q1,q2,q3,q4,q5,ans1,ans2,ans3,ans4,ans5,q1opinion1,q1opinion2,q1opinion3,q2opinion1,q2opinion2,q2opinion3,q3opinion1,q3opinion2,q3opinion3,q4opinion1,q4opinion2,q4opinion3,q5opinion1,q5opinion2,q5opinion3) VALUES ('$course_id','$course_name','$course_intro','$course_pdf','$course_img','$q1','$q2','$q3','$q4','$q5','$ans1','$ans2','$ans3','$ans4','$ans5','$q1opinion1','$q1opinion2','$q1opinion3','$q2opinion1','$q2opinion2','$q2opinion3','$q3opinion1','$q3opinion2','$q3opinion3','$q4opinion1','$q4opinion2','$q4opinion3','$q5opinion1','$q5opinion2','$q5opinion3')";
                        $result= mysqli_query($conn,$sql);

                        if ($result) 
                            {
                                move_uploaded_file($_FILES["course_img"]["tmp_name"], "../upload/".$_FILES["course_img"]["name"]);
                                move_uploaded_file($_FILES["course_pdf"]["tmp_name"], "../upload/".$_FILES["course_pdf"]["name"]);
                                $_SESSION['success']= "course added";
                                header('Location: ../tables.php');
                            }
                        else
                            {
                                 $_SESSION['status']= "course not added";
                                header('Location: ../admin.php');
                            }
                    }
        }

// delete course code

        if (isset($_POST['delete_data']))
        {
            $id= $_POST['delete_id'];

            $sql = "DELETE FROM courses WHERE id= '$id' ";
            $result=mysqli_query($conn,$sql);

            if ($result)
                {
                    $_SESSION['success']= "course was been Deleted";
                    header('Location: ../tables.php');
                }
            else
                {
                    $_SESSION['status']= "course was not been Deleted";
                    header('Location: ../tables.php');
                }
        }


// edit course code

        if (isset($_POST['edit_exam_btn']))
        {
            $id= $_POST['edit_exam_id'];
            $edit_name = $_POST['edit_name'];
            $edit_intro = $_POST['edit_intro'];
            $edit_pdf = $_POST['edit_pdf'];
            $edit_image = $_POST["edit_image"];
            $edit_q1 = $_POST['edit_q1'];
            $edit_q2 = $_POST['edit_q2'];
            $edit_q3 = $_POST['edit_q3'];
            $edit_q4 = $_POST['edit_q4'];
            $edit_q5 = $_POST['edit_q5'];
            $edit_ans1 = $_POST['edit_ans1'];
            $edit_ans2 = $_POST['edit_ans2'];
            $edit_ans3 = $_POST['edit_ans3'];
            $edit_ans4 = $_POST['edit_ans4'];
            $edit_ans5 = $_POST['edit_ans5'];
            $edit_q1opinion1 = $_POST['edit_q1opinion1'];
            $edit_q1opinion2 = $_POST['edit_q1opinion2'];
            $edit_q1opinion3 = $_POST['edit_q1opinion3'];
            $edit_q2opinion1 = $_POST['edit_q2opinion1'];
            $edit_q2opinion2 = $_POST['edit_q2opinion2'];
            $edit_q2opinion3 = $_POST['edit_q2opinion3'];
            $edit_q3opinion1 = $_POST['edit_q3opinion1'];
            $edit_q3opinion2 = $_POST['edit_q3opinion2'];
            $edit_q3opinion3 = $_POST['edit_q3opinion3'];
            $edit_q4opinion1 = $_POST['edit_q4opinion1'];
            $edit_q4opinion2 = $_POST['edit_q4opinion2'];
            $edit_q4opinion3 = $_POST['edit_q4opinion3'];
            $edit_q5opinion1 = $_POST['edit_q5opinion1'];
            $edit_q5opinion2 = $_POST['edit_q5opinion2'];
            $edit_q5opinion3 = $_POST['edit_q5opinion3'];

                       
                        $sql= "UPDATE courses SET name='$edit_name', intro='$edit_intro' , pdf='$edit_pdf', image='$edit_image', q1='$edit_q1', q2='$edit_q2' , q3='$edit_q3' , q4='$edit_q4' , q5='$edit_q5' , ans1='$edit_ans1' , ans2='$edit_ans2' , ans3='$edit_ans3' , ans4='$edit_ans4' , ans5='$edit_ans5' , q1opinion1='$edit_q1opinion1' , q1opinion2='$edit_q1opinion2' , q1opinion3='$edit_q1opinion3' , q2opinion1='$edit_q2opinion1' , q2opinion2='$edit_q2opinion2' , q2opinion3='$edit_q2opinion3' , q3opinion1='$edit_q3opinion1' , q3opinion2='$edit_q3opinion2' , q3opinion3='$edit_q3opinion3' , q4opinion1='$edit_q4opinion1' , q4opinion2='$edit_q4opinion2' , q4opinion3='$edit_q4opinion3' , q5opinion1='$edit_q5opinion1' , q5opinion2='$edit_q5opinion2' , q5opinion3='$edit_q5opinion3'  WHERE id='$id'";
                        $result=mysqli_query($conn,$sql);

                        if ($result) 
                            {
                                header('Location: ../tables.php');
                            }
                        else
                            {
                                echo "<script>alert('Oops!!-->examination paper not Updated .')</script>";
                            }
                    
        }
        












// user page--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



    if (isset($_POST['user_log_in'])) 
        {
            $email_user=$_POST['email_user'];
            $email_admin=$_POST['email_user'];
            $password_user=$_POST['password_user'];

            $sql="SELECT * FROM users WHERE email='$email_user' AND password='$password_user'";
            $result = mysqli_query($conn, $sql);
            $role=mysqli_fetch_array($result);


            if ($role['role'] =="admin")
                {
                    $_SESSION['admin'] = $email_admin;
                    header('Location: admin.php');
                }
            elseif ($role['role'] =="user")
                {
                    $_SESSION['email']= $email_user;
                    header('Location: welcome.php');
                }
            else
                {
                    echo '
                        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                          <div id="toastAutoHide" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                            <div class="toast-header">
                              <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                              <strong class="me-auto text-danger">Log in failed</strong>
                              <small>1 mins ago</small>
                              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                              <p>OOPS--->Wrong email or Password</p>
                              <p>Please try again !!</p>
                            </div>
                          </div>
                        </div>
                    ';
                }
        }


// add account users page


    if (isset($_POST['user_sign_in']))
        {
            $first_name = $_POST['first_name'];
            $last_name =  $_POST['last_name'];
            $birth_day =  $_POST['birth_day'];
            $email =      $_POST['email'];
            $password =  ($_POST['password']);
            $cpassword = ($_POST['cpassword']);
            $role = ($_POST['role']);
            $image = ($_POST['image']);


            if ($password == $cpassword)
                {
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);

                    if (!$result->num_rows > 0)
                        {
                            $sql =  "INSERT INTO users (first_name, last_name, birth_day, email, password,role,image) VALUES('$first_name','$last_name','$birth_day','$email','$password','$role','$image')";
                            $result=mysqli_query($conn,$sql);

                            if ($result)
                                {
                                    echo "<script>alert('Wow!!-->User Registration Succed .')</script>";
                                    $first_name="";
                                    $last_name="";
                                    $birth_day="";
                                    $email="";
                                    $_POST['password'] ="";
                                    $_POST['cpassword']="";
                                    $_SESSION['email']= $email;
                                    header('Location: welcome.php');
                                }
                            else
                                {
                                    echo '
                                    <div class="position-fixed top-0 start-0" style="z-index: 11">
                                      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-danger">Registration failed</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>OOPS--->Something went wrong</p>
                                          <p>Please try again !!</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';
                                }
                        }
                    else
                        {
                            echo '
                                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                        <div id="toastAutoHide" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-danger">Registration failed</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>OOPS--->Email Already Exists .</p>
                                          <p>Please try again !!</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';
                        }
                }
            else
                    {
                        echo '
                                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                          <div id="toastAutoHide" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                                        <div class="toast-header">
                                          <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                                          <strong class="me-auto text-danger">Registration failed</strong>
                                          <small>1 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          <p>OOPS--->Password not matched</p>
                                          <p>Please try again !!</p>
                                        </div>
                                      </div>
                                    </div>
                                    ';
                    }
        }


        if (isset($_POST['update_user_btn']))
        {
            $id= $_POST['edit_id'];
            $first_name = $_POST['edit_first_name'];
            $last_name =  $_POST['edit_last_name'];
            $birth_day =  $_POST['edit_birth_day'];
            $email =      $_POST['edit_email'];
            $password =  ($_POST['edit_password']);
            $role =  ($_POST['edit_role']);
            $edit_img = $_FILES["edit_img"]['name'];

          

                       
            $sql= "UPDATE users SET first_name='$first_name', last_name='$last_name', birth_day='$birth_day', email='$email', role='$role', password='$password', image='$edit_img' WHERE id='$id'";
            $result=mysqli_query($conn,$sql);

            if ($result) 
                {
                    move_uploaded_file($_FILES["edit_img"]["tmp_name"], "./upload/user_image/".$_FILES["edit_img"]["name"]);
                    echo '
                        <div class="position-fixed bottom-0 end-0" style="z-index: 11">
                          <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                              <div class="circle me-2 bg-success" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                              <strong class="me-auto text-success">Profil updated</strong>
                              <small>1 mins ago</small>
                              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                              <p>Update is done</p>
                            </div>
                          </div>
                        </div>
                        ';
                }
            else
                {
                    echo '
                        <div class="position-fixed top-0 start-0" style="z-index: 11">
                          <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                              <div class="circle me-2 bg-danger" style="border-radius: 100%;height: 1rem;width: 1rem;display: inline-flex;align-items: center;justify-content: center;" alt="..."></div>

                              <strong class="me-auto text-danger">Update failed</strong>
                              <small>1 mins ago</small>
                              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                              <p>OOPS--->Something went wrong</p>
                              <p>Contact the admin !!</p>
                            </div>
                          </div>
                        </div>
                        ';
                }
                    
                    
        }



        if (isset($_POST['exam_submit']))
        {
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
        }



?>











