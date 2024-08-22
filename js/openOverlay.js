const enterButton = document.getElementById("enter");
const overlay = document.querySelector(".overlay-home");
const customCursor = document.querySelector(".cursor-circle");
const homeButton = document.querySelector(".mariana-home-button");
const personalHomeButton = document.querySelector(".personal-home-button");

// Função para abrir o overlay
const openOverlay = () => {
  overlay.classList.add("overlay-open");

  customCursor.classList.add("black-border");
  sessionStorage.setItem("overlayOpen", "true");
};

// Função para verificar se o overlay já foi aberto
const checkOverlayStatus = () => {
  if (sessionStorage.getItem("overlayOpen") === "true") {
    overlay.classList.add("overlay-open");
    customCursor.classList.add("black-border");
  }
};

// Adicionar o evento de clique ao botão de entrada
if (enterButton) {
  enterButton.addEventListener("click", openOverlay);
}

// Verificar o status do overlay ao carregar a página
checkOverlayStatus();
