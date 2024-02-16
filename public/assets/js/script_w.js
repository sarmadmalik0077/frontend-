const indicator = document.querySelector('.nav-indicator');
const items = document.querySelectorAll('.nav-item');

function handleIndicator(el) {
  items.forEach(item => {
    item.classList.remove('is-active');
    item.removeAttribute('style');
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute('active-color');

  el.classList.add('is-active');
  el.style.color = el.getAttribute('active-color');
}

items.forEach((item, index) => {
  item.addEventListener('click', e => {handleIndicator(e.target);});
  item.classList.contains('is-active') && handleIndicator(item);
});


// active dective color of like icon faq
function changeColor(clickedElement) {
  // Check the current color and toggle it
  clickedElement.style.color = (clickedElement.style.color === 'black') ? '#1F62AE' : 'black';
}

// active dective color of heart icon slider card
function changeColorHeart(clickedElement) {
  // Toggle between the two colors
  clickedElement.style.color = (clickedElement.style.color === 'rgb(191, 191, 191)') ? '#ED1C24' : '#BFBFBF';
}



var carouselItems = [
  { imageSrc: '...', caption: 'First slide label', content: 'Some representative placeholder content for the first slide.' },
  { imageSrc: '...', caption: 'Second slide label', content: 'Some representative placeholder content for the second slide.' },
  { imageSrc: '...', caption: 'Third slide label', content: 'Some representative placeholder content for the third slide.' }
  // Add more items as needed
];