<?php
session_start();
ob_start();

require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/Entities/AccessToken.php');
require_once('Facebook/HttpClients/FacebookCurl.php');	
require_once('Facebook/HttpClients/FacebookHttpable.php');	
require_once('Facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;

//$appid = 'APP_ID';
$appid = '296109214133467';
//$appsecret = 'APP_SECRET';
$appsecret = 'c58b1b239bd0ba5a68bafe5b5cdb0115';

FacebookSession::setDefaultApplication($appid, $appsecret);

$helper = new FacebookRedirectLoginHelper('http://hyodelivery.com/');
try {
    $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
    echo $ex;
} catch(\Exception $ex) {
    echo $ex;
}


if ($session) {

  	$inforequest = new FacebookRequest( $session, 'GET', '/me?fields=id,name,email' );
  	$inforesponse = $inforequest->execute();

  	$infoObject = $inforesponse->getGraphObject(); 

	$userid = $infoObject->getProperty('id');              // To Get Facebook ID
  $fullname = $infoObject->getProperty('name'); // To Get Facebook full name
	$email = $infoObject->getProperty('email');    // To Get Facebook email ID

	$_SESSION['userid'] = $userid;           
	$_SESSION['fullname'] = $fullname;
	$_SESSION['email'] =  $email;

	$picrequest = new FacebookRequest( $session, 'GET', '/me/picture?type=large&redirect=false' );
	$picresponse = $picrequest->execute();

  	$picObject = $picresponse->getGraphObject(); 

  	$picture = $picObject->getProperty('url');

  	$_SESSION['url'] = $picture;


	header('Location: index.php');
    
} else {
  $loginUrl = $helper->getLoginUrl(array('scope' => 'email'));
 header("Location: ".$loginUrl);
}

?>