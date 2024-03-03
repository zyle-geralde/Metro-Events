<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        input {
            outline: none;
        }
        .success,.fail{
            position: absolute; top: -100px;background-color: rgb(225, 225, 225); width: 300px; height: 80px;
            display: flex; flex-direction: row; align-items: center; justify-content: center; border-radius: 20px; border-color: black;
            animation-duration: 2s;
        }
        @keyframes dropmesucc{
            0%{
                top: -100px;
            }
            30%{
                top: 50px
            }
            60%{
                top: 50px
            }
            100%{
                top: -100px;
            }
        }

        
    </style>
</head>

<body style="padding: 0px; margin: 0px; height: 100vh; width: 100vw; background: linear-gradient(to bottom right, #BB9CC0, #E7BCDE);
        display: flex; flex-direction: row; justify-content: center; align-items: center; font-family: 'Roboto', sans-s">
    <!--Modal for registration-->
                <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel" aria-hidden="true"
                style="color: black;font-family: 'Dosis', sans-serif;">
                    <div class="modal-dialog mm" role="document">
                        <div class="modal-content" style="width: 550px;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="signupmodalLabel">REGISTRATION FORM</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                    <div>
                                        <label for="firstname" style="color: black;">First Name: </label>
                                        <input type="text" id="firstname" placeholder = "ex. John" name = "fname" required>

                                        <label for="lastname" style="color: black; margin-left: 30px; margin-bottom: 25px;">Last Name: </label>
                                        <input type="text" id="lastname" placeholder = "ex. De La Cruz" name = "lname" required>

                                        <label for="username" style="color: black; margin-right: 4px;">Username: </label>
                                        <input type="text" id="username" placeholder = "ex. jonh34yp" name = "usename" required>

                                        <label for="emailadd" style="color: black; margin-left: 30px; margin-right: 30px;">Email: </label>
                                        <input type="text" id="emailadd" placeholder = "ex. john@mmm.com" name = "email" required>

                                        <label for="passwordsign" style="color: black; margin-left: 100px; margin-right: 30px; margin-top: 25px;">Password: </label>
                                        <input type="text" id="passwordsign" placeholder = "ex. 123#hrer*9hh" name = "pword" required>
                                    </div>
                                    <div class="modal-footer" style="margin-top: 20px;">
                                        <button type="submit" name = "signupsubmit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div style="height: 580px; width: 900px; background-color: white; display: flex; flex-direction: row; 
    box-shadow: 10px 10px 10px rgb(77, 77, 77);">
        <div
            style="width: 50%; background-image: url(audience-1853662_1280.jpg); background-position: center; position: relative;">
            <div style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.447);
                display: flex; flex-direction:column; justify-content: space-between; align-items: center; padding-top: 30px;
                padding-bottom: 30px;">
                <div style="color: white; font-size: 50px;">METRO EVENTS</div>
                <div style="color: white; font-size: 20px; font-family: 'Dosis', sans-serif">Where Memories Take Center
                    Stage</div>
                <div style="display: flex; flex-direction: row;">
                    <div style="position: relative; height: 130px; width: 130px; 
                    border-radius: 3px;overflow: hidden; margin-right: -40px; z-index: 30;">
                        <div style="height: 70px; width: 70px; border-style: solid; border-radius: 100px; background-color: white; 
                    border-width: 2px; position: absolute; top: 13px; left: 30px; border-color: white;">
                        </div>
                        <div style="height: 130px; width: 130px; border-style: solid; border-radius: 100px; border-color: white; 
                    border-width: 2px; position: absolute; bottom: -90px; left: 0px; background-color: white">
                        </div>
                    </div>

                    <div style="position: relative; height: 150px; width: 150px; 
                    border-radius: 3px;overflow: hidden; z-index: 50;">
                        <div style="height: 90px; width: 90px; border-style: solid; border-radius: 100px; background-color: white; 
                    border-width: 2px; position: absolute; top: 3px; left: 30px; border-color: white;">
                        </div>
                        <div style="height: 150px; width: 150px; border-style: solid; border-radius: 100px; border-color: white; 
                    border-width: 2px; position: absolute; bottom: -100px; left: 0px; background-color: white;">
                        </div>
                    </div>

                    <div style="position: relative; height: 130px; width: 130px; 
                    border-radius: 3px;overflow: hidden; margin-left: -40px; z-index: 30;">
                        <div style="height: 70px; width: 70px; border-style: solid; border-radius: 100px; background-color: white; 
                    border-width: 2px; position: absolute; top: 13px; left: 30px; border-color: white;">
                        </div>
                        <div style="height: 130px; width: 130px; border-style: solid; border-radius: 100px; border-color: white; 
                    border-width: 2px; position: absolute; bottom: -90px; left: 0px; background-color: white">
                        </div>
                    </div>
                </div>
                <div style="color: white; font-size: 20px; font-family: 'Dosis', sans-serif; font-style: italic;">"Empower Your Moments, Elevate Your Experience"</div>
                <div style="color: white; font-size: 20px; font-family: 'Dosis', sans-serif; font-style: italic;">Become a registered user. Sign up now.</div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupmodal" style="background-color: #67729D; 
                border-color: #67729D; font-family: 'Dosis', sans-serif;">
                    Sign Up
                </button>
            </div>
        </div>
        <div style="background-color: white; width: 50%; position: relative;">
            <div style="height: 300px;  background-color: #67729D; display: flex; position: absolute; width: 100%; flex-direction: row; 
            justify-content: center; color: white; font-size: 50px;">
                <div style="margin-top: 20px; color: #FED9ED white;">
                    WELCOME!!
                </div>
            </div>
            <div style="border-radius: 68% 31% 0% 0% / 13% 13% 10% 10% ; background-color: white; height: 75%; position: absolute; width: 100%; bottom: 30px;
            font-family: 'Dosis', sans-serif">
                <div style="margin-top: 80px; font-size: 30px; font-weight: bold; margin-left: 50px; border-bottom-style: solid; 
                    border-bottom-width: 5px; border-radius: 5px; display: inline-block; border-color: #BB9CC0;">
                    Log In
                </div>
                <div>
                    <form style="display: flex; flex-direction: column; align-items: center; justify-content: center;"
                        method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div style="display: flex; flex-direction: row; margin-bottom: 20px; margin-top: 20px;">
                            <div style="position: relative; background-color: #BB9CC0; height: 40px; width: 40px; 
                                border-radius: 3px;overflow: hidden;">
                                <div style="height: 23px; width: 23px; border-style: solid; border-radius: 100px; border-color: white; 
                                border-width: 2px; position: absolute; top: 3px; left: 8px;">
                                </div>
                                <div style="height: 40px; width: 40px; border-style: solid; border-radius: 100px; border-color: white; 
                                border-width: 2px; position: absolute; bottom: -30px; left: 0px;">
                                </div>
                            </div>
                            <input type="text" id="emaillog" name="emaillog" placeholder="Enter email address" style="border-style: none; border-bottom-style: solid; border-width: 1px; margin-left: 20px;
                                width: 200px;" required>
                        </div>
                        <div style="display: flex; flex-direction: row;">
                            <div
                                style="position: relative; background-color: #BB9CC0; height: 40px; width: 40px; border-radius: 3px;">
                                <div
                                    style="height: 25px; width: 25px; border-style: solid; border-radius: 100px; border-color: white; 
                                border-width: 2px; position: absolute; top: 8px; left: 7px; border-radius: 51% 49% 39% 38% / 6% 7% 42% 41% ;">
                                </div>
                                <div style="height: 6px; width: 6px; background-color: white; border-radius: 100px; 
                                    top: 15px; position: absolute; left: 16.5px;"></div>
                                <div style="height: 6px; width: 3px; background-color: white; top: 18px; 
                                    position: absolute; left: 17.6px;"></div>
                            </div>
                            <input type="text" id="passwordlog" name="passwordlog" placeholder="Enter Password" style="border-style: none; border-bottom-style: solid; border-width: 1px; margin-left: 20px;
                                width: 200px;" required>
                        </div>
                        <button class="btn btn-primary" style="background-color: #BB9CC0; border-color: #BB9CC0;
                            margin-top: 20px;" type="submit" id="logbut" name="logbut">
                            Log In
                        </button>
                        <div style="color: red; margin-top: 3px; opacity: 0;" class="invaliddiv">Invalid username or
                            password</div>
                        <div style="color: #67729D; pointer-events: none; margin-top: 3px;">Don't have an account? Sign
                            up now</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class = "success">
        Sign up Successful
    </div>
    <div class = "fail">
        Email already present
    </div>

    <?php
        include('../code/myapi.php');
        LogInUser();
        singupuser();
    ?>

    <script>
        $(document).ready(function () {
        })
        $('#signupmodal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>

</body>

</html>

<!--font-family: 'Dosis', 
        sans-serif-->