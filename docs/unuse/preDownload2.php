<!DOCTYPE html>
<!--download.html is an auto generate file. Do not edit it or your modification will be deleted. Edit preDowload.php insted-->
<!--All download.html pages are create with 1 page. Edit this page to edit all pages.-->
<html lang="{languageKey}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{titleDownload} !</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo.png">
  </head>
  <body>

    <header>
      <h1 id="main-title">Formiko</h1>
      <nav>
        <ul id="buttons-bar">
          <li id="button-home-page"><a href="./index.html">{home}</a></li>
          <li id="button-download-page"><a href="./download.html">{download}</a></li>
          <li id="button-github-page"><a href="https://github.com/HydrolienF/Formiko/">Github</a></li>
          <li id="button-javadoc-page"><a href="./Formiko/javadoc/index.html">Javadoc</a></li>
          <li>
            <form action="index.html" method="get">
              <select name="language" id="language" onchange="this.form.submit()">
                <option id="selectALanguage" value="">{language}</option>
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
      <h2 id="download">{download}</h2>
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
          <h5 class="recommended">{recommended} : </h5>
          🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Windows.zip"><?php echo $lastStableVersion ?></a>
          <h5 class="last">{last} : </h5>
          🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Windows.zip"><?php echo $lastVersion ?></a>
        </div>
        <div class="download-frame">
            <center><h3>Mac</h3></center>
            <!-- ICI METTRE LES LIENS POUR MACOS -->
            <h5 class="recommended">{recommended} : </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Mac.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">{last} : </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Mac.zip"><?php echo $lastVersion ?></a>
          </div>
          <div class="download-frame">
            <center><h3>Linux</h3></center>
            <!-- ICI METTRE LES LIENS POUR LINUX -->
            <h5 class="recommended">{recommended} : </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>Linux.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">{last} : </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>Linux.zip"><?php echo $lastVersion ?></a>
          </div>
          <div class="download-frame">
            <center><h3>{withoutJava}</h3></center>
            <!-- ICI METTRE LES LIENS SANS JAVA -->
            <h5 class="recommended">{recommended} : </h5>
            🐞 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastStableVersion ?>/Formiko<?php echo $lastStableVersion ?>.zip"><?php echo $lastStableVersion ?></a>
            <h5 class="last">{last} : </h5>
            🔗 <a href="https://github.com/HydrolienF/Formiko/releases/download/<?php echo $lastVersion ?>/Formiko<?php echo $lastVersion ?>.zip"><?php echo $lastVersion ?></a>
          </div>
      </div>
      <p>{p1Download} <a href="https://github.com/HydrolienF/Formiko/releases">{here}</a>.</p>
      <p>{p2Download}.</p>
      <p>{p3Download}.</p>
      <p>{p4.1Download} <a href="#https://adoptopenjdk.net/releases.html?variant=openjdk15&jvmVariant=hotspot">{p4.2Download}</a> {p4.3Download}.</p>
      <h3 id="howToUse">{howToUse} ?</h3>
      <p id="windows"><span id="bold">Windows :</span> {htuWindows} !</p>
      <p id="mac"><span id="bold">Mac :</span> {htuMac} : <code>./formiko.sh</code></p>
      <p id="linux"><span id="bold">Linux :</span> {htuLinux} : <code>./formiko.sh</code> !</p>
    </div>
    <script type="text/javascript" src='./src//textContent//downloadTextContent.js'></script>
    <script type="text/javascript" src='./src/download.js'></script>
    <script data-ad-client="ca-pub-8253423813243235" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </body>
</html>
