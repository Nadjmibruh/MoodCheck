const monthNames = [
  "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

let currentMonth = 6; // July = 6 (0-indexed)
let currentYear = 2025;

const monthNameEl = document.getElementById("month-name");
const yearEl = document.getElementById("year");
const calendarBody = document.getElementById("calendar-body");
const scheduleList = document.getElementById("schedule-list");

// Example schedules
const schedules = {
  "2025-07-16": "8:30 am - Appointment with Adam Zikri",
  "2025-07-17": "2:05 pm - Appointment with Afikah Syahirah",
};

function generateCalendar(month, year) {
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  calendarBody.innerHTML = "";
  monthNameEl.textContent = monthNames[month];
  yearEl.textContent = year;

  let date = 1;
  for (let i = 0; i < 6; i++) {
    let row = document.createElement("tr");

    for (let j = 0; j < 7; j++) {
      let cell = document.createElement("td");

      if (i === 0 && j < firstDay) {
        cell.textContent = "";
      } else if (date > daysInMonth) {
        break;
      } else {
        cell.textContent = date;

        const fullDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(date).padStart(2, '0')}`;

        // Highlight dates with a schedule
        if (schedules[fullDate]) {
          cell.classList.add("scheduled");
        }

        // Add click listener
        cell.addEventListener("click", () => showSchedule(fullDate));
        date++;
      }

      row.appendChild(cell);
    }

    calendarBody.appendChild(row);
  }
}

function changeMonth(step) {
  currentMonth += step;

  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  } else if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }

  generateCalendar(currentMonth, currentYear);
  scheduleList.innerHTML = `<p>Select a date to view schedule.</p>`; // Reset right panel
}

function showSchedule(dateStr) {
  if (schedules[dateStr]) {
    scheduleList.innerHTML = `
      <ul>
        <li><strong>${dateStr}</strong><br>${schedules[dateStr]}</li>
      </ul>
    `;
  } else {
    scheduleList.innerHTML = `<p>No schedule on <strong>${dateStr}</strong>.</p>`;
  }
}

// Initial render
generateCalendar(currentMonth, currentYear);
