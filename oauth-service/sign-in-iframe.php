<?php
session_start();
$_SESSION['site'] = $_GET['site'];
$_SESSION['returnPage'] = $_GET['page'];
?>

<html>
    <head>
        <style>
            body {
            font-size: 12px;
            font-family: verdana;
            }            

            header {
                text-align: center;
                font-weight: bold;
            }

            header > div {
                height: 50px;
            }

            header > h2 {
              color: white;
            }

            #signInPanel {
                display: flex;
                flex-direction: column;
                margin: 0px auto 24px;
                width: 400px;
                padding: 32px 40px;
                background: rgb(255, 255, 255);
                border-radius: 3px;
                box-shadow: rgb(0 0 0 / 10%) 0px 0px 10px;
                box-sizing: border-box;
                color: rgb(94, 108, 132);
            }
            
            #signInPanel > div {
              padding: 10px;
            }

            #apple-auth-button, #google-auth-button {
                webkit-box-align: baseline;
                align-items: baseline;
                border-width: 0px;
                border-radius: 3px;
                box-sizing: border-box;
                display: inline-flex;
                font-size: inherit;
                font-style: normal;
                font-family: inherit;
                max-width: 100%;
                position: relative;
                text-align: center;
                text-decoration: none;
                transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
                white-space: nowrap;
                cursor: pointer;
                padding: 0px 10px;
                vertical-align: middle;
                width: 100%;
                -webkit-box-pack: center;
                justify-content: center;
                font-weight: bold;
                color: var(--ds-text,#42526E) !important;
                height: 40px !important;
                line-height: 40px !important;
                background: rgb(255, 255, 255) !important;
                box-shadow:  rgb(0 0 0 / 20%) 1px 1px 5px 0px !important           
            }

            #apple-auth-button > img, #google-auth-button > img {
                width:20px;
                height: 20px;
                position: relative;
                top: 3px;
                padding-right: 20px;                
            }
        </style>

        <script>

          function receiveUserSignedInData(userData) {
            parent.receiveUserSignedInData(userData);
          }          

          function prepareQSParams(qs) {
            var params = '';
            var l = 0;
            for(property in qs) {
              params += property + '=' + qs[property];
              l ++;
              if(l < Object.keys(qs).length) {
                params += '&';
              }
            }
            return params;            
          }

          // Show popup
          var popUpObj;

          function showModalPopUp(url)
          {
            popUpObj=window.open(
              url,
              "ModalPopUp",
              "toolbar=no," +
              "scrollbars=no," +
              "location=no," +
              "statusbar=no," +
              "menubar=no," +
              "resizable=0," +
              "width=500," +
              "height=640," +
              "left = 480," +
              "top=300"
            );

            popUpObj.focus();
          }   


          function signInWithApple() {
            var qs = {
              'client_id'     : 'com.toni-develops.public.oauth-with-all-providers-service',
              'redirect_uri'  : 'https://public.toni-develops.com/examples/oauth/oauth-service/callbacks/callback.php?provider=apple',
              'response_type' : 'code id_token',
              'scope'         : 'name email',
              'response_mode' : 'form_post'
            }

            var url = 'https://appleid.apple.com/auth/authorize?' + prepareQSParams(qs);            
            showModalPopUp(url);
          }

          function signInWithGoogle() {      
            var qs = {
              'client_id'     : '989056576533-mtef8cl5is5ogjh3np580ireurns7l5k.apps.googleusercontent.com',
              'redirect_uri'  : 'https://public.toni-develops.com/examples/oauth/oauth-service/callbacks/callback.php?provider=google',
              'response_type' : 'code',
              'scope'         : 'openid email profile',
              'state'         : '123'
            }

            var url = 'https://accounts.google.com/o/oauth2/v2/auth?' + prepareQSParams(qs);            
            console.log(">>>>", url);
            showModalPopUp(url);
          }          
        </script>

    </head>
    <body>
        <header>
            <div></div>
            <h2>SIGN IN SERVICE</h2>
            <div></div>
        </header>
        <div id="signInPanel">
            <!-- Sign-In with Apple -->
            <div class="signInAppleWrapper">
              <button id="apple-auth-button" type="button" tabindex="0" onclick="signInWithApple()">
                  <img class="appleLogo" src="https://www.toni-develops.com/external-files/examples/assets/apple-logo.svg" alt="Sign-in with Google">
                  <span>Continue with Apple</span>
              </button>
            </div>


            <!-- Sign-In with Google -->
            <div class="signInGoogleWrapper">
              <button id="google-auth-button" class="css-11s2kpt" type="submit" tabindex="0" onclick="signInWithGoogle()">
                  <img src="https://www.toni-develops.com/external-files/examples/assets/google-logo.svg" alt="Sign-in with Google">
                  <span>Continue with Google</span>
              </button>
            </div>


        </div>



    </body>
</html>

