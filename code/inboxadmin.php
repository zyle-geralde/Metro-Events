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

        .inboxdiv {
            height: 20px;
            width: 20px;
            cursor: pointer;
            pointer-events: all;
            transition: 0.2s;
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
                <div class="holdtype">#User</div>
            </div>
        </div>

        <div style="display: flex; flex-direction: row; color: #FED9ED; font-size: 18px;">
            <div style="margin-right: 2px; height: 149px; display: flex; flex-direction: row;
                align-items: center; justify-content: center; width: 150px; pointer-events: all; cursor: pointer;"
                class="alleve">
                <a href="Adminpage.php" style="text-decoration: none; color:#BB9CC0;">All Events</a>
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
            <div style="margin-right: 30px; background-color: white; padding: 5px 7px; border-radius: 100px;">
                <a href="inboxadmin.php">
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

    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 50px; margin-bottom: 50px;"
        class="eventcontrol">
        <div style="margin-bottom: 30px; color: white; background-color: #67729D; border-style: solid;
            padding: 10px 40px; border-radius: 100px; border-color: #67729D; pointer-events: none;">
            Inbox
        </div>
        <div class="eventContainer" style="width: 900px;">
        </div>
    </div>


    <?php
        include("../code/myapi.php");
        showallinbox();
        shoadminBox();
        acceptUser();
        RefuseUser();
        AcceptUpgrade();
        CancelUpgrade();
    ?>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "../data/holdlog.json",
                method: "POST",
                success: function (data) {
                    $(".holdusername").text(data[0]["username"])
                    $(".holdtype").text(data[0]["type"])
                    $("#userId").val(data[0]["id"])
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