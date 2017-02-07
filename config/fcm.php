<?php

return [
	'driver'      => env('FCM_PROTOCOL', 'http'),
	'log_enabled' => true,

	'http' => [
		'server_key'       => env('FCM_SERVER_KEY', 'AAAAq46L3Wo:APA91bFg4YXsy0hT-1Q76MVAIO2zhF7n4KL_OvyNEb31jTA9OLjzrfufBV74HV0xooEyUdGnpwOzLKrHh38pZPgP3b7oLFs4oFj-8ExYn83pXfjm6oHntVk8cM8iuHJQyXp8QhNUSkOe'),
		'sender_id'        => env('FCM_SENDER_ID', '736830938474'),
		'server_send_url'  => 'https://fcm.googleapis.com/fcm/send',
		'server_group_url' => 'https://android.googleapis.com/gcm/notification',
		'timeout'          => 30.0, // in second
	]
];
