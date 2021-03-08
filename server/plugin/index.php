function api_getShareUrl()
{
	$param = [
		"get" => $_GET,
		"post" => $_POST,
		"ses" => session_id()
	];
	$p = json_encode($param, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	//addLog($p);
	return makeUrl(getBaseUrl() . "url.php", ["p"=>jdEncrypt($p)]);
}
