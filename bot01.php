<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '4564cf17f6fb37094b3b4681261cab10';
$access_token  = 'BT57H8u2tbx1NEwXaZ9a4JayoEaq59372ZHfLqg2oWYF2WwgxjJcJ51kh9zfSKqpec1cWlpKQXgD2UQGFqxydiL/PKamS7lTS0XXJSh+x9kiNkQWOfY4Dj86TyI4wBmYOhAQk6/eI33YSVudq0TfxQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
