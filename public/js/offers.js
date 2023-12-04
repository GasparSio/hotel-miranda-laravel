//SLIDER FOOD
const cardsContainerOffers = document.querySelector(".offers__detail-cards-container");
const prevBtnOffers = document.querySelector(".prev-btn-detail-offers");
const nextBtnOffers = document.querySelector(".next-btn-detail-offers");

let cardIndexOffers = 0;
const numCardsOffers = document.querySelectorAll(".offers__detail-rooms-slider").length;

function showCardOffers(index) {
    const cards = document.querySelectorAll(".offers__detail-rooms-slider");
    cardsContainerOffers.style.transform = `translateX(-${index * 320}px)`;
}

prevBtnOffers.addEventListener("click", () => {
  cardIndexOffers = (cardIndexOffers - 1 + numCardsOffers) % numCardsOffers;
  showCardOffers(cardIndexOffers);
});

nextBtnOffers.addEventListener("click", () => {
  cardIndexOffers = (cardIndexOffers + 1) % numCardsOffers;
    showCardOffers(cardIndexOffers);
});