function loadJS(FILE_URL, async) {
  let dynamicScript = document.createElement("script");
  dynamicScript.setAttribute("src", FILE_URL);
  dynamicScript.setAttribute("type", "text/javascript");
  dynamicScript.setAttribute("async", async);
  document.head.appendChild(dynamicScript);
}

function loadStylesheet(FILE_URL) {
  let dynamicStylesheet = document.createElement("link");
  dynamicStylesheet.setAttribute("href", FILE_URL);
  dynamicStylesheet.setAttribute("type", "text/css");
  dynamicStylesheet.setAttribute("rel", "stylesheet");
  document.head.appendChild(dynamicStylesheet);
}

loadStylesheet("assets/css/perfect-scrollbar.css");
loadJS("assets/js/perfect-scrollbar.js", true);

if (document.querySelector("nav [navbar-trigger]")) {
  loadJS("assets/js/navbar-collapse.js", true);
}

if (document.querySelector("[data-target='tooltip']")) {
  loadJS("assets/js/tooltips.js", true);
  loadStylesheet("assets/css/tooltips.css");
}

if (document.querySelector("[nav-pills]")) {
  loadJS("assets/js/nav-pills.js", true);
}

if (document.querySelector("[dropdown-trigger]")) {
  loadJS("assets/js/dropdown.js", true);
}

if (document.querySelector("[navbar-main]")) {
  loadJS("assets/js/sidenav-burger.js", true);
  loadJS("assets/js/navbar-sticky.js", true);
}

