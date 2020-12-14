<?php
require ('inc/config.php');

if (!isset($username) || $discordVerify > 0) {
    Redirect($lien."/moi?discord=already");
}

ini_set('max_execution_time', 300); 


define('OAUTH2_CLIENT_ID', '781229889163362314');
define('OAUTH2_CLIENT_SECRET', '9PsKU2F1A08d3XFX0tVLZoqIeaxCRq36');

$authorizeURL = 'https://discord.com/api/oauth2/authorize';
$tokenURL = 'https://discord.com/api/oauth2/token';
$apiURLBase = 'https://discord.com/api/users/@me';


if(get('action') == 'login') {

  $params = array(
    'client_id' => OAUTH2_CLIENT_ID,
    'redirect_uri' => 'https://www.habbui.online/callback.php',
    'response_type' => 'code',
    'scope' => 'identify'
  );

  header('Location: https://discordapp.com/api/oauth2/authorize' . '?' . http_build_query($params));
  die();
}


if(get('code')) {

  $token = apiRequest($tokenURL, array(
    "grant_type" => "authorization_code",
    'client_id' => OAUTH2_CLIENT_ID,
    'client_secret' => OAUTH2_CLIENT_SECRET,
    'redirect_uri' => 'https://www.habbui.online/callback.php',
    'code' => get('code')
  ));
  $logout_token = $token->access_token;


  Redirect($_SERVER['PHP_SELF']. '?access_token='.$token->access_token);
}

if(get('access_token')) {
  $user = apiRequest($apiURLBase);

  $discord_id = $user->id;
  $discord_usertag = $user->username. "#" . $user->discriminator;
  $token = token(rand(20, 99));

  $req = $bdd->prepare("SELECT id FROM users WHERE discord_id = :discord_id");
  $req->execute(array("discord_id" => $discord_id));

  if($req->rowCount() < 1){
    $req = $bdd->prepare("UPDATE users SET discord_id = :discord_id, discord_usertag = :discord_usertag, discord_token = :discord_token   WHERE id = :id");
    $req->execute(array("discord_id" => $discord_id, "discord_usertag" => $discord_usertag, "discord_token" => $token, "id" => $id));    
    Redirect($lien.'/moi?discord=success');
  } else {
    Redirect($lien.'/moi?discord=error');
  }

 

} else {
  Redirect($_SERVER['PHP_SELF']. '?action=login');
}



function apiRequest($url, $post=FALSE, $headers=array()) {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $response = curl_exec($ch);


  if($post)
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

  $headers[] = 'Accept: application/json';

  if(get('access_token'))
    $headers[] = 'Authorization: Bearer ' . get('access_token');

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $response = curl_exec($ch);
  return json_decode($response);
}