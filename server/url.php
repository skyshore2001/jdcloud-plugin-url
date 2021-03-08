<?php

require_once('app.php');

class UrlApp extends AppBase
{
	protected function onExec()
	{
		$p = mparam("p");
		$param = json_decode(jdEncrypt($p, "D"), true);
		if (!$param) {
			throw new MyException(E_PARAM);
		}
		$_GET = $param["get"];
		$_POST = $param["post"];
		if ($param["ses"]) {
			session_id($param["ses"]);
		}
		// fix APP
		if (@$param["get"]["_app"]) {
			global $APP;
			$APP = $param["get"]["_app"];
			session_name($APP . "id");
		}
	}
}

$app = new UrlApp();
$ret = $app->exec();
require_once("api.php");
