<!-- calendar container -->
<div id="calendar" class="calendar"></div>

<!-- calendar logic -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendar = document.getElementById('calendar');

        // Example dates (later replaced with PHP-based DB version)
        const reservedDates = ['2025-06-05', '2025-06-07'];

        const today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth();

        function renderCalendar(y, m) {
            const firstDay = new Date(y, m, 1).getDay();
            const daysInMonth = new Date(y, m + 1, 0).getDate();
            const monthName = new Date(y, m).toLocaleString('default', { month: 'long' });

            // header with dropdowns
            let html = `
            <div class="calendar-header">
                <button class="nav-btn" onclick="changeMonth(-1)">&#10094;</button>
                <select id="month-select" class="calendar-select">
                    ${Array.from({ length: 12 }, (_, i) =>
                `<option value="${i}" ${i === m ? 'selected' : ''}>${new Date(0, i).toLocaleString('default', { month: 'long' })}</option>`
            ).join('')}
                </select>
                <select id="year-select" class="calendar-select">
                    ${Array.from({ length: 9 }, (_, i) => {
                const yVal = today.getFullYear() - 4 + i;
                return `<option value="${yVal}" ${yVal === y ? 'selected' : ''}>${yVal}</option>`;
            }).join('')}
                </select>
                <button class="nav-btn" onclick="changeMonth(1)">&#10095;</button>
            </div>
            <div class="calendar-grid">
                <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
        `;

            for (let i = 0; i < firstDay; i++) html += '<div class="empty"></div>';

            for (let day = 1; day <= daysInMonth; day++) {
                const dateStr = `${y}-${String(m + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const isReserved = reservedDates.includes(dateStr);
                const isToday = day === today.getDate() && m === today.getMonth() && y === today.getFullYear();

                html += `<div class="day${isToday ? ' today' : ''}${isReserved ? ' reserved' : ''}">${day}</div>`;
            }

            html += '</div>';
            calendar.innerHTML = html;
        }

        // month nav buttons
        window.changeMonth = function(offset) {
            month += offset;
            if (month > 11) {
                month = 0;
                year++;
            } else if (month < 0) {
                month = 11;
                year--;
            }
            renderCalendar(year, month);
        };

        // dropdown listeners
        document.addEventListener('change', function (e) {
            if (e.target.id === 'month-select') {
                month = parseInt(e.target.value);
                renderCalendar(year, month);
            }
            if (e.target.id === 'year-select') {
                year = parseInt(e.target.value);
                renderCalendar(year, month);
            }
        });

        renderCalendar(year, month);
    });
</script>
