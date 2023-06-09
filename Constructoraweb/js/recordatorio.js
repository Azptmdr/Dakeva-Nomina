function createTodoLi(text) {
    const li = document.createElement("li");
    li.classList.add("not-completed");
    li.innerHTML = `
      <p>${text}</p>
    `;
    return li;
}

  function addTodoLiLastDayOfMonth() {
    const today = new Date();
    const lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    const currentDay = today.getDate();

    if (currentDay === lastDayOfMonth) {
      const todoList = document.getElementById("todo-list");
      const newLi = createTodoLi("Descargar reporte de nómina mensual");
      todoList.appendChild(newLi);
    }
  }

  addTodoLiLastDayOfMonth();