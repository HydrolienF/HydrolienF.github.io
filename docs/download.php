<?php $lastStableVersion="1.15.3"; $lastVersion="1.12.1" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - Formiko</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap">
  </head>
  <body>
    <header>
      <h1 id="main-title">Formiko</h1>
      <nav>
        <ul id="buttons-bar">
          <li id="button-home-page"><a href="./index.html">Home</a></li>
          <li id="button-download-page"><a href="./download.html">Download</a></li>
          <li id="button-github-page"><a href="https://github.com/HydrolienF/Formiko/">Github</a></li>
          <li id="button-javadoc-page"><a href="./javadoc/index.html">Javadoc</a></li>
        </ul>
      </nav>
    </header>

    <div id="page">
      <h2>Download</h2>
      <p id="presentation">You're on our download page ! Here, you can download many versions, for Windows, MacOS, Linux and OS without Java.</p>
      <div id="download-frames-container">
        <div class="download-frame">
          <center><h3>Windows</h3></center>
          <!-- ICI METTRE LES LIENS POUR WINDOWS -->
          <h5 class="recommended">Recommended: </h5>
          🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Windows.zip">1.12.1</a>
          <h5 class="last">Last: </h5>
          🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Windows.zip">1.15.2</a>
        </div>
        <div class="download-frame">
            <center><h3>Mac</h3></center>
            <!-- ICI METTRE LES LIENS POUR MACOS -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Mac.zip">1.12.1</a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Mac.zip">1.15.2</a>
          </div>
          <div class="download-frame">
            <center><h3>Linux</h3></center>
            <!-- ICI METTRE LES LIENS POUR LINUX -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Linux.zip">1.12.1</a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Linux.zip">1.15.2</a>
          </div>
          <div class="download-frame">
            <center><h3>Without Java</h3></center>
            <!-- ICI METTRE LES LIENS SANS JAVA -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>.zip">1.12.1</a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/1.15.2/Formiko1.15.2.zip">1.15.2</a>
          </div>
      </div>
      <p>Other versions can be found <a href="https://mega.nz/folder/ioJCQIxC#iepxcJSIExYzui9GQG9RuQ">here</a>.</p>
      <p>All actions to launch the game have to be executed in its directory.</p>
      <p>Some antivirus blocks the execution of java, it is necessary to authorize the execution of java to play the game.</p>
      <p>If there is not "(32 bit)" in the version name, it use 64 bit java. If your computer is very old you may need a <a href="#https://adoptopenjdk.net/releases.html?variant=openjdk15&jvmVariant=hotspot">32 bit java version</a> on your computer if you want to play.</p>
      <h3>How to use the game ?</h3>
      <p id="windows"><span id="bold">Windows :</span> Launch game by double clicking on formiko.bat !</p>
      <p id="mac"><span id="bold">Mac :</span> Launch game by double clicking on formiko.sh or with command line : <code>./formiko.sh</code></p>
      <p id="linux"><span id="bold">Linux :</span> Before the launching : <code>chmod 700 formiko.sh</code> ! Then, start the game by double clicking on formiko.sh or with command line : <code>./formiko.sh</code> !</p>
    </div>
    <script type="text/javascript" src='./src//textContent//downloadTextContent.js'></script>
    <script type="text/javascript" src='./src/download.js'></script>
  </body>
</html>