<?PHP

	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m-d H:i');

	$msg = "Agora são:  $date";

	$usuarios = array("1614b02c-ffe3-4ade-b2ac-c0a8b556b64d","fc2b4c37-df0c-439d-8717-101d68fe6c4e","12205dcf-5abd-463f-a182-f37ff7be36ed","fa2ebdef-330d-4aca-8f2b-17e24f49755b");


	function sendMessage($mensagem,$users){

	$headings = array(
      	'en' => 'English Title',
      	'pt' => 'Título'
    );
	$content = array(
		'en' => 'Text',
      	'pt' => $mensagem
    );

		$fields = array(
			'app_id' => "b4102571-7f84-4433-827f-f63e039aad05",
      'include_player_ids' => $users,
      'data' => array("foo" => "bar"),
      'headings' => $headings,
      'chrome_web_icon' => 'http://luvi.esy.es/imgRanor/96_96.fw.png',
      'small_icon' => 'http://luvi.esy.es/imgRanor/96_96.fw.png',
      'large_icon' => 'http://luvi.esy.es/imgRanor/96_96.fw.png',
			'contents' => $content
		);

		$fields = json_encode($fields);
  //  print("\nJSON sent:\n");
  //  print($fields);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic Yzg0MzMyZDgtYWNjYS00NWMzLThiMDUtMmZhZmU1ZjRhYzJk'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);

		return $response;
	}

	$response = sendMessage($msg, $usuarios);
	$return["allresponses"] = $response;
	$return = json_encode( $return);

  //print("\n\nJSON received:\n");
	//print($return);
//  print("\n");
?>
