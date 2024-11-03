const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
const daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
let currentMonth = 9;  // Outubro é o 10º mês (índice 9)
let currentYear = 2024;

const calendarElement = document.getElementById("calendar");
const monthYearElement = document.getElementById("month-year");

function generateCalendar(month, year) {
    calendarElement.innerHTML = ''; // Limpa o calendário anterior

    // Atualiza o título do mês e ano
    monthYearElement.textContent = `${monthNames[month]} ${year}`;

    // Cria a grid para os dias da semana
    const weekdays = document.createElement("div");
    weekdays.classList.add("weekdays");
    ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"].forEach(day => {
        const dayElement = document.createElement("div");
        dayElement.textContent = day;
        weekdays.appendChild(dayElement);
    });
    calendarElement.appendChild(weekdays);

    // Cria a grid para os dias do mês
    const daysGrid = document.createElement("div");
    daysGrid.classList.add("days");

    // Obtém o primeiro dia da semana do mês
    const firstDay = new Date(year, month, 1).getDay();

    // Preenche os dias em branco antes do primeiro dia
    for (let i = 0; i < firstDay; i++) {
        const emptyDay = document.createElement("div");
        daysGrid.appendChild(emptyDay);
    }

    // Preenche os dias do mês com campos para inserir o peso e a meta
    for (let day = 1; day <= daysInMonth[month]; day++) {
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");

        // Número do dia
        const dayNumber = document.createElement("span");
        dayNumber.textContent = day;
        dayElement.appendChild(dayNumber);

        // Campo para inserir o peso atual
        const weightInput = document.createElement("input");
        weightInput.type = "text";
        weightInput.placeholder = "Peso";
        dayElement.appendChild(weightInput);

        // Campo para inserir a meta
        const goalInput = document.createElement("input");
        goalInput.type = "text";
        goalInput.placeholder = "0,00";
        dayElement.appendChild(goalInput);

        daysGrid.appendChild(dayElement);
    }

    calendarElement.appendChild(daysGrid);
}

// Navegar para o mês anterior
document.getElementById("prev-month").addEventListener("click", () => {
    if (currentMonth === 0) {
        currentMonth = 11;
        currentYear--;
    } else {
        currentMonth--;
    }
    generateCalendar(currentMonth, currentYear);
});

// Navegar para o próximo mês
document.getElementById("next-month").addEventListener("click", () => {
    if (currentMonth === 11) {
        currentMonth = 0;
        currentYear++;
    } else {
        currentMonth++;
    }
    generateCalendar(currentMonth, currentYear);
});

// Inicializa o calendário para o mês atual (Outubro 2024)
generateCalendar(currentMonth, currentYear);