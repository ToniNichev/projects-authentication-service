<html>
    <head>
      <link rel="stylesheet" href="styles.css">
      <script src="script.js"></script>
      <script>
        function receiveUserSignedInData(userData) {          
          document.querySelector("#myAccount").innerHTML = userData.email + ' (<a href="sign-out.php?site=siteone&page=index.php">log-out</a>)';

          userDataStringifyed = JSON.stringify(userData);
          setCookie('userData', userDataStringifyed, 5);

          closeSignInPopup();
          console.dir(userData, { depth: null });
        }

        function initOnLoad() {
          var userDataString = getCookie('userData');
          if(userDataString !== null) {
            userData = JSON.parse(userDataString);
            document.querySelector("#myAccount").innerHTML = userData.email + ' (<a href="sign-out.php?site=siteone&page=index.php">log-out</a>)';
          }
        }  
        
      </script>
    </head>
    <body onload="initOnLoad()">  
      <div id="sing-in-wrapper">
        <div id="sign-in-modal">          
          <div id="sign-in-iframe-inner">
            <div id="sign-in-iframe-header">
              <div id="sign-in-spacer"></div>
              <button id="sign-in-close" onclick="closeSignInPopup()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path fill="#ffffff" fill-rule="evenodd" d="M.224 17.846L8.75 9.559.224 1.282C.074 1.137 0 .96 0 .75 0 .54.075.363.224.217.374.073.557
                  0 .772 0c.216 0 .398.073.548.217l8.514 8.287L18.357.217c.15-.144.332-.217.546-.217.214 0
                  .394.073.54.217.15.146.224.323.224.533 0 .21-.075.387-.224.532L10.929 9.56l8.514
                  8.287c.15.145.224.321.224.527 0 .207-.075.382-.224.528-.143.149-.323.223-.54.223-.221
                  0-.403-.074-.546-.223l-8.523-8.277-8.514 8.277c-.153.149-.335.223-.545.223-.214
                  0-.398-.074-.55-.223-.15-.146-.225-.321-.225-.528 0-.206.075-.382.224-.527z"></path>
                </svg>
              </button>
            </div>
            <iframe src="https://public.toni-develops.com/examples/oauth/oauth-service/sign-in-iframe.php?site=sitetwo&page=index.php" frameborder="0" id="sign-in-iframe"></iframe>
          </div>
        </div>
      </div>  
      
      
      <h1>SITE THREE</h1>
      <header class="navHeader">
        <div id="mainMenuContainer">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li class="active"><a href="about.php">ABOUT</a></li>
          </ul>

        </div>
        <div id="myAccount">
          <a href="#" onclick="showSignInPopup()">Log-In</a>
        </div>        
      </header>
      <div style="clear:both"></div>
      <p>This is about page</p>
    </body>
</html>

