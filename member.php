<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body background="img.jpg">
<font color=#EDDA74><h2 >Welcome, <?=$_SESSION['sess_user'];?>! </font><a href="logout.php"><font color=#F5F5DC>Logout</a></h2></font>
<font size=3 color=#FFE5B4><p>Here We have List of Various Tamil Musical Instrument Sounds
</p></font>
<br>
<font size=4 color=#FFCBA4>Veena : </font><audio id="player1" src="veena.mp3"></audio>
<div>
    <button onclick="document.getElementById('player1').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player1').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player1').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player1').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Harmonium : </font><audio id="player2" src="Harmonium.mp3"></audio>
<div>
    <button onclick="document.getElementById('player2').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player2').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player2').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player2').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Violin : </font><audio id="player3" src="violin.mp3"></audio>
<div>
    <button onclick="document.getElementById('player3').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player3').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player3').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player3').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Tabla : </font><audio id="player4" src="tabla.mp3"></audio>
<div>
    <button onclick="document.getElementById('player4').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player4').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player4').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player4').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>ShrutiBox : </font><audio id="player5" src="shrutibox.mp3"></audio>
<div>
    <button onclick="document.getElementById('player5').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player5').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player5').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player5').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Guitar : </font><audio id="player6" src="guitar.mp3"></audio>
<div>
    <button onclick="document.getElementById('player6').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player6').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player6').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player6').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Sitar : </font><audio id="player7" src="sitar.mp3"></audio>
<div>
    <button onclick="document.getElementById('player7').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player7').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player7').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player7').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Saxaphone : </font><audio id="player8" src="saxaphone.mp3"></audio>
<div>
    <button onclick="document.getElementById('player8').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player8').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player8').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player8').volume-=0.1"><b>-</b></button>
</div>
<br>
<font size=4 color=#FFCBA4>Flute : </font><audio id="player9" src="flute.mp3"></audio>
<div>
    <button onclick="document.getElementById('player9').play()"><b>Play</b></button>
    <button onclick="document.getElementById('player9').pause()"><b>Pause</b></button>
    <button onclick="document.getElementById('player9').volume+=0.1"><b>+</b></button>
    <button onclick="document.getElementById('player9').volume-=0.1"><b>-</b></button>
</div>

</body>
</html>
<?php
}
?>


