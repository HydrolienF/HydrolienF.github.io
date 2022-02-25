const version = document.querySelector('version');
// const requestURL = 'https://gist.githubusercontent.com/HydrolienF/c7dbc5d2d61b749ff6878e93afdaf53e/raw/version.json';
// const request = new XMLHttpRequest();
// request.open('GET', requestURL);
// request.responseType = 'json';
// request.send();
async function setVersion() {
  const req = await fetch('https://gist.githubusercontent.com/HydrolienF/c7dbc5d2d61b749ff6878e93afdaf53e/raw/version.json');
  const jsonObj = await req.json();
  updateVersion(jsonObj);
  loadPersonalizedChoice(jsonObj);
}

async function loadPersonalizedChoice(jsonObj){
  var os = navigator.oscpu || navigator.platform
  os=os.toLowerCase();
  var osName = "null";
  // alert ("The os is: " + os);
  // alert (navigator.platform);
  if(os.includes("win")){
    osName="Windows";
    visibilite("download-frames-container");
  }else if(os.includes("linux")){
    osName="Linux";
    visibilite("download-frames-container");
  }else if(os.includes("mac")){
    // osName="Mac"; //TODO #393
    visibilite("download-frames-container");
  }else{
    // alert ("Os not identified, os is: " + os);
    visibilite("download-frames-container1");
    return;
  }
  const lastStableVersion = jsonObj['lastStableVersion'];
  if (osName=="Windows") {
    document.getElementById("lastStableVersionChooseOs").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+".msi";
  }else{
    document.getElementById("lastStableVersionChooseOs").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+osName+".zip";
  }
  document.getElementById("lastStableVersionChooseOs").textContent=osName+" "+lastStableVersion;
}

function updateVersion(jsonObj) {
  const lastVersion = jsonObj['lastVersion'];
  const lastStableVersion = jsonObj['lastStableVersion'];
  document.getElementById("lastVersionWindows").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+".msi";
  document.getElementById("lastVersionWindows").textContent=lastVersion;
  document.getElementById("lastStableVersionWindows").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+".msi";
  document.getElementById("lastStableVersionWindows").textContent=lastStableVersion;

  //TODO #393
  // document.getElementById("lastVersionMac").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+"Mac.zip";
  // document.getElementById("lastVersionMac").textContent=lastVersion;
  // document.getElementById("lastStableVersionMac").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+"Mac.zip";
  // document.getElementById("lastStableVersionMac").textContent=lastStableVersion;

  document.getElementById("lastVersionLinux").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+"Linux.zip";
  document.getElementById("lastVersionLinux").textContent=lastVersion;
  document.getElementById("lastStableVersionLinux").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+"Linux.zip";
  document.getElementById("lastStableVersionLinux").textContent=lastStableVersion;

  document.getElementById("lastVersion").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+".zip";
  document.getElementById("lastVersion").textContent=lastVersion;
  document.getElementById("lastStableVersion").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+".zip";
  document.getElementById("lastStableVersion").textContent=lastStableVersion;
}
// request.onload = function() {
//   const jsonObj = request.response;
//   updateVersion(jsonObj);
// }
setVersion();

function visibilite(itemName){
  document.querySelectorAll('#'+itemName).forEach((item, i) => {
    if (item.style.display == "none"){
      item.style.display = "" ;
      //TODO print hide insted.
      // document.getElementById("lastStableVersion").textContent="hide";
    } else {
      item.style.display = "none" ;
    }
  });
}
