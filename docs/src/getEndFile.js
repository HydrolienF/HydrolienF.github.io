function getEndFileName() {
  var os = navigator.oscpu || navigator.platform
  os = os.toLowerCase();
  if (os.includes("win")) {
    return "exe"
  } else if (os.includes("linux")) {
    return "deb"
  } else if (os.includes("mac")) {
    // return "dmg";
    return "jar"; //TODO fix mac version & change that.
  } else {
    return "jar";
  }
}
document.getElementById("lastStableVersionChooseOs").href = "https://github.com/HydrolienF/Kokcinelo/releases/latest/download/Kokcinelo." + getEndFileName();
