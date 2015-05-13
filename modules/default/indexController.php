<?php
class indexController extends BaseController {

	public function index($args) {
		$return = array();
		return $return;
	}

	public function addUser($args) {
		global $_REQUEST;
		$return['output']="no";
		if(isset($_REQUEST['firstname'])) $firstname=$_REQUEST['firstname']; else $firstname="";
		if(isset($_REQUEST['lastname'])) $lastname=$_REQUEST['lastname']; else $lastname="";
		if(isset($_REQUEST['email'])) $email=$_REQUEST['email']; else $email="";
		if(isset($_REQUEST['password'])) $password=$_REQUEST['password']; else $password="";
		$firstname=filter_var($firstname, FILTER_SANITIZE_STRING);
		$lastname=filter_var($lastname, FILTER_SANITIZE_STRING);
		$email=filter_var($email, FILTER_SANITIZE_EMAIL);
		$filterpassword=filter_var($password, FILTER_SANITIZE_STRING);
		if($filterpassword!=$password) $return["error"]="Passwort enthält ungültige Zeichen.";
		if($name=="") $return["error"]="Kein Name angegeben.";
		if($antwort=="") $return["error"]="Keine Antwort angegeben.";
		if($email=="") $return["error"]="Keine E-Mail angegeben.";
		if(isset($return["error"])) return $return;

		loadobject("user");
		$userModel = new UserModel;
		$userModel->setFirstname("");
		$userModel->setLastname($name);
		$userModel->setEmail($email);
		$userModel->setPassword($filterpassword);
		$userModel->setActivated(0);
		$code=md5(uniqid(rand(), true));
		$code=md5($code.$email);
		$userModel->setActivationcode($code);
		$user = $userModel->fetchByEmail();
		if(!empty($user)) {
			$return["error"]="Du hast Dich bereits eingetragen!";
			return $return;
		}
		$userModel->upsert();
		$return["error"]="eingetragen";
    	$this->mymail($code,$email);
		return $return;
	}

	public function activate($args) {
		loadobject("user");
    	$userModel = new UserModel;
		$code=$args["arg1"];
		$code=filter_var($code, FILTER_SANITIZE_STRING);
		$userModel->setActivationcode($code);
		$return["activated"] = $userModel->activate();
    	return $return;
	}

	public function mymail($code,$mail) {
	$empfaenger = $mail;
	// Betreff
	$betreff = 'Bitte Bestätige deine Anmeldung';

	// Nachricht
	$nachricht = '<html><head><title>Aktivierung Ihres Benutzerkontos</title></head><body> Bitte klicken Sie auf den folgenden Link, um Ihr Konto zu aktivieren:<br />  <a href="http://bestapp.example.com/default/index/activate/'.$code.'">klick</a><br /><br />  Falls das nicht möglich ist, kopiere folgende URL in die Adressleiste deines Browsers und rufe diese auf:<br />http://bestapp.example.com/default/index/activate/'.$code.'  </body>  </html>';

	// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
	$header  = 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// zusätzliche Header
	$header .= 'To: <'.$empfaenger.'>' . "\r\n";
	$header .= 'From: Best App <no-reply@example.com>' . "\r\n";

	// verschicke die E-Mail
	mail($empfaenger, $betreff, $nachricht, $header);
	}

}
?>
