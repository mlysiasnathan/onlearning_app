<!--login Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel" style="color: #03a9f4;font-family: poppins bold;">Log In</h2>
                    </div>
                    <div class="modal-body">
<?php require_once("./includes/back_end.php") ;?>
                        <form class="login-form" action="" method="POST">
                            <p>Log in with your Email address</p>
                            <div class="txtbox1" style="position: relative;
                                                      widows: 90%;
                                                      height: 45px;
                                                      border: 2px #03a9f4 solid;
                                                      border-radius: 10px 10px 0px 0px;
                                                      margin: 10px 0px;">
                                        <input type="email" placeholder="Email address :" name="email" value="" style="font-size: 15px;
                                                                                                                    color: #03a9f4;
                                                                                                                    border: none;
                                                                                                                    width: 100%;
                                                                                                                    outline: none;
                                                                                                                    text-align-last: center;
                                                                                                                    background: none;
                                                                                                                    padding: 0 5px;
                                                                                                                    height: 40px;" required>
                            </div>
                            <div class="txtbox2" style=" position: relative;
                                                      widows: 100%;
                                                      height: 45px;
                                                      border: 2px #03a9f4 solid;
                                                      border-radius: 0px 0px 10px 10px;
                                                      margin: -5px 0;">
                                        <input type="password" placeholder="Password :" name="password" value="" style="font-size: 15px;
                                                                                                                    color: #03a9f4;
                                                                                                                    border: none;
                                                                                                                    width: 100%;
                                                                                                                    outline: none;
                                                                                                                    text-align-last: center;
                                                                                                                    background: none;
                                                                                                                    padding: 0 5px;
                                                                                                                    height: 40px;" required>
                            </div>
                            <a><input type="submit" name="admin_log_in" class="logbtn" value="Log In" style="display: block;
                                                                                                    width: 100%;
                                                                                                    height: 50px;
                                                                                                    border: none;
                                                                                                    text-align: center;
                                                                                                    background-color: #03a9f4;
                                                                                                    background-size: 200%;
                                                                                                    color: #fff;
                                                                                                    outline: none;
                                                                                                    cursor: pointer;
                                                                                                    margin: 30px 0;
                                                                                                    transition: .5s;
                                                                                                    border-radius: 10px;
                                                                                                    font-size: 20px;
                                                                                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                        </form> 
                    </div>
                </div>
            </div>
        </div>

<!--Add courses Modal -->
        <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel" style="color: #03a9f4;font-family: poppins bold;">Add another Course</h2>
                    </div>
                    <div class="modal-body">
                        <form class="" action="./includes/back_end.php" method="POST" enctype="multipart/form-data">
                            <p>For more education for our students</p>
                            <p style="font-size: 12px;margin-bottom:-2%;margin-left: 2%; color: #03a9f4;">Select the ID of the course</p>
                            <div class="txtbtn4" style="position: relative;
                                                              widows: 90%;
                                                              height: 45px;
                                                              border: 2px #03a9f4 solid;
                                                              border-radius: 10px 10px 0px 0px;
                                                              margin: 10px 0px;
                                                              margin-bottom: -5px;">
                                <select name="course_id" class="" style="font-size: 15px;
                                                              color: #03a9f4;
                                                              border: none;
                                                              width: 100%;
                                                              outline: none;
                                                              text-align-last: center;
                                                              background: none;
                                                              padding: 0 5px;
                                                              height: 40px;" required>
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <p style="font-size: 12px;margin: 2% 0% -2.5% 2%; color: #03a9f4;">Select the Name of the course</p>
                            <div class="txtbtn4" style="position: relative;
                                                              widows: 90%;
                                                              height: 45px;
                                                              border: 2px #03a9f4 solid;
                                                              border-radius: 0px 0px 0px 0px;
                                                              margin: 10px 0px;
                                                              margin-bottom: -5px;">
                                <select name="course_name" class="" style="font-size: 15px;
                                                              color: #03a9f4;
                                                              border: none;
                                                              width: 100%;
                                                              outline: none;
                                                              text-align-last: center;
                                                              background: none;
                                                              padding: 0 5px;
                                                              height: 40px;" required>
                                    <option value=""></option>
                                    <option value="1.Immune System">1.Immune System</option>
                                    <option value="2.Nutrition & Health">2.Nutrition & Health</option>
                                    <option value="3.System Biology">3.System Biology</option>
                                    <option value="4.Human Health Effects of Chemical Mixtures">4.Human Health Effects of Chemical Mixtures</option>
                                    <option value="5.Dynamics of biological systems">5.Dynamics of biological systems</option>
                                    <option value="6.Neurotransmission">6.Neurotransmission</option>
                                </select>
                            </div>
                            <p style="font-size: 12px;margin: 2% 0% -2.5% 2%; color: #03a9f4;">Select the Introduction of the course</p>
                            <div class="txtbtn4" style="position: relative;
                                                              widows: 90%;
                                                              height: 45px;
                                                              border: 2px #03a9f4 solid;
                                                              border-radius: 0px 0px 0px 0px;
                                                              margin: 10px 0px;
                                                              margin-bottom: -5px;">
                                <select name="course_intro" class="" style="font-size: 15px;
                                                              color: #03a9f4;
                                                              border: none;
                                                              width: 100%;
                                                              outline: none;
                                                              text-align-last: center;
                                                              background: none;
                                                              padding: 0 5px;
                                                              height: 40px;" required>
                                    <option value=""></option>
                                    <option value="1.Introduction:

                                                The defense system consists of a wide variety of cells and molecules
                                                that have evolved to protect animals from invading pathogenic
                                                microorganisms and cancer. Recognition and response are two
                                                major activities of immune system. Immune recognition is quite specific.
                                                Moreover, it is able to discriminate between foreign molecules
                                                and the body’s own cells and proteins. After the recognition of a
                                                foreign organism, it mounts an effector response through recruiting
                                                a variety of cells and molecules to eliminate the invader organism.

                                                ">Intro 1
                                    <option value="2.Introduction:

                                                Generally, nutrients are classified as either macro- or micronutrients, based on the
                                                amounts we require from the diet (Gibney et al.,2009).
                                                Some nutrients can be stored (e.g., glucose as glycogen in the liver, fat-soluble vitamins in fat reserves)
                                                while others areequired more or less continuously. There are, however,
                                                also differences between individuals, meaning some may require specific
                                                nutrients more frequently.



                                                ">Intro 2
                                    </option>
                                    <option value="3.Introduction:

                                                Recent advances in molecular biology, neurobiology, genetics, and imaging have 
                                                demonstrated important insights about the nature of neurological diseases.
                                                However, a comprehensive understanding of their pathogenesis is still lacking.
                                                Although reductionism has been successful in enumerating and 
                                                characterizing the components of most living organisms
                                                organisms, it has failed to generate
                                                knowledge on how these components interact in complex arrangements 
                                                to allow and sustain two of the most fundamental
                                                properties of the organism as a whole: its fitness, also termed its robustness,
                                                and its capacity to evolve.">Intro 3
                                    </option>
                                    <option value="4.Introduction:

                                                Interactions of Chemicals in Biologic Systems Chemicals can interact in a number of ways.
                                                If we consider two chemicals, they may act at a common site such as a receptor or an enzyme.
                                                In this case their actions may be additive if both activate the target, or occlusive
                                                if one activates and the other binds without activating or binds with a slow
                                                dissociation constant. However, many effects are more complex than simply binding to a
                                                receptor or enzyme and act through some combination of altering gene expression,
                                                changing levels of intracellular concentrations of ions, altering cellular metabolism or production
                                                of cellular regulators.

                                                ">Intro 4
                                    </option>
                                    <option value="5.Introduction:

                                                A system is a set of inter-related and interacting objects. In biology, systems appear on all levels
                                                of organization: subcellular, cellular, tissue,organ, individual and population. Systems analysis
                                                studies the properties of dynamic processes,which suggests the definition of systems biology
                                                as a merger of (dynamic) systems theory and biology (for a more detailed discussion of the
                                                term’s definition, see ).Therefore, systems biology signals a shift of focus from the identification,
                                                characterization and classification of components of cells or organisms towards the
                                                understanding of their dynamic interactions and the resulting functional activity.


                                                ">Intro 5
                                    </option>
                                    <option value="6.Introduction:

                                                Purines, pyrimidines, and ATP are those fateful molecules, which shaped the life on
                                                the Earth, as they occurred in the prebiotic period and became essential for biological
                                                evolution. Indeed, without purines and pyrimidines, construction of RNA and
                                                DNA would be impossible and hence the genetic code that sustains life familiar to
                                                us would never appear.
                                                This was a critical evolutionary
                                                choice because it shaped enzymatic systems to utilize ATP in energydependent
                                                reactions and preordained an appearance of the universal intracellular
                                                signaling system based on calcium ions as keeping cytosolic Ca 2+ extremely low
                                                became vitally important, since otherwise insoluble Ca 2+ phosphates would preclude
                                                the cell energetics.">Intro 6
                                    </option>
                                    
                                </select>
                            </div>
                            <p style="font-size: 12px;margin: 2% 0% -2.5% 2%; color: #03a9f4;">Select the Documentation of the course</p>
                            <div class="txtbtn4" style="position: relative;
                                                              widows: 90%;
                                                              height: 45px;
                                                              border: 2px #03a9f4 solid;
                                                              border-radius: 0px 0px 0px 0px;
                                                              margin: 10px 0px;
                                                              margin-bottom: -5px;">
                                <input type="file" name="course_pdf" style="font-size: 15px;
                                                              color: #03a9f4;
                                                              border: none;
                                                              width: 100%;
                                                              outline: none;
                                                              text-align-last: center;
                                                              background: none;
                                                              padding: 0 5px;
                                                              height: 40px;" required>
                            </div>
                            <p style="font-size: 12px;margin: 2% 0% -2.5% 2%; color: #03a9f4;">Select the Image of the course</p>
                            <div class="txtbtn4" style="position: relative;
                                                              widows: 90%;
                                                              height: 45px;
                                                              border: 2px #03a9f4 solid;
                                                              border-radius: 0px 0px 10px 10px;
                                                              margin: 10px 0px;
                                                              margin-bottom: -5px;">
                                <input type="file" name="course_img" style="font-size: 15px;
                                                              color: #03a9f4;
                                                              border: none;
                                                              width: 100%;
                                                              outline: none;
                                                              text-align-last: center;
                                                              background: none;
                                                              padding: 0 5px;
                                                              height: 40px;" required>
                            </div>
                            <input type="hidden" name="q1" value="">
                            <input type="hidden" name="q2" value="">
                            <input type="hidden" name="q3" value="">
                            <input type="hidden" name="q4" value="">
                            <input type="hidden" name="q5" value="">

                            <input type="hidden" name="ans1" value="">
                            <input type="hidden" name="ans2" value="">
                            <input type="hidden" name="ans3" value="">
                            <input type="hidden" name="ans4" value="">
                            <input type="hidden" name="ans5" value="">
                            
<input type="hidden" name="q1opinion1" value="">    <input type="hidden" name="q1opinion2" value="">    <input type="hidden" name="q1opinion3" value="">
<input type="hidden" name="q2opinion1" value="">    <input type="hidden" name="q2opinion2" value="">    <input type="hidden" name="q2opinion3" value="">
<input type="hidden" name="q3opinion1" value="">    <input type="hidden" name="q3opinion2" value="">    <input type="hidden" name="q3opinion3" value="">
<input type="hidden" name="q4opinion1" value="">    <input type="hidden" name="q4opinion2" value="">    <input type="hidden" name="qq4opinion3" value="">
<input type="hidden" name="q5opinion1" value="">    <input type="hidden" name="q5opinion2" value="">    <input type="hidden" name="q5opinion3" value="">
                            <a><input type="submit" name="add_course" class="logbtn" value="Add Course" style="display: block;
                                                                                                    width: 100%;
                                                                                                    height: 50px;
                                                                                                    border: none;
                                                                                                    text-align: center;
                                                                                                    background-color: #03a9f4;
                                                                                                    background-size: 200%;
                                                                                                    color: #fff;
                                                                                                    outline: none;
                                                                                                    cursor: pointer;
                                                                                                    margin: 30px 0;
                                                                                                    transition: .5s;
                                                                                                    border-radius: 10px;
                                                                                                    font-size: 20px;
                                                                                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </a>

<!-- offcanvas add account -->
<div class="modal-footer" style="margin-right: -2.2%;">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="border-radius: 15px 0px 0px 15px;">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel" style="color: #03a9f4;font-family: poppins bold;">Add account</h5>
    </div>
    <div class="offcanvas-body">
        <form class="signin-form" method="POST">
            Sign in with your email address<br/><br/>
            <div class="txtbtn1" style="position: relative;
                                              widows: 90%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                              border-radius: 10px 10px 0px 0px;
                                              margin: -5px 0px;">
                    <input type="text" style="font-size: 15px;
                                              color: #03a9f4;
                                              border: none;
                                              width: 100%;
                                              outline: none;
                                              text-align-last: center;
                                              background: none;
                                              padding: 0 5px;
                                              height: 40px;" placeholder="First name :" name="first_name" value="" required>
            </div>
            <div class="txtbtn2" style="position: relative;
                                              widows: 90%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                                border-radius: 0px 0px 0px 0px;
                                              margin: 10px 0px;
                                              margin-bottom: -5px;">
                    <input type="text" style="font-size: 15px;
                                              color: #03a9f4;
                                              border: none;
                                              width: 100%;
                                              outline: none;
                                              text-align-last: center;
                                              background: none;
                                              padding: 0 5px;
                                              height: 40px;" placeholder="Last name :" name="last_name" value="" required>
            </div>
            <div class="txtbtn3" style="position: relative;
                                              widows: 90%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                              border-radius: 0px 0px 0px 0px;
                                              margin: 10px 0px;
                                              margin-bottom: -5px;">
                    <input type="date" style="font-size: 15px;
                                              color: #03a9f4;
                                              border: none;
                                              width: 100%;
                                              outline: none;
                                              text-align-last: center;
                                              background: none;
                                              padding: 0 5px;
                                              height: 40px;" placeholder="Birth date :" name="birth_day" value="" required>
            </div>
            <div class="txtbtn4" style="position: relative;
                                              widows: 90%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                              border-radius: 0px 0px 0px 0px;
                                              margin: 10px 0px;
                                              margin-bottom: -5px;">
                    <input type="email" style="font-size: 15px;
                                              color: #03a9f4;
                                              border: none;
                                              width: 100%;
                                              outline: none;
                                              text-align-last: center;
                                              background: none;
                                              padding: 0 5px;
                                              height: 40px;" placeholder="Email address :" name="email" value="" required>
            </div>
            <div class="txtbtn5" style="position: relative;
                                              widows: 90%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                              border-radius: 0px 0px 0px 0px;
                                              margin: 10px 0px;">
                    <input type="password" style="font-size: 15px;
                                                  color: #03a9f4;
                                                  border: none;
                                                  width: 100%;
                                                  outline: none;
                                                  text-align-last: center;
                                                  background: none;
                                                  padding: 0 5px;
                                                  height: 40px;" placeholder="Password :" name="password"value="" required>
            </div>
            <div class="txtbtn6" style="position: relative;
                                              widows: 100%;
                                              height: 45px;
                                              border: 2px #03a9f4 solid;
                                              border-radius: 0px 0px 10px 10px;
                                              margin: -5px 0;">
                    <input type="password" style="font-size: 15px;
                                              color: #03a9f4;
                                              border: none;
                                              width: 100%;
                                              outline: none;
                                              text-align-last: center;
                                              background: none;
                                              padding: 0 5px;
                                              height: 40px;" placeholder="Confirm Password :" name="cpassword" value="" required>
            </div>
            <input type="hidden" name="role" value="user">
            <input type="hidden" name="image" value="0">

            <a><input type="submit" name="admin_sign_in" class="add_account" value="Sign in" style="display: block;
                                                                                width: 100%;
                                                                                height: 50px;
                                                                                border: none;
                                                                                text-align: center;
                                                                                background-color: #03a9f4;
                                                                                background-size: 200%;
                                                                                color: #fff;
                                                                                outline: none;
                                                                                cursor: pointer;
                                                                                margin: 30px 0;
                                                                                transition: .5s;
                                                                                border-radius: 10px;
                                                                                font-size: 20px;
                                                                                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                    </a>
                </form>
              </div>
          </div>
        </div>

<!-- offcanvas password recover -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="border-radius: 0px 15px 15px 0px;margin: 5px;">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #03a9f4;font-family: poppins bold;">Password recover</h5>
                        </div>
                        <div class="offcanvas-body">
                            <form class="password-form" method="POST">
                                <h6 style="font-size: 15px;">Write your e-mail,your first name and your birthday to get your password</h6><br/>
                                <div class="txtbtn4" style="position: relative;
                                                                  widows: 90%;
                                                                  height: 45px;
                                                                  border: 2px #03a9f4 solid;
                                                                  border-radius: 10px 10px 0px 0px;
                                                                  margin: 10px 0px;
                                                                  margin-bottom: 5px;">
                                        <input type="email" style="font-size: 15px;
                                                                  color: #03a9f4;
                                                                  border: none;
                                                                  width: 100%;
                                                                  outline: none;
                                                                  text-align-last: center;
                                                                  background: none;
                                                                  padding: 0 5px;
                                                                  height: 40px;" placeholder="Email address :" name="email" value="" required>
                                </div>
                                <div class="txtbtn1" style="position: relative;
                                                                  widows: 90%;
                                                                  height: 45px;
                                                                  border: 2px #03a9f4 solid;
                                                                  border-radius: 0px 0px 0px 0px;
                                                                  margin: 5px 0px;">
                                        <input type="text" style="font-size: 15px;
                                                                  color: #03a9f4;
                                                                  border: none;
                                                                  width: 100%;
                                                                  outline: none;
                                                                  text-align-last: center;
                                                                  background: none;
                                                                  padding: 0 5px;
                                                                  height: 40px;" placeholder="First name :" name="first_name" value="" required>
                                </div>
                                <div class="txtbtn3" style="position: relative;
                                                                  widows: 90%;
                                                                  height: 45px;
                                                                  border: 2px #03a9f4 solid;
                                                                  border-radius: 0px 0px 10px 10px;
                                                                  margin: 5px 0px;
                                                                  margin-bottom: 5px;">
                                        <input type="date" style="font-size: 15px;
                                                                  color: #03a9f4;
                                                                  border: none;
                                                                  width: 100%;
                                                                  outline: none;
                                                                  text-align-last: center;
                                                                  background: none;
                                                                  padding: 0 5px;
                                                                  height: 40px;" placeholder="Birth date :" name="birth_day" value="" required>
                                </div>
                                <a><input type="submit" name="admin_check" class="recover" value="Check" style="display: block;
                                                                                                    width: 100%;
                                                                                                    height: 50px;
                                                                                                    border: none;
                                                                                                    text-align: center;
                                                                                                    background-color: #03a9f4;
                                                                                                    background-size: 200%;
                                                                                                    color: #fff;
                                                                                                    outline: none;
                                                                                                    cursor: pointer;
                                                                                                    margin: 30px 0;
                                                                                                    transition: .5s;
                                                                                                    border-radius: 10px;
                                                                                                    font-size: 20px;
                                                                                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);"></a>
                                <p style="font-size: 15px;text-align: center;">Now copy and past correctly your password</p>
                                <div class="txtbox2" style=" position: relative;
                                                                      widows: 100%;
                                                                      height: 45px;
                                                                      border: 2px #03a9f4 solid;
                                                                      border-radius: 10px;
                                                                      margin: -5px 0;">
                                            <p type="password" placeholder="Your password is :" style="font-size: 20px;
                                                                                                    color: #03a9f4;
                                                                                                    border: none;
                                                                                                    width: 100%;
                                                                                                    outline: none;
                                                                                                    background: none;
                                                                                                    padding: 0 5px;
                                                                                                    height: 40px;">Your password is :</p>
                                </div>
                            </form>
                        </div>
                    </div>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(240deg,black,#03a9f4);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="admin.php">
                <div class="sidebar-brand-text mx-1" style="font-size: 25px;">OnLearning Admin <!-- <sup>exposant 2</sup> --></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</a>
                        <a class="collapse-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" href="#">Register</a>
                        <a class="collapse-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" href="#">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">users Pages:</h6>
                        <a class="collapse-item" href="welcome.php">Welcome Page</a>
                        <a class="collapse-item" href="home.php">Home Page</a>
                        <a class="collapse-item" href="courses.php">Courses Page</a>

                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-image: linear-gradient(120deg,purple,#03a9f4,red);background-attachment: fixed;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-image: linear-gradient(100deg,black,#03a9f4);">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white medium">
                                    

<?php
$email_admin = $_SESSION['admin'];

$sql= "SELECT * FROM users WHERE email='$email_admin'" ;
$result = mysqli_query($conn, $sql);
?>
<?php
    if(isset($_SESSION['admin'])) 
    {
        $row=mysqli_fetch_array($result);
        echo $row['first_name'];?>  <?php echo $row['last_name'];
    }
?>
                                </span>
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="undraw_profile.jpg">';
    }
?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
