<?php

include ('line-bot.php');

$channelSecret = '4564cf17f6fb37094b3b4681261cab10';
$access_token  = '3XZyLqGB2iDayn7DrbwzEIyouwUuNfBIOfnAayMWBo0flDU9ENfFwmjWgfZDQfw+ec1cWlpKQXgD2UQGFqxydiL/PKamS7lTS0XXJSh+x9l8ntX3Aj0sbc0fCDvSNBbAfZNuiPmqkSp08bBy7b/LgQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message, JSON_UNESCAPED_UNICODE));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
