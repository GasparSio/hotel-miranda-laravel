
//SLIDER FEATURES CARDS
const cardsContainer = document.querySelector(".cards-container");
const prevBtn1 = document.querySelector(".prev-btn1");
const nextBtn1 = document.querySelector(".next-btn1");

let cardIndex = 0;
const numCards = document.querySelectorAll(".card").length;

function showCard(index) {
  const cards = document.querySelectorAll(".card");
  cardsContainer.style.transform = `translateX(-${index * 320}px)`;
}

prevBtn1.addEventListener("click", () => {
  cardIndex = (cardIndex - 1 + numCards) % numCards;
  showCard(cardIndex);
});

nextBtn1.addEventListener("click", () => {
  cardIndex = (cardIndex + 1) % numCards;
  showCard(cardIndex);
});

//SLIDER FOOD
const cardsContainerFood = document.querySelector(".food__cards-container");
const prevBtnFood = document.querySelector(".prev-btn2");
const nextBtn2Food = document.querySelector(".next-btn2");

let cardIndexFood = 0;
const numCardsFood = document.querySelectorAll(".card-food").length;

function showCardFoodHome(index) {
  const cardsFood = document.querySelectorAll(".card-food");
  cardsContainerFood.style.transform = `translateX(-${index * 320}px)`;
}

prevBtnFood.addEventListener("click", () => {
  cardIndexFood = (cardIndexFood - 1 + numCardsFood) % numCardsFood;
  showCardFoodHome(cardIndexFood);
});

nextBtn2Food.addEventListener("click", () => {
  cardIndexFood = (cardIndexFood + 1) % numCardsFood;
  showCardFoodHome(cardIndexFood);
});



//SLIDER ROOM WITH SWIPER
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});