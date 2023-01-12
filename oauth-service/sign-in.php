<?php
session_start();
$_SESSION['site'] = $_GET['site'];
$_SESSION['returnPage'] = $_GET['page'];
?>

<html>
    <head>
        <style>
            #apple-auth-button {
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
        </style>

    </head>
    <body>
        <div id="signInPanel">
            
            <form action="https://appleid.apple.com/auth/authorize?" method="get">
                <input type="hidden" id="client_id" name="client_id" value="com.toni-develops.public.oauth-with-all-providers-service" />
                <input type="hidden" id="redirect_uri" name="redirect_uri" value="https://public.toni-develops.com/examples/oauth/oauth-service/callbacks/callback.php?provider=apple" />
                <input type="hidden" id="response_type" name="response_type" value="code id_token"/>
                <input type="hidden" id="scope" name="scope" value="name email" />
                <input type="hidden" id="response_mode" name="response_mode" value="form_post" />

                <button id="apple-auth-button" class="css-11s2kpt" type="submit" tabindex="0">
                <span class="css-1ujqpe8">
                    <img class="appleLogo" src="https://www.toni-develops.com/external-files/examples/assets/apple-logo.svg" alt="">
                </span>
                <span class="css-19r5em7"><span>Continue with Apple</span>
                </button> 
            </form>

          </div>        
    </body>
</html>

