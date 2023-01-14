<html>
    <head>
      <link rel="stylesheet" href="styles.css">
      <script src="script.js"></script>
      <script>
        function receiveUserSignedInData(userData) {
          document.querySelector("#myAccount").innerHTML = userData.email + ' (<a href="sign-out.php?site=siteone&page=abbout.php">log-out</a>)';

          userDataStringifyed = JSON.stringify(userData);
          setCookie('userData', userDataStringifyed, 5);

          console.dir(userData, { depth: null });
        }

        function initOnLoad() {
          var userDataString = getCookie('userData');
          if(userDataString !== null) {
            userData = JSON.parse(userDataString);
            document.querySelector("#myAccount").innerHTML = userData.email + ' (<a href="sign-out.php?site=siteone&page=about.php">log-out</a>)';
          }
        }        
      </script>      
    </head>
    <body onload="initOnLoad()">      
      <h1>SITE TWO</h1>
      <header class="navHeader">
        <div id="mainMenuContainer">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li class="active"><a href="about.php">ABOUT</a></li>
          </ul>

        </div>
        <div id="myAccount">
          <a href="#" onclick="showModalPopUp()">Log-In</a>
        </div>        
      </header>
      <div style="clear:both"></div>
      <p>About this product ...</p>
    </body>
</html>

