
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Your Basic Site Informations -->
        <title>Pomodoro.me - Time Marker</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="A time marker to use with pomodoro technique" />
        <meta name="keywords" content="pomodoro, timer, pomodoro technique, management" />
        <meta name="author" content="Erick Jung" />
		<link rel="shortcut icon" href="favicon.ico" />

        <!-- Google WEB Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700|Abel' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700&amp;v2' rel='stylesheet' type='text/css'>
		<link href='css/fonts/bebas-neue-fontfacekit/stylesheet.css' rel='stylesheet' type='text/css'>

        <!-- jQuery JavaScript script -->
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery-ui-1.8.21.custom.min.js"></script>

        <!-- Site CSS Files -->
        <link href="css/main.css" rel="stylesheet" type="text/css"/>


        <!-- MyHint JavaScript jQuery plugin -->
        <script type="text/javascript" src="js/myHint.js"></script>

        <!-- Main JavaScript script -->
        <script type="text/javascript" src="js/main.js"></script>
	
		<script type='text/javascript' src="js/pomodoro-min.js"></script>
	
        <script type="text/javascript">
/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
/* ]]> */</script>   
    

    </head>
    <body>
        <div class="header wrapper blockCenter topPadding">
            <center><a href="index.html"><img src="images/pomodoro.png" alt="LOGO"/></a></center>
			<div class="clear">&nbsp;</div>
			<div class="clear">&nbsp;</div>
        </div>
        <div class="wrapper blockCenter rocketSpacer">
            <center><img src="images/line.png" alt="-----------------------------------"/></center>
			<div class="clear">&nbsp;</div>
			<div class="clear">&nbsp;</div>
        </div>

        <div class="lightWhite clear">
            <div class="clear">&nbsp;</div>
			<div class='time'> 
				<center><p id="timerPosition"></p></center>
			</div>
            <div class="clear">&nbsp;</div>
        </div>

        <div class="lightBlue clear">
            <div class="wrapper blockCenter subscribe">
                <button id="pomodoroButton" class="signUp floatLeft" style="margin-right:10px">Pomodoro</button>
				<button id="shortBreakButton" class="signUp floatLeft" style="margin-right:10px">Short Break <font size="1"><span id="shortTime">5</span></font></button>
				<button id="longBreakButton" class="signUp floatLeft" style="margin-right:30px">Long Break <font size="1"><span id="longTime">15</span></font></button>
                <button id="timerReset" class="mini_signUp_orange floatRight">Stop</button>
                <div class="signUp floatLeft" style="margin-right:10px"></div>
                <div class="signUp floatLeft" style="margin-right:10px">
                    <div class="slider_short"></div> 
                    <input type="hidden" id="hidden_short"/>
                </div>
                <div class="signUp floatLeft" style="margin-right:10px">
                    <div class="slider_long"></div> 
                    <input type="hidden" id="hidden_long"/>
                </div>
                <div class="clear"></div>
            </div>

            
        </div>
        <div class="darkBlue clear">
            <div class="wrapper blockCenter">
                <div class="about collumn floatLeft">
                    <span class="title">WHAT IS</span>
                    <p class="plainText">
                        "The Pomodoro Technique® is a way to get the most out of time management. 
                        Turn time into a valuable ally to accomplish what we want to do and chart 
                        continuous improvement in the way we do it.
                    </p>
                    <p class="plainText">
                        Francesco Cirillo created the Pomodoro Technique® in the 1980s. It is now 
                        practiced by professional teams and individuals around the world."
                    </p>
                    <p class="plainText">
                        <a href="http://www.pomodorotechnique.com/book/" target="_blank" style="color: #fff">Download</a> the Pomodoro Technique® book from the main <a href="http://www.pomodorotechnique.com" target="_blank" style="color: #fff">website</a>.
                    </p>

                </div>
                <div class="about collumn floatLeft leftSpacer">
                    <span class="title">HOW TO</span>
                    <p class="plainText">
                        This tool will help you to mark the pomodoro times (including the pomodoro, short break and long break). <br/>
						<b>You just need to remember that after start the timer, you can't pause.</b> 
						<br/><br/>
						To use you just need to:
                    </p>
                    <p class="plainText">
						- Pomodoro: Mark a time with 25 minutes;<br/>
						- Short Break: Select from 3 to 5 minutes;<br/>
						- Long Break: Select from 10 to 30 minutes;
                    </p>
                    <span class="title">DESKTOP NOTIFICATION</span>
                    <p class="plainText">
						To use desktop notification, please install on chrome: <br/>
						<center><a href="https://chrome.google.com/webstore/search/pomodoro.me" target="_blank"><img src="images/google_chrome_webstore.png" alt="Chrome Webstore"/></a></center>
                    </p>
                </div>
                <div class="contactUs collumn floatLeft leftSpacer">
                    <span class="title">DONATE</span>
                    <p class="plainText">
                    If you enjoy this tool and want to support our efforts, please consider donating.
                    </p>
                    <div class="floatLeft">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GRCW6Q5D8VG3G">
                    <input type="image" src="http://pomodoro.me/paypal_button.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    </div>
                    <div class="floatRight">
                    <a class="FlattrButton" style="display:none;" href="http://www.pomodoro.me"></a>
                    </div>

                    <div class="clear">&nbsp;</div>    
                    <div class="clear">&nbsp;</div>   
                    <span class="title">THIS TOOL</span>
                    <p class="plainText">
                    This tool is an unofficial application of the Pomodoro Technique®.
                    </p>
                    <p class="plainText">
                    This application is not affiliated with, associated with nor endorsed by the Pomodoro Technique® or Francesco Cirillo.
                    </p>
                    <p class="plainText">
                    The Pomodoro Technique® and Pomodoro™ are registered and filed trademarks by Francesco Cirillo.
                    </p>

                </div>
				
                <div class="clear">&nbsp;</div>
            </div>
			
        </div>
        <div class="wrapper blockCenter footer clear">
            <div class="copyright floatLeft">Copyright 2013 <a href="http://www.erickjung.com" target="_blank">Erick Jung</a> All Rights Reserved. 
            </div>
        </div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26843367-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>		

<!-- UserVoice JavaScript SDK (only needed once on a page) -->
<script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/Bk9nmO4l5dnUKZhPFegoYQ.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})()</script>

<!-- A tab to launch the Classic Widget -->
<script>
UserVoice = window.UserVoice || [];
UserVoice.push(['showTab', 'classic_widget', {
  mode: 'feedback',
  primary_color: '#cc6d00',
  link_color: '#007dbf',
  forum_id: 206303,
  tab_label: 'Feedback',
  tab_color: '#cc6d00',
  tab_position: 'middle-right',
  tab_inverted: false
}]);
</script>
    <script type="text/javascript" src="js/pomodoro-slider.js"></script>
    </body>
</html>