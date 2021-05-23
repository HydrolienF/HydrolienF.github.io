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
}
function updateVersion(jsonObj) {
  const lastVersion = jsonObj['lastVersion'];
  const lastStableVersion = jsonObj['lastStableVersion'];
  document.getElementById("lastVersionWindows").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+"Windows.zip";
  document.getElementById("lastVersionWindows").textContent=lastVersion;
  document.getElementById("lastStableVersionWindows").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+"Windows.zip";
  document.getElementById("lastStableVersionWindows").textContent=lastStableVersion;

  document.getElementById("lastVersionMac").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastVersion+"/Formiko"+lastVersion+"Mac.zip";
  document.getElementById("lastVersionMac").textContent=lastVersion;
  document.getElementById("lastStableVersionMac").href = "https://github.com/HydrolienF/Formiko/releases/download/"+lastStableVersion+"/Formiko"+lastStableVersion+"Mac.zip";
  document.getElementById("lastStableVersionMac").textContent=lastStableVersion;

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
