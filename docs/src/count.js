const counter = document.getElementById('counter');
const updateCounter = async () => {  // async permet de mettre les "await", await dis au programme d'attendre la rÃ©ponse de la requÃªte avant de continuer sa progression (pour Ã©viter les erreurs)
    const data = await fetch('https://api.countapi.xyz/hit/Formiko.fr/visits')
    // const data = await fetch('https://gist.githubusercontent.com/HydrolienF/2616f9d233c0e6c98d96b368fd04d088/raw/visitCounter.json') // lien qui vient du site counterapi.com
    const count = await data.json() // converti en javascript
    counter.innerHTML = count.value.toLocaleString("fr-FR")
    //we need to update value in gist
}
updateCounter();
