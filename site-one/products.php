<?php
  session_start();
  if(array_key_exists('email', $_GET)) {
    $_SESSION['email'] = $_GET['email'];
  }
?>
<html>
    <head>
      <link rel="stylesheet" href="styles.css">

      <script type = "text/javascript">
        // make query string params publicly available. Bad practice but for the purpose of this example it will work
        var qs = {};
        function initOnLoad() {
          const urlParams = new URLSearchParams(location.search);

          for (const [key, value] of urlParams) {
            qs[key] = value;
              console.log(`${key}:${value}`);
          }
          <?php
            if(array_key_exists('email', $_SESSION)) {
              echo 'qs.email = "' . $_SESSION['email'] . '";' . "\n";
            }
          ?>

          if(typeof qs.email !== 'undefined') {
            document.querySelector("#myAccount").innerHTML = qs.email + ' (<a href="https://public.toni-develops.com/examples/oauth/oauth-service/sign-out.php?site=siteone&page=products.php">log-out</a>)';
          }
        }
      </script>
    </head>
    <body onload="initOnLoad()">      
      <h1>Welcome to SITE ONE</h1>
      <header class="navHeader">
        <div id="mainMenuContainer">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li class="active"><a href="products.php">PRODUCTS</a></li>
            <li><a href="about.php">ABOUT</a></li>
          </ul>

        </div>
        <div id="myAccount">
          <a href="https://public.toni-develops.com/examples/oauth/oauth-service/sign-in.php?site=siteone&page=products.php">Log-In</a>
        </div>        
      </header>
      <div style="clear:both"></div>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </body>
</html>

