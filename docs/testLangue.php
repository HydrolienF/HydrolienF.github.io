<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /**
     * Détection automatique de la langue du navigateur
     * Les codes langues du tableau $aLanguages doivent obligatoirement être sur 2 caractères
     * Utilisation : $langue = autoSelectLanguage(array('fr','en','es','it','de','cn'), 'en')
     * https://apprendre-php.com/portions-de-script/script-23-dtection-automatique-de-la-langue-du-navigateur.html77
     * @param array $aLanguages Tableau 1D des langues du site disponibles (ex: array('fr','en','es','it','de','cn')).
     * @param string $sDefault Langue à choisir par défaut si aucune n'est trouvée
     * @return string La langue du navigateur ou bien la langue par défaut
     * @author Hugo Hamon
     * @version 0.1
     */
    function autoSelectLanguage($aLanguages, $sDefault = 'fr') {
      if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $aBrowserLanguages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach($aBrowserLanguages as $sBrowserLanguage) {
          $sLang = strtolower(substr($sBrowserLanguage,0,2));
          if(in_array($sLang, $aLanguages)) {
            return $sLang;
          }
        }
      }
      return $sDefault;
    }
    print "recherche de la langue"
    langue = autoSelectLanguage(array('fr','en','es','it','de','cn'), 'en');
    print $langue
    ?>
    <p>
    </p>
  </body>
</html>
