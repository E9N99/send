<?php
$Dev = "1488114134";
if($data=="gparabi"){
if($you_=="creator" or $you_=="Devistrator"or $cllfor==$sudo){
file_put_contents("data/".$cllchatid."/lang.txt","arabi");
bot('editmessagetext',[
'chat_id'=>$cllchatid,
'message_id'=>$cllmsegid,
'text'=>"تم تفعيل المجموعة 🤖
وتم اختبار اللغة العربية 🇸🇦",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>" الاوامر 🛠",'callback_data'=>"bag"]],
[['text'=>" اوامر الردود🧸 ",'callback_data'=>"🔙"]],
[['text'=>"الاوامر الكتابيه🧸 ",'callback_data'=>"he"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/Veevvw"]],
]
])]);}}
if($data=="gparabi"){
if($you_=="creator" or $you_=="Devistrator"or $cllfor==$sudo){
file_put_contents("data/".$cllchatid."/lang.txt","arabi");
bot('editmessagetext',[
'chat_id'=>$cllchatid,
'message_id'=>$cllmsegid,
'text'=>"تم تفعيل المجموعة 🤖
وتم اختبار اللغة العربية 🇸🇦",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>" الاوامر 🛠",'callback_data'=>"bag"]],
[['text'=>" اوامر الردود🧸 ",'callback_data'=>"🔙"]],
[['text'=>"الاوامر الكتابيه🧸 ",'callback_data'=>"he"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/Veevvw"]],
]
])]);}}
   
 if( $lang12 == "arabi" ){  
     if($data == "settingslang" ){
  if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo  ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"`من فضلك اختر لغتك المناسبة `",
 'parse_mode'=>'MARKDOWN',
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
    }
   //================العداد==============



if ($from_id == $sudo  ) {
if ($text == "المجموعه"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('data/members.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎋`عداد رسائل المجموعات ~» $allmsg
🎋عداد رسائل الخاص ~» $allmsgpv
🎋 عدد اعضاء البوت ~» $getall
🎋عدد المجموعات المفعلة ~» $geted`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   
       [['text'=>"اضفني الى مجموعتك ،🧸", 'url'=>"http://t.me/fza0bot?startgroup=new"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]],
]
])]);}}
if( $lang1 == "arabi" ){
if ($text == "ايدي"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍁` اسمك : $name
🍁 ايديك : $from_id
🍁 معرفك `: @$user `
•~~~~~~ـ~~~~~~•
🍁اسم مجموعة : $gp_name
🍁 ايدي المجموعة : $chat_id 
•~~~~~~ـ~~~~~~•
🍁 تحذيراتك : ($warn_1 | $warn)`",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'MARKDOWN',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]); //by  < Munir > @botatiiii
   }    
   }
//========================== الطرد ===============
if( $lang1 == "arabi" ){
if($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ) {
if($re && $text =="طرد"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم طرد العضو بنجاح 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
   }
   if( $lang1 == "arabi" ){
 if($re && $you == "creator" or $you == "Devistrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"طرد") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم طرد العضو بنجاح 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    }
    }
if( $lang1 == "arabi" ){
 if($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ) {
if($re && $text =="حظر"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @botatiiii = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم حظر العضو بنجاح 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
   }
 if( $lang1 == "arabi" ){
 if($re && $you == "creator" or $you == "Devistrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"حظر") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "الحظر" && $text['1'] != "حظر") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم حظر العضو بنجاح  🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     }
     if( $lang1 == "arabi" ){
     if($you == "creator" or $you == "Devistrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "الغاء الحظر" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
     }
     }
     if( $lang1 == "arabi" ){
 if($you == "creator" or $you == "Devistrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"الغاء الحظر") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   }
// ====================== الكتم =================
if( $lang1 == "arabi" ){
if($text == "كتم" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤐 تم تفعيل الصامت عليك ✋🏻
⚠️ من فضلك التزم قوانين ❗️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

file_put_contents("data/$chat_id/silent.txt", "\n" . $re_id, FILE_APPEND);
}
}
}
if( $lang1 == "arabi" ){
if($text == "كتم" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♣️ العضو انه بلفعل مكتم ➖",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
if( $lang1 == "arabi" ){
if($text == "الغاء كتم" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"😬 تم فتح الكتم عنك ✅
🚸 لا تكرر ما فعلته سابقاً ❌",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

$botatiiii = file_get_contents("data/$chat_id/silent.txt");
$botatiiii = str_replace($re_id,'',$botatiiii);
$botatiiii = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $o);
file_put_contents("data/$chat_id/silent.txt", $botatiiii);
}
}
}
if( $lang1 == "arabi" ){
if($text == "الغاء كتم" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👁‍🗨 انه بلفعل ليس مكتوم 💢",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
 //========================== وضع ترحيب ===============
    
     if( $lang12 == "arabi" ){
     if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الترحيب_ 🔃 ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/veevvw"]
	  ],
	  	 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "arabi" ){
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
    
     if( $lang1 == "arabi" ){   
    if($new_member  ){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$getwelcome", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
  		])
   ]);
   } 
}

 //========================== المساعدة ===============  
    
     if( $lang1 == "arabi" ){
     if ($you == "creator" or $you == "Devistrator" or $from == $sudo   ){
if($text == 'تحكم'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"~»  المديا 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"~»  الادارة 🕴",'callback_data'=>"ss"]
	  ],
           [
          ['text'=>"اوامر الردود 🧸 ",'callback_data'=>"🔙"]
          ],
	   [
  	['text'=>"اعدادت اللغة 🗣",'callback_data'=>"settingslang"]
	  ],
   [
  	['text'=>"~»  المطورين 🎭",'callback_data'=>"sudo"]
	  ]

   ]
   ])
   ]);
   } 
   }
   }
   if ( $lang12 == "arabi"){
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"~»  المديا 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"~»  الادارة 🕴",'callback_data'=>"ss"]
 	  ],
          [['text'=>"اوامر الردود 🧸 ",'callback_data'=>"🔙"]],
 	  [
  	['text'=>"اعدادت اللغة 🗣",'callback_data'=>"settingslang"]
	  ],
	   [
	  	['text'=>"~»  المطورين 🎭",'callback_data'=>"sudo"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
       ]);
       }
       } 
       }
       elseif ($data == 'sudo' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"bot programmer by @botatiiii 😊",
       ]);
       }   
//==========================تسهيل عمل ويبهوك ===============
 
 elseif (strpos($textmessage,"/setweb") !== false) {
  $text = explode(" ",$textmessage);
  if ($text['2'] != "" && $text['1'] != "") {
    $web = "https://api.telegram.org/bot" . $text['1'] . "/setwebhook?url=" . $text['2'];
    sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم انشاء ويبهوك بنجاح اضغط على في الاسفل", 
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
	   ['text'=>"من فضلك اضغط هنا🌐" ,'url'=>"$web"]
 	  ]
    ]
    ])
    ]);
    }    
    }
//========================== المطور ===============
$sudoid = "916165019";
$posudo = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$sudoid"),true);
$potossudo = $posudo["result"]["photos"][0][0]["file_id"];
$infosudo = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChat?chat_id=$sudoid"));
$namesudo = $infosudo ->result->first_name;
$usersudo = $infosudo ->result->username;
if(!@$usersudo){$carlos = "لايوجد معرف للمطور";}
elseif(@$usersudo){$carlos = "@$usersudo";}
$biosudo =  $infobio->bio;
if($biosudo != null){
$biosudo = "$biosudo";
}elseif($biosudo == null){
$biosudo = "لا تمتلك بايو";
}
if($text == "المطور" or $text == 'مطور'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'photo'=>"$potossudo",
'caption'=>"
⁦♡⁩ اهلا بكم في عالمي الخاص ⁦♡
⁩
•━═━═━═━ٰٰ𝙷ٍْ𝙼ٍْ𝚂ْ 𓃠𝄬𔘓   ═━═━═━•

☆︙*المطور* ← $namesudo
☆︙*المعرف* ← [$carlos]
☆︙*الايدي* ← $sudoid
☆︙*بايو* ← [$biosudo]
• ┉ • ┉ • ┉ • ┉ • ┉ •
✬︙*الوقت* ⋙ $now_date .
✬︙*التاريخ* ⋙ $todaydate .
",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>'☆︙ 𝓢𝓞𝓤𝓡 𝓒 𝓔 𝓗𝓜𝓢  ︙☆','url'=>'t.me/hms_01']],
[['text'=>'☆︙♔... « 𝙷𝙼𝚂 » ...♔︙☆','url'=>'t.me/hms_00']], 
[['text'=>'☆︙𖣴 𝙼𝙰𝚈 𝙱𝙾𝚃𝚂 𖣴 ︙☆','url'=>'t.me/botatiiii']], 
[['text'=>'☆︙♡ آج‌ــ‌๋ـر ♡ ︙☆','url'=>'t.me/ddeneat']], 
[['text'=>"*اضف البوت لمجموعتك*",'url'=>'https://telegram.me/userbot?startgroup=start']],
]
])
]);
}
#•━━━━━━━━━━━━━━•#
if($text == 'سورس' || $text == 'السورس'){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/msmswork/190",
'caption'=>'
𓂄𓆩𝒘𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒎𝒚  𝒔𝒐𝒖𝒓𝒄𝒆𓆪𓂁
', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'☆︙ 𝓢𝓞𝓤𝓡 𝓒 𝓔 𝓗𝓜𝓢  ︙☆','url'=>'t.me/hms_01']],
[['text'=>'☆︙♔... « 𝙷𝙼𝚂 » ...♔︙☆','url'=>'t.me/hms_00']], 
[['text'=>'☆︙𖣴 𝙼𝙰𝚈 𝙱𝙾𝚃𝚂 𖣴 ︙☆','url'=>'t.me/botatiiii']], 
[['text'=>'☆︙♡ آج‌ــ‌๋ـر ♡ ︙☆','url'=>'t.me/ddeneat']], 
[['text'=>"*اضف البوت لمجموعتك*",'url'=>'https://telegram.me/userbot?startgroup=start']],
]
])
]);
}
 //========================== القوانين ===============
    
     if( $lang12 == "arabi" ){
      if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان القوانين_ 🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]
	  ],
	  [
	 	['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "arabi" ){
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "Devistrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
     if( $lang1 == "arabi" ){
 if($text == 'القوانين'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]
	  ]
   ]
   ])
   ]);
   }
   }
 //==========================الرابط ===============
    
if( $lang12 == "arabi" ){ 
     if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الرابط_ 🔃
*Please now send new go link* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]
	  ],
	  [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
     }
     if( $lang1 == "arabi" ){
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "Devistrator" or $from == $sudo   ){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   }
if( $lang1 == "arabi" ){
if($text == 'الرابط'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }  
if( $lang12 == "arabi" ){
if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
					[
					['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	   [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
      ]
      ])
      ]);
      }    }
if( $lang12 == "arabi" ){
 if ( $data == "link" && $link12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"✅",'callback_data'=>"link"]
							],
					[
					['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "link" && $link12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
     	 ],
       [
    		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
    	  ]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "tag" && $tag12 == "❌") {
 if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "tag" && $tag12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}   }
if( $lang12 == "arabi" ){
if ( $data == "photo" && $photo12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "photo" && $photo12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "arabi" ){
if ( $data == "fwd" && $fwd12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
//by  < Munir > @botatiiii




   }
if( $lang12 == "arabi" ){
if ( $data == "game" && $game12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]		
      ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "game" && $game12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "video" && $video12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "video" && $video12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "voice" && $voice12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "voice" && $voice12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "audio" && $audio12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "audio" && $audio12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "file" && $doc12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "file" && $doc12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "arabi" ){
if ( $data == "all" && $text12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"✅",'callback_data'=>"all"]
	 ],
	 	  [//by  < Munir > @botatiiii
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "all" && $text12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"❌",'callback_data'=>"all"]
	 ],
	  [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "sticker" && $sticker12 == "❌") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12 ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
}







  
if( $lang12 == "arabi" ){
if ( $data == "next") {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	      [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "arabi" ){
  if ( $data == "location" && $location12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"❌",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "arabi" ){
 if ( $data == "location" && $location12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"✅",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
   }
if( $lang12 == "arabi" ){
 if ( $data == "contact" && $contact12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"❌",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				], //by  < Munir > @botatiiii
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "contact" && $contact12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"✅",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "edit" && $edit12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"✅",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "edit" && $edit12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"❌",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "marabi" && $marabi12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"❌",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "marabi" && $marabi12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"✅",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "mpersian" && $mpersian12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"❌",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "mpersian" && $mpersian12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"✅",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "menglish" && $menglish12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$menglish12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"❌",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "menglish" && $menglish12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"✅",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "Long_list" && $long_list12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"❌",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "Long_list" && $long_list12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"✅",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  } //by  < Munir > @botatiiii
if( $lang12 == "arabi" ){
if ( $data == "gif" && $gif12 == "✅" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"❌",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "gif" && $gif12 == "❌" ) {
  if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇸🇦",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"✅",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }


  }
if( $lang12 == "arabi" ){
if($data == "ss"  ){
if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ تحديد التحذير ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"هذا هو الحد الاقصى لعدد التحذيرات ♣️",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قم بلضغط على 
➕ ليزادة التحذير
➖ لتقليل التحذير️",
]);
}   
  
if( $lang12 == "arabi" ){
if($data == '+'){
if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ تحديد التحذير⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
 if($data == '-' ){
 if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ تحديد التحذير ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"العودة 🔙",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
 } 
$warns = $warn - 1;  
if( $lang1 == "arabi" ){
if ($warns != $warn_2){ 
 if($re &&$text == "تحذير"){  
 if($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"عذرا يا صديقي 😒✋🏻
انتبه لتصرفاتك داخل المجموعة 👥
هذا تحذير من قبل الدارة 👨‍🏫
عدد تحذيراتك هية ( $nnwarn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 } //by  < Munir > @botatiiii
 }
 }
 $warns = $warn - 1;   
if( $lang1 == "arabi" ){
 if ($warns == $warn_2){
if($re && $text == "تحذير"){     
if($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"اسف يا صديقي 💂
لم تلتزمم بلقواعد في المجموعة 👨‍💼
وصلت الى الحد الاقصى من التحذيرات وتم طردك 👞
تحذيراتك هية ( $warn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
    }
if( $lang1 == "arabi" ){
  if($re && $text == "مسح التحذيرات"){     
if($you == "creator" or $you == "Devistrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"يا له من يوم جديد تم حذف تحذيراتك ",
                'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  } }  }
if( $lang12 == "arabi" ){
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 القوانين 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ تحديد التحذير⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  
  }
if( $lang12 == "arabi" ){  
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"هذه قائمة اعدادات الترحيب 🤗
اضغط على (⬛️ تعديل الترحيب  ⬜️) لتعديل الترحيب الخاص بلمجموعة 😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ تعديل الترحيب ⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
// by @botatiiii = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة القوانين 👁‍🗨
اضغط على ♣️👇🏻
(تعديل القوانين 📨️)
لوضع قوانين جديدة للمجموعة 🖊",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"تعديل القوانين 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "Devistrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة رابط المجموعة 🖇
اضغط على 🔍👇🏻
(📍تعديل الرابط 📍)
لوضع رابط جديد 📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"📍تعديل الرابط  📍️",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
}





$update = json_decode(file_get_contents('php://input'));
$Dev = array("916165019","001","7"); 
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$chat_id2 = $update->callback_query->message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @ArMoF =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @ArMoF =====*/
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
$settings = json_decode(file_get_contents("data/group.json"),1);
$sttings = json_decode(file_get_contents("text.json"),1);
$rt = $message->reply_to_message;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$tc = $update->message->chat->type;
if(!$settings["$chat_id"]["text"]){
$settings["$chat_id"]["text"] = "❌";
file_put_contents("data/group.json",json_encode($settings,128|34|265));
}
if(!$settings["$chat_id"]["helo"]){
$settings["$chat_id"]["helo"] = "✅";
file_put_contents("data/group.json",json_encode($settings,128|34|265));
}
$admin = 916165019;
if($update->message){
$mark = json_encode([
"inline_keyboard"=>[
[['text'=>" الاوامر 🛠",'callback_data'=>"bag"]],
[['text'=>" اوامر الردود🧸 ",'callback_data'=>"🔙"]],
[['text'=>"الاوامر الكتابيه🧸 ",'callback_data'=>"he"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]],
]
]);
}
if($update->callback_query){
$mark = json_encode([
"inline_keyboard"=>[
[['text'=>' الرد : '.$settings[$chat_id2]["text"],'callback_data'=>'1#text'],['text'=>' الترحيب : '.$settings[$chat_id2]["helo"],'callback_data'=>'1#helo']],
[['text'=>' اضافة ترحيب .','callback_data'=>'5'],['text'=>' حذف ترحيب .' ,'callback_data'=>"6"]],
[['text'=>' عرض التراحيب .','callback_data'=>'7'],['text'=>' حذف التراحيب .' ,'callback_data'=>"8"]],
[['text'=>' الاوامر ','callback_data'=>'he']]
]
]);
}
$ex = explode("#",$data);
$chid = $update->callback_query->message->chat->id;
if($ex[0] == "1" ){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($fromid,$Dev) or $fromid == $admin) {
if($settings[$chat_id2][$ex[1]]!="✅"){
$iu = "✅";
}else{
$iu ="❌";
}
$settings[$chid][$ex[1]]=$iu;
file_put_contents("data/group.json",json_encode($settings,128|34|265));
$mark = json_encode([
"inline_keyboard"=>[
[['text'=>" الاوامر 🛠",'callback_data'=>"bag"]],
[['text'=>" اوامر الردود🧸 ",'callback_data'=>"🔙"]],
[['text'=>"الاوامر الكتابيه🧸 ",'callback_data'=>"he"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]],
]
]);
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>$mark
]);
}
}
if($data == "on"){
	if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،تم فتح الحفظ ✅ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع 🔚', 'callback_data'=>'ArMoFF']],
]])
]);
$settings["rd"]="✅";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}
if($data == "of"){
	if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'،تم قفل حفظ الرد ❎ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع 🔚', 'callback_data'=>'ArMoFF']],
]])
]);
$settings["rd"]="❌";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}
$TestI = json_decode(file_get_contents("data/group.json"), true);
if(!$TestI[$chat_id]){
if($tc == 'supergroup' or $tc == 'group' ){
mkdir ("data");
$TestI = json_decode(file_get_contents("data/group.json"), true);
$TestI[$chat_id] = array('text'=>"❌",'helo'=>"✅");
file_put_contents("data/group.json", json_encode($TestI,128|34|265));
}
}
if($update){
if($tc == 'supergroup' or $tc == 'group'){
if(!$settings["$chat_id"]["trahip"]){
$x = ["مـۅبشړ حڷغـۅ۾ 😭💗😹،","شهلكمر طب علينه 🥺💕😹","اككلوول امك مكابله النحل 24 ساعه وجابت عسل 😹🥺💕"];
if(!$settings["$chat_id"]["trahip"][0]){
$x = ["مـۅبشړ حڷغـۅ۾ 😭💗😹،","شهلكمر طب علينه 🥺💕😹","اككلوول امك مكابله النحل 24 ساعه وجابت عسل 😹🥺💕"];
$settings["$chat_id"]["trahip"][0] = $x[0];
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}}}
if($update){
if($tc == 'supergroup' or $tc == 'group'){
if(!$settings["$chat_id"]["trahip"][1]){
$x = ["مـۅبشړ حڷغـۅ۾ 😭💗😹،"
,"شهلكمر طب علينه 🥺💕😹"
,"اككلوول امك مكابله النحل 24 ساعه وجابت عسل 😹🥺💕"];
$settings["$chat_id"]["trahip"][1] = $x[1];
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}}
if($update){
if($tc == 'supergroup' or $tc == 'group'){
if(!$settings["$chat_id"]["trahip"][2]){
$x = ["مـۅبشړ حڷغـۅ۾ 😭💗😹،","شهلكمر طب علينه 🥺💕😹","اككلوول امك مكابله النحل 24 ساعه وجابت عسل 😹🥺💕"];
$settings["$chat_id"]["trahip"][2] = $x[2];
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}}
if($text == "تفعيل"){
if($tc == 'supergroup' or $tc == 'group' ){
mkdir ("data");
$TestI = json_decode(file_get_contents("data/group.json"), true);
$TestI[$chat_id] = array('text'=>"❌",'helo'=>"✅");
file_put_contents("data/group.json", json_encode($TestI,128|34|265));
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• تم تفعيل المجموعةة ~  [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" الاوامر 🛠",'callback_data'=>"bag"]],
[['text'=>" اوامر الردود🧸 ",'callback_data'=>"🔙"]],
[['text'=>"الاوامر الكتابيه🧸 ",'callback_data'=>"he"]],
[['text'=> "قناة السورس 💡" ,'url'=>"http://telegram.me/botatiiii"]],
]])
]);
}
}
if($text =="/stykdkryart" and $tc == 'private'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك في بوت ايفلين 
                                     ————
- انا بوت  تفاعل مجموعات .
• يمككني اضافة القاب للاعضاء 
- قم باضافتي الى المجموعة ثم ارفعني مشرف .
                                     ————*
DEV : @ARMOF هناك اكثر من 25 الف رد
",'reply_to_message_id','parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضفني الى مجموعتك ،🧸", 'url'=>"http://t.me/TszTbot?startgroup=new"]],
]
])
]); 
}
//rd
if($text == "فتح الرد"){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم فتح الرد ~  [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings[$chat_id]["text"]="✅";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}
if($text == "قفل الرد"){
if($status == 'creator' or $status == 'administrator' ) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم قفل الرد ~  [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["$chat_id"]["text"]="❌";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
//hello 
if($text == "فتح الترحيب"){
if($status == 'creator' or $status == 'administrator' ) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم فتح الترحيب ~  [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["$chat_id"]["helo"]="✅";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($text == "قفل الترحيب"){
if($status == 'creator' or $status == 'administrator' ) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم قفل الترحيب ~  [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["$chat_id"]["helo"]="❌";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}

if($text and $rt and !in_array($text,$sttings["rdod"][$rt->text]) and $settings["rd"] == "✅"){
$sttings["rdod"][$rt->text][] = "$text";
file_put_contents("text.json",json_encode($sttings,128|34|265));
}
if($text and $settings[$chat_id]["text"] == "✅"){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>$sttings["rdod"][$text][array_rand($sttings["rdod"][$text],1)],'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$update->message->message_id,
]);
}elseif($text and $tc == 'private'){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>$sttings["rdod"][$text][array_rand($sttings["rdod"][$text],1)],'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$update->message->message_id,
]);
}
if($text =="الردود" and in_array($from_id,$Dev)){
$armof = count($sttings["rdod"]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الردود التي حفظها البوت $armof",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "get" and $from_id == $admin){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("text.json"),
]);
}
if($text == "الاوامر"){
if($status == 'creator' or $status == 'administrator' ) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• اهلا بك في لوحة الاوامر ،
                                ————
• قفل ~ فتح الرد  
• قفل ~  فتح الترحيب  
                                ————*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
"reply_markup"=>$mark
]);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
]);
}}
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=$from_id2"),true);
$statusd = $statjsond['result']['status'];
if($data == "🔙"){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev)) {
bot('editmessagetext',[
 'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
 'text'=>"*💕🧸- اهݪا بـڪ اخــ۫ـتࢪ مـٰن اݪاســفل ،*", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>$mark
]);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
 ]);
}
}

if($data =="1"){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev)) {
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>'*• تم قفل الرد 💞*','parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- 🔙 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["text"]="❌";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}else{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
 ]);
}
}
if($data =="2"){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev)) {
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>'*- تم فتح الرد .:*','parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- 🔙 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["text"] = "✅";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
 ]);
}}
if($data =="3"){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev)) {
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>'*- تم قفل الترحيب .:*','parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- 🔙 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["helo"] = "❌";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
 ]);
}}
if($data =="4"){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>'*- تم فتح الترحيب .:*','parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- 🔙 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["helo"]="✅";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر ليس لك", 
'show_alert'=>true 
 ]);
}}
if($update->message->new_chat_member){
if($settings["$chat_id"]["helo"]=="✅"){
if($tc == "group" or $tc == "supergroup"){
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
$a = $settings["$chat_id"]["trahip"];
$b = array_rand($a,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*$a[$b]*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
]);
}
}
}
if($text and $settings["$chat_id"]["data"] == "addtar$from_id"){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*• تم حفظ الترحيب  💞*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id"]["data"] = "off";
$settings["$chat_id"]["trahip"][] = $text;
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($text == "اضف ترحيب" ){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*• قم بأرسال الترحيب لطفا 💞*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id"]["data"] = "addtar$from_id";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($text and $settings["$chat_id"]["data"] == "deltar$from_id"){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*• تم حذف الترحيب 💞*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id"]["data"] = "off";
$key = array_search($text,$settings["$chat_id"]["trahip"]);
unset($settings["$chat_id"]["trahip"][$key]);
$settings["$chat_id"]["trahip"] = array_values($settings["$chat_id"]["trahip"]);
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}}
if($text == "حذف ترحيب" ){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*• قم بأرسال الترحيب لطفا 💞*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id"]["data"] = "deltar$from_id";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($text  == "الترحيب"){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*شهلكمر طب علينه 🥺💕😹*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
}}
if($data == "5" ){
	if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*• قم بأرسال الترحيب لطفا ،*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["data"] = "addtar$from_id2";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($data == "6" ){
	if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*• قم بأرسال الترحيب لطفا ،*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
$settings["$chat_id2"]["data"] = "deltar$from_id2";
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}
if($text == "get1" and $from_id == $admin){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("data/group.json"),
]);
}
if($data == "7" ){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
$x = $settings["$chat_id2"]["trahip"];
if($x !=null){
for($i=0;$i<count($settings["$chat_id2"]["trahip"]);$i++){
$m = $i+1;
$tr .= "$m ~ •[".$settings["$chat_id2"]["trahip"][$i]."] \n";
}}else{
$tr = "• لا يوجد تراحيب 🙆‍♂️💞";
}
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*• اهلا بك في قائمة التراحيب 🕷*
                     ————
$tr
                     ————",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
}
}
if($data == "8" ){
if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*• تم حذف التراحيب 🗑 ،*",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]]
]])
]);
unset($settings["$chat_id2"]["trahip"]);
$settings = json_encode($settings,128|34|265);
file_put_contents("data/group.json",$settings);
}
}

$ti = explode("وضع لقب",$text);
if($ti[1] && $rt){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
 $get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=1701484722"),true);
$ge = $get["result"]["can_promote_members"];
if($ge == true){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'can_change_info'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'custom_title'=>$ti[1],
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• العضو » [$re_name](tg://user?id=$re_id)
~ تم وضع ($ti[1]) كلقب له . 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}}}
if($ti[1] && $rt){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
 $get = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$chat_id."&user_id=1701484722"),true);
$ge = $get["result"]["can_promote_members"];
if($ge != true){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
• لا امتلك صلاحية رفع مشرفين ،
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
elseif($rt and $text == "لقبه"){
if($status == 'creator' or $status == 'administrator' or $from_id == $admin) {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$re_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "بلا لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• العضو » [$re_name](tg://user?id=$re_id)
~ لقبه ($b). 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}else{
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
• الامر ليس لك عزيزي ،
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
elseif($text == "لقبي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$from_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "بلا لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• العضو » [$first_name](tg://user?id=$from_id)
~ لقبك ($b). 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
if($data == "he" ){
	if($statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or $from_id2 == $admin) {
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"•⊱ {  آوآمر المدراء } ⊰

    
🔱¦ طرد [ايدي / بلرد ] لطرد عضو 
⚜¦ حظر [ايدي / بلرد ] لحظر عضو
🚸¦ الغاء الحظر (بالرد/بالايدي) •⊱ لالغاء الحظر 
🔅¦ كتم (بالرد) •⊱ لكتم العضو 
🌀¦ الغاء كتم [ بلرد ] لرفع الكتم عن عضو
🚫¦ منع + الكلمه •⊱ لمنع كلمه داخل المجموعه
⭕️¦ الغاء منع •⊱ لالغاء منع الكلمه بالمجموعه

• ┉ • ┉ • ┉ • ┉ • ┉ •

•⊱ {  آوآمر الاضافه  } ⊰

🔰- اضف ترحيب
🔰- حذف ترحيب

• ┉ • ┉ • ┉ • ┉ • ┉ •

•⊱ {  آوآمر الالقاب  } ⊰

🎗- لقبي - لقبه
🎗- وضع لقب + اللقب

• ┉ • ┉ • ┉ • ┉ • ┉ •

•⊱ {  آوآمر الفتح والقفل } ⊰

🎩- فتح الرد
🎩- قفل الرد

♻️- فتح الترحيب
♻️- قفل الترحيب

• ┉ • ┉ • ┉ • ┉ • ┉ •

•⊱ {  آوآمر ازرار الاعدادات} ⊰

• ✅ ~ تعني مفتوح
• ❌ ~ تعني مقفول

🗯┇مطور البوت 💡↭ [@hms_01]🐼

",'parse_mode'=>'markdown',
'reply_to_message_id'=>$update->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- back 🧸 . ",'callback_data'=>"🔙"]],
[['text'=>"اضفني الى مجموعتك ،🧸", 'url'=>"http://t.me/h1tdtbot?startgroup=new"]],
]])
]);
}
}
if($text == "بوت"){
$a = ["🙆‍♂️💞","🦦🥺","💞💞","🥺💞","😘💞"];
$b = array_rand($a,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• اسمي  مسمس ".$a[$b],
'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
]);
}

$ap1i = file_get_contents("https://hams.aba.vg/apieati/Simsim-api.php?text=$text");
if($text !="/start"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>" ـ $ap1i " ,
'reply_to_message_id'=>$message->message_id,
]);}

