
document.addEventListener("DOMContentLoaded", function() {

    const productos = [
        {
          imagen: '../img/bookmark-fill.svg',
          titulo: 'Producto 1',
          descripcion: 'Descripción del Producto 1',
          precio: '$10.00',
        },
        {
          imagen: '../img/bookmark-check-fill.svg',
          titulo: 'Producto 2',
          descripcion: 'Descripción del Producto 2',
          precio: '$15.00',
        },
        {
          imagen: '../img/bookmark-star-fill.svg',
          titulo: 'Producto 3',
          descripcion: 'Descripción del Producto 3',
          precio: '$20.00',
        },
        {
          imagen: '../img/bookmark-fill.svg',
          titulo: 'Producto 4',
          descripcion: 'Descripción del Producto 4',
          precio: '$25.00',
        },
      ];
    
      // Obtener el contenedor de la grilla
      const gridContainer = document.querySelector('.grid');
    
      // Generar los elementos de la grilla
      productos.forEach(producto => {
        const gridItem = document.createElement('div');
        gridItem.classList.add('bg-gray-700', 'rounded-md', 'overflow-hidden', 'shadow-md', 'p-4', 'text-center');
    
        const imagen = document.createElement('img');
        imagen.src = producto.imagen;
        imagen.alt = producto.titulo;
        imagen.classList.add('mx-auto', 'mb-4', 'h-11', 'w-11', 'bg-green-600', 'rounded-xl', 'rounded-full', 'ring-2', 'ring-white', 'p-2');
    
        const titulo = document.createElement('h3');
        titulo.textContent = producto.titulo;
        titulo.classList.add('text-xl', 'font-bold', 'mb-2');
    
        const descripcion = document.createElement('p');
        descripcion.textContent = producto.descripcion;
        descripcion.classList.add('text-white', 'mb-2', 'italic', 'text-sm');
    
        const precio = document.createElement('p');
        precio.textContent = producto.precio;
        precio.classList.add('text-green-500', 'font-bold');
    
        gridItem.appendChild(imagen);
        gridItem.appendChild(titulo);
        gridItem.appendChild(descripcion);
        gridItem.appendChild(precio);
    
        gridContainer.appendChild(gridItem);
      });
})