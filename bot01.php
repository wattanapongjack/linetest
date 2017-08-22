<?php
$access_token = '3XZyLqGB2iDayn7DrbwzEIyouwUuNfBIOfnAayMWBo0flDU9ENfFwmjWgfZDQfw+ec1cWlpKQXgD2UQGFqxydiL/PKamS7lTS0XXJSh+x9l8ntX3Aj0sbc0fCDvSNBbAfZNuiPmqkSp08bBy7b/LgQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			echo $text;
		}
	}

echo "OK";