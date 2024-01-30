
// Verificar la clases en tiempo de ejecucion con MutationObserver
document.addEventListener("DOMContentLoaded", function() {
    const bodyElement = document.body;

    // ESTILOS 
    function contenedorFueraEstilos(contenedor, colorFuera) {
        contenedor.style.backgroundColor = colorFuera;
    }

    function contenedorDentroEstilos(contenedor, colorDentro){
        contenedor.style.backgroundColor = colorDentro;
    }

    function cambioDeClaseActivo(mutationList, observer) {
        const bodyClass = bodyElement.classList;

        const contenedorBusquedaFuera = document.getElementById('contenedorBusquedaFuera');
        const contenedorBusquedaDentro = document.getElementById('contenedorBusquedaDentro');
        const contenedorSeccionesFuera = document.getElementById('contenedorSeccionesFuera');
        const contenedorSeccionesDentro = document.getElementById('contenedorSeccionesDentro');
        const contenedorMainFuera = document.getElementById('contenedorMainFuera');
        const contenedorMainDentro = document.getElementById('contenedorMainDentro');
        const contenedorFooterFuera = document.getElementById('contenedorFooterFuera');
        
        const colorLight = {
            background: "#999",
            text: "#000",
            containerBackgroundOutside: "#888",
            containerBackgroundInside: "#777"
        };

        const colorDark = {
            background: "#111",
            text: "#fff",
            containerBackgroundOutside: "#222",
            containerBackgroundInside: "#333"
        };

        if (bodyClass.contains('light')) {
            bodyElement.style.backgroundColor = colorLight.background;
            bodyElement.style.color = colorLight.text;

            contenedorFueraEstilos(contenedorBusquedaFuera,
                colorLight.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorBusquedaDentro,
                colorLight.containerBackgroundInside)

            contenedorFueraEstilos(contenedorSeccionesFuera, 
                colorLight.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorSeccionesDentro, 
                colorLight.containerBackgroundInside);

            contenedorFueraEstilos(contenedorMainFuera, 
                colorLight.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorMainDentro, 
                colorLight.containerBackgroundInside);

            contenedorFueraEstilos(contenedorFooterFuera, 
                colorLight.containerBackgroundOutside);

        } else if (bodyClass.contains('dark')) {
            bodyElement.style.backgroundColor = colorDark.background;
            bodyElement.style.color = colorDark.text;

            contenedorFueraEstilos(contenedorBusquedaFuera,
                colorDark.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorBusquedaDentro,
                colorDark.containerBackgroundInside)

            contenedorFueraEstilos(contenedorSeccionesFuera, 
                colorDark.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorSeccionesDentro, 
                colorDark.containerBackgroundInside);

            contenedorFueraEstilos(contenedorMainFuera, 
                colorDark.containerBackgroundOutside);
            contenedorDentroEstilos(contenedorMainDentro, 
                colorDark.containerBackgroundInside);

            contenedorFueraEstilos(contenedorFooterFuera, 
                colorDark.containerBackgroundOutside);
        }
    }

    // FIN DE ESTILOS

    // Configuración del observador
    const observerConfig = {
        attributes: true,
        attributeFilter: ['class']
    };

    // Crea un nuevo observador con la función de manejo
    const observer = new MutationObserver(cambioDeClaseActivo);

    // Inicia la observación en el cuerpo con la configuración
    observer.observe(bodyElement, observerConfig);

    // También ejecuta la función al inicio para manejar el estado inicial
    cambioDeClaseActivo();
    
    // Sección de Contribuidores
    const contribuidores = [
        "https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80",
        "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
    ]
    
    contribuidores.forEach((src, index) => {
    const contribuidor = document.getElementById(`contribuidor${index + 1}`);
    if (contribuidor) {
        contribuidor.src = src;
        contribuidor.alt = `Contribuidor ${index + 1}`;
    }
    });
    // Fin Sección de Contribuidores

});

function toggleTheme(theme) {
    document.body.classList.remove('light', 'dark');
    document.body.classList.add(theme);
}

function toggleDropdown() {
    var dropdown = document.getElementById('theme-options');
    dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
}

// Cerrar el menú desplegable si se hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.matches('.bi')) {
        var dropdowns = document.getElementsByClassName('dropdown-menu');
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains('hidden')) {
                openDropdown.classList.add('hidden');
            }
        }
    }
}


