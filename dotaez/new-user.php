<?php
include('httpful.phar');
$json = json_encode($_POST);
$get_request = 'http://127.0.0.1/dotaserver/user/newUser';
$response = \Httpful\Request::post($get_request)
->sendsJson()
->body($json)->send();
echo ('<script type="text/javascript">
				alert("Usuário inserido com sucesso!");
				window.location.href ="login.php";
				</script>');
