<?php

require_once("api.php");

$env = getJDEnv();
$env->onBeforeActions[] = function () {
	$p = mparam("p");
	$param = jsonDecode(jdEncrypt($p, "D"));
	if (!$param) {
		logit("url.php: error param p=" . $p);
		jdRet(E_PARAM);
	}
	$_GET = $param["get"];
	$_POST = $param["post"];
	if ($param["ses"]) {
		session_id($param["ses"]);
	}
};

callSvc();
