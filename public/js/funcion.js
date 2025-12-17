document.querySelectorAll('.acordeon-btn').forEach((btn) => {
  btn.addEventListener('click', () => {
    const contenido = btn.nextElementSibling;

    // Toggle show/hide
    if (contenido.style.maxHeight) {
      contenido.style.maxHeight = null;
      btn.querySelector("i").style.transform = "rotate(0deg)";
    } else {
      contenido.style.maxHeight = contenido.scrollHeight + "px";
      btn.querySelector("i").style.transform = "rotate(180deg)";
    }
  });
});