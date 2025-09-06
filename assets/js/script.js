// Initialize animations
AOS.init({
  duration: 1000,
  easing: 'ease-in-out',
  once: true,
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.card');
  cards.forEach((card, index) => {
      setTimeout(() => {
          card.classList.add('fade-in');
      }, index * 200);
  });

  const images = document.querySelectorAll('.example-item img');
  images.forEach((image) => {
      image.addEventListener('mouseenter', () => {
          image.style.transform = 'scale(1.1)';
          image.style.transition = 'transform 0.3s ease';
      });
      image.addEventListener('mouseleave', () => {
          image.style.transform = 'scale(1)';
      });
  });
});
