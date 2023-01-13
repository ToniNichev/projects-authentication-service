<?php

// Google app id
$googleClientID = '989056576533-mtef8cl5is5ogjh3np580ireurns7l5k.apps.googleusercontent.com';

// Google app secret
$googleClientSecret = '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';

// This is the URL we'll send the user to first to get their authorization
$authorizeURL = 'https://accounts.google.com/o/oauth2/v2/auth';

// This is Google's OpenID Connect token endpoint
$tokenURL = 'https://www.googleapis.com/oauth2/v4/token';

// The main application URL. Google will pass JWT token back to the main app
$redirectURL = 'https://public.toni-develops.com/examples/oauth/oauth-service/callbacks/callback.php?provider=google';

$usserInfoURL = 'https://www.googleapis.com/oauth2/v3/userinfo';
