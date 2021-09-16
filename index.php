##bismillahir_rohmanir_rohim##
<?php
ob_start();
define('API_KEY','1756006247:AAGT_cktvsg84OSLJrdReaNr0PNSl2dmiE8');
$admin = '412711387';

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");

//boshlandi

$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001375862453", // secretius
         "user_id"=>$uid
         ]);
     $ret2 = bot("getChatMember",[
         "chat_id"=>"-1001201095047", // shokvideo
         "user_id"=>$uid
         ]);
     $ret3 = bot("getChatMember",[
         "chat_id"=>"-1001286696083", // shokvideo
         "user_id"=>$uid
         ]);
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;
$stat3 = $ret3->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member") and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. A'zo bo'lib qayta /start bosing! Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/joinchat/AAAAAFIB_rVZ6weHU1d24g"],],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/joinchat/AAAAAEeXQYdt9LYxEOqMUg"],],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/joinchat/AAAAAEyxbJPhoitkTViC7g"],],
]
]),
]); 
return false;
}

$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
        

$key=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎉Sertifikat Yasash"]],
[['text'=>"🖼 Profilga"],['text'=>"🗓 Kalendar"]],
[['text'=>"🕌 Juma Ayyomi"],['text'=>"🎊 Yangi Yil"]],
[['text'=>"🎂 Tug`ilgan kun"],['text'=>"🌅 Xayrli tong"]],
[['text'=>"🌃 Xayrli tun"],['text'=>"🗓 Yangi yilgacha *️⃣ kun qoldi"]],
[['text'=>"📊Statistika"],['text'=>"❤ Sevgi 💘"]],
]
]);

if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Assalomu Alaykum $name</b>\n\n🤖: Men orqali ismingizni ajoyib rasmga joylashingiz mumkin

◾Marxamat Pastdagi Menyulardan
⚠️O'zingizga Kerakligini Bosing.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<i>Dasturchilar: @Avazbek_Dev 
@SalomovAsliddin 
Bot Admini: @Manager_707</i>",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}}







if($text == "⬅️Orqaga"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<i>🥳 Quyidagilardan birini tanlang!!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$key,
]);
}

if($text == "🆕 Tabrik Rasmi yaratish" or $text == "/tabrik"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<i>🥳 Quyidagilardan birini tanlang!!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$key,
]);
}

if($text == "🎉Sertifikat Yasash"){
file_put_contents("step/$cid.step", 'sertifikat');
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos Izmingizni Kiriting!!*",
	'reply_to_message_id '=>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "sertifikat"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api2/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Sertifikatn1/SertifikatN1/index1.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Sertifikatn1/SertifikatN1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);file_put_contents("step/$cid.step","otmen");
}

if($text == "❤ Sevgi 💘"){
file_put_contents("step/$cid.step","sevgi");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Iltimos ismingizni kiriting</b>
Bu tartibda: <code>Shoxrux | Aziza</code> ",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"html",
	'reply_markup'=>$rpl,
]);
}


if ($stepp == "sevgi"){
$ex = explode(" | ",$text);
$bola = $ex[0];
$qiz = $ex[1];
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u1045.xvest.ru/QO/index.php?qiz=$qiz&bola=$bola",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "🗓 Yangi yilgacha *️⃣ kun qoldi"){
$kun1 = date('z',strtotime('3 hour')); 
$c2 = 364-$kun1;
$d = date('L',strtotime('3 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H',strtotime('3 hour')); 
$b2 = 23-$kun2;
$kun3 = date('i',strtotime('3 hour')); 
$b3 = 59-$kun3;
$kun4 = date('s',strtotime('3 hour')); 
$b4 = 60-$kun4;
bot('sendmessage',[   
'chat_id'=>$cid,
'text'=>"
🎄Yangi yilga
├📆Kun *$b* 
├⏰Soat *$b2* 
├⌛Minut *$b3*  
└⏱Sekund *$b4* 🎅Qoldi

📆Hozir: $Sana ⏰$soat",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid, 
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}

if($text == "🗓 Kalendar"){
file_put_contents("step/$cid.step","kalendar");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "kalendar"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Api1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
file_put_contents("step/$cid.step","noo");
}

$jkey = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😎Profilga"]],
[['text'=>"👫Do'stimni tabriklash"]],
[['text'=>"⬅️Orqaga"]],
]
]);

if($text == "🕌 Juma Ayyomi"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'message_id'=>$mid,
	'text'=>"_🎄 Quyidagilardan birini tanlang!!!_",
	'parse_mode'=>"markdown",
	'reply_markup'=>$jkey,
]);
}

if($text == "😎Profilga"){
file_put_contents("step/$cid.step","jp");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "jp"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapi1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u1045.xvest.ru/JumaNew/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u1045.xvest.ru/JumaNew/index1.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$jkey,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "👫Do'stimni tabriklash"){
file_put_contents("step/$cid.step","jpf");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "jpf"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapi1/YangiYil/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u1045.xvest.ru/JumaNew/index2.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://u1045.xvest.ru/JumaNew/index3.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$jkey,
]);
file_put_contents("step/$cid.step","noo");
}

//Yangi

$ykey = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😎 Profilga"]],
[['text'=>"👫 Do'stimni tabriklash"]],
[['text'=>"⬅️Orqaga"]],
]
]);

if($text == "🎊 Yangi Yil"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'message_id'=>$mid,
	'text'=>"_🎄 Quyidagilardan birini tanlang!!!_",
	'parse_mode'=>"markdown",
	'reply_markup'=>$ykey,
]);
}

if($text == "😎 Profilga"){
file_put_contents("step/$cid.step","yp");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "yp"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapi/Yangi/YangiYil/YangiYil/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api2/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapi/Yangi/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$ykey,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "👫 Do'stimni tabriklash"){
file_put_contents("step/$cid.step","ypf");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "ypf"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapi/Yangi/YangiYil/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Api2/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$mid,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$ykey,
]);
file_put_contents("step/$cid.step","noo");
}

//Tugʻilgan kun

if($text == "🎂 Tug`ilgan kun"){
file_put_contents("step/$cid.step","tk");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "tk"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapit/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/Newapit/Yangit/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/SertifikatN1/Tugulgann1/index1.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/SertifikatN1/Tugulgann1/index1.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "🌅 Xayrli tong"){
file_put_contents("step/$cid.step","xtong");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "xtong"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Xayrlitong2/Xayrlitong.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Xayrlitong1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "🌃 Xayrli tun"){
file_put_contents("step/$cid.step","xtun");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "xtun"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Xayrlitun1/Xayrlitun1.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Xayrlitun2/Xayrlitun2.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
file_put_contents("step/$cid.step","noo");
}

$pkey = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😎 Bollar uchun"],['text'=>"👧 Qizlar uchun"]],
[['text'=>"⬅️Orqaga"]],
]
]);

if($text == "🖼 Profilga"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'message_id'=>$mid,
	'text'=>"_🎄 Quyidagilardan birini tanlang!!!_",
	'parse_mode'=>"markdown",
	'reply_markup'=>$pkey,
]);
}

if($text == "😎 Bollar uchun"){
file_put_contents("step/$cid.step","pkeyb");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "pkeyb"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Multi1/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/YangiO/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$pkey,
]);
file_put_contents("step/$cid.step","noo");
}

if($text == "👧 Qizlar uchun"){
file_put_contents("step/$cid.step","pkeyq");
    bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Iltimos ismingizni kiriting*",
	'reply_to_message_id' =>$message->message_id,
	'parse_mode'=>"markdown",
	'reply_markup'=>$rpl,
]);
}

if ($stepp == "pkeyq"){
$ex=$text;
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1263.xvest1.ru/Apilar/Multi2/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://u1045.xvest.ru/YangiO/YangiQ/index.php?text=$ex",
'caption'=>" <b>✅ Tabrik rasmingiz tayyor bo'ldi.</b>
<i>⚠️Do'stlaringizni taklif qilishni unutmang...

Manzil: 👉 @UzTabrikRobot</i>",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>'HTML',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"_🎉Tanlang!!_",
'parse_mode'=>"markdown",
'reply_markup'=>$pkey,
]);
file_put_contents("step/$cid.step","noo");
}

//Statistika

$baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
if(mb_stripos($tx,"📊Statistika")!==false){
$time=date('H:i:s',strtotime('2 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("2 hour"));
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $txx = "<b>
🌎 Hammasi: $all
├👤: $us
└👥: $gr</b>

👤 - <b>Foydalanuvchilar</b>
👥 - <b>Guruhlar</b>

📆$sana ⏰$time";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$txx,
  ]);
}

//Admin paneli

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📄Xabar Jo'natish"],],
[['text'=>"📊Statistika"],['text'=>"🗳Bot Kodi🗳"],],
[['text'=>"🚫Ban🚫"],['text'=>"🚫Bandan Olish✅"],],
[['text'=>"❇Userga Xabar❇"],],
[['text'=>"⬅️Orqaga"],],
]
]);

if($tx == "/panel"){
if($cid == $admin){
bot('sendmessage', [
'chat_id'=>$admin,
'text'=>"😁Assalomu Aleykum

😎Admin Paneliga Xush Kelibsiz

◾Marxamat Pastdagi Menyulardan
⚠️O'zingizga Kerakligini Bosing",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Panel Menusi faqat Admin uchun Ochiladi!*",
'parse_mode'=>'Markdown',
]);
}
}

$tex = $message->text;
$lichka = file_get_contents("azo.dat");
$xabar = file_get_contents("send.txt");

if($tex=="📄Xabar Jo'natish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"
👥Userlarga Yuboriladigan 
📄Xabar Matnini Kiriting! 
🚫Bekor qilish uchun /cancel ni bosing.",
    'parse_mode'=>"html",
]); file_put_contents("send.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($tx=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
]);
  file_put_contents("send.txt","");
}else{
  $lich = file_get_contents("azo.dat");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$tex,
    'parse_mode'=>'html'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"
👨‍💻Siz Yozgan Xabaringiz
👥Hamma Userlarga Yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("send.txt","");
}
}
}

if($tx == "❇Userga Xabar❇"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Userga Xabar yuborish uchun
/sms 🆔️ Xabar 
shu tarzda yuboring!

Admin: @$userR",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Admindan Yangi Habar

👤 [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $vaqt 🔸  🕰 $time",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$bass = $message->text;
$uid = $message->from->id;
$reply = $message->reply_to_message->text;

$replymenu = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> \nSiz ⛔️ Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!!!\nBlokdan chiqish uchun ADMIN ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!!!🚫!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/ExoBayt_Official"]],
]
])
]);return false;}

if($bass=="🚫Ban🚫"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔️ni Yuboring!",
'reply_markup'=>$replymenu,
]);//manbasiz korsam sikilasan
}
}
if($reply=="Ban Qilinadigan 🆔️ni Yuboring!"){
file_put_contents("block.db","$blocks\n$bass");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$bass](tg://user?id=$bass) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);//kodni manba bn ol inson bolsen
        bot('SendMessage',[
   'chat_id'=>$bass,
        'text'=>"<b>🚫😡Sizni ⛔bu botda bloklashdi🚫. Endi botimizdan foydalana olmaysiz!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}

if($type=="private"){
if($text == "🚫Bandan Olish✅" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$text](tg://user?id=$text)  Bandan olindi" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]);
      }
if($okuser){ 
      bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "*Salom*  [$name](tg://user?id=$uid)  Sizga Xush Xabar Bor!
Siz [Adminimiz](tg://user?id=$admin) Tomonidan Bandan Olindingiz!
Endi Botni Ishlatishingiz mumkin!
Qayta /start Bosing!" ,
       'parse_mode'=>'markdown', 
       ]);
}

if($tx == "🗳Bot Kodi🗳"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>new CURLfile(__FILE__),
]);
}else{
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"*Bot kodi kerak boʻlsa dasturchiga murojaat qiling!
	Dasturchi: @Avazbek_Dev*",
	'parse_mode'=>"markdown",
]);
}
}
?>
