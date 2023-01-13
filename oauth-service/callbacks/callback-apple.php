<?php
$idToken = $_POST['id_token'];

function decodeIdToken($idToken) {
  // Split the JWT string into three parts
  $jwt = explode('.', $idToken);

  // Extract the middle part, base64 decode it, then json_decode it
  $idTokenDecoded = json_decode(base64_decode($jwt[1]), true);
  return $idTokenDecoded;
}

$userData = decodeIdToken($idToken);


// prepare parameters to pass back to the main app
$params = array(
  'email'       => $userData['email'],
  'returnPage'   => $returnPage
);

$returnUrl = $baseUrl . $returnPage;

file_put_contents('../logs/redirect.log', $returnUrl, FILE_APPEND);

// Redirect the user to the initial app passing user data as Query String parameters so the front end could use them.
header('Location: ' . $returnUrl . '?' . http_build_query($params));