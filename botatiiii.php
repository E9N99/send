<?php

$token = "6243993552:AAF2KXc1toaLD8fX0SrbsquQss6n4waVpwE";// توكنك 

define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendsticker($chat_id, $photo, $captionl){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption,
 ]);
 }

 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
	
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
 //====================the file by mounir======================//
$bot_ = "smsmhmsbot"; // add your bot username 
$sudo = 916165019; // add your id
$Df = 916165019;
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$textid = $message->text->id;
$text = $message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
  
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$del_gp_photo = $update->message->delete_chat_photo;
$new_member = $update->message->new_chat_member;
$left = $update->message->left_chat_member;
$contact = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;
$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;
$type = $update->message->chat->type;

$number = str_word_count($text);
$numper = strlen($text);

$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$gplang1 = file_get_contents("data/$chat_id/lang.txt");
$gplink = file_get_contents("data/$chat_id/gplink.txt");
$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");
$photo1 = file_get_contents("data/$chat_id/photo.txt");
$sticker1 = file_get_contents("data/$chat_id/sticker.txt");
$pin1 = file_get_contents("data/$chat_id/pin.txt");
$contact1 = file_get_contents("data/$chat_id/contact.txt");
$doc1 = file_get_contents("data/$chat_id/doc.txt");
$game1 = file_get_contents("data/$chat_id/game.txt");
$fwd1 = file_get_contents("data/$chat_id/fwd.txt");
$voice1 = file_get_contents("data/$chat_id/voice.txt");
$link1 = file_get_contents("data/$chat_id/link.txt");
$audio1 = file_get_contents("data/$chat_id/audio.txt");
$video1 = file_get_contents("data/$chat_id/video.txt");
$text1 = file_get_contents("data/$chat_id/text.txt");
$tag1 = file_get_contents("data/$chat_id/tag.txt");
$edit1 = file_get_contents("data/$chat_id/edit.txt");
$edit123 = file_get_contents("data/$chat_edit_id/edit.txt");
$lang1 = file_get_contents("data/$chat_id/lang.txt");
$location1 = file_get_contents("data/$chat_id/location.txt");
$long_list1 = file_get_contents("data/$chat_id/long_list.txt");
$menglish1 = file_get_contents("data/$chat_id/menglish.txt");
$marabi1 = file_get_contents("data/$chat_id/marabi.txt");
$mpersian1 = file_get_contents("data/$chat_id/mpersian.txt");
$gif1 = file_get_contents("data/$chat_id/gif.txt");
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");

$gplang12 = file_get_contents("data/$cllchatid/lang.txt");
$photo12 = file_get_contents("data/$cllchatid/photo.txt");
$sticker12 = file_get_contents("data/$cllchatid/sticker.txt");
$pin12 = file_get_contents("data/$cllchatid/pin.txt");
$doc12 = file_get_contents("data/$cllchatid/doc.txt");
$game12 = file_get_contents("data/$cllchatid/game.txt");
$fwd12 = file_get_contents("data/$cllchatid/fwd.txt");
$voice12 = file_get_contents("data/$cllchatid/voice.txt");
$contact12 = file_get_contents("data/$cllchatid/contact.txt");
$location12 = file_get_contents("data/$cllchatid/location.txt");
$long_list12 = file_get_contents("data/$cllchatid/long_list.txt");
$link12 = file_get_contents("data/$cllchatid/link.txt");
$audio12 = file_get_contents("data/$cllchatid/audio.txt");
$video12 = file_get_contents("data/$cllchatid/video.txt");
$text12 = file_get_contents("data/$cllchatid/text.txt");
$tag12 = file_get_contents("data/$cllchatid/tag.txt");
$edit12 = file_get_contents("data/$cllchatid/edit.txt");
$lang12 = file_get_contents("data/$cllchatid/lang.txt");
$menglish12 = file_get_contents("data/$cllchatid/menglish.txt");
$marabi12 = file_get_contents("data/$cllchatid/marabi.txt");
$mpersian12 = file_get_contents("data/$cllchatid/mpersian.txt");
$gif12 = file_get_contents("data/$cllchatid/gif.txt");
$silent = file_get_contents("data/$chat_id/silent.txt");
$super_silent = explode("\n", $silent);

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_1 = file_get_contents("data/$chat_id/warn/$from_id.txt");
$warn_ = file_get_contents("data/$cllchatid/warn/warn.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");


$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];

$get_ = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cllchatid&user_id=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];
include "arabi.php";
include "persian.php";
include "english.php";


#-----------(carlos)-----------#
mkdir("data");
$name_tag = "[$name](tg://user?id=$from_id)";
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$status = $statjson["result"]["status"];
#-----------(carlos)-----------#
$update = json_decode(file_get_contents("php://input"));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$mmur = file_get_contents("murt.txt");
$mmurt = file_get_contents("channel.txt");
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
#-----------(carlos)-----------#
$carlos = json_decode(file_get_contents("data/carlos.json"),true);
$xmax = json_decode(file_get_contents("data/bot.json"),true);
$chat = json_decode(file_get_contents("data/chat.json"),true);
$sttings = json_decode(file_get_contents("data/media.json"),true);
$meca = json_decode(file_get_contents("data/members.json"),true);
$em = json_decode(file_get_contents("data/em.json"),true);
$iinfo = json_decode(file_get_contents("$web"),true);
if($carlos["gch"] == null){
$carlos["gch"] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos["d6"] == null){
$carlos["d6"] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos["bot"] == null){
$carlos["bot"] = "✅";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos["d7"] == null){
$carlos["d7"] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($iinfo['namezar'] == null){
$namezar = "𝗦𝘂𝗿𝘀 𝗠𝗜𝗦𝗠𝗜𝗦父";
}elseif($iinfo['namezar'] != null){
$namezar = $iinfo['namezar'];
}
if($iinfo['urlzar'] == null){
$urlzar = "https://t.me/botatiiii";
}elseif($iinfo['urlzar'] != null){
$urlzar = $iinfo['urlzar'];
}
$xch = $carlos["ch"];
$xcch = $carlos["cch"];
$cleaner = $xmax["cleaner"][$chat_id];
#-----------(carlos)-----------#
$members = $meca["members"];
$groups = $meca["group"];
$id_admin = $carlos["admin"];
$md3 = count($meca["members"]);
$md5 = count($meca["group"]);
$countall = $md5 + $md3;
$md4 = count($meca["banbots"]) - 1;
if($tc == "private" and !in_array($from_id,$members)){
$meca["members"][] = $from_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
$addgroup = bot("getchatmemberscount",["chat_id"=>$chat_id])->result;
$namegroup = $update->message->chat->title;
if($text and !in_array($chat_id,$groups)){
if($tc != "private"){
bot("sendmessage",[
"chat_id"=>$Df,
"text"=>"
*‹ : تم تفعيل مجموعه جديده *
*‹ : من قام بتفعيلها :* $name 
*‹ : معلومات المجموعه :*
*‹ : الاسم :* $namegroup
*‹ : عدد الاعضاء :* $addgroup
*‹ : جميع الاحصائيات :* $countall
",
"parse_mode"=>"Markdown",
]);
$meca["group"][] = $chat_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
}
$idleft = $update->message->left_chat_member->id;
$idbot = bot("getme",["d"])->result->id;
if($update->message->left_chat_member and $idleft==$idbot){
bot("sendMessage",[
"chat_id"=>$Df,
"text"=>"*‹ :  تم طرد البوت من مجموعه جديده *
*‹ :  اسم المجموعه :* $namegroup
*‹ :  ايدي المجموعه :* $chat_id
*‹ :  تم مسح جميع البيانات المتعلقه بالمجموعه*",
"parse_mode"=>"MarkDown",
]);
$key = array_search($chat_id,$meca["group"]);
unset($meca["group"][$key]);
$meca["group"] = array_values($meca["group"]); 
$meca = json_encode($meca,true);
file_put_contents("data/members.json",$meca);
}
$dd = date("D");
$em1 = count($em[$dd]);
$em2 = $em[$dd];
if($message and !in_array($from_id, $em2)){ 
$em[$dd][] = $from_id;
file_put_contents("data/em.json",json_encode($em,32|128|265));
}
if(!$carlos["sudo"]){
$iidsod = $Df;
}elseif($carlos["sudo"]){
$iidsod = $carlos["sudo"];
}
$admin = $iidsod;
#-----------(carlos)-----------#
$tag_name = "[$name](tg://user?id=$from_id)";
if($carlos["start"] == null){
$start = "**";
}elseif($carlos["start"] != null){
$start = $carlos["start"];
}
$XQ_3X = [
"start"=>$start,
"admin"=>"*• اهلا بك في لوحه الأدمن الخاصه بالبوت*\n-* يمكنك التحكم في البوت الخاص بك من هنا*\n⎯ ⎯ ⎯ ⎯",
"off"=>"⚙- *عذرأ عزيزي حاليأ البوت معطل لتحديثات جديدة*",
"ban"=>"⚠️- *عذرأ عزيزي لقد قام المطور بحظرك من هاذ البوت*",
"sand"=>"- عدد المستخدمين الكلي : $countall\n- عدد الخاص : $md3\n- عدد القنوات و الكروبات : $md5\n- عدد التفاعل اليومي : $em1\n- عدد المحظورين : $md4\n⎯ ⎯ ⎯ ⎯",
"sand1"=>"".$klisaamr."*أرسل رسالتك وسيتم إرسالها لـ $md3 من الاعضاء .*",
"sand2"=>"".$klisaamr."*تم ارسأل رسالتك لـ $md3 من الاعضاء .*",
"sand3"=>"".$klisaamr."*ارسأل رسالتك وسيتم ارسالها لـ $md5 من الكروبات .*",
"sand4"=>"".$klisaamr."*تم ارسأل رسالتك لـ $md5 من الكروبات .*",
"sand5"=>"".$klisaamr."*ارسأل رسالتك وسيتم ارسالها لـ $countall من الاعضاء و الكروبات .*",
"sand6"=>"".$klisaamr."*تم ارسأل رسالتك لـ $countall من الاعضاء و الكروبات .*",
"sand7"=>"".$klisaamr."*ارسأل رسالتك وسيتم توجيه لـ $countall من الاعضاء و الكروبات .*",
"sand8"=>"".$klisaamr."*تم توجيه رسالتك لـ $countall من الاعضاء و الكروبات .*",
"sand9"=>"".$klisaamr."*أرسل رسالتك وسيتم توجيه لـ $md3 من الاعضاء .*",
"sand10"=>"".$klisaamr."*تم توجيه رسالتك لـ $md3 من الاعضاء .*",
"sand11"=>"".$klisaamr."*ارسأل رسالتك وسيتم توجيه لـ $md5 من الكروبات .*",
"sand12"=>"".$klisaamr."*تم توجيه رسالتك لـ $md5 من الكروبات .*"
];
#-----------(carlos)-----------#
if($message and $carlos["bot"] == "❎" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["off"]
,"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
]);
exit();
}
if($message and $text != "/start" and $from_id != $admin and $carlos["d7"] == "✅" and !$data and !in_array($from_id,$carlos["ban"])){
bot("forwardMessage",[
"chat_id"=>$admin,
"from_chat_id"=>$chat_id,
 "message_id"=>$update->message->message_id,
"text"=>$text,
]);
}
if($user == null){
$user = "None";
}elseif($user != null){
$user = "[@$user]";
}
if($text == "/start" and $from_id != $admin and $carlos["d6"] == "✅" and !in_array($from_id,$members) and !in_array($from_id,$carlos["ban"])){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
تم دخول عضو جديد الى البوت :
الاسم : [$name]
المعرف : $user
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
عدد المستخدمين : $md3
",
"parse_mode"=>"Markdown",
]);
}
#-----------(carlos)-----------#
$tokenmas = $info['tokenmas'];
$idchb = $iinfo['dchb'];
$iidchb = file_get_contents("https://api.telegram.org/bot$tokenmas/getChatMember?chat_id=".$idchb."&user_id=".$from_id);
if($message && (strpos($iidchb,'"status":"left"') or strpos($iidchb,'"Bad Request: USER_ID_INVALID"') or strpos($iidchb,'"status":"kicked"'))!== false){
if($tc == "private"){
$a = str_replace("@","",$iinfo['dchb']);
$get = file_get_contents("http://api.telegram.org/bot$tokenmas/getChat?chat_id=".$idchb); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*‹ : عزيزي عليك الاشتراك في قناة .*
*‹ : ليمكنك استخدام البوت دون اي مشكلة .*
‹ : [$namech](t.me/$a)
*‹ : بعد الاشتراك اضغط :* /start"
,'reply_to_message_id'=>$message->message_id,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$namech,'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
$ichb = $iinfo['chb'];
$iichb = file_get_contents("https://api.telegram.org/bot$tokenmas/getChatMember?chat_id=".$ichb."&user_id=".$from_id);
if($message && (strpos($iichb,'"status":"left"') or strpos($iichb,'"Bad Request: USER_ID_INVALID"') or strpos($iichb,'"status":"kicked"'))!== false){
if($tc == "private"){
$a = str_replace("@","",$iinfo['chb']);
$get = file_get_contents("http://api.telegram.org/bot$tokenmas/getChat?chat_id=".$ichb); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*‹ : عزيزي عليك الاشتراك في قناة .*
*‹ : ليمكنك استخدام البوت دون اي مشكلة .*
‹ : [$namech](t.me/$a)
*‹ : بعد الاشتراك اضغط :* /start"
,'reply_to_message_id'=>$message->message_id,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$namech,'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
#-----------(carlos)-----------#
$ch11 = $carlos['ch1'];
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch11."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
if($tc == "private"){
$a = str_replace("@","",$carlos['ch1']);
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1']); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️- عذراً عزيزي 
⚙- يجب عليك الاشتراك في قنوات البوت أولا
📮- اشترك ثم ارسل /start ⬇️
[$namech](t.me/$a)
— — — — — — — — —"
,'reply_to_message_id'=>$message->message_id,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
$ch22 = $carlos['ch2'];
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch22."&user_id=".$from_id);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2']); 
$js = json_decode($get); 
$res = $js->result;
$a = str_replace("@","",$carlos['ch2']);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$a)
 — — — — — — — — —"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
$ch111 = $carlos['ch1p'];
$ch222 = $carlos['ch2p'];
$chp = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch111."&user_id=".$from_id);
$ch2p = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch222."&user_id=".$from_id);
if($message && (strpos($chp,'"status":"left"') or strpos($chp,'"status":"kicked"') or strpos($chp,'"Bad Request: USER_ID_INVALID"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1p']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch1pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
",
'parse_mode'=>"MarkDown",
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch1pp']]]]
])
]);return false;
}
}
if($message && (strpos($ch2p,'"status":"kicked"') or strpos($ch2p,'"status":"left"') or strpos($ch2p,'"Bad Request: USER_ID_INVALID"') or strpos($ch2p,'"status":"kicked"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2p']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch2pp'];
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech](t.me/$chi)
 — — — — — — — — —
"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch2pp']]]]
])
]);return false;
}
}
#-----------(carlos)-----------#
if ($message && in_array($from_id,$carlos["ban"])){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["ban"],
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
]);
exit();
}
#-----------(carlos)-----------#
$ban_id = $message->reply_to_message->forward_from->id;
if($ban_id && $text == "حظر"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم حـظـرهه بـنـجاح",
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
]);
$carlos["ban"][] = "$ban_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if ($ban_id && $text == "الغاء حظر"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم الـغـاء حـظـرهه بـنـجاح
",
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
]);
$key = array_search($ban_id,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
file_put_contents("data/carlos.json",$carlos);
}
}
#-----------(carlos)-----------#
$n = count($json["nas"]);
#-----------(carlos)-----------#
$ahs = "الاحصائيات";
$cahadd = "الاشتراك";
$staadd = "رساله الترحيب (start)";
$admadd = "قسم الادمنية";
$naadd = "الاذاعة";
$nsadd = "قسم النسخة";
$banamradd = "قسم المحظورين";
#-----------(carlos)-----------#
$d6 = $carlos["d6"];
$d7 = $carlos["d7"];
$bot2 = $carlos["bot"];
#-----------(carlos)-----------#
if($text == "/start"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
	$d6 = $carlos["d6"];
$d7 = $carlos["d7"];
$bot2 = $carlos["bot"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["admin"],
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"البوت ".$bot2."" ,"callback_data"=>"bot3"],["text"=>"التوجية ".$d7."" ,"callback_data"=>"d7"],["text"=>"الاشعارات ".$d6."" ,"callback_data"=>"d6"]],
[["text"=>$staadd,"callback_data"=>"m♡s"]],
[["text"=>$nsadd,"callback_data"=>"Open"],["text"=>"نقل الملكية","callback_data"=>"AddAdmin"]],
[["text"=>$naadd,"callback_data"=>"1♡0"],["text"=>$ahs,"callback_data"=>"1"],["text"=>$cahadd,"callback_data"=>"All Ch"]],
[["text"=>$banamradd,"callback_data"=>"lastban"],["text"=>$admadd,"callback_data"=>"5"]],
]])
]);
}
}
#-----------(carlos)-----------#
if($data == "ba♡ck"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["admin"],
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"البوت ".$bot2."" ,"callback_data"=>"bot3"],["text"=>"التوجية ".$d7."" ,"callback_data"=>"d7"],["text"=>"الاشعارات ".$d6."" ,"callback_data"=>"d6"]],
[["text"=>$staadd,"callback_data"=>"m♡s"]],
[["text"=>$nsadd,"callback_data"=>"Open"],["text"=>"نقل الملكية","callback_data"=>"AddAdmin"]],
[["text"=>$naadd,"callback_data"=>"1♡0"],["text"=>$ahs,"callback_data"=>"1"],["text"=>$cahadd,"callback_data"=>"All Ch"]],
[["text"=>$banamradd,"callback_data"=>"lastban"],["text"=>$admadd,"callback_data"=>"5"]],
]])
]);
$carlos["addfiles"] = "off";
$carlos["Openstengs"] = "off";
$carlos["ok"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "d6" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos["d6"]!="✅"){
$dp = "✅";
}else{
$dp ="❎";
}
$carlos["d6"] = $dp;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos["d6"];
$d7 = $carlos["d7"];
$bot2 = $carlos["bot"];
bot("editMessageReplyMarkup",[
"chat_id"=>$update->callback_query->message->chat->id,
"message_id"=>$update->callback_query->message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"البوت ".$bot2."" ,"callback_data"=>"bot3"],["text"=>"التوجية ".$d7."" ,"callback_data"=>"d7"],["text"=>"الاشعارات ".$d6."" ,"callback_data"=>"d6"]],
[["text"=>$staadd,"callback_data"=>"m♡s"]],
[["text"=>$nsadd,"callback_data"=>"Open"],["text"=>"نقل الملكية","callback_data"=>"AddAdmin"]],
[["text"=>$naadd,"callback_data"=>"1♡0"],["text"=>$ahs,"callback_data"=>"1"],["text"=>$cahadd,"callback_data"=>"All Ch"]],
[["text"=>$banamradd,"callback_data"=>"lastban"],["text"=>$admadd,"callback_data"=>"5"]],
]])
]);
}
}
if($data == "d7" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos["d7"]!="✅"){
$as = "✅";
}else{
$as ="❎";
}
$carlos["d7"] = $as;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos["d6"];
$d7 = $carlos["d7"];
$bot2 = $carlos["bot"];
bot("editMessageReplyMarkup",[
"chat_id"=>$update->callback_query->message->chat->id,
"message_id"=>$update->callback_query->message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"البوت ".$bot2."" ,"callback_data"=>"bot3"],["text"=>"التوجية ".$d7."" ,"callback_data"=>"d7"],["text"=>"الاشعارات ".$d6."" ,"callback_data"=>"d6"]],
[["text"=>$staadd,"callback_data"=>"m♡s"]],
[["text"=>$nsadd,"callback_data"=>"Open"],["text"=>"نقل الملكية","callback_data"=>"AddAdmin"]],
[["text"=>$naadd,"callback_data"=>"1♡0"],["text"=>$ahs,"callback_data"=>"1"],["text"=>$cahadd,"callback_data"=>"All Ch"]],
[["text"=>$banamradd,"callback_data"=>"lastban"],["text"=>$admadd,"callback_data"=>"5"]],
]])
]);
}
}
if($data == "bot3" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos["bot"]!="✅"){
$bot = "✅";
}else{
$bot ="❎";
}
$carlos["bot"] = $bot;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos["d6"];
$d7 = $carlos["d7"];
$bot2 = $carlos["bot"];
bot("editMessageReplyMarkup",[
"chat_id"=>$update->callback_query->message->chat->id,
"message_id"=>$update->callback_query->message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"البوت ".$bot2."" ,"callback_data"=>"bot3"],["text"=>"التوجية ".$d7."" ,"callback_data"=>"d7"],["text"=>"الاشعارات ".$d6."" ,"callback_data"=>"d6"]],
[["text"=>$staadd,"callback_data"=>"m♡s"]],
[["text"=>$nsadd,"callback_data"=>"Open"],["text"=>"نقل الملكية","callback_data"=>"AddAdmin"]],
[["text"=>$naadd,"callback_data"=>"1♡0"],["text"=>$ahs,"callback_data"=>"1"],["text"=>$cahadd,"callback_data"=>"All Ch"]],
[["text"=>$banamradd,"callback_data"=>"lastban"],["text"=>$admadd,"callback_data"=>"5"]],
]])
]);
}
}
#-----------(carlos)-----------#
if($data == "AddAdmin"){
if ($from_id == $admin) {
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"‼ ارسل الان ايدي المطور الجديد ✅",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "Addadmin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if(preg_match("/[0-9]/i",$text)){
if($carlos["data"] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الادمن وتم التنزيل ✅",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$carlos["sudo"] = "$text";
unset($carlos["data"]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}}
if($data == "All Ch"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:اهلا بك في قسم الاشتراك الاجباري ",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"اضف قناة اولى" ,"callback_data"=>"AddCh1"],["text"=>"حذف القناة الولى" ,"callback_data"=>"DelCh1"]],
[["text"=>"اضف قناة ثانيه" ,"callback_data"=>"AddCh2"],["text"=>"حذف القناة الثانيه" ,"callback_data"=>"DelCh2"]],
[["text"=>" عرض قنوات الاشتراك العامة" ,"callback_data"=>"ALLCH"]],
[["text"=>"⬆️ اعدادات القنوات العامة ⚙" ,"callback_data"=>"."]],
[["text"=>"⬇️ اعدادات القنوات الخاصة ⚙" ,"callback_data"=>"."]],
[["text"=>"اضف قناة اولى " ,"callback_data"=>"AddCh1p"],["text"=>"حذف القناة الاولى " ,"callback_data"=>"DelCh1p"]],
[["text"=>"اضف قناة ثانية" ,"callback_data"=>"AddCh2p"],["text"=>"حذف القناة الثانية" ,"callback_data"=>"DelCh2p"]],
[["text"=>"عرض قنوات الاشتراك الخاصه" ,"callback_data"=>"ALLCHp"]],
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "AddCh1p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،(،🖇:ارسل ايدي القناة -100)",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "okch1p";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "addp1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم برفع البوت مشرف",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch1pp"] = "$text";
$carlos["data"] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "okch1p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم بأرسال رابط القناة الخاصة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch1p"] = "$text";
$carlos["data"] = "addp1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh1p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هل أنت متأكد من أنك تريد حذف القناة ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"الغاء", "callback_data"=>"ba♡ck"],["text"=>"تأكيد","callback_data"=>"OKDelCh1p"]],
]])
]);
}
if($data == "OKDelCh1p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:تم حذف القناة الاولى من الإشتراك الإجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
️[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
unset($carlos["ch1p"]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "AddCh2p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"(،🖇:ارسل ايدي القناة -100)",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "okch2p";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "setaddp" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة
،🖇:قم برفع البوت مشرف",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch2pp"] = "$text";
$carlos["data"] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "okch2p" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة 
،🖇:قم بأرسال رابط القناة الخاصة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch2p"] = "$text";
$carlos["data"] = "setaddp";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh2p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هل أنت متأكد من أنك تريد حذف القناة ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"الغاء", "callback_data"=>"ba♡ck"],["text"=>"تأكيد","callback_data"=>"OKDelCh2p"]],
]])
]);
}
if($data == "OKDelCh2p"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:تم حذف القناة الاولى من الإشتراك الإجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
unset($carlos["ch2p"]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "ALLCHp"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$carlos["ch1p"]."
،🖇:القناة الثانية  ".$carlos["ch2p"],
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "AddCh1"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇 ارسل معرف قناتك مع @",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "okch1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "okch1" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch1"] = "$text";
$carlos["data"] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh1"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هل أنت متأكد من أنك تريد حذف القناة ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"الغاء", "callback_data"=>"ba♡ck"],["text"=>"تاكيد","callback_data"=>"OKDelCh1"]],
]])
]);
}
if($data == "OKDelCh1"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:تم حذف القناة الاولى من الإشتراك الإجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
️[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
unset($carlos["ch1"]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "AddCh2"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇 ارسل معرف قناتك مع @",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "okch2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"] == "okch2" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"،🖇:تم اضافه القناة [$text]
،🖇:قم برفع البوت ادمن في القناة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ch2"] = "$text";
$carlos["data"] = "stop";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "DelCh2"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هل أنت متأكد من أنك تريد حذف القناة ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"الغاء", "callback_data"=>"ba♡ck"],["text"=>"تاكيد","callback_data"=>"OKDelCh2"]],
]])
]);
}
if($data == "OKDelCh2"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:تم حذف القناة الاولى من الإشتراك الإجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
unset($carlos["ch2"]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "ALLCH"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"،🖇:هذه قائمة القنوات الأشتراك الاجباري 
،🖇:القناة الاولى ".$carlos["ch1"]."
،🖇:القناة الثانية  ".$carlos["ch2"],
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"🔙" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
#-----------(carlos)-----------#
$addbanlst = count($carlos["ban"]);
if($data == "lastban"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"المحظورين ( ".$addbanlst." )" ,"callback_data"=>"##"]],
[["text"=>"حظر" ,"callback_data"=>"bannambar"],["text"=>"الغاء حظر" ,"callback_data"=>"unbannambar"]],
[["text"=>"عرض المحظورين" ,"callback_data"=>"lstesban"]],
[["text"=>"مسح المحظورين" ,"callback_data"=>"dellastban"]],
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["okunban"] = "done";
$carlos["okban"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos["ban"] != null){
$banlast = $carlos["ban"];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos["ban"] == null){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"لايوجد محظور حاليأ",
"reply_to_message_id"=>$message->message_id,
"parse_mode"=>"MarkDown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"تم مسح قائمة المحظورين","parse_mode"=>"MARKDOWN",
"reply_to_message_id"=>$message->message_id,
"parse_mode"=>"MarkDown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["ban"] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"حسنأ عزيزي ارسل ايدي العضو","parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["okban"] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match("/([0-9])/i",$text) and $carlos["okban"] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
]);
$carlos["ban"][] = "$text";
$carlos["okban"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"حسنأ عزيزي ارسل ايدي العضو","parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["okunban"] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match("/([0-9])/i",$text) and $carlos["okunban"] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos["okunban"] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "Open"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
اليك قسم النسخة للبوت 🗂
⎯ ⎯ ⎯ ⎯","parse_mode"=>"Markdown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"نسخة الاعضاء ➡️" ,"callback_data"=>"##"],["text"=>"جلب نسخة ✳" ,"callback_data"=>"OpenCopy"]],
[["text"=>"نسخة الاعدادات ➡️" ,"callback_data"=>"##"],["text"=>"جلب نسخة ✳" ,"callback_data"=>"Openstengs"]],
[["text"=>"رفع نسخة 📤" ,"callback_data"=>"addfiles"]],
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "OpenCopy"){
bot("senddocument", [
"chat_id" =>$admin,
"document" =>new CURLFile("data/members.json"),
"caption"=>"اليك النسخة الحتياطية للعضاء 🗂
عدد الاعضاء ( $md3 ).
⎯ ⎯ ⎯ ⎯",
"reply_to_message_id"=>$message->message_id, 
]);
}
if($data == "Openstengs"){
bot("senddocument", [
"chat_id" =>$admin,
"document" =>new CURLFile("data/carlos.json"),
"caption"=>"اليك النسخة الحتياطية الاعدادات 🗂
⎯ ⎯ ⎯ ⎯",
"reply_to_message_id"=>$message->message_id, 
]);
}
if($data == "addfiles"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"حسنأ عزيزي ارسل لي الملف المطلوب 📤
⎯ ⎯ ⎯ ⎯","parse_mode"=>"Markdown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["addfiles"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$name_id = $message->document->file_name;
if($message->document and $carlos["addfiles"] == "no"){
if($name_id == "members.json" or $name_id == "carlos.json"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$message->document->file_id])->result->file_path;
file_put_contents("data/$name_id",file_get_contents($file));
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفعة نسخة الاعضاء بنجاح 📤
الملف ( `$name_id` ).
","parse_mode"=>"Markdown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["addfiles"] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "1"){
for($i=0;$i<count($groups);$i++){
$nambrgropu = bot("getchatmemberscount",["chat_id"=>$groups[$i]])->result;
$tgnames = "$nambrgropu";
}
$t = "$tgnames\n";
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand"],
"parse_mode"=>"Markdown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"تصفير الاحصائيات 🗑." ,"callback_data"=>"lstadel"]],
[["text"=>"الغاء ↪️" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "lstadel"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
حسنأ عزيزي انته متأكد من حذف الاحصائيات 🗑.
عذرأ اولأ عليك ضغط علي نسخ الاحصائيات 🗂.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"نسخ الاحصائيات 🗂." ,"callback_data"=>"Copyahs"]],
[["text"=>"استعادة الاحصائيات ♻️." ,"callback_data"=>"asahs"]],
[["text"=>"نعم انا متأكد ✅." ,"callback_data"=>"dellahs"],["text"=>"لا لست متأكد ❎." ,"callback_data"=>"1"]],
[["text"=>"رجوع ↩" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "dellahs"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم تنظيف جميع الاحصائيات 🗑.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
$meca["members"] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents("data/members.json");
file_put_contents("data/Copy.json",$cc);
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents("data/Copy.json");
file_put_contents("data/members.json",$cc);
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم استعادة جميع الاحصائيات ♻️.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
}
#-----------(carlos)-----------#
if($data == "m♡s"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"اهلا بك في قسم رساله(start)",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"عرض رساله (start)" ,"callback_data"=>"startsho"],["text"=>"مسح رساله (start)" ,"callback_data"=>"unset start"]],
[["text"=>"تغير رساله (start)" ,"callback_data"=>"setstart"]],
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "startsho" and $chat_id == $admin){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"⬇️رسالة الستارت هيه\n---------------\n $start","parse_mode"=>"Markdown",
"reply_to_meesage_id"=>$message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
if($data == "unset start"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم حذف الاستارت
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["start"] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "setstart"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
يمكنك الان ارسال رسالة الـstart ⏳
لعرض الاسم : #name
لعرض الايدي : #id
لعرض المعرف : #user

رسالة الـstart الحالية : $start
","parse_mode"=>"Markdown",
"reply_to_meesage_id"=>$message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ok"] = "ok_start";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["ok"] == "ok_start"){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
تم تغير رسالة الـstart الى ℹ️:
$text
",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ok"] = "no";
$carlos["start"] = $text;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$addbanlst = count($carlos["ban"]);
if($data == "lastban"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"المحظورين ( ".$addbanlst." )" ,"callback_data"=>"##"]],
[["text"=>"حظر" ,"callback_data"=>"bannambar"],["text"=>"الغاء حظر" ,"callback_data"=>"unbannambar"]],
[["text"=>"عرض المحظورين" ,"callback_data"=>"lstesban"]],
[["text"=>"مسح المحظورين" ,"callback_data"=>"dellastban"]],
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["okunban"] = "done";
$carlos["okban"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos["ban"] != null){
$banlast = $carlos["ban"];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos["ban"] == null){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"لايوجد محظور حاليأ",
"reply_to_message_id"=>$message->message_id,
"parse_mode"=>"MarkDown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"تم مسح قائمة المحظورين","parse_mode"=>"MARKDOWN",
"reply_to_message_id"=>$message->message_id,
"parse_mode"=>"MarkDown",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["ban"] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"حسنأ عزيزي ارسل ايدي العضو","parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["okban"] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match("/([0-9])/i",$text) and $carlos["okban"] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
]);
$carlos["ban"][] = "$text";
$carlos["okban"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"حسنأ عزيزي ارسل ايدي العضو","parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"lastban"]],
]])
]);
$carlos["okunban"] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match("/([0-9])/i",$text) and $carlos["okunban"] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos["okunban"] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "dellahs"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم تنظيف جميع الاحصائيات 🗑.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
$meca["members"] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents("data/members.json");
file_put_contents("data/Copy.json",$cc);
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents("data/Copy.json");
file_put_contents("data/members.json",$cc);
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
تم استعادة جميع الاحصائيات ♻️.
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع ↩" ,"callback_data"=>"lstadel"]],
]])
]);
}
if($data == "5"){
if ($from_id == $admin) {
$key=[];
foreach ($carlos["admin"] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع",callback_data=>"ba♡ck"]];
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
يمكنك رفع ادمن وحذف ادمن عن طريق الازرار 🔽
⎯ ⎯ ⎯ ⎯
يمكن للادمن التحقق من الاحصائيات فقط ⚠️
",
reply_markup=>json_encode($key)
]);
}
}
$ex = explode("#", $data);
if($ex[0] == "del"){
$ser = array_search($ex[1],$carlos["admin"]);
unset($carlos["admin"][$ser]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$key=[];
foreach ($carlos["admin"] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع",callback_data=>"ba♡ck"]];
bot("editMessageReplyMarkup",[
"chat_id"=>$update->callback_query->message->chat->id,
"message_id"=>$update->callback_query->message->message_id,
reply_markup=>json_encode($key)
]);
}
if($data == "add_admin"){
if ($from_id == $admin) {
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
الان ارسل ايدي الشخص ℹ️
",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"الغاء ↪️" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ok"] = "ok_admin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($text and $carlos["ok"] == "ok_admin" and !in_array($text,$members)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
$text ليس عضو بالبوت ⚠️
",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
}
$test = $carlos["admin"];
if($text and $carlos["ok"] == "ok_admin" and in_array($text,$test)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
العضو مرفوع ادمن ⚠️
",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["ok"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if($text and $carlos["ok"] == "ok_admin" and in_array($text,$members)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
تم اضافه $text ادمن ✅
",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["admin"][] = $text;
$carlos["ok"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["ok"] == "ok_admin" and in_array($text,$members)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
تم اضافه $text ادمن ✅
",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["admin"][] = $text;
$carlos["ok"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "1♡0"){
for($i=0;$i<count($groups);$i++){
$nambrgropu = bot("getchatmemberscount",["chat_id"=>$groups[$i]])->result;
$tgnames = "$nambrgropu";
}
$t = "$tgnames + ";
bot("EditMessageText",[
"chat_id"=>$chat_id, 
"message_id"=>$message_id,
"text"=>$XQ_3X["sand"],
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"اذاعة للكل" ,"callback_data"=>"send_text"],["text"=>"اذاعة توجيه للكل" ,"callback_data"=>"send_rep"]],
[["text"=>"اذاعة للخاص" ,"callback_data"=>"send_text1"],["text"=>"اذاعة توجيه للخاص" ,"callback_data"=>"send_rep1"]],
[["text"=>"اذاعة كروبات" ,"callback_data"=>"send_text2"],["text"=>"اذاعة توجيه كروبات" ,"callback_data"=>"send_rep2"]],
[["text"=>"رجوع" ,"callback_data"=>"ba♡ck"]],
]])
]);
$carlos["data"] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand5"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_text";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_text" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand6"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot("sendMessage",[
"chat_id"=>$groups[$i],
"text"=>$text,
"parse_mode"=>"html",
"parse_mode"=>"Markdown",
]);
}
for($i=0;$i<count($members);$i++){
bot("sendMessage",[
"chat_id"=>$members[$i],
"text"=>$text,
"parse_mode"=>"html",
"parse_mode"=>"Markdown",
]);
}
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_rep"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand7"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_rep";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_rep" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand8"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot("forwardMessage",[
"chat_id"=>$groups[$i],
"from_chat_id"=>$from_id,
"message_id"=>$message->message_id
]);
}
for($i=0;$i<count($members);$i++){
bot("forwardMessage",[
"chat_id"=>$members[$i],
"from_chat_id"=>$from_id,
"message_id"=>$message->message_id
]);
}
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text1"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand1"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_text1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_text1" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand2"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($members);$i++){
bot("sendMessage",[
"chat_id"=>$members[$i],
"text"=>$text,
"parse_mode"=>"html",
"parse_mode"=>"Markdown",
]);
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "send_rep1"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand9"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_rep1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_rep1" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand10"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($members);$i++){
bot("forwardMessage",[
"chat_id"=>$members[$i],
"from_chat_id"=>$from_id,
"message_id"=>$message->message_id
]);
}
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text2"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand3"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_text2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_text2" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand4"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot("sendMessage",[
"chat_id"=>$groups[$i],
"text"=>$text,
"parse_mode"=>"html",
"parse_mode"=>"Markdown",
]);
}
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_rep2"){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>$XQ_3X["sand11"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
$carlos["data"] = "ok_rep2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos["data"]== "ok_rep2" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand12"],"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"رجوع" ,"callback_data"=>"1♡0"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot("forwardMessage",[
"chat_id"=>$groups[$i],
"from_chat_id"=>$from_id,
"message_id"=>$message->message_id
]);
}
$carlos["data"] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#------------(carlos)------------#
if($text == '/start' and $from_id != $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$XQ_3X["start"],
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[['text'=>$namezar,'url'=>$urlzar]],
]])
]);
}
#-----------(carlos)-----------#

//====================the file by mounir======================//
if($text == '/start'){
$mem = file_get_contents('data/members.txt');
$allmem= explode("\n",$mem);
	if (!in_array($chat_id,$allmem)) {
		$aaddd = file_get_contents('data/members.txt');
		$aaddd .= $chat_id."
";
    	file_put_contents('data/members.txt',$aaddd);
} 
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"

🎓┇اهــلا بك عزيــزي 【 $name 】

 💡┇فــي بوت الردود والحمايــه الاول على التلجــرام

 🏅┇البوت يتميز بالسرعه والردود الجميله وايضا يتوفر بثلاثه لغات

📬┇وضيــفة البــوت حماية مجمــوعتك من المخربين

📥┇بسرعــه عاليــه وعدم تخطــي اي شيء

📯┇فقــط اضف البوت وقم برفعه ادمــن وارسال تفعيل
• ┉ • ┉ • ┉ • ┉ • ┉ •

🇦🇺 Please select the appropriate language for you 🇦🇺
🇸🇦 من فضلك اختر اللغة المناسية لك 🇸🇦
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇦🇺English🇦🇺",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($data == 'st'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"🇦🇺 Please select the appropriate language for you 🇦🇺
🇸🇦 من فضلك اختر اللغة المناسية لك 🇸🇦
🇮🇷 خوهشا زبان مورد نظر را انتخاب کنید 🇮🇷", 
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[
		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"arabi"]
	  ],
	  [
		['text'=>"🇦🇺English🇦🇺",'callback_data'=>"english"]
	  ],
	  [
	 ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"persian"]
	  ]
		]
		])
  ]);
}

if($data == 'arabi'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"بعض الاوامر التي تساعدك 💡
اختر ماتريده 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
     ['text'=>"اضفني الى مجموعتك ♣️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
     ],
    	[
     ['text'=>"مراسلة المطور 🚶", 'url'=>"t.me/hms_01"]
     ],
     [
     ['text'=>"تغيير اللغة 🚠",'callback_data'=>"st"]
     ]
    ]    
    ])
    ]);
    }        
if($data == 'english'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"Some Orders help you 💡
Select would you want 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"Add me to your Gp ♣️️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
    ],
     [
     ['text'=>"support 💡", 'url'=>"t.me/hms_01"]
     ],
     [
     ['text'=>"setlang  🚠",'callback_data'=>"st"]
     ]
    ]
    ])
    ]);
    }     // by @botatiiii
if($data == 'persian'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"توصیه هایی که کمکتان خواهد کرد 🍁
یکی را انتخاب کنید 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"افزودن من به گروه ♣️️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
    ],
     [
     ['text'=>"پشتیبانی 💡", 'url'=>"t.me/hms_01"]
     ],
     [
     ['text'=>"انتخاب زبان 🚠",'callback_data'=>"st"]
     ]
    ]
    ])
    ]);
    }
  
if ($text && $type == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $type == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if( !$fwd && $type == "supergroup" && $menglish1 == "❌" && $you != "creator" && $you != "administrator"  && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)|(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)|(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $marabi1 == "❌"&& $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $mpersian1== "❌" && $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }

 if($photo  && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $photo1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->edited_message && $you != "creator" && $you != "administrator" && $from_id != $sudo){
if($edit123 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
} }

 if($number > 1000 or $numper > 1000 && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $long_list1 == "❌"){
 bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}


if($voice   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $voice1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($audio   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $audio1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($video   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $video1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
 if( !$fwd && $type == "supergroup" && $link1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
 if( !$fwd && $type == "supergroup" && $tag1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $doc1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $gif1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($game   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $game1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($text && $you != "creator" && $you != "administrator" && $from_id != $sudo && $from_id != $sudo && in_array($from_id, $super_silent)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($sticker   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $sticker1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->message->forward_from && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if( $fwd1 == "❌"){
	bot('deleteMessage',[
 'chat_id'=>$chat_id,
'message_id'=>$message->message_id
   ]);
	}
	}
if($text   && $you != "creator" && $you != "administrator" && $from_id != $sudo && $type == "supergroup" && $text1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($you == "creator" or $you == "administrator") {
if($re  &&  $text == "/del" ){
bot('deleteMessage',[
'chat_id'=>$re_chatid,
'message_id'=>$re_msgid
]);
}
}



/////////////////########
if($you == "creator" or $you == "administrator" or $from_id == $sudo && $type == "supergroup" ) {
if( $text == "تفعيل" or  $text == "/add" or  $text == "فعال"){
$txxt = file_get_contents('data/allgp.txt');
$pmembersid= explode("\n",$txxt);
	if (!in_array($chat_id,$pmembersid)) {
		$aaddd = file_get_contents('data/allgp.txt');
		$aaddd .= $chat_id."
";
    	file_put_contents('data/allgp.txt',$aaddd);
} 
    mkdir("data");
    mkdir("data/$chat_id");
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/lang.txt","arabi");
    file_put_contents("data/$chat_id/tag.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
    file_put_contents("data/$chat_id/edit.txt","✅");
    file_put_contents("data/$chat_id/contact.txt","✅");
    file_put_contents("data/$chat_id/location.txt","✅");
    file_put_contents("data/$chat_id/menglish.txt","✅");
    file_put_contents("data/$chat_id/long_list.txt","✅");
    file_put_contents("data/$chat_id/marabi.txt","✅");
    file_put_contents("data/$chat_id/mpersian.txt","✅");
    file_put_contents("data/$chat_id/gif.txt","✅");
    file_put_contents("data/$chat_id/text.txt","✅");
    file_put_contents("data/$chat_id/silent.txt","11");
    file_put_contents("data/$chat_id/rules.txt", "‼️ لا توجد قوانين هنا 🤦‍♂ من فضلك اكتب /setrules لوضع قوانين 🅿️!");
    bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"_Group has been added ✅
Please select your language❗️_",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'Markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
    [
 		['text'=>"🇸🇦العربية🇸🇦",'callback_data'=>"gparabi"],		
	  ],
	  [
		['text'=>"🇦🇺English🇦🇺",'callback_data'=>"gpenglish"],
	  ],
	  [
	   ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"gppersian"]
	  ]
   ]
   ])
   ]);
   }    
   } 
?>








  ]
   ])
   ]);
   }    
   } 
?>








