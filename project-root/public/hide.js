const button = document.getElementById('showup');
const hiddenDiv = document.getElementById('div-hide');

button.addEventListener('click', () => {
  if (hiddenDiv.style.display === 'block') {
    hiddenDiv.style.display = 'none';
  } else {
    hiddenDiv.style.display = 'block';

    const marquee = document.querySelector('.marquee');

    marquee.remove();
    const newMarquee = document.createElement('marquee');
    newMarquee.classList.add('marquee');
    newMarquee.setAttribute('behavior', 'scroll');
    newMarquee.setAttribute('direction', 'left');
    newMarquee.innerText = 'You just got rickrolled, take the L Ha HA Ha';

    hiddenDiv.appendChild(newMarquee);
  }
});