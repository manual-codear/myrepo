<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <header>
    <div class="bottom-nav">
        <div class="logo"><p><span>Asma</span>sadiq</p></div>
 <ul>
   
   <li><a href="haris.html">home</a></li>
   <li><a href="affilate.html">products</a></li>
   <li><a href="page.html">videos</a></li>
   <li><a href="im2.html">Image</a></li>
   <li><a href="#">Contact Us</a></li>
   <li><a href="#">Privacy Policy</a></li>
   <li><a href="#">About</a></li>
   <i class="fa-solid fa-bars" id="btn"></i>
 </ul>
</div>
    <main>
    <div class="form-container">
        <div class="restric">
            <h1>Ask How We Can Help You</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, dicta?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat laboriosam porro quasi cum itaque ipsa consectetur dolore quos dolores tempora.</p>

        </div>
        <div class="form">
          <h2>Let's Start a Conversation</h2>
          <p>please note: all fields are required</p>
          <form action="userinfo.php" method="post">
            <div class="form-group">
            <label>firstname</label>
            <input type="text" name="firstname" placeholder="Name" >
          </div>
          <div class="form-group">
            <label>lastName</label>
            <input type="text" name="lastname">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username">
          </div>
          <div class="form-group">
            <label>EmailId</label>
            <input type="Email" name="Email" >
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="Password" >
          </div>
          <div class="form-group">
            <label>mobile</label>
            <input type="text" name="mobile" >
          </div>
          <div class="form-group">
            <label>comments</label>
           <textarea name="comments "cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn-sub">submit</button>
          </form>
        </div>
    </div>
    </main>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>