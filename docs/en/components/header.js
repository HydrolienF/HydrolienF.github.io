const headerTemplate = document.createElement('template');

headerTemplate.innerHTML = `
  <header>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <nav>
      <ul id="buttons-bar">
        <a href="index.html"><li class="mainButton" id="button-home-page">Home</li></a>
        <a href="download.html"><li class="mainButton" style="background-color:#F8981D;" id="button-download-page">Download</li></a>
        <a href="https://github.com/HydrolienF/Formiko/"><li class="mainButton" id="button-github-page">Github</li></a>
        <a href="../Formiko/javadoc/index.html"><li class="mainButton" id="button-javadoc-page">Javadoc</li></a>
        <li>
          <script>
            function swapLanguage(){
              language = document.getElementById("languageForm").elements[0].value;
              var re = new RegExp('/[a-z]{2}/');
              document.location.href=document.location.href.replace(re,"/"+language+"/");
            }
          </script>
          <form action="." method="get">
            <select class="mainButton" id="languageForm" name="language" id="language" onchange="swapLanguage()">
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
`;

class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: 'closed' });

    shadowRoot.appendChild(headerTemplate.content);
  }
}

customElements.define('header-component', Header);
