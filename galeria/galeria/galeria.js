const filterElements = document.querySelector('.categories_pag_places');
const galleryItems = document.querySelectorAll('.galery_card_pag_places');

filterElements.addEventListener("click", (event) => {
    if (event.target.classList.contains("filter_items")) {
        // Remover la clase 'active' del elemento previamente seleccionado
        const activeItem = filterElements.querySelector('.active');
        if (activeItem) {
            activeItem.classList.remove('active');
        }
        event.target.classList.add('active');

        // Obtener el valor del filtro desde el atributo data-filter
        const filterValue = event.target.getAttribute('data-filter');

        // Filtrar las imágenes en la galería
        galleryItems.forEach((item) => {
            if (item.classList.contains(filterValue) || filterValue === "all") {
                item.classList.remove("hide");
                item.classList.add("show");
            } else {
                item.classList.add("hide");
                item.classList.remove("show");
            }
        });
    }
});
