document.addEventListener('DOMContentLoaded', function () {
  const sliderSections = document.querySelectorAll('.rooms-slider');
  const prevButton = document.querySelector('.rooms-prev');
  const nextButton = document.querySelector('.rooms-next');
  const pagesContainer = document.querySelector('.rooms-pages');

  const itemsPerPage = 12;
  let currentPage = 0;
  let totalPages = Math.ceil(sliderSections.length / itemsPerPage);

  function showPage(page) {
    sliderSections.forEach((section, index) => {
      if (index >= page * itemsPerPage && index < (page + 1) * itemsPerPage) {
        section.style.display = 'block';
      } else {
        section.style.display = 'none';
      }
    });
  }

  function updatePagination() {
    totalPages = Math.ceil(sliderSections.length / itemsPerPage);
    pagesContainer.innerHTML = '';
    for (let i = 0; i < totalPages; i++) {
      const pageButton = document.createElement('button');
      pageButton.textContent = i + 1;
      if (i === currentPage) {
        pageButton.classList.add('active');
      }
      pageButton.addEventListener('click', () => {
        currentPage = i;
        showPage(currentPage);
        updatePagination();
      });
      pagesContainer.appendChild(pageButton);
    }
  }

  function goToPrevPage() {
    if (currentPage > 0) {
      currentPage--;
      showPage(currentPage);
      updatePagination();
    }
  }

  function goToNextPage() {
    if (currentPage < totalPages - 1) {
      currentPage++;
      showPage(currentPage);
      updatePagination();
    }
  }

  prevButton.addEventListener('click', goToPrevPage);
  nextButton.addEventListener('click', goToNextPage);

  showPage(currentPage);
  updatePagination();
});