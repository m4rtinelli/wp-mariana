const worksHome = Array.from(document.querySelectorAll(".work"));
const infoWorksHome = Array.from(
  document.querySelectorAll(".work-gallery-info")
);

const mostraTrabalhos = (event) => {
  const index = worksHome.indexOf(event.currentTarget);
  infoWorksHome[index].classList.toggle("anima-opacity");
};

worksHome.forEach((i) => {
  i.addEventListener("mouseenter", mostraTrabalhos);
  i.addEventListener("mouseleave", mostraTrabalhos);
});
