const queryString = window.location.search
const urlParams = new URLSearchParams(queryString)

language = "en"
if(urlParams.get('language')) language = urlParams.get('language')

while(!translations) {

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

    // presentation
    document.querySelector("#presentation").textContent = translations.pagePresentation

    // downloads
    document.querySelectorAll(".recommended").forEach(elt => elt.textContent = translations.recommendedVersion)
    document.querySelectorAll(".last").forEach(elt => elt.textContent = translations.lastVersion)

    let i = 0
    Array.from(document.querySelectorAll("#page p")).slice(1, 5).forEach(elt => {
        if(typeof(translations["paragraphes"][i]) === "string") elt.childNodes[0].textContent = translations["paragraphes"][i]
        else {
            for(let j = 0; j < translations['paragraphes'][i].length; j++) {
                elt.childNodes[j].textContent = translations['paragraphes'][i][j]
            }
        }
        i++
    })

    // How to launch the game
    Array.from(["windows", "mac"]).forEach(os => {
        document.querySelector(`#${os}`).childNodes[1].textContent = translations["launching"][os]
    })
    document.querySelector('#linux').childNodes[1].textContent = translations["launching"]["linux"][0]
    document.querySelector('#linux').childNodes[3].textContent = translations["launching"]["linux"][1]
  }
}
