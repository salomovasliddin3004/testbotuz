<?php 

	$root = $_SERVER['DOCUMENT_ROOT'];
	$media = 'baza';

	$userId = $media.'/user_id.txt';
	$user_file	=	'user_location';

function setToken($token, $user_id){

	$userFolder = 'user_location/'.$user_id.'/';
	$userFile = 'user_location/'.$user_id.'/'.$user_id.'_token.txt';

	$userhook = 'user_location/'.$user_id.'/'.$user_id.'.php';

	$getJson = file_get_contents("https://api.telegram.org/bot".$token."/setWebhook?url=https://bot.pentest.ml/".$userhook);
    $natija = json_decode($getJson);

    if($natija->ok){

		$getJson2 = file_get_contents("https://api.telegram.org/bot".$token."/getme");
	    $natija2 = json_decode($getJson2);

		if (file_exists($userFolder)){

	    	$handle = fopen($userFile, 'w');
			fwrite($handle, $token);
			fclose($handle);
		} else {

			mkdir("$userFolder");
	    	$handle = fopen($userFile, 'w');
			fwrite($handle, $token);
			fclose($handle);
		}

    	//return true;
    	return $natija2->result->username;
    }
}



function setBotFile($bot_token, $user_id, $fileTemp){
	$user_file	=	'user_location';

	//$fileTemp = "tmp/$user_id.php";
	$userFolder = $user_file.'/'.$user_id.'/';
	$userFile = $user_file.'/'.$user_id.'/'.$user_id.'.php';

	$fileTemps = file_get_contents($fileTemp);


	mkdir("$userFolder");
	$user_bot	=	file_put_contents($userFile, $fileTemps);
	return true;
}

function chechToken($user_id){
	$user_file	=	'user_location';
	$userToken = $user_file.'/'.$user_id.'/'.$user_id.'_token.txt';
	$token = trim(file_get_contents($userToken));

	$getJson = file_get_contents("https://api.telegram.org/bot".$token."/getme");
    $natija = json_decode($getJson);

    if($natija->ok){
    	return true;
    } else { return false; }
}

function stats(){

	$userId = 'baza/user_id.txt';
	$userId = file_get_contents($userId);
    return substr_count($userId,"\n");
}



?>