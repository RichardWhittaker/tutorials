<html>
  <head>
    <title>iRock - The Virtual Pet Rock</title>
    <script type="text/javascript" src="cookie.js"></script>
    <script type="text/javascript">
      var userName;

      function resizeRock() {
        document.getElementById("rockImg").style.height = (document.body.clientHeight - 100) * 0.9;
      }

      function greetUser() {
        if (navigator.cookieEnabled) {
        userName = readCookie("irock_username");
        }
        if (userName) {
            alert("Hello" + userName + ", I missed you.");
        }
        else{
        alert('Hello, I am your pet rock.');
        }
      }

      function touchRock() {
        if (userName) {
          alert("I like the attention, " + userName + ". Thank you.");
        }
        else {
          userName = prompt("What is your name?", "Enter your name here.");
          if (userName){
            alert("It is good to meet you, " + userName + ".");
            if (navigator.cookieEnabled) {
            writeCookie("irock_username", userName, 5 *365);
            }
            else{
              alert("Sorry cookies aren't supported/enabled in your browser. I won't remeber you later.")
            }
          }
        }
        document.getElementById("rockImg").src = "rock_happy.png";
        setTimeout("document.getElementById('rockImg').src = 'rock.png';", 5 * 60 * 1000);
      }

      
    </script>
  </head>

  <body onload="resizeRock(); greetUser();">
    <div style="margin-top:100px; text-align:center">
      <img id="rockImg" src="rock.png" alt="iRock" style="cursor:pointer" onclick="touchRock();" />
    </div>
  </body>
</html>
