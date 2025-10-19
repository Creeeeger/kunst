const revealElements = document.querySelectorAll('[data-reveal]');
const cards = document.querySelectorAll('.story-card');

const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.2,
  }
);

revealElements.forEach(element => observer.observe(element));
cards.forEach(card => observer.observe(card));

const navToggle = document.querySelector('.nav-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = mobileMenu?.querySelectorAll('a');

const setMenuVisibility = isOpen => {
  if (!mobileMenu) return;
  mobileMenu.hidden = !isOpen;
  document.body.style.overflow = isOpen ? 'hidden' : '';
  navToggle.setAttribute('aria-expanded', String(isOpen));
};

if (navToggle && mobileMenu) {
  navToggle.addEventListener('click', () => {
    const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
    setMenuVisibility(!isOpen);
  });

  mobileMenu.addEventListener('click', event => {
    if (event.target === mobileMenu) {
      setMenuVisibility(false);
    }
  });

  navLinks?.forEach(link =>
    link.addEventListener('click', () => {
      setMenuVisibility(false);
    })
  );
}

const navigation = document.querySelector('.navigation');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
  if (!navigation) return;
  const currentScroll = window.scrollY;

  if (currentScroll > lastScrollY && currentScroll > 120) {
    navigation.style.transform = 'translateY(-110%)';
  } else {
    navigation.style.transform = 'translateY(0)';
  }

  lastScrollY = currentScroll;
});
