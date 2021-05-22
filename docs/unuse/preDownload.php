<!DOCTYPE html>
<!--download.html is an auto generate file. Do not edit it or your modification will be deleted. Edit preDowload.php insted-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Download Formiko now !</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8S8YXFFEC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-K8S8YXFFEC');
    </script>
  </head>
  <body>
    <header>
      <h1 id="main-title">Formiko</h1>
      <nav>
        <ul id="buttons-bar">
          <li id="button-home-page"><a href="./index.html">Home</a></li>
          <li id="button-download-page"><a href="./download.html">Download</a></li>
          <li id="button-github-page"><a href="https://github.com/HydrolienF/Formiko/">Github</a></li>
          <li id="button-javadoc-page"><a href="./Formiko/javadoc/index.html">Javadoc</a></li>
          <li>
            <form action="download.html" method="get">
              <select name="language" id="language" onchange="this.form.submit()">
                <option id="selectALanguage" value="">Language</option>
                <option value="en">English</option>
                <option value="fr">Français</option>
                <option value="eo">Esperanto</option>
              </select>
            </form>
          </li>
        </ul>
      </nav>
    </header>

    <div id="page">
      <h2 id="download">Download</h2>
      <p id="presentation">You're on our download page ! Here, you can download many versions, for Windows, MacOS, Linux and OS without Java.</p>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Blocs test -->
        <ins id="ads" class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-8253423813243235"
        data-ad-slot="4800088274"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      <div id="download-frames-container">
        <div class="download-frame">
          <center><h3>Windows</h3></center>
          <!-- ICI METTRE LES LIENS POUR WINDOWS -->
          <h5 class="recommended">Recommended: </h5>
          🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Windows.zip"><?php echo $lastStableVersion ?></a>
          <h5 class="last">Last: </h5>
          🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Windows.zip"><?php echo $lastVersion ?></a>
        </div>
        <div class="download-frame">
            <center><h3>Mac</h3></center>
            <!-- ICI METTRE LES LIENS POUR MACOS -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Mac.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Mac.zip"><?php echo $lastVersion ?></a>
          </div>
          <div class="download-frame">
            <center><h3>Linux</h3></center>
            <!-- ICI METTRE LES LIENS POUR LINUX -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Linux.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Linux.zip"><?php echo $lastVersion ?></a>
          </div>
          <div class="download-frame">
            <center><h3>Without Java</h3></center>
            <!-- ICI METTRE LES LIENS SANS JAVA -->
            <h5 class="recommended">Recommended: </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">Last: </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>.zip"><?php echo $lastVersion ?></a>
          </div>
      </div>
      <p>Other versions can be found <a href="https://github.com/HydrolienF/Formiko/releases">here</a> or <a href="https://mega.nz/folder/ioJCQIxC#iepxcJSIExYzui9GQG9RuQ">here</a> for old version.</p>
      <p>All actions to launch the game have to be executed in its directory.</p>
      <p>Some antivirus blocks the execution of java, it is necessary to authorize the execution of java to play the game.</p>
      <p>If there is not "(32 bit)" in the version name, it use 64 bit java. If your computer is very old you may need a <a href="#https://adoptopenjdk.net/releases.html?variant=openjdk15&jvmVariant=hotspot">32 bit java version</a> on your computer if you want to play.</p>
      <h3 id="howToUse">How to use the game ?</h3>
      <p id="windows"><span id="bold">Windows :</span> Launch game by double clicking on formiko.bat !</p>
      <p id="mac"><span id="bold">Mac :</span> Launch game by double clicking on formiko.sh or with command line : <code>./formiko.sh</code></p>
      <p id="linux"><span id="bold">Linux :</span> Before the launching : <code>chmod 700 formiko.sh</code> ! Then, start the game by double clicking on formiko.sh or with command line : <code>./formiko.sh</code> !</p>
    </div>
    <script type="text/javascript" src='./src//textContent//downloadTextContent.js'></script>
    <script type="text/javascript" src='./src/download.js'></script>
    <script data-ad-client="ca-pub-8253423813243235" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </body>
</html>
