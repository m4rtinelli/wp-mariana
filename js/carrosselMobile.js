document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".work");
  const nextButton = document.querySelector(".next-carrossel-work");
  const prevButton = document.querySelector(".back-carrossel-work");
  const currentCounter = document.querySelector(".work-current-counter span");
  const totalCounter = document.querySelector(".work-last-counter span");
  const slideWidth = slides[0].offsetWidth;
  const gap = 48;
  let currentIndex = 0;
  const totalSlides = slides.length;

  // Seletor da barra de progresso
  const progressBar = document.querySelector(".progress-bar");

  // Atualize o contador total
  totalCounter.textContent = totalSlides;

  function updateCarousel() {
    const offset = (slideWidth + gap) * currentIndex;
    slides.forEach((slide) => {
      slide.style.transform = `translateX(-${offset}px)`;
    });

    // Atualize o contador atual
    currentCounter.textContent = currentIndex + 1;

    // Atualize a barra de progresso
    const progressPercentage = (currentIndex / (totalSlides - 1)) * 100;
    progressBar.style.width = `${progressPercentage}%`;
  }

  nextButton.addEventListener("click", function () {
    if (currentIndex < totalSlides - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Volta para o primeiro slide
    }
    updateCarousel();
  });

  prevButton.addEventListener("click", function () {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalSlides - 1; // Volta para o último slide
    }
    updateCarousel();
  });

  // Funcionalidade de swipe para mobile
  let startX = 0;
  let endX = 0;
  let isDragging = false;

  slides.forEach((slide) => {
    slide.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
      isDragging = false; // Reinicia o estado de arrasto
    });

    slide.addEventListener("touchmove", (e) => {
      endX = e.touches[0].clientX;
      if (Math.abs(startX - endX) > 30) {
        // Threshold de 30px para arrastar
        isDragging = true;
      }
    });

    slide.addEventListener("touchend", () => {
      if (isDragging) {
        if (startX > endX) {
          // Swipe para a esquerda (próximo slide)
          nextButton.click();
        } else if (startX < endX) {
          // Swipe para a direita (slide anterior)
          prevButton.click();
        }
      }
    });
  });

  // Inicialize o carrossel na primeira imagem
  updateCarousel();
});
