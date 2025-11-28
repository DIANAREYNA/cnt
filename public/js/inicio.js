/* ===============================
   MENÚ RESPONSIVO CNT
   =============================== */

/* ---------- Selecciones ---------- */
const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const mobileExtra = document.querySelector('.mobile-extra');
const subscribeBlock = document.querySelector('.subscribe-block');
const footerMobile = document.querySelector('.footer-mobile');
const itemsWithSub = document.querySelectorAll('.menu > .has-sub');

/* ---------- Función abrir/cerrar menú ---------- */
function toggleMenu() {
  const isOpen = menu.classList.toggle('active');
  hamburger.classList.toggle('open', isOpen);
  hamburger.setAttribute('aria-expanded', String(isOpen));

  // Mostrar/ocultar bloques móviles
  const displayState = isOpen ? 'block' : 'none';

  if (mobileExtra) mobileExtra.style.display = displayState;
  if (subscribeBlock) subscribeBlock.style.display = displayState;
  if (footerMobile) footerMobile.style.display = displayState;
}

hamburger.addEventListener('click', toggleMenu);

/* ---------- Desktop: hover cambia icono ---------- */
itemsWithSub.forEach(item => {
  const icon = item.querySelector('.menu-link i');
  const submenu = item.querySelector('.submenu');

  // Hover (solo desktop)
  item.addEventListener('mouseenter', () => {
    if (window.innerWidth > 768 && icon) {
      icon.classList.remove('fa-arrow-up-right');
      icon.classList.add('fa-arrow-down-right');
    }
  });

  item.addEventListener('mouseleave', () => {
    if (window.innerWidth > 768 && icon) {
      icon.classList.remove('fa-arrow-down-right');
      icon.classList.add('fa-arrow-up-right');
    }
  });

  /* ---------- Mobile: click para abrir submenú ---------- */
  const link = item.querySelector('.menu-link');
  if (link) {
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        submenu.classList.toggle('active');
        icon.classList.toggle('fa-arrow-up-right');
        icon.classList.toggle('fa-arrow-down-right');
      }
    });
  }
});

/* ---------- Al cambiar tamaño de ventana ---------- */
window.addEventListener('resize', () => {
  // Si pasamos a desktop, resetea el menú móvil
  if (window.innerWidth > 768) {
    menu.classList.remove('active');
    hamburger.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');

    // Ocultar bloques móviles
    if (mobileExtra) mobileExtra.style.display = 'none';
    if (subscribeBlock) subscribeBlock.style.display = 'none';
    if (footerMobile) footerMobile.style.display = 'none';

    // Restablecer íconos
    itemsWithSub.forEach(item => {
      const icon = item.querySelector('.menu-link i');
      const submenu = item.querySelector('.submenu');
      if (icon) {
        icon.classList.remove('fa-arrow-down-right');
        icon.classList.add('fa-arrow-up-right');
      }
      if (submenu) submenu.classList.remove('active');
    });
  }
});

/* ---------- Aquí inicia el Javascript para el contenido de la página ---------- */
// ---------- CAROUSEL (vanilla JS) ----------
  (function(){
    const track = document.getElementById('carouselTrack');
    const slides = Array.from(track.children);
    const dotsContainer = document.getElementById('carouselDots');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let index = 0;
    let autoplayTimer = null;
    const slideCount = slides.length;

    // create dots
    slides.forEach((s,i)=>{
      const d = document.createElement('button');
      d.className = 'dot' + (i===0? ' active':'');
      d.setAttribute('aria-label','Ir al slide ' + (i+1));
      d.addEventListener('click',()=>goTo(i));
      dotsContainer.appendChild(d);
    });

    function update(){
      track.style.transform = 'translateX(' + (-index*100) + '%)';
      // dots
      Array.from(dotsContainer.children).forEach((d, i)=> d.classList.toggle('active', i===index));
    }
    function goTo(i){
      index = (i+slideCount)%slideCount;
      update();
      resetAutoplay();
    }
    prevBtn.addEventListener('click', ()=> goTo(index-1));
    nextBtn.addEventListener('click', ()=> goTo(index+1));

    function startAutoplay(){
      autoplayTimer = setInterval(()=> goTo(index+1), 5000);
    }
    function resetAutoplay(){ clearInterval(autoplayTimer); startAutoplay(); }

    // init
    update();
    startAutoplay();
    // pause on hover (desktop)
    track.addEventListener('mouseenter', ()=> clearInterval(autoplayTimer));
    track.addEventListener('mouseleave', ()=> startAutoplay());
  })();

  // ---------- Responsive tweak for stats: move two stats to .two-cols on mobile ----------
  (function(){
    const twoCols = document.querySelector('.two-cols');
    const stats = document.querySelector('.stats');
    if(!twoCols || !stats) return;
    const statItems = Array.from(stats.querySelectorAll('.stat'));
    function rearrange(){
      if(window.innerWidth <= 900){
        // leave lead as first, put the other two inside two-cols container
        twoCols.style.display = 'grid';
        twoCols.style.gridTemplateColumns = '1fr 1fr';
        // take stats[1] and stats[2] content into twoCols
        twoCols.innerHTML = '';
        twoCols.appendChild(statItems[1].cloneNode(true));
        twoCols.appendChild(statItems[2].cloneNode(true));
        // ensure lead shows full width (already in stats)
      } else {
        twoCols.style.display = 'none';
      }
    }
    window.addEventListener('resize', rearrange);
    rearrange();
  })();

  // ---------- SIMPLE: open mobile menu (if you have a mobile nav) ----------
  (function(){
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.querySelector('.mobile-menu'); // if you integrate one
    if(!hamburger) return;
    hamburger.addEventListener('click', ()=>{
      const expanded = hamburger.getAttribute('aria-expanded') === 'true';
      hamburger.setAttribute('aria-expanded', String(!expanded));
      // if you have a mobile menu element, toggle it here:
      if(mobileMenu) mobileMenu.classList.toggle('active');
    });
  })();