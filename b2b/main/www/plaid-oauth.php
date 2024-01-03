<?php
if(isset($_GET['oauth_state_id']) && isset($_COOKIE['sf_p_redirect'])) {
  setcookie('sf_p_received_state', "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], time()+60*60*1, $_COOKIE['sf_p_site_root']);
  header('Location: ' . $_COOKIE['sf_p_redirect']);
} else {
  header('Location: https://b2bfunding.net');
}
exit;