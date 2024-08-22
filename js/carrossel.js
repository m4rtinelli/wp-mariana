document.addEventListener("DOMContentLoaded", function () {
  const carrossel = document.querySelector(".carrossel-works");
  const slides = document.querySelectorAll(".carrossel-slide");
  const nextButton = document.querySelector(".carrossel-next-button");
  const prevButton = document.querySelector(".carrossel-back-button");
  const currentCounter = document.querySelector(".current-counter");
  const totalCounter = document.querySelector(".total-counter");

  let currentIndex = 0;
  const totalSlides = slides.length;
  let isDragging = false;
  let startX = 0;
  let endX = 0;
  let startY = 0;
  let endY = 0;

  // Atualize o contador total
  totalCounter.innerHTML = totalSlides;

  function updateCarousel() {
    slides.forEach((slide) => {
      slide.style.transform = `translateX(-${currentIndex * 100}%)`;
      slide.style.transition = "transform 0.5s ease";
    });
    currentCounter.innerHTML = currentIndex + 1;
  }

  function handleNextSlide() {
    if (currentIndex < totalSlides - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  }

  function handlePrevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalSlides - 1;
    }
    updateCarousel();
  }

  nextButton.addEventListener("click", handleNextSlide);
  prevButton.addEventListener("click", handlePrevSlide);

  updateCarousel();

  function startDrag(e) {
    isDragging = true;
    startX = e.pageX || e.touches[0].clientX;
    startY = e.pageY || e.touches[0].clientY;
  }

  function dragMove(e) {
    if (isDragging) {
      endX = e.pageX || e.touches[0].clientX;
      endY = e.pageY || e.touches[0].clientY;

      const deltaX = Math.abs(startX - endX);
      const deltaY = Math.abs(startY - endY);

      if (deltaX > deltaY && deltaX > 30) {
        // Apenas execute se o movimento em X for maior que o movimento em Y
        if (startX > endX) {
          handleNextSlide();
        } else {
          handlePrevSlide();
        }
        isDragging = false;
      }
    }
  }

  function endDrag() {
    isDragging = false;
  }

  carrossel.addEventListener("mousedown", startDrag);
  document.addEventListener("mousemove", dragMove);
  document.addEventListener("mouseup", endDrag);
  carrossel.addEventListener("mouseleave", endDrag);

  carrossel.addEventListener("touchstart", startDrag);
  carrossel.addEventListener("touchmove", dragMove);
  carrossel.addEventListener("touchend", endDrag);
});
