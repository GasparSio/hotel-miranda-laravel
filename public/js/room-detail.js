//SLIDER FOOD
const cardsContainerDetail = document.querySelector(".room__detail-cards-container");
const prevBtnDetail = document.querySelector(".prev-btn-detail");
const nextBtnDetail = document.querySelector(".next-btn-detail");

let cardIndexDetail = 0;
const numCardsDetail = document.querySelectorAll(".room__detail-rooms-slider").length;

function showCardFood(index) {
  const cards = document.querySelectorAll(".room__detail-rooms-slider");
  cardsContainerDetail.style.transform = `translateX(-${index * 320}px)`;
}

prevBtnDetail.addEventListener("click", () => {
  cardIndexDetail = (cardIndexDetail - 1 + numCardsDetail) % numCardsDetail;
  showCardFood(cardIndexDetail);
});

nextBtnDetail.addEventListener("click", () => {
  cardIndexDetail = (cardIndexDetail + 1) % numCardsDetail;
  showCardFood(cardIndexDetail);
});