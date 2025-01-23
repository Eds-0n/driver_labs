const monthYearElement = document.getElementById("monthYear");
const calendarBody = document.querySelector("#calendar tbody");
const prevMonthButton = document.getElementById("prevMonth");
const nextMonthButton = document.getElementById("nextMonth");

let currentDate = new Date();

function renderCalendar(date) {
    // Limpar o corpo da tabela
    calendarBody.innerHTML = "";

    // Definir o mês e ano exibidos
    const month = date.getMonth();
    const year = date.getFullYear();
    monthYearElement.textContent = `${getMonthName(month)} ${year}`;

    // Definir o primeiro dia do mês
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0); // Último dia do mês
    const firstDayOfWeek = firstDay.getDay(); // Dia da semana do primeiro dia
    const totalDaysInMonth = lastDay.getDate(); // Total de dias no mês

    // Obter o dia atual
    const today = new Date();
    const currentDay = today.getDate();
    const currentMonth = today.getMonth();
    const currentYear = today.getFullYear();

    // Criar as células do calendário
    let day = 1;
    for (let row = 0; row < 6; row++) {
        const tr = document.createElement("tr");

        for (let col = 0; col < 7; col++) {
            const td = document.createElement("td");

            // Preencher com os dias
            if (row === 0 && col < firstDayOfWeek) {
                td.textContent = "";  // Deixa células vazias antes do primeiro dia
            } else if (day <= totalDaysInMonth) {
                td.textContent = day;

                // Verificar se o dia é o dia atual
                if (day === currentDay && month === currentMonth && year === currentYear) {
                    td.classList.add("today");
                }

                td.addEventListener("click", () => {
                    alert(`Dia ${td.textContent} clicado!`);
                });
                day++;
            }

            tr.appendChild(td);
        }

        calendarBody.appendChild(tr);

        // Se o mês terminou, não precisa continuar as linhas
        if (day > totalDaysInMonth) break;
    }
}

// Função para obter o nome do mês
function getMonthName(month) {
    const months = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];
    return months[month];
}

// Alterar o mês para o mês anterior
prevMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
});

// Alterar o mês para o próximo mês
nextMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
});

// Iniciar o calendário com o mês atual
renderCalendar(currentDate);
