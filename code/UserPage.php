<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        input {
            outline: none;
        }

        .alleve,
        .joineve {
            transition: 0.2s;
        }

        .alleve:hover {
            background-color: #FED9ED;
            color: #67729D;
        }

        .alleve:active {
            opacity: 0.7;
        }

        .joineve:hover {
            background-color: #FED9ED;
            color: #67729D;
        }

        .youreve:hover {
            background-color: #FED9ED;
            color: #67729D;
        }

        .youreve:active {
            opacity: 0.7;
        }

        .joineve:active {
            opacity: 0.7;
        }

        .logout {
            pointer-events: all;
            cursor: pointer;
            background-color: rgb(203, 7, 88);
            border-color: rgb(105, 0, 44);
            border-width: 2px;
            padding: 10px 20px;
            border-radius: 20px;
            color: white;
            border-style: solid;
        }

        .logout:hover {
            background-color: rgb(171, 4, 74);
            border-color: rgb(105, 0, 44);
        }

        .logout:active {
            background-color: rgb(169, 84, 120);
            border-color: rgb(108, 60, 79);
        }

        .chatbut {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .chatbut:hover {
            height: 25px;
            width: 25px;
        }

        .thumbsupbut {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .thumbsupbut:hover {
            height: 25px;
            width: 25px;
        }

        .thumbsdownbut {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .thumbsdownbut:hover {
            height: 25px;
            width: 25px;
        }

        .joinEventBut {
            border-style: solid;
            cursor: pointer;
            border-color: green;
            color: green;
            border-width: 1px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 5px;
            transition: 0.2s;
        }

        .joinEventBut:hover {
            padding: 7px;
        }

        .deteeventpost {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .deteeventpost:hover {
            height: 25px;
            width: 25px;
        }

        .userJoined {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .userJoined:hover {
            height: 25px;
            width: 25px;
        }

        .inboxdiv,.upgradediv{
            height: 20px;
            width: 20px;
            cursor: pointer;
            pointer-events: all;
            transition: 0.2s;
        }
        .upgradediv:hover{
            height: 25px;
            width: 25px;
        }

        .inboxdiv:hover {
            height: 25px;
            width: 25px;
        }

        .deletereply {
            height: 20px;
            width: 20px;
            transition: 0.2s;
        }

        .deletereply:hover {
            height: 25px;
            width: 25px;
        }

        .replyboxout {
            height: 0px;
            overflow: hidden;
        }

        .replyboxin {
            height: auto;
            margin-top: 20px;
            overflow: auto;
        }
        .replysubcc{
            width: 910px;
        }
    </style>
</head>

<body style="padding: 0px; margin: 0px; background-color: #FED9ED;">
    <div style="background-color: #67729D; height: 150px; box-shadow: 10px 10px 10px rgb(77, 77, 77);
        display: flex; flex-direction: row;align-items: center; padding-left: 50px; padding-right: 50px; font-family: 'Roboto', sans-s;
        pointer-events: none; justify-content: space-between;">
        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <div style="position: relative; height: 130px; width: 130px; 
                border-radius: 3px;overflow: hidden; margin-right: -40px; z-index: 30; background-color: #BB9CC0; border-radius: 500px;
                border-color: white; border-style: solid;">
                <div style="height: 70px; width: 70px; border-style: solid; border-radius: 100px; background-color: #fee4f2; 
                border-width: 2px; position: absolute; top: 13px; left: 30px; border-color: #fee4f2;">
                </div>
                <div style="height: 130px; width: 130px; border-style: solid; border-radius: 100px; border-color: #fee4f2; 
                border-width: 2px; position: absolute; bottom: -90px; left: 0px; background-color: #fee4f2">
                </div>
            </div>

            <div style="display: flex; flex-direction: column; color: white; margin-left: 70px; height: 90px; justify-content: space-between;
                font-size: 18px; align-items: center;">
                <div class="holdusername">MALABUNGA Himenez kfbasdkjfbkasjdbfkasj</div>
                <div class="holdtype">#Organizer</div>
            </div>
        </div>

        <div style="display: flex; flex-direction: row; color: #FED9ED; font-size: 18px;">
            <div style="margin-right: 2px; height: 149px; display: flex; flex-direction: row;
                align-items: center; justify-content: center; width: 150px; pointer-events: all; cursor: pointer;" class="alleve">
                <a href="UserPage.php" style="text-decoration: none; color:#BB9CC0;">All Events</a>
            </div>
            <!--<div style="height: 149px; display: flex; flex-direction: row;
                align-items: center; justify-content: center; width: 150px; pointer-events: all; cursor: pointer;" class="joineve">
                Joined Events
            </div>
            <div style="height: 149px; display: flex; flex-direction: row;
                align-items: center; justify-content: center; width: 150px; pointer-events: all; cursor: pointer;" class="youreve">
                Your Events
            </div>-->
        </div>
        <div style="display: flex; flex-direction: row; align-items: center;">
            <div style="margin-right: 30px; background-color: white; padding: 5px 7px; border-radius: 100px; " data-toggle="modal" data-target="#upgrademe">
                <img src="gear.png" class="upgradediv">
            </div>
            <div style="margin-right: 30px; background-color: white; padding: 5px 7px; border-radius: 100px;">
                <a href="inboxuser.php">
                    <img src="mail-inbox-app.png" class="inboxdiv">
                </a>
            </div>
            <div class="logout">
                <a href="../code/LogInandSignUp.php" style="color: white; text-decoration: none;">
                    Log Out
                </a>
            </div>
        </div>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 50px; margin-bottom: 50px;" class="eventcontrol">
        <button type="button" class="btncreate" data-toggle="modal" data-target="#createeventbut" style="margin-bottom: 30px; color: white; background-color: #67729D; border-style: solid;
            padding: 10px 40px; border-radius: 10px; border-color: #67729D; pointer-events: none; opacity:0;">
            Create Event
        </button>
        <div class="eventContainer" style="width: 1100px;">


        </div>
    </div>

    <!--Modal for createEvent-->
    <div class="modal fade" id="createeventbut" tabindex="-1" role="dialog" aria-labelledby="createeventbutLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="createeventbutLabel">EVENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div style="display: flex; flex-direction: column;">
                            <label for="userId" style="color: black;">ID: </label>
                            <input type="text" id="userId" name="userId" required readonly style="margin-bottom: 20px;">

                            <label for="title" style="color: black;">Title: </label>
                            <input type="text" id="title" placeholder="ex. Hiking for a cause" name="title" required>

                            <label for="typeofAct" style="color: black;margin-top: 20px;">Type: </label>
                            <input type="text" id="typeofAct" placeholder="ex. Biking" name="typeofAct" required>

                            <label for="dateevent" style="color: black; margin-top: 20px;">Date: </label>
                            <input type="date" id="dateInput" name="dateInput" required>

                            <label for="desc" style="color: black; margin-top: 20px;">Description: </label>
                            <textarea id="desc" name="desc" placeholder="..." style="height: 125px;" required></textarea>

                        </div>
                        <div class="modal-footer" style="margin-top: 20px;">
                            <button type="submit" name="createeventsub" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Modal for deletediv-->
    <div class="modal fade" id="eventdel" tabindex="-1" role="dialog" aria-labelledby="eventdelLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventdelLabel">DELETE EVENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div style="display: flex; flex-direction: column;">
                            <label for="delEventId" style="color: black;">ID: </label>
                            <input type="text" id="delEventId" name="delEventId" required readonly style="margin-bottom: 20px;">

                            <label for="deltitle" style="color: black;">Title: </label>
                            <input type="text" id="deltitle" placeholder="ex. Hiking for a cause" name="deltitle" required readonly>

                            <label for="deldesc" style="color: black; margin-top: 20px;">Description: </label>
                            <textarea id="deldesc" name="deldesc" placeholder="..." style="height: 125px;" required readonly></textarea>

                        </div>
                        <div class="modal-footer" style="margin-top: 20px;">
                            <button type="submit" name="deleteeventsub" class="btn btn-primary">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Modal for deleterep-->
    <div class="modal fade" id="replydel" tabindex="-1" role="dialog" aria-labelledby="replydelLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="replydelLabel">DELETE COMMENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div style="display: flex; flex-direction: column;">
                            <label for="delRepId" style="color: black;">ID: </label>
                            <input type="text" id="delRepId" name="delRepId" required readonly style="margin-bottom: 20px;">

                            <label for="delrepdesc" style="color: black; margin-top: 20px;">Description: </label>
                            <textarea id="delrepdesc" name="delrepdesc" placeholder="..." style="height: 125px;" required readonly></textarea>

                        </div>
                        <div class="modal-footer" style="margin-top: 20px;">
                            <button type="submit" name="deleterepsub" class="btn btn-primary">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Modal for join-->
    <div class="modal fade" id="joinat2" tabindex="-1" role="dialog" aria-labelledby="joinat2Label" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="joinat2Label">JOIN EVENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div style="display: flex; flex-direction: column;">
                            <label for="UserId" style="color: black;">UserID: </label>
                            <input type="text" id="UserId" name="UserId" required style="margin-bottom: 20px;" readonly>

                            <label for="EventId" style="color: black;">EventID: </label>
                            <input type="text" id="EventId" name="EventId" required style="margin-bottom: 20px;" readonly>

                            <label for="UserName" style="color: black;">UserName: </label>
                            <input type="text" id="UserName" name="UserName" required style="margin-bottom: 20px;" readonly>

                            <label for="titlen" style="color: black;">Title of the Event you want to Join: </label>
                            <input type="text" id="titlen" placeholder="ex. Hiking for a cause" name="titlen" required readonly>

                            <label for="descmm" style="color: black; margin-top: 20px;">Why you want to join: </label>
                            <textarea id="descmm" name="descmm" placeholder="..." style="height: 125px;" required></textarea>

                        </div>
                        <div class="modal-footer" style="margin-top: 20px; display: flex; flex-direction: row;">
                            <button type="submit" name="JoinEnter" class="btn btn-primary" style="margin-right: 20px;">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Modal for usersjoined-->
    <div class="modal fade" id="joinuser" tabindex="-1" role="dialog" aria-labelledby="joinuserLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="joinuserLabel">USER'S JOINED</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class = "userjoinedclass">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Modal for upgrade-->
    <div class="modal fade" id="upgrademe" tabindex="-1" role="dialog" aria-labelledby="upgrademeLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="upgrademeLabel">UPGRADE USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div style="display: flex; flex-direction: column;">
                            <label for="upUserId" style="color: black;">UserID: </label>
                            <input type="text" id="upUserId" name="upUserId" required style="margin-bottom: 20px;" readonly>

                            <label for="upUserName" style="color: black;">UserName: </label>
                            <input type="text" id="upUserName" name="upUserName" required style="margin-bottom: 20px;" readonly>

                            <label for="upUserUpgrade" style="color: black;">Upgrade: </label>
                            <input type="text" id="upUserUpgrade" name="upUserUpgrade" required style="margin-bottom: 20px;" placeholder="should be admin or organizer all lowercase">

                            <label for="updescmm" style="color: black; margin-top: 20px;">Reason: </label>
                            <textarea id="updescmm" name="updescmm" placeholder="..." style="height: 125px;" required></textarea>

                        </div>
                        <div class="modal-footer" style="margin-top: 20px; display: flex; flex-direction: row;">
                            <button type="submit" name="upgradebutMe" class="btn btn-primary" style="margin-right: 20px;">Request Upgrade</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php
    include('../code/myapi.php');
    createEvent();
    replyEvent();
    deleteEvent();
    deleteReply();
    likeEvent();
    joinrequest();
    upgradeUserNow();
    ?>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "../data/holdlog.json",
                method: "POST",
                success: function(data) {
                    $(".holdusername").text(data[0]["username"])
                    $(".holdtype").text(data[0]["type"])
                    $("#userId").val(data[0]["id"])
                }
            })
            $.ajax({
                url: "../data/events.json",
                method: "POST",
                success: function(data) {
                    for (nn of data) {
                        (function(n) {
                            $.ajax({
                                url: "../data/users.json",
                                method: "POST",
                                success: function(datas) {
                                    var idme = document.querySelector("#userId").value;

                                    var eventdiv = document.createElement("div");
                                    eventdiv.setAttribute("class", "eventsubcont")

                                    var eventappend = document.querySelector(".eventContainer")
                                    eventappend.append(eventdiv);

                                    const filteredData = datas.filter(item => item.id === n["userid"]);
                                    authorevent = filteredData[0]["username"];

                                    var strconc = "";
                                    if (n.userid != parseInt(idme)) {
                                        strconc = ``;
                                    } else {
                                        strconc = `<div style="margin-right: 10px; cursor: pointer; padding: 5px;">
                                                    <img src="trash-can.png" class="deteeventpost" data-toggle="modal" data-target="#eventdel">
                                                </div>`;
                                    }

                                    eventdiv.innerHTML = `
                                <div style="display: flex; flex-direction: row; background-color: white;padding: 20px 30px; border-radius: 40px; margin-bottom: 20px;">
                                    <div>
                                        <div style="position: relative; height: 100px; width: 100px; 
                                        border-radius: 3px;overflow: hidden; margin-right: -40px; z-index: 30; background-color: #BB9CC0; border-radius: 500px;
                                        border-color: rgb(255, 56, 145); border-style: solid;">
                                            <div style="height: 50px; width: 50px; border-style: solid; border-radius: 100px; background-color: #fee4f2; 
                                        border-width: 2px; position: absolute; top: 13px; left: 25px; border-color: #fee4f2;">
                                            </div>
                                            <div style="height: 100px; width: 100px; border-style: solid; border-radius: 100px; border-color: #fee4f2; 
                                        border-width: 2px; position: absolute; bottom: -70px; left: 0px; background-color: #fee4f2">
                                            </div>
                                        </div>
                                        <div class="eventid" style="opacity: 0;">${n.id}</div>
                                    </div>

                                    <div style="margin-left: 70px; font-family: 'Dosis', sans-serif; word-break: break-all;">
                                        <h3 style="font-weight: bold; text-align: justify;" class="titlediv">${n.title}</h3>
                                        <div style="display: flex; flex-direction: row;margin-top: 10px;">
                                            <div>By: </div>
                                            <div class="Authordiv" style="margin-left: 5px; text-align: justify;">${authorevent}</div>
                                        </div>
                                        <div style="display: flex; flex-direction: row;margin-top: 10px;">
                                            <div>Date: </div>
                                            <div class="dateDiv" style="margin-left: 5px; text-align: justify;">${n.date}</div>
                                        </div>
                                        <div style="display: flex; flex-direction: row;">
                                            <div style="display: flex; flex-direction: row; background-color:#FED9ED; padding: 10px;border-radius: 100px;
                                            border-style: solid; border-color: #BB9CC0; color:#67729D; margin-top: 10px; text-align: justify;" class="typeDiv">
                                                ${n.typeOfActivity}
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px; padding: 20px; background-color: rgb(242, 242, 242); color: black; 
                                        border-radius: 20px;text-align: justify;" class="bodyDiv">
                                            ${n.description}
                                        </div>

                                        <div style="margin-top: 30px; display: flex; flex-direction: row; justify-content: space-between;">
                                            <div style="display: flex; flex-direction: row;">
                                                <div style="  cursor: pointer;  padding: 5px;">
                                                    <img src="chat.png" class="chatbut">
                                                </div>
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <input id = "likeuserid" name = "likeuserid" type = "text" value = "${$("#userId").val()}" style = "width:0px; opacity:0;" readonly>
                                                    <button style="cursor: pointer; padding: 5px; border-style: none;
                                                    background-color: white;" name = "likebutton" type="submit">
                                                        <img src="thumb-up.png" class="thumbsupbut">
                                                    </button>
                                                    <input id = "likeid" name = "likeid" type = "text" value = "${n.id}" style = "width:0px; opacity:0;" readonly>
                                                </form>

                                                <div style="margin-right: 10px; cursor: pointer; padding: 5px;">
                                                    <img src="friends.png" class="userJoined" data-toggle="modal" data-target="#joinuser">
                                                </div>` + strconc +
                                        `</div>
                                            <div style="display: flex; flex-direction: row;">
                                                <div class="joinEventBut" id = "joinat" style="margin-right: 10px;" data-toggle="modal" data-target="#joinat2">
                                                    Join Event
                                                </div>
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <div style = "display: flex; flex-direction: row;">
                                                        <button type="submit" name="replyeventbut" style="background-color: white;
                                                        border-style: none; font-weight: bold;">Submit</button>

                                                        <div style = "display: flex; flex-direction: row;">
                                                            <input type="text" id="replyinp" name="replyinp" placeholder="comment" style="border-style: none; border-bottom-style: solid;" required>
                                                            <input type="text" id="eventidrep" name="eventidrep"style="border-style: none; border-bottom-style: solid; width:10px; opacity:0;" readonly value = ${n.id}>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div style="display: flex; flex-direction: row; margin-top: 10px;">
                                            <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                                <div>Likes: </div>
                                                <div style="margin-left: 5px;" class="likescount">${(n.userlikes).length}</div>
                                            </div>
                                            <div style="display: flex; flex-direction: row;">
                                                <div>Dislikes: </div>
                                                <div style="margin-left: 5px;" class="dislikescount">${(n.userdislikes).length}</div>
                                            </div>
                                        </div>

                                        <div class="replyboxout">
                                        </div>
                                    </div>
                                </div>`

                                    var gg = eventdiv.getElementsByClassName("userJoined");
                                    gg[0].addEventListener("click",function(e){
                                        var mod = document.querySelector(".userjoinedclass")
                                        mod.innerHTML = "";
                                        for(var loop = 0; loop<datas.length; loop++){
                                            if(n.userJoined.includes(datas[loop].id)){
                                                var cmod = document.createElement("div");
                                                cmod.innerText = datas[loop].username;
                                                mod.append(cmod);
                                            }
                                        }
                                    })
                                    var bb = eventdiv.getElementsByClassName("joinEventBut")
                                    $.ajax({
                                        url: "../data/inbox.json",
                                        method: "POST",
                                        success: function(datayy) {
                                            for (nn of datayy) {
                                                console.log(n.id)
                                                console.log($("#userId").val())
                                                if (nn.type == "event") {
                                                    if ((nn.uid == parseInt($("#userId").val()) && nn.eid == parseInt(n.id)) || ((n.userJoined).includes(parseInt($("#userId").val())))){
                                                        bb[0].style.borderColor = "red";
                                                        bb[0].style.color = "red";
                                                        bb[0].setAttribute("id", "cancelat")
                                                        bb[0].setAttribute("data-target", "#cancelat2");
                                                        console.log("YesYes")
                                                    } else {}
                                                    bb[0].addEventListener("click", function(e) {
                                                        if (bb[0].innerText == "Join Event") {

                                                            var uidd = document.querySelector("#UserId")
                                                            uidd.value = $("#userId").val();

                                                            var eventid = document.querySelector("#EventId")
                                                            eventid.value = n.id;

                                                            var uname = document.querySelector("#UserName")
                                                            uname.value = $(".holdusername").text()

                                                            var tiii = document.querySelector("#titlen")
                                                            tiii.value = n.title
                                                            console.log(n.title)
                                                        } else {

                                                        }
                                                    });
                                                }
                                            }
                                        }
                                    })

                                    var openchat = eventdiv.getElementsByClassName("chatbut")
                                    openchat[0].addEventListener("click", function(e) {
                                        var openme = eventdiv.querySelector(".replyboxout")
                                        openme.classList.toggle("replyboxin")
                                    })

                                    var deldata = eventdiv.querySelector(".deteeventpost");
                                    if (deldata != null) {
                                        deldata.addEventListener("click", function(e) {
                                            var eid = document.querySelector("#delEventId")
                                            var title = document.querySelector("#deltitle")
                                            var description = document.querySelector("#deldesc")

                                            eid.value = parseInt(eventdiv.querySelector(".eventid").innerText);
                                            title.value = eventdiv.querySelector(".titlediv").innerText
                                            description.value = eventdiv.querySelector(".bodyDiv").innerText
                                        })
                                    } else {

                                    }
                                    $.ajax({
                                        url: "../data/comments.json",
                                        method: "POST",
                                        success: function(datame) {
                                            var idme = document.querySelector("#userId").value;

                                            const filteredEventData = datame.filter(item => item.eventid === n["id"]);

                                            var replybox = eventdiv.querySelector(".replyboxout")

                                            for (var i = 0; i < filteredEventData.length; i++) {
                                                var filteredUserData = datas.filter(item => item.id === filteredEventData[i]["userid"]);
                                                console.log(filteredUserData)
                                                var divnew = document.createElement("div")
                                                divnew.setAttribute("class", "replysubcc")

                                                replybox.append(divnew);

                                                var rstrconc = ""
                                                if (filteredEventData[i]["userid"] == parseInt(idme)) {
                                                    rstrconc = `<div style="margin-top: 20px; display: flex; flex-direction: row; justify-content: space-between;">
                                                        <div style="display: flex; flex-direction: row;">
                                                            <div style="margin-right: 10px; cursor: pointer; padding: 5px; background-color: white;
                                                            border-radius: 10px;">
                                                                <img src="trash-can.png" class="deletereply" data-toggle="modal" data-target="#replydel">
                                                            </div>
                                                        </div>
                                                    </div>`
                                                } else {
                                                    rstrconc = ``;
                                                }

                                                divnew.innerHTML = `
                                                <div style="display: flex; flex-direction: row; background-color: rgb(39, 39, 39);padding: 20px 30px;
                                                border-radius: 30px; margin-top: 5px;">
                                                <div>
                                                    <div style="position: relative; height: 80px; width: 80px; 
                                                    border-radius: 3px;overflow: hidden; margin-right: -40px; z-index: 30; background-color: #BB9CC0; border-radius: 500px;
                                                border-color: rgb(255, 56, 145); border-style: solid;">
                                                        <div style="height: 40px; width: 40px; border-style: solid; border-radius: 100px; background-color: #fee4f2; 
                                                    border-width: 2px; position: absolute; top: 13px; left: 19px; border-color: #fee4f2;">
                                                        </div>
                                                        <div style="height: 80px; width: 80px; border-style: solid; border-radius: 100px; border-color: #fee4f2; 
                                                    border-width: 2px; position: absolute; bottom: -60px; left: -2px; background-color: #fee4f2">
                                                        </div>
                                                    </div>
                                                    <div class = replyUseriddiv style = "color:white; opacity:0;">${filteredEventData[i]["id"]}</div>
                                                </div>

                                                <div style="margin-left: 70px; font-family: 'Dosis', sans-serif; word-break: break-all;">
                                                    <div style="display: flex; flex-direction: row;margin-top: 10px; color: white;">
                                                        <div>By: </div>
                                                        <div class="userReplydiv" style="margin-left: 5px; text-align: justify;">${filteredUserData[0]["username"]}</div>
                                                    </div>

                                                    <div style="margin-top: 20px; padding: 20px; background-color: rgb(242, 242, 242); color: black; 
                                                    border-radius: 20px;text-align: justify;" class="userComment">
                                                        ${filteredEventData[i]["body"]}
                                                    </div>` + rstrconc + `
                                                </div>
                                                </div>`

                                                var delrep = divnew.querySelector(".deletereply")
                                                if (delrep != null) {
                                                    delrep.addEventListener("click", function(e) {
                                                        var eid = document.querySelector("#delRepId")
                                                        var description = document.querySelector("#delrepdesc")

                                                        eid.value = parseInt(divnew.querySelector(".replyUseriddiv").innerText);
                                                        description.value = divnew.querySelector(".userComment").innerText
                                                    })
                                                }
                                            }

                                            eventdiv.addEventListener("click", function(e) {
                                                var delrep = e.target.closest(".deletereply");
                                                if (delrep != null) {
                                                    var eid = document.querySelector("#delRepId");
                                                    var description = document.querySelector("#delrepdesc");

                                                    // Find the closest ancestor with the "replysubcc" class to get the relevant data
                                                    var divnew = delrep.closest(".replysubcc");

                                                    eid.value = parseInt(divnew.querySelector(".replyUseriddiv").innerText);
                                                    description.value = divnew.querySelector(".userComment").innerText;
                                                }
                                            });

                                        }
                                    })

                                }
                            })
                        })(nn);
                    }
                }
            })
        })
        $('#createeventbut').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#eventdel').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#replydel').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#joinat2').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#joinuser').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#upgrademe').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })

        $(".upgradediv").click(function(e){
            $.ajax({
                url: "../data/holdlog.json",
                method: "POST",
                success: function(data) {
                    $("#upUserId").val(data[0]["id"])
                    $("#upUserName").val(data[0]["username"])
                }
            })
        })
    </script>
</body>

</html>

<!--Attributions-->
<!--<a href="https://www.flaticon.com/free-icons/chat" title="chat icons">Chat icons created by Freepik - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/like" title="like icons">Like icons created by DinosoftLabs - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/dislike" title="dislike icons">Dislike icons created by Laisa Islam Ani - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/trash" title="trash icons">Trash icons created by Freepik - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/friend" title="friend icons">Friend icons created by Freepik - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/email" title="email icons">Email icons created by Freepik - Flaticon</a>-->
<!--<a href="https://www.flaticon.com/free-icons/upgrade" title="upgrade icons">Upgrade icons created by Freepik - Flaticon</a>-->