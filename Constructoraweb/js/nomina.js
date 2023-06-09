const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})
//Permite marcar 1 vez una tarea como hecha
const todoList = document.querySelector('.todo-list');
const listItems = todoList.querySelectorAll('li');

listItems.forEach((item) => {
  item.addEventListener('click', function() {
    if (this.classList.contains('not-completed')) {
      this.classList.remove('not-completed');
      this.classList.add('completed');
    } else {
      //this.classList.remove('completed');
      //this.classList.add('not-completed');
    }
  });
});

//crea un recordatorio semanal y mensual en el sistema
function createTodoLi(text) {
    const li = document.createElement("li");
    li.classList.add("not-completed");
    li.innerHTML = `
      <p>${text}</p>
      <i class='bx bx-dots-vertical-rounded'></i>
    `;
    return li;
  }

  function addTodoLiEverySunday() {
    const today = new Date();
    const dayOfWeek = today.getDay();

    if (dayOfWeek === 0) { // Domingo
      const todoList = document.getElementById("todo-list");
      const newLi = createTodoLi("Cosas por hacer (Domingo)");
      todoList.appendChild(newLi);
    }
  }

  function addTodoLiLastDayOfMonth() {
    const today = new Date();
    const lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    const currentDay = today.getDate();

    if (currentDay === lastDayOfMonth) {
      const todoList = document.getElementById("todo-list");
      const newLi = createTodoLi("Cosas por hacer (Último día del mes)");
      todoList.appendChild(newLi);
    }
  }

  // Ejecutar las funciones al cargar la página
  addTodoLiEverySunday();
  addTodoLiLastDayOfMonth();

//Date
window.onload = function() {
	// Obtener el elemento del párrafo donde se mostrará la fecha
	var fechaElement = document.getElementById("fecha");

	// Obtener la fecha actual
	var fechaActual = new Date();

	// Obtener los componentes de la fecha (día, mes, año)
	var dia = fechaActual.getDate();
	var mes = fechaActual.getMonth() + 1; // Se suma 1 ya que los meses en JavaScript van de 0 a 11
	var año = fechaActual.getFullYear();

	// Mostrar la fecha actual en el elemento del párrafo
	fechaElement.innerHTML = dia + "/" + mes + "/" + año;
};



const empleadoLink = document.getElementById('empleado'),
  		inicioLink = document.getElementById('inicio'),
		nominaLink = document.getElementById('nomina'),
		novedadesLink = document.getElementById('novedades'),
		liquidacionLink = document.getElementById('liquidacion'),
		seguridadLink = document.getElementById('seguridad'),
		contratosLink = document.getElementById('contratos'),
		reportesLink = document.getElementById('reportes'),
		dashboardContainer = document.querySelector('.dashboard-container'),
		empleadosContainer = document.querySelector('.empleados-container'),
		nominaContainer = document.querySelector('.nomina-container'),
		novedadesContainer = document.querySelector('.novedades-container'),
		liquidacionContainer = document.querySelector('.liquidacion-container'),
		seguridadContainer = document.querySelector('.seguridad-container'),
		contratosContainer = document.querySelector('.contratos-container'),
		reportesContainer = document.querySelector('.reportes-container');

inicioLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'block';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

empleadoLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'block';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

nominaLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'block';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

novedadesLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'block';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

liquidacionLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'block';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

seguridadLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'block';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'none';
});

contratosLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'block';
	reportesContainer.style.display = 'none';
});

reportesLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	empleadosContainer.style.display = 'none';
	nominaContainer.style.display = 'none';
	novedadesContainer.style.display = 'none';
	liquidacionContainer.style.display = 'none';
	seguridadContainer.style.display = 'none';
	contratosContainer.style.display = 'none';
	reportesContainer.style.display = 'block';
});

		



