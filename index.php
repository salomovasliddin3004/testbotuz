<?php
/*
    ###########################################################
    ### * @Upload_hosting bot kodi                          ###
    ### * @author ShaXzod Jomurodov <shah9409@gmail.com>    ###
    ### * @contact https://t.me/idFox or @ads_buy           ###
    ### * @contact Channel https://t.me/pcode               ###
    ##########################################################
*/
$admin = '1024107352';
$admin2 = '';

$bot_token='1756006247:AAGT_cktvsg84OSLJrdReaNr0PNSl2dmiE8';

$adminList = [
  '1024107352',
'1024107352'
];

// token maydoni
define('bot_token',$bot_token);

    function xabarYubor(array $content)
    {
        return endpoint('sendMessage', $content);
    }

    function buildKeyBoard(array $options, $onetime = false, $resize = true, $selective = true)
    {
        $replyMarkup = [
            'keyboard'          => $options,
            'one_time_keyboard' => $onetime,
            'resize_keyboard'   => $resize,
            'selective'         => $selective,
        ];
        $encodedMarkup = json_encode($replyMarkup, true);

        return $encodedMarkup;
    }

    function endpoint($api, array $content, $post = true)
    {
        $url = 'https://api.telegram.org/bot'.bot_token.'/'.$api;
        if ($post) {
            $reply = sendAPIRequest($url, $content);
        } else {
            $reply = sendAPIRequest($url, [], false);
        }

        return json_decode($reply, true);
    }

    function sendAPIRequest($url, array $content, $post = true)
    {
        if (isset($content['chat_id'])) {
            $url = $url.'?chat_id='.$content['chat_id'];

            //$url = $url.'?'.http_build_query($content);

            unset($content['chat_id']);
            //unset($content);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $eFeDe3 = curl_exec($ch);
        if ($eFeDe3 === false) {
            $eFeDe3 = json_encode(['ok'=>false, 'curl_error_code' => curl_errno($ch), 'curl_error' => curl_error($ch)]);
        }
        curl_close($ch);

        return $eFeDe3;
    }

    function buildForceReply($selective = true)
    {
        $replyMarkup = [
            'force_reply' => true,
            'selective'   => $selective,
        ];
        $encodedMarkup = json_encode($replyMarkup, true);

        return $encodedMarkup;
    }

    function answerCallbackQuery(array $content)
    {
        return endpoint('answerCallbackQuery', $content);
    }

    function buildInlineKeyboardButton($text, $url = '', $callback_data = '', $switch_inline_query = null, $switch_inline_query_current_chat = null, $callback_game = '', $pay = '')
    {
        $replyMarkup = [
            'text' => $text,
        ];
        if ($url != '') {
            $replyMarkup['url'] = $url;
        } elseif ($callback_data != '') {
            $replyMarkup['callback_data'] = $callback_data;
        } elseif (!is_null($switch_inline_query)) {
            $replyMarkup['switch_inline_query'] = $switch_inline_query;
        } elseif (!is_null($switch_inline_query_current_chat)) {
            $replyMarkup['switch_inline_query_current_chat'] = $switch_inline_query_current_chat;
        } elseif ($callback_game != '') {
            $replyMarkup['callback_game'] = $callback_game;
        } elseif ($pay != '') {
            $replyMarkup['pay'] = $pay;
        }

        return $replyMarkup;
    }

    function buildInlineKeyBoard(array $options)
    {
        $replyMarkup = [
            'inline_keyboard' => $options,
        ];
        $encodedMarkup = json_encode($replyMarkup, true);

        return $encodedMarkup;
    }

    function getFile($file_id)
    {
        $content = ['file_id' => $file_id];

        return endpoint('getFile', $content);
    }

    function downloadFile($telegram_file_path, $local_file_path)
    {
        $file_url = 'https://api.telegram.org/file/bot'.bot_token.'/'.$telegram_file_path;
        $in = fopen($file_url, 'rb');
        $out = fopen($local_file_path, 'wb');

        while ($chunk = fread($in, 8192)) {
            fwrite($out, $chunk, 8192);
        }
        fclose($in);
        fclose($out);
    }

    // Helper for Uploading file using CURL
    if (!function_exists('curl_file_create')) {
        function curl_file_create($filename, $mimetype = '', $postname = '')
        {
            return "@$filename;filename="
            .($postname ?: basename($filename))
            .($mimetype ? ";type=$mimetype" : '');
        }
    }

    function sendVideo(array $content)
    {
        return endpoint('sendVideo', $content);
    }

$eFeDe3 = json_decode(file_get_contents('php://input'), true);

//basic
$text = $eFeDe3["message"]["text"];
$photo = $eFeDe3["message"]["photo"];
$sana = $eFeDe3["message"]["date"];
$chat_id = $eFeDe3["message"]["chat"]["id"];

//File
$file_id = $eFeDe3["message"]["document"]["file_id"];
$file_name = $eFeDe3["message"]["document"]["file_name"];


// chat
$cfname = $eFeDe3['message']['chat']['first_name'];
$cid = $eFeDe3["message"]["chat"]["id"];
$clast_name = $eFeDe3['message']['chat']['last_name'];
$turi = $eFeDe3["message"]["chat"]["type"];
$username = $eFeDe3['message']['chat']['username'];
$cusername = $eFeDe3['message']['chat']['username'];
$ctitle = $eFeDe3['message']['chat']['title'];

//user info
$ufname = $eFeDe3['message']['from']['first_name'];
$uname = $eFeDe3['message']['from']['last_name'];
$ulogin = $eFeDe3['message']['from']['username'];
$uid = $eFeDe3['message']['from']['id'];
$user_id = $eFeDe3['message']['from']['id'];

//reply info
$sreply = $eFeDe3['message']['reply_to_message']['text'];
if(preg_match('/^\/([Tt]ezlik)/',$text)){
$start_time = round(microtime(true) * 1000);
      $send=  bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Tezlik:",
            ])->result->message_id;
        
                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
                    bot('editMessagetext',[
                        "chat_id" => $cid,
                        "message_id" => $send,
                        "text" => "Tezlik:" . $time_taken . "ms",
                    ]);
}

//shahsiy xabar
if ($turi == 'private')
{
    //start
    if (strlen($text) > 0){

        if ($text == '/start'){

            $content = ['chat_id' => $chat_id, 'text' => "Hostingga yuklash uchun menga faylni yuboring", 'parse_mode' => 'markdown'];
            xabarYubor($content);
            exit;
        }              
    }

    if (in_array($chat_id, $adminList)) {
        if (isset($file_id)){

            $file = getFile($file_id);

            $telegram_file_path = $file["result"]["file_path"];

            downloadFile($telegram_file_path, $file_name);

            $content = ['chat_id' => $chat_id, 'text' => "$file_name - ni hostinga yukladim."];
            xabarYubor($content);
        }	// end document get  
    }   
}   // end private chat

?>