<?php

//sozlash
include 'Telegram.php';
include 'efede.class.php';

$admin = '75643804';
$admin2 = '368844346';

$bot_token='7e56536313:AAEQ1b1-gergrshtrHGGfdIChuE';
$bot_name = 'GoldHostingBot';


$telegram = new Telegram($bot_token);
$efede3 = $telegram->getData();

//basic
$text = $efede3["message"]["text"];
$photo = $efede3["message"]["photo"];
$sana = $efede3["message"]["date"];
$chat_id = $efede3["message"]["chat"]["id"];



//File
$file_id = $efede3["message"]["document"]["file_id"];
$file_name = $efede3["message"]["document"]["file_name"];


// chat
$cfname = $efede3['message']['chat']['first_name'];
$cid = $efede3["message"]["chat"]["id"];
$clast_name = $efede3['message']['chat']['last_name'];
$turi = $efede3["message"]["chat"]["type"];
$username = $efede3['message']['chat']['username'];
$cusername = $efede3['message']['chat']['username'];
$ctitle = $efede3['message']['chat']['title'];

//user info
$ufname = $efede3['message']['from']['first_name'];
$uname = $efede3['message']['from']['last_name'];
$ulogin = $efede3['message']['from']['username'];
$uid = $efede3['message']['from']['id'];
$user_id = $efede3['message']['from']['id'];

//reply info
$sreply = $efede3['message']['reply_to_message']['text'];

//new_chat_participant info
$nfname = $efede3['message']['new_chat_participant']['first_name'];
$nbot = $efede3['message']['new_chat_participant']['is_bot'];
$nlogin = $efede3['message']['new_chat_participant']['username'];
$nid = $efede3['message']['new_chat_participant']['id'];

// channel post
$chid = $efede3['channel_post']['chat']['id'];
$chtitle = $efede3['channel_post']['chat']['title'];
$chturi = $efede3['channel_post']['chat']['type'];
$chusername = $efede3['channel_post']['chat']['username'];

$chwhois = $efede3['channel_post']['author_signature'];
$chdate = $efede3['channel_post']['date'];
$chpost = $efede3['channel_post']['message_id'];
$chtext = $efede3['channel_post']['text'];


// Test CallBack
$callback_query = $telegram->Callback_Query();


if ($callback_query !== null && $callback_query != '') {
    $data = $telegram->Callback_Data();

    $inreg = explode("#",$data);

    $intype  = $inreg[0];
    $us_id  = $inreg[1];
    $botname  = $inreg[2];
    $uslogin  = $inreg[3];

    if ($intype == 'javob') {

        $keyb = $telegram->buildForceReply($selective=false);
        $content = ['chat_id' => $telegram->Callback_ChatID(), 'reply_markup' => $keyb, 'text' => $data, 'parse_mode' => 'markdown'];
        $telegram->sendMessage($content);
    }

    if ($intype == 'stat') {

        $stats = stats();

        $reply = "📈Bot foydalanuvchilari:\n👤 $stats";
        $content = ['callback_query_id' => $telegram->Callback_ID(), 'text' => $reply, 'show_alert' => true];
        $telegram->answerCallbackQuery($content);
    }
}

    // umumiy menu
    $menu = [["⭕️Bot ulash","Token yangilash"],["Kodimni olish","Mening botim"],['👨‍💻Bot haqida']];
    $token_menu = [["bot faylni yuklash"],["tafsiya qilingan namumalar"],['orqaga']];
    //$templates = [["ErkatoyBot"],['orqaga']];
    $templates = [['orqaga']];
    $menu2 = [["bot faylni yuklash"],['tafsiya qilingan namumalar']];

    // token kiritilmagan yoki xato bulsa print
    $menu3 = [["Token ulash"]];

//shahsiy xabar
if ($turi == 'private')
{
    //start
    if (strlen($text) > 0){

        if ($text == '/start'){
            $option = $menu;
            $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Salom bot ulash uchun birinchi bot faylini menga yuboring. \n\nAgarda sizga bot kodlari kerak bo'lsa @pcode ga tashrif buyuring.", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
            exit;
        }

//PAYNET

        if ($text == '/get' || $text == 'Kodimni olish'){

            $file = '/user_location/'.$user_id.'/'.$user_id.'.php';
            //$file = file_get_contents($file);

            if (file_exists($file)) {
	            $code = curl_file_create($file,'image/png');	            
	            $content = ['chat_id' => $chat_id, 'caption'=>"Sizni $bot_name dagi kodingiz", 'document' => $code];
	            $telegram->sendDocument($content);
            } else {

	            $content = ['chat_id' => $chat_id, 'text' => "Sizni faylingiz topilmadi :(", 'parse_mode' => 'markdown'];
	            $telegram->sendMessage($content);
            }
        }

        if ($text == '/bot' || $text == 'Mening botim'){

            $token = '/user_location/'.$user_id.'/'.$user_id.'_token.txt';
            $token = file_get_contents($token);

            $getJson2 = file_get_contents("https://api.telegram.org/bot".$token."/getme");
            $natija2 = json_decode($getJson2);
            $name = $natija2->efede3->username;
            $matn = "Sizning botingiz:\n @$name";
            $option = $menu;
            $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => $matn, 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        // home page
        if ($text == '/home' || $text == 'orqaga'){
            $option = $menu;
            $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Kerakli bulimni tanlang", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        // home page
        if ($text == '#id'){
            $option = $menu;
            $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Sizning ID: *$user_id*", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        // ==================================================================================================================================================  //

        // bot ulash
        if ($text == '/add_bot' || $text == '⭕️Bot ulash'){
        
            $text2 = "Avval bot faylini yuboring menga ...";
            
            $keyb = $telegram->buildKeyBoard($menu, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => $text2, 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }


        // token ulash
        if ($text == '/token_insert' || $text == "Token ulash"){
            $keyb = $telegram->buildForceReply($selective=false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "♨️Botni ishga tushirish uchun Tokenni kiriting", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        // bot faylni yuklash
        if ($text == '/bot_upload' || $text == 'bot faylni yuklash'){
            $keyb = $telegram->buildForceReply($selective=false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Uzizni bot faylingizni yuboring", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        // yangi tokenni qabul qilish
        if ($sreply == '♨️Botni ishga tushirish uchun Tokenni kiriting' || $sreply == "Token qabul qilinmadi iltimos faqat tokenni o'zini kiriting⛔️"){

            $jav = setToken($text, $user_id);

            if($jav){

                $option = $token_menu;
                $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
                $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "@$jav aktivlashtirildi, kerakli bulimni tanlang!", 'parse_mode' => 'markdown'];
                $telegram->sendMessage($content);
            } else {

                $keyb = $telegram->buildForceReply($selective=false, $resize = true);
                $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Token qabul qilinmadi iltimos faqat tokenni o'zini kiriting⛔️", 'parse_mode' => 'markdown'];
                $telegram->sendMessage($content);
            }
        }

        //Token update
        if ($text == '/token_update' || $text == 'Token yangilash'){
            $keyb = $telegram->buildForceReply($selective=false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Yangi tokenni kiriting", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        if ($sreply == 'Yangi tokenni kiriting' || $sreply == "Yangi Token xato, qaytadan kiriting" || $sreply == "🎉Bot fayli saqlandi!, Tokenni kiriting endi"){

            //$jav = setToken($text, $chat_id);

            //

            $userFolder = 'user_location/'.$chat_id.'/';
            $userFile = 'user_location/'.$chat_id.'/'.$chat_id.'_token.txt';

            $userhook = 'user_location/'.$chat_id.'/'.$chat_id.'.php';

            $getJson = file_get_contents("https://api.telegram.org/bot".$text."/setWebhook?url=https://bot.pentest.ml/".$userhook);
            $natija = json_decode($getJson);

            if($natija->ok){

                $getJson2 = file_get_contents("https://api.telegram.org/bot".$text."/getme");
                $natija2 = json_decode($getJson2);

                if (file_exists($userFolder)){

                    $handle = fopen($userFile, 'w');
                    fwrite($handle, $text);
                    fclose($handle);
                } else {

                    mkdir("$userFolder");
                    $handle = fopen($userFile, 'w');
                    fwrite($handle, $text);
                    fclose($handle);
                }

                //return true;
                $jav = $natija2->result->username;
            }
            //
            if($jav){
                

                $option = $menu;
                $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
                $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "✅ @$jav aktivlashtirildi. Bemalol ishlatishingiz mumkin."];
                $telegram->sendMessage($content);

            } else {

                $keyb = $telegram->buildForceReply($selective=false, $resize = true);
                $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Yangi Token xato, qaytadan kiriting", 'parse_mode' => 'markdown'];
                $telegram->sendMessage($content);
            }
        }
        //end token update


        // 📊 Statistika
        if ($text == '/stat' || $text == '📊 Statistika') {

            $stats = stats();

            $option = [
                [
                $telegram->buildInlineKeyBoardButton('Yangilash', $url = '', $callback_data = 'stat#'),
                ],
            ];
            $keyb = $telegram->buildInlineKeyBoard($option);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "📈Bot foydalanuvchilari:\n👤 $stats"];
            $telegram->sendMessage($content);
        }

        if ($text == '/help' || $text == 'Yordam'){


            $content = ['chat_id' => $chat_id, 'text' => "Sizga bot kodlari kerak bo'lsa @PCode kanalidan olishingiz mumkin.\n\n Token yangilash uchun /token menyusidan foydalaning \n\n Agarda biron muammoga duch kelgan bo'lsangiz /feedback orqali biz bilan bo'glaning", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }

        if ($text == '/info' || $text == '👨‍💻Bot haqida'){
            $option = $menu;
            $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "💬 Botni yaratishimdan maqsad ko'pchilik saytdan reg qilolmayapti shuning uchun ushbu tekin hosting botni yaratdim😊. \n\n 👨‍💻Yaratuvchi: @pcode\n\n💡Tizim xavfsizligiga javobgar: * endi siz javobgarsiz *\n\n🕛Yaratilgan vaqti: 17.06.2019", 'parse_mode' => 'markdown'];
            $telegram->sendMessage($content);
        }
    }

    if (isset($file_id)) {
 
        $file = $telegram->getFile($file_id);
        $telegram_file_path = $file["result"]["file_path"];

        $time = date('d-m-y_h-i-s');

        $fileTemp = 'tmp/'.$chat_id.'.php';
        $warnfileFile = 'warnfile/'.$chat_id.'_'.$time.'.php';
        $banFile = 'banfile/'.$chat_id.'_'.$time.'.php';

        $telegram->downloadFile($telegram_file_path, $fileTemp);
        //

            $user_file  =   'user_location';

            //$fileTemp = "tmp/$chat_id.php";
            $userFolder = $user_file.'/'.$chat_id.'/';
            $userFile = $user_file.'/'.$chat_id.'/'.$chat_id.'.php';

            $fileTemps = file_get_contents($fileTemp);

            mkdir("$userFolder");
            $user_bot   =   file_put_contents($userFile, $fileTemps);

        //

        unlink($fileTemp);
        $keyb = $telegram->buildForceReply($selective=false, $resize = true);
        $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "🎉Bot fayli saqlandi!, Tokenni kiriting endi"];
        $telegram->sendMessage($content);
        exit;
    }
    // end document get
}
// end private chat

//PAYNET

if ($turi == 'supergroup' || $turi == 'group' || $turi == 'channel')
{

    if ($text == '/start') {
        $content = ['chat_id' => $chat_id, 'text' => "Salom $ufname $uname, men faqat lichkada ishlayman. Iltimos lichkamga uting"];
        $telegram->sendMessage($content);
    } 
}
