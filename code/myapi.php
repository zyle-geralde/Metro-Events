<?php
function LogInUser()
{
    if (isset($_POST["logbut"])) {
        $logme = json_decode(file_get_contents("../data/users.json"));
        foreach ($logme as $nn) {
            if ($nn->email == $_POST["emaillog"] && $nn->password == $_POST["passwordlog"]) {
                $hold = json_decode(file_get_contents("../data/holdlog.json"));
                $hold[0] = $nn;

                $holddata = json_encode($hold,JSON_PRETTY_PRINT);
                file_put_contents('../data/holdlog.json',$holddata);

                if($nn->type == "user"){
                    echo "<script>window.location.href = '../code/UserPage.php'</script>";
                }
                else if($nn->type == "organizer"){
                    echo "<script>window.location.href = '../code/OrganizerPage.php'</script>";
                }
                else{
                    echo "<script>window.location.href = '../code/Adminpage.php'</script>";
                }
                return;
            }
        }
        echo "<script>
        $(document).ready(function(){
            $('.invaliddiv').css({'opacity':'1'})
        })
        </script>";
        return;
    }
}

function singupuser(){
    if(isset($_POST["signupsubmit"])){
        $users = json_decode(file_get_contents("../data/users.json"));

        $newdata = array(
            "id" => $users[count($users)-1]->id+1,
            "firstname" => $_POST['fname'],
            "lastname" =>$_POST['lname'],
            "username"=> $_POST['usename'],
            "email"=> $_POST['email'],
            "password"=>$_POST['pword'],
            "type"=>"user",
        );

        $indic = 0;
        foreach($users as $use){
            if($use->email == $newdata['email']){
                $indic = 1;
                break;
            }
        }
        if($indic == 0){
            echo "<script>$('.success').css({'animation-name':'dropmesucc'})</script>";
            $users[] = $newdata;
            $passdata = json_encode($users,JSON_PRETTY_PRINT);
            file_put_contents('../data/users.json',$passdata);
        }
        else{
            echo "<script>$('.fail').css({'animation-name':'dropmesucc'})</script>";
        }

    }
}

function createEvent(){
    $AllEvents = json_decode(file_get_contents("../data/events.json"));
    if(isset($_POST["createeventsub"])){
        $eventarr = array(
            "id" => $AllEvents[count($AllEvents)-1]->id+1,
            "userid"=>(int)$_POST['userId'],
            "title"=>$_POST['title'],
            "typeOfActivity"=>$_POST['typeofAct'],
            "description"=>$_POST['desc'],
            "date"=>$_POST['dateInput'],
            "userJoined"=>array(),
            "userlikes"=>array(),
            "userdislikes"=>array()
        );
        $AllEvents[] = $eventarr;

        $passdata = json_encode($AllEvents,JSON_PRETTY_PRINT);
        file_put_contents('../data/events.json',$passdata);
    }
}

function replyEvent(){
    $AllReply = json_decode(file_get_contents("../data/comments.json"));
    $UserLog = json_decode(file_get_contents("../data/holdlog.json"));
    if(isset($_POST["replyeventbut"])){
        $replyarr = array(
            "id"=>$AllReply[count($AllReply)-1]->id+1,
            "userid" =>$UserLog[0]->id,
            "eventid"=>(int)$_POST['eventidrep'],
            "body"=>$_POST['replyinp']
        );
        $AllReply[] = $replyarr;

        $passdata = json_encode($AllReply,JSON_PRETTY_PRINT);
        file_put_contents('../data/comments.json',$passdata);
    }
}
function deleteEvent(){
    $AllEvents = json_decode(file_get_contents("../data/events.json"));
    $AllReply = json_decode(file_get_contents("../data/comments.json"));
    if(isset($_POST["deleteeventsub"])){
        function filterById($element) {
            return $element->id != (int)$_POST["delEventId"];
        }
        
        $result = array_filter($AllEvents, 'filterById');

        $AllEvents = $result;

        function filterReply($elem){
            return $elem->eventid != (int)$_POST["delEventId"];
        }

        $res = array_filter($AllReply, 'filterReply');

        $AllReply = $res;

        $passdata = json_encode(array_values($AllEvents),JSON_PRETTY_PRINT);
        file_put_contents('../data/events.json',$passdata);

        $passdata2 = json_encode(array_values($AllReply),JSON_PRETTY_PRINT);
        file_put_contents('../data/comments.json',$passdata2);
    }
}

function deleteReply(){
    $AllReply = json_decode(file_get_contents("../data/comments.json"));
    if(isset($_POST["deleterepsub"])){
        function filterdelReply($elem){
            return $elem->id != (int)$_POST["delRepId"];
        }

        $res = array_filter($AllReply, 'filterdelReply');

        $AllReply = $res;

        $passdata2 = json_encode(array_values($AllReply),JSON_PRETTY_PRINT);
        file_put_contents('../data/comments.json',$passdata2);
    }
}
function likeEvent() {
    $AllEvents = json_decode(file_get_contents("../data/events.json"));

    if (isset($_POST["likebutton"])) {
        $eveindx = -1;
        for($loop = 0; $loop<count($AllEvents); $loop++){
            if((int)$AllEvents[$loop]->id == (int)$_POST["likeid"]){
                $eveindx = $loop; 
            }
        }
        $arr = $AllEvents[$eveindx]->userlikes;

        $indexss = 0;
        $indic = 0;
        for($ind = 0; $ind<count($arr); $ind++){
            if((int)$arr[$ind] == (int)$_POST["likeuserid"]){
                $indic = 1;
                $indexss = $ind;
                break;
            }
        }

        if($indic != 0){
            array_splice($arr, $indexss, 1);
        }
        else{
            $arr[] = (int)$_POST["likeuserid"];
        }
        $AllEvents[$eveindx]->userlikes = $arr;

        $passdata = json_encode($AllEvents,JSON_PRETTY_PRINT);
        file_put_contents('../data/events.json',$passdata);
    }
}
function joinrequest(){
    $Allinbox = json_decode(file_get_contents("../data/inbox.json"));

    if(isset($_POST["JoinEnter"])){
        $eventarr = array(
            "type"=>"event",
            "id" => $Allinbox[count($Allinbox)-1]->id+1,
            "uid"=>(int)$_POST["UserId"],
            "eid"=>(int)$_POST["EventId"],
            "username"=>$_POST["UserName"],
            "title"=>$_POST["titlen"],
            "desc"=>$_POST["descmm"]
        );
        $Allinbox[] = $eventarr;

        $passdata = json_encode($Allinbox,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata);

        $Allinbox = json_decode(file_get_contents("../data/inbox.json"));

        $hold = json_decode(file_get_contents("../data/holdlog.json"));

        $messagearr = array(
            "type"=>"message",
            "userid"=>(int)$hold[0]->id,
            "id"=>$Allinbox[count($Allinbox)-1]->id+1,
            "body"=>"Your request to join ".$_POST["titlen"]." has been sent"
        );
        $Allinbox[] = $messagearr;

        $passdata = json_encode($Allinbox,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata);

    }
}

function showallinbox(){
    $Allinbox = json_decode(file_get_contents("../data/inbox.json"));
    $AllEvents = json_decode(file_get_contents("../data/events.json"));

    function filterEvent($element) {
        $user = json_decode(file_get_contents("../data/holdlog.json"));
        return $element->userid == $user[0]->id;
    }
    
    $result = array_filter($AllEvents, 'filterEvent');

    $AllEvents = array_values($result);

    $storeEventsId = array();

    foreach($AllEvents as $al){
        $storeEventsId[] = $al->id;
    }

    if(count($storeEventsId) != 0){
        $strme = '';
        foreach($Allinbox as $ai){
            $strme = 'var inb = document.createElement("div")
            inb.setAttribute("class", "inboxcont")

            var appendhere = document.querySelector(".eventContainer")
            appendhere.append(inb);';

            if($ai->type == "event"){
                if(in_array($ai->eid, $storeEventsId)){
                    $strme.='inb.innerHTML = `<div style="background-color:#BB9CC0 ; padding: 30px; border-radius: 40px; margin-bottom: 20px;">
                    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
                        <div style="display: flex; flex-direction: column;">
                            <label for="InboxId" style="color: black;">InboxID: </label>
                            <input type="text" id="InboxId" name="InboxId" required readonly style="margin-bottom: 20px;" value = "${'.$ai->id.'}">

                                <label for="UserId" style="color: black;">UserID: </label>
                                <input type="text" id="UserId" name="UserId" required readonly style="margin-bottom: 20px;" value = "'.$ai->uid.'">

                                    <label for="EventId" style="color: black;">EventID: </label>
                                    <input type="text" id="EventId" name="EventId" required readonly style="margin-bottom: 20px;" value = "'.$ai->eid.'">

                                        <label for="UserName" style="color: black;">UserName: </label>
                                        <input type="text" id="UserName" name="UserName" required readonly style="margin-bottom: 20px;" value = "'.$ai->username.'">

                                            <label for="title" style="color: black;">Title of the Event you want to Join: </label>
                                            <input type="text" id="title" placeholder="ex. Hiking for a cause" name="title" required readonly  value = "'.$ai->title.'">

                                                <label for="desc" style="color: black; margin-top: 20px;">Why you want to join: </label>
                                                <textarea id="desc" name="desc" placeholder="..." style="height: 125px;" required readonly >'.$ai->desc.'</textarea>

                                            </div>
                                            <div class="modal-footer" style="margin-top: 20px; display: flex; flex-direction: row;">
                                                <button type="submit" name="Acceptbut" class="btn btn-primary" style="margin-right: 20px;">Accept</button>
                                                <button type="submit" name="Declinebut" class="btn btn-primary">Decline</button>
                                            </div>
                                        </form>
                                    </div>`;';

                                    echo '<script>'.$strme.'</script>';
                }
            }
            else if($ai->type == "message"){
                $user = json_decode(file_get_contents("../data/holdlog.json"));
                if($ai->userid == $user[0]->id){
                    $strme.='inb.innerHTML = `<div style="background-color:#BB9CC0 ; padding: 30px; border-radius: 40px; margin-bottom: 20px; word-break: break-all;">
                    <div style="background-color: white; padding: 10px;">
                    '.$ai->body.'
                    </div>
                </div>`';
                echo '<script>'.$strme.'</script>';
                }
            }
            else if($ai->type == "up"){

            }
        }    
    }

}

function acceptUser(){
    $AllEvents = json_decode(file_get_contents("../data/events.json"));
    if(isset($_POST["Acceptbut"])){
        foreach($AllEvents as $al){
            if($al->id == (int)$_POST["EventId"]){
                $al->userJoined[] = (int)$_POST["UserId"];
            }
        }

        $passdata = json_encode(array_values(($AllEvents)),JSON_PRETTY_PRINT);
        file_put_contents('../data/events.json',$passdata);

        $userme = json_decode(file_get_contents("../data/inbox.json"));

        function fltrr($ee) {
            return $ee->id != (int)$_POST["InboxId"];
        }
        
        $resultsss = array_filter($userme, 'fltrr');
    
        $userme = array_values($resultsss);
    

        $passdata2 = json_encode(array_values(($userme)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata2);

        $labelpaste = json_decode(file_get_contents("../data/inbox.json"));
        $nnarr = array(
            "type"=>"message",
            "userid"=>(int)$_POST["UserId"],
            "id"=>$labelpaste[count($labelpaste)-1]->id+1,
            "body"=>"Your request to join ".$_POST["title"]." has been accepted"
        );

        $labelpaste[] = $nnarr;

        $passdata3 = json_encode(array_values(($labelpaste)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata3);

    }
}


function RefuseUser(){
    if(isset($_POST["Declinebut"])){
        $userme = json_decode(file_get_contents("../data/inbox.json"));

        function fltreer($ee) {
            return $ee->id != (int)$_POST["InboxId"];
        }
        
        $resultsss = array_filter($userme, 'fltreer');
    
        $userme = array_values($resultsss);
    

        $passdata2 = json_encode(array_values(($userme)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata2);

        $labelpaste = json_decode(file_get_contents("../data/inbox.json"));
        $nnarr = array(
            "type"=>"message",
            "userid"=>(int)$_POST["UserId"],
            "id"=>$labelpaste[count($labelpaste)-1]->id+1,
            "body"=>"Your request to join ".$_POST["title"]." has been declined."
        );

        $labelpaste[] = $nnarr;

        $passdata3 = json_encode(array_values(($labelpaste)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata3);

    }
}
function upgradeUserNow(){
    if(isset($_POST["upgradebutMe"])){
        $Allinboxme = json_decode(file_get_contents("../data/inbox.json"));

        $newarrme = array(
            "type"=>"up",
            "id"=>$Allinboxme[count($Allinboxme)-1]->id+1,
            "uid"=>(int)$_POST["upUserId"],
            "username"=>$_POST["upUserName"],
            "upgrade"=>$_POST["upUserUpgrade"],
            "desc"=>$_POST["updescmm"]
        );

        $Allinboxme[] = $newarrme;

        $passdata3 = json_encode($Allinboxme,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata3);

        $messageme = json_decode(file_get_contents("../data/inbox.json"));

        $newarrme22 = array(
            "type"=>"message",
            "userid"=>(int)$_POST["upUserId"],
            "id"=>$messageme[count($messageme)-1]->id+1,
            "body"=>"Your request to be upgraded has been sent"
        );

        $messageme[] = $newarrme22;

        $passdata55 = json_encode($messageme,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata55);

    }
}
function shoadminBox(){
    $Allinboxme = json_decode(file_get_contents("../data/inbox.json"));

    $strmm = 'var inb = document.createElement("div")
    inb.setAttribute("class", "inboxcont")

    var appendhere = document.querySelector(".eventContainer")
    appendhere.append(inb);';
    foreach($Allinboxme as $ll){
        if($ll->type == "up" && $ll->uid > 0){
            $strmm.='inb.innerHTML = `<div style="background-color:#BB9CC0 ; padding: 30px; border-radius: 40px; margin-bottom: 20px;">
            <form method="post" action="'.$_SERVER['PHP_SELF'].'">
                <div style="display: flex; flex-direction: column;">
                    <label for="upInboxId" style="color: black;">InboxID: </label>
                    <input type="text" id="upInboxId" name="upInboxId" required readonly style="margin-bottom: 20px;" value = "${'.$ll->id.'}">

                        <label for="uppUserId" style="color: black;">UserID: </label>
                        <input type="text" id="uppUserId" name="uppUserId" required readonly style="margin-bottom: 20px;" value = "'.$ll->uid.'">

                                <label for="uppUserName" style="color: black;">UserName: </label>
                                <input type="text" id="uppUserName" name="uppUserName" required readonly style="margin-bottom: 20px;" value = "'.$ll->username.'">

                                <label for="uppUpgrade" style="color: black;">Upgrade: </label>
                                <input type="text" id="uppUpgrade" name="uppUpgrade" required readonly style="margin-bottom: 20px;" value = "'.$ll->upgrade.'">

                                        <label for="uppdesc" style="color: black; margin-top: 20px;">Why you want to join: </label>
                                        <textarea id="uppdesc" name="uppdesc" placeholder="..." style="height: 125px;" required readonly >'.$ll->desc.'</textarea>

                                    </div>
                                    <div class="modal-footer" style="margin-top: 20px; display: flex; flex-direction: row;">
                                        <button type="submit" name="uppAcceptbut" class="btn btn-primary" style="margin-right: 20px;">Accept</button>
                                        <button type="submit" name="uppDeclinebut" class="btn btn-primary">Decline</button>
                                    </div>
                                </form>
                            </div>`;';

                            echo '<script>'.$strmm.'</script>';
        }
    }
}

function AcceptUpgrade(){
    if(isset($_POST["uppAcceptbut"])){
        $Allinuser= json_decode(file_get_contents("../data/users.json"));

        foreach($Allinuser as $asl){
            if($asl->id == (int)$_POST["uppUserId"]){
                if($_POST["uppUpgrade"] == "organizer"){
                    $asl->type = "organizer";
                }
                else if($_POST["uppUpgrade"] == "admin"){
                    $asl->type = "admin";
                }
                else{

                }
            }
        }

        $passdata4 = json_encode($Allinuser,JSON_PRETTY_PRINT);
        file_put_contents('../data/users.json',$passdata4);

        $messageme = json_decode(file_get_contents("../data/inbox.json"));

        $newarrme22 = array(
            "type"=>"message",
            "userid"=>(int)$_POST["uppUserId"],
            "id"=>$messageme[count($messageme)-1]->id+1,
            "body"=>"Your request to be upgraded has been accepted"
        );

        $messageme[] = $newarrme22;

        $passdata55 = json_encode($messageme,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata55);


        $userme = json_decode(file_get_contents("../data/inbox.json"));

        function fltrr($ee) {
            return $ee->id != (int)$_POST["upInboxId"];
        }
        
        $resultsss = array_filter($userme, 'fltrr');
    
        $userme = array_values($resultsss);
    

        $passdata2 = json_encode(array_values(($userme)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata2);
    }
}

function CancelUpgrade(){
    if(isset($_POST["uppDeclinebut"])){

        $messageme = json_decode(file_get_contents("../data/inbox.json"));

        $newarrme22 = array(
            "type"=>"message",
            "userid"=>(int)$_POST["uppUserId"],
            "id"=>$messageme[count($messageme)-1]->id+1,
            "body"=>"Your request to be upgraded has been declined"
        );

        $messageme[] = $newarrme22;

        $passdata55 = json_encode($messageme,JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata55);


        $userme = json_decode(file_get_contents("../data/inbox.json"));

        function fltrr($ee) {
            return $ee->id != (int)$_POST["upInboxId"];
        }
        
        $resultsss = array_filter($userme, 'fltrr');
    
        $userme = array_values($resultsss);
    

        $passdata2 = json_encode(array_values(($userme)),JSON_PRETTY_PRINT);
        file_put_contents('../data/inbox.json',$passdata2);
    }
}
?>