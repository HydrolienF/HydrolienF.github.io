const queryString = window.location.search
const urlParams = new URLSearchParams(queryString)

var language = navigator.language || navigator.userLanguage;
if(urlParams.get('language')) {language = urlParams.get('language')}
if(language!='eo' && language!='fr' && language!="en"){
  language="en";
}
translate()

function setLanguage(la){
  language=la
  translate()
}

function translate(){
  console.log(language)

  if(Object.keys(translations).indexOf(language) !== -1) {
    translations = translations[language]
    let title = document.getElementsByTagName('title')
    title.textContent = translations.title

    // navbar
    document.querySelector("#button-home-page a").textContent = translations.homeLink
    document.querySelector("#button-download-page a").textContent = translations.downloadLink
    document.querySelector("#selectALanguage").textContent = translations.selectALanguage

    //index
    document.querySelector("#welcome").textContent = translations.welcome
    document.querySelector("#presentation").textContent = translations.presentation
    document.querySelector("#trailer").textContent = translations.trailer
    document.querySelector("#discord").textContent = translations.discord

  }
}
