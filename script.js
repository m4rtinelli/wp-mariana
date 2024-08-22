const cursorCircle = document.querySelector(".cursor-circle");

//

//

// custom cursor
var mouseX = 0,
  mouseY = 0; // Posição atual do mouse
var circleX = 0,
  circleY = 0; // Posição do círculo
var speed = 0.5; // Velocidade da inércia, quanto menor, mais lento será o movimento

// Atualiza a posição do mouse
document.addEventListener("mousemove", (e) => {
  mouseX = e.clientX + window.scrollX; // Adiciona a posição horizontal do scroll
  mouseY = e.clientY + window.scrollY; // Adiciona a posição vertical do scroll
});

// Aumenta o tamanho do cursor ao entrar em elementos específicos
document.querySelectorAll(".expand-on-hover").forEach((element) => {
  element.addEventListener("mouseenter", () => {
    cursorCircle.classList.add("expand");
  });
  element.addEventListener("mouseleave", () => {
    cursorCircle.classList.remove("expand");
  });
});

// Função de animação para mover o círculo
function animate() {
  // Interpolação linear para criar inércia
  circleX += (mouseX - circleX) * speed;
  circleY += (mouseY - circleY) * speed;

  // Atualiza a posição do círculo
  cursorCircle.style.left = `${circleX}px`;
  cursorCircle.style.top = `${circleY}px`;

  // Chama a função novamente no próximo frame
  requestAnimationFrame(animate);
}

// Inicia a animação
animate();
//

// header mobile

const hamburgerButton = document.querySelector(".hamburger-button");
const overlayHeaderMobile = document.querySelector(".header-overlay-mobile");
const headerMarianaButton = document.querySelector(".mariana-home-button");

hamburgerButton.addEventListener("click", () => {
  hamburgerButton.classList.toggle("open");
  overlayHeaderMobile.classList.toggle("active");
  headerMarianaButton.classList.toggle("button-mariana-header");
});
