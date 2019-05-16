<?php
function myErrorHandler($errorno, $errstr,$errfile,$errline)
{
	if((!error_reporting() & $errorno))
	{
		// Ky error nuk eshte perfshire ne definim
		return;
	}

	switch ($errno)
	{
		case E_USER_ERROR:
		echo "<b>Gabimi (Errori) IM </b>[$errno] $errstr<br/>";
		echo "Gabim fatal ne rreshtin $errline ne file-in $errfile";
		echo ", PHP ".PHP_VERSION. "(".PHP.OS.")<br/>";
		echo "Deshtim...";
		exit(1);
		break;


		case E_USER_WARNING :
		echo "<b> PARALAJMERIMI (WARNING) IM</b> [$errno] $errstr <br/>";
		break;


		case E_USER_NOTICE:
		echo "<b>NJOFTIMI (NOTICE ) IM </b> [$errno] $errstr <br/>";
		break;

		case E_ALL :
		echo "<b>Gabim fatal ne rreshtin $errline ne file-in $errfile";
		echo ",PHP ".PHP_VERSION. "(".PHP.OS.")</br>";
		echo "Deshtim";

		default :
		echo "Nuk eshte i njohur tipi i gabimit";
	}
	//Mos ekzekuto PHP internal error
	return true;

	}
$old_error_handler = set_error_handler("myErrorHandler");

  ?>
