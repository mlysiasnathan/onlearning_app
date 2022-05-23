<?php include './includes/security.php';?>

<?php include './includes/config.php';?>

<?php include './includes/back_end.php';?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        OnLearning <?php echo $_SESSION['email']; ?>
    </title>
    <link rel="shortcut icon"  href="./interface/img/logo.png">
    <link rel="stylesheet"  href="./interface/css/project_css.css">
    <link href="./interface/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./interface/css/bootstrap.css">
    <script src="./interface/js/bootstrap.min2.js"></script>
    <script type="text/javascript">
        var tm;
        function timeout1()                            //function to check time out
           {
            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform1").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout1").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout1()},1000);                      //after each 1 minute the function timeout will called automatically
          }

        function timeout2()                            //function to check time out
           {

            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform2").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout2").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout2()},1000);                      //after each 1 minute the function timeout will called automatically
          }


        function timeout3()                            //function to check time out
           {

            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform3").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout3").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout3()},1000);                      //after each 1 minute the function timeout will called automatically
          }
          function timeout4()                            //function to check time out
           {
            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform4").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout4").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout4()},1000);                      //after each 1 minute the function timeout will called automatically
          }
          function timeout5()                            //function to check time out
           {
            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform5").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout5").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout5()},1000);                      //after each 1 minute the function timeout will called automatically
          }

          function timeout6()                            //function to check time out
           {
            var minute=Math.floor(timeleft/60);   
            var second=timeleft%60;
            var min=checkMin(minute);
            var sec=checkSec(second)
            if (timeleft<=0) 
            {
              clearTimeout(tm);                                  //if timeout then stop the timeout function
              document.getElementById("myform6").submit();       //if timeout then automatic submit the form
            }
            else
            {
              document.getElementById("timeout6").innerHTML=min+":"+sec;   //else diplay the time
            }
            timeleft--;                                                         //decrease time each time
            var tm=setTimeout(function(){timeout6()},1000);                      //after each 1 minute the function timeout will called automatically
          }

          function checkSec(second)                   //convert from  0:5 to 0:05
          {
            if (second<10) 
            {
              second="0"+second;
            }
            return second;
          }

           

          function checkMin(minute)              //convert from  0:20 to 00:20
          {
            if (minute<10) 
            {
              minute="0"+minute;
            }
            return minute;
          }
</script>
</head>
<body class="body">
    <div class="container-fluid">

        <div><h5 style="background-image: linear-gradient(100deg,black,#03a9f4);border-radius: 15px 15px 0px 0px;text-align: center;margin-bottom: -.5%;margin-top: 5px; color: white;font-family: poppins bold;padding: 8px 0px;">Official Website</h5></div>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-image: linear-gradient(120deg,black,#03a9f4);border-radius: 0px 0px 15px 15px;">
            <div class="container-fluid p-2">
                <a class="navbar-brand" href="#" style="font-size: 36px;">
                    <img src="./interface/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                OnLearning</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedCont" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 57%;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="welcome.php">My Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" style="font-family: poppins bold">My Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" style="font-family: poppins bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">    
<?php
$email_user=$_SESSION['email'];

$sql= "SELECT * FROM users WHERE email='$email_user'" ;
$result = mysqli_query($conn, $sql);
?>
<?php
    if(isset($_SESSION['email'])) 
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['id']=$row['id'];
        echo $row['first_name'];?>  <?php echo $row['last_name'];
    }
?>
<?php
    if ($row['image']==='0' OR $row['image']==='')
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 30px;height: 30px;border: 2px white solid;margin-left: 5px">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 30px;height:30px;border: 2px white solid;margin-left: 5px">';
    }
?>
                            </a>
<!-- dropdown -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 16px;background-color: black;border-radius: 15px; text-align: center;opacity: .8;border: 1px #03a9f4 solid;">
                                <li>
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 140px;height: 140px;border: 5px #03a9f4 solid;">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 140px;height:140px;border: 5px #03a9f4 solid;">';
    }
?>
                                </li>
                                <li>
<?php echo'<button type="button" class="btn btn-outline-primary" style="border-radius:8px;margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#staticBackdropMarksheet'.$row['id'].'">'?>My Marksheet</button>
                                <li>
                                <li>
                                    <form action="update.php" method="POST">
                                        <input type="hidden" name="edit_user_id" value="<?php echo $row['id']; ?>">
                                        <button  class="btn btn-outline-primary" type="submit" name="edit_user" style="border-radius:8px;margin-top: 10px;">Edit my profil</button>
                                    </form>
                                <li>
                                
                                <li><hr class="dropdown-divider" style="background-color: #03a9f4;"></li>
<!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 80%;border-radius: 8px;">Log out</button>
                            </ul>
                        </li>
                    </ul>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
<!-- Logout Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">Good Bye <?php echo $_SESSION['email']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Visit us anytime you want<br/>
                    Do you want to log out ??
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-close">X</i></button>
                    <form action="./includes/logout.php" method="POST">
                        
                        <button type="submit" name="logout_btn" class="btn btn-danger btn-circle" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-check"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Books loop-->
        <div class="container">
<?php
$sql= "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
?>
<!-- ROW -->
            <div class="row mt-3">
<!-- BOOK -->
<?php
if (mysqli_num_rows($result) > 0) 
{

while ($row = mysqli_fetch_assoc($result)) 
{
    ?>
                <div class="col-6">
                    <div class="card" id="book1" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
<?php echo'<img src="upload/' .$row['image'].'" width="120px;" height="80px;" alt="image" class="card-img-top">'?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></br></h5>
                             
                            <p>
<?php echo'<a class="btn-sm btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample'.$row['id'].'" role="button" aria-expanded="false" aria-controls="multiCollapseExample'.$row['id'].'" style="text-decoration: none;">'?>Overview</a>
                            </p>
<?php echo'<div class="collapse multi-collapse" id="multiCollapseExample'.$row['id'].'">'?>
                                <div class="card card-body">
<?php echo nl2br($row['intro']); ?>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic outlined example" style="font-size: 16px;">
<?php echo'<a href="upload/'.$row['pdf'].'" class="btn btn-primary" style="font-size: 15px;">'?>Get Reading</a>

<?php 
    if ($row['q1']=="" && $row['q2']=="" && $row['q3']=="" && $row['q4']=="" && $row['q5']=="") 
    {
        echo'<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop'.$row['id'].'">Exam</button>';
    }
else
    {
        echo'<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#advice'.$row['id'].'">Exam</button>';
    }
?>
                            </div>
                        </div>
                    </div>
                </div>
<!--Advice Exam Modal -->
<?php echo'
    <div class="modal fade" id="advice'.$row['id'].'" data-bs-backdrop="dialog" data-bs-keyboard="false" tabindex="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">Are you ready for the exam of '.$row['name'].' ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you have already read all the contents of this courses ?<br/>
                    If not go back and click on Get reading.<br/>
                    If yes the exam has some rules: <br/>
                    1.Attempt to all Question<br/>
                    2.The exam will be automatically Submitted after a certain period of time
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-close">X</i></button>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" onclick="timeout'.$row['id'].'()" data-bs-target="#staticBackdrop'.$row['id'].'">Exam</button>
                </div>
            </div>
        </div>
    </div>';
?>


<!--Exam Modal -->
<?php 
if ($row['q1']=="" && $row['q2']=="" && $row['q3']=="" && $row['q4']=="" && $row['q5']=="") 
    {
        echo '
    <div class="modal fade" id="staticBackdrop'.$row['id'].'" data-bs-backdrop="dialog" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">Examination Paper of  '.$row['name'].'</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"><h7 class="bg-danger text-white text-center" style="border-radius: 10px;padding:7px;">No Question avalaible</h7>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-check"></i></button>
                </div>
            </div>
        </div>
    </div>';

    }
else
    { 
        echo'
    <div class="modal fade" id="staticBackdrop'.$row['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
          <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">Examination Paper of  '.$row['name'].'</h5><h4 class="bg-danger text-white text-center sticky-top" style="border-radius: 10px;padding:7px;" id="timeout'.$row['id'].'">Running_time</h4>
          </div>
          <div class="modal-body">'?>
    
        <script type="text/javascript">
      var timeleft=50;
      //important--> the scope of javascript variable is global but not in php(we have to use global keyword)
      var tm;
      function stop()
            {
                alert('alert test');
                clearTimeout(tm);
            }

        </script>
    
    <?php  
// action="./includes/submit_timeout.php"
    echo'
            <form class="" action="courses.php" method="POST" id="myform'.$row['id'].'">
                <input type="hidden" name="exam_id" value="'.$row['id'].'">
                <h5 class="text-primary h6"> Question 1: </h5><h7 class="h8 text-dark">'.$row['q1'].'</h7>
                                                    <div class="txtbtn4" style="position: relative;
                                                                                      widows: 90%;
                                                                                      height: 45px;
                                                                                      border: 2px #03a9f4 solid;
                                                                                      border-radius: 0px 0px 0px 0px;
                                                                                      margin: 10px 0px;
                                                                                      margin-bottom: -5px;">
                                                        <select name="result1" class="" style="font-size: 15px;
                                                                                      color: #03a9f4;
                                                                                      border: none;
                                                                                      width: 100%;
                                                                                      outline: none;
                                                                                      text-align-last: center;
                                                                                      background: none;
                                                                                      padding: 0 5px;
                                                                                      height: 40px;" required>
                                    <option value="No one">No answers</option>
                                    <option value="'.$row['q1opinion1'].'">'.$row['q1opinion1'].'</option>
                                    <option value="'.$row['q1opinion2'].'">'.$row['q1opinion2'].'</option>
                                    <option value="'.$row['q1opinion3'].'">'.$row['q1opinion3'].'</option>
                                                        </select>
                                                    </div></br></br></br>
             <h5 class="text-primary h6"> Question 2: </h5><h7 class="h8 text-dark">'.$row['q2'].'</h7>
                        <div class="txtbtn4" style="position: relative;
                                                                                      widows: 90%;
                                                                                      height: 45px;
                                                                                      border: 2px #03a9f4 solid;
                                                                                      border-radius: 0px 0px 0px 0px;
                                                                                      margin: 10px 0px;
                                                                                      margin-bottom: -5px;">
                                                        <select name="result2" class="" style="font-size: 15px;
                                                                                      color: #03a9f4;
                                                                                      border: none;
                                                                                      width: 100%;
                                                                                      outline: none;
                                                                                      text-align-last: center;
                                                                                      background: none;
                                                                                      padding: 0 5px;
                                                                                      height: 40px;" required>
                                    <option value="No one">No answers</option>
                                    <option value="'.$row['q2opinion1'].'">'.$row['q2opinion1'].'</option>
                                    <option value="'.$row['q2opinion2'].'">'.$row['q2opinion2'].'</option>
                                    <option value="'.$row['q2opinion3'].'">'.$row['q2opinion3'].'</option>
                                                        </select>
                                                    </div></br></br></br>
                <h5 class="text-primary h6"> Question 3: </h5><h7 class="h8 text-dark">'.$row['q2'].'</h7>
                                                    <div class="txtbtn4" style="position: relativ                                                                                      widows: 90%;
                                                                                      height: 45px;
                                                                                      border: 2px #03a9f4 solid;
                                                                                      border-radius: 0px 0px 0px 0px;
                                                                                      margin: 10px 0px;
                                                                                      margin-bottom: -5px;">
                                                        <select name="result3" class="" style="font-size: 15px;
                                                                                      color: #03a9f4;
                                                                                      border: none;
                                                                                      width: 100%;
                                                                                      outline: none;
                                                                                      text-align-last: center;
                                                                                      background: none;
                                                                                      padding: 0 5px;
                                                                                      height: 40px;" required>
                                    <option value="No one">No answers</option>
                                   <option value="'.$row['q3opinion1'].'">'.$row['q3opinion1'].'</option>
                                   <option value="'.$row['q3opinion2'].'">'.$row['q3opinion2'].'</option>
                                   <option value="'.$row['q3opinion3'].'">'.$row['q3opinion3'].'</option>
                                                        </select>
                                                    </div></br></br></br>
                        <h5 class="text-primary h6"> Question 4: </h5><h7 class="h8 text-dark">'.$row['q4'].'</h7>
                                                    <div class="txtbtn4" style="position: relative;
                                                                                      widows: 90%;
                                                                                      height: 45px;
                                                                                      border: 2px #03a9f4 solid;
                                                                                      border-radius: 0px 0px 0px 0px;
                                                                                      margin: 10px 0px;
                                                                                      margin-bottom: -5px;">
                                                        <select name="result4" class="" style="font-size: 15px;
                                                                                      color: #03a9f4;
                                                                                      border: none;
                                                                                      width: 100%;
                                                                                      outline: none;
                                                                                      text-align-last: center;
                                                                                      background: none;
                                                                                      padding: 0 5px;
                                                                                      height: 40px;" required>
                                    <option value="No one">No answers</option>
                                    <option value="'.$row['q4opinion1'].'">'.$row['q4opinion1'].'</option>
                                    <option value="'.$row['q4opinion2'].'">'.$row['q4opinion2'].'</option>
                                    <option value="'.$row['q4opinion3'].'">'.$row['q4opinion3'].'</option>
                                                        </select>
                                                    </div></br></br></br>
                <h5 class="text-primary h6"> Question 5: </h5><h7 class="h8 text-dark">'.$row['q5'].'</h7>
                                                    <div class="txtbtn4" style="position: relative;
                                                                                      widows: 90%;
                                                                                      height: 45px;
                                                                                      border: 2px #03a9f4 solid;
                                                                                      border-radius: 0px 0px 0px 0px;
                                                                                      margin: 10px 0px;
                                                                                      margin-bottom: -5px;">
                                                        <select name="result5" class="" style="font-size: 15px;
                                                                                      color: #03a9f4;
                                                                                      border: none;
                                                                                      width: 100%;
                                                                                      outline: none;
                                                                                      text-align-last: center;
                                                                                      background: none;
                                                                                      padding: 0 5px;
                                                                                      height: 40px;" required>
                                    <option value="No one">No answers</option>
                                    <option value="'.$row['q5opinion1'].'">'.$row['q5opinion1'].'</option>
                                    <option value="'.$row['q5opinion2'].'">'.$row['q5opinion2'].'</option>
                                    <option value="'.$row['q5opinion3'].'">'.$row['q5opinion3'].'</option>
                                                        </select>
                                                    </div></br></br></br>
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name="user_id" value="'.$_SESSION['id'].'">
                                <button type="submit" name="exam_submit" id="submit_id" class="btn btn-danger">Submit</button>
                              </div>
                        </form></div></div></div>';

            }
?>
<?php
        }
    }
else
    {
    echo '<h7 class="bg-danger text-white text-center" style="border-radius: 10px;">No courses avalaibles<br/> Contact the admin</h7>';
    }
?>
            </div> 
        </div>

<!-- Marksheet Modal -->
<?php
$email_user=$_SESSION['email'];

$sql= "SELECT * FROM users WHERE email='$email_user'" ;
$result = mysqli_query($conn, $sql);
?>
<?php
    if(isset($_SESSION['email'])) 
    {
        $row=mysqli_fetch_array($result);
    }
?>
<?php echo'<div class="modal fade" id="staticBackdropMarksheet'.$row['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">'?>
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">My Marksheet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">
                        <thead>
                            <tr>
                                <th>id of the course</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name_of_the_course</th>
                                <th>Marks</th>
                            </tr>
                        </tfoot>
                        <tbody>
<?php
if (mysqli_num_rows($result) > 0) 
{
    $sql= "SELECT * FROM marksheet WHERE id_users=$row[id]";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) 
    {

        $id_to_use = $row['id_courses'];
        ?>
                                <tr>
                                  <td>
     <?php

    $sql1= "SELECT * FROM courses WHERE id=$id_to_use";     
    $result1 = mysqli_query($conn, $sql1);
    while ($row2 = mysqli_fetch_assoc($result1)) 
    {
            echo $row2['name'];
    };

        ?></td>

                                  <td><?php echo $row['result']; ?>/100</td>
                               </tr>
       <?php
    }
}
else
{
echo '<h7 class="bg-danger text-white text-center pl-3 pr-3 mb-3" style="border-radius: 10px;">No Exam already Submitted</h7>';
}

?>

                                    </tbody>
                                </table>
                            </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-check"></i></button>
                </div>
            </div>
        </div>
    </div>





<?php include './includes/footer.php'?>
    <script src="./interface/event-handler.js"></script>
    <script src="./interface/manipulator.js"></script>
    <script src="./interface/data.js"></script>
    <script src="./interface/base-component.js"></script>
    <script src="./interface/toast.js"></script>
    <script>
      window.addEventListener('load', function () {
        Array.from(document.querySelectorAll('.toast'))
          .forEach(function (toastNode) {
            new Toast(toastNode)
          })

          document.getElementById('btnShowToast').addEventListener('click', function () {
            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.show()
              })
          })

          document.getElementById('btnHideToast').addEventListener('click', function () {
            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.hide()
              })
          })
      })
    </script>
</body>
</html>
