<?php

	require __DIR__ . '/vendor/autoload.php';

	require __DIR__ . '/secret_keys.php';

	use Orhanerday\OpenAi\OpenAi;

	
	$open_ai = new OpenAi($open_ai_key, $OrganizationID);


	$complete = $open_ai->completion([
	    'model' => 'text-davinci-003',
	    'prompt' => 'Write a tagline for an ice cream shop.',
	    'temperature' => 0.9,
	    'max_tokens' => 150,
	    'frequency_penalty' => 0,
	    'presence_penalty' => 0.6,
	]);

	$decodedResponse = json_decode($complete, true);
	print_r($decodedResponse['choices'][0]['text']);

?>