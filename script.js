
const hero = document.getElementById("js-hero");
const heroImages = hero.querySelectorAll(".hero__image");
const numberOfImages = heroImages.length;
let i = 1;

function kenBurns() {
  if (i === numberOfImages) i = 0;
  heroImages[i].classList.add("js-animating");
  if (i === 0) heroImages[numberOfImages - 2].classList.remove("js-animating");
  if (i === 1) heroImages[numberOfImages - 1].classList.remove("js-animating");
  if (i > 1) heroImages[i - 2].classList.remove("js-animating");
  i++;
}
window.setInterval(kenBurns, 10000);