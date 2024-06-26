//Para la animación al desplazarse
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.visibility = 'visible';
                entry.target.classList.add('animate__fadeInUp'); // Agrega la clase de animación al elemento
            }
        });
    }, { threshold: 0.5 });

    // Observa todas las imágenes con clase .img-fluid
    document.querySelectorAll('.img-fluid').forEach(img => {
        observer.observe(img);
    });
});