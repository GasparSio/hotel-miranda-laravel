//SLIDER FEATURES CARDS
const cardsContainerAbout = document.querySelector(".about__cards-container");
const prevBtnAbout = document.querySelector(".prev-btnAbout");
const nextBtnAbout = document.querySelector(".next-btnAbout");

let cardIndexAbout = 0;
const numCardsAbout = document.querySelectorAll(".about-card").length;

function showCard2(index) {
  const cards = document.querySelectorAll(".about-card");
  cardsContainerAbout.style.transform = `translateX(-${index * 320}px)`;
}

prevBtnAbout.addEventListener("click", () => {
  console.log('hola hola');
  cardIndexAbout = (cardIndexAbout - 1 + numCardsAbout) % numCardsAbout;
  showCard2(cardIndexAbout);
});

nextBtnAbout.addEventListener("click", () => {
  console.log('hola hola');
  cardIndexAbout = (cardIndexAbout + 1) % numCardsAbout;
  showCard2(cardIndexAbout);
});