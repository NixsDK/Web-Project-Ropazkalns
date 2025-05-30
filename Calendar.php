<!-- calendar container -->
<div id="calendar" class="calendar"></div>

<!-- calendar logic -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendar = document.getElementById('calendar');

        const reservedDates = ['2025-06-05', '2025-06-07']; // Example dates lai parbauditu vai strada
        //const reservedDates = json_encode($datesFromDB); Tas ko vajadzes izmantot kad bus datubaze
        const today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth();

        function renderCalendar(y, m) {
            const firstDay = new Date(y, m, 1).getDay();
            const daysInMonth = new Date(y, m + 1, 0).getDate();

            let monthName = new Date(y, m).toLocaleString('default', { month: 'long' });

            let html = `
                <div class="calendar-header">
                    <button onclick="changeMonth(-1)">‹</button>
                    <h3>${monthName} ${y}</h3>
                    <button onclick="changeMonth(1)">›</button>
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

        renderCalendar(year, month);
    });
</script>
