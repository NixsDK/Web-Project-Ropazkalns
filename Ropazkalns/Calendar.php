<div class="calendar">
    <div class="calendar__picture">
        <h3>April  2024</h3> <!-- Display the month and year -->
    </div>
    <div class="calendar__date">
        <div class="calendar__day">M</div>
        <div class="calendar__day">T</div>
        <div class="calendar__day">W</div>
        <div class="calendar__day">T</div>
        <div class="calendar__day">F</div>
        <div class="calendar__day">S</div>
        <div class="calendar__day">S</div>
        <div class="calendar__number"></div>
        <div class="calendar__number"></div>
        <div class="calendar__number"></div>
        <div class="calendar__number">1</div>
        <div class="calendar__number">2</div>
        <div class="calendar__number">3</div>
        <div class="calendar__number">4</div>
        <div class="calendar__number">5</div>
        <div class="calendar__number">6</div>
        <div class="calendar__number">7</div>
        <div class="calendar__number">8</div>
        <div class="calendar__number">9</div>
        <div class="calendar__number">10</div>
        <div class="calendar__number">11</div>
        <div class="calendar__number">12</div>
        <div class="calendar__number">13</div>
        <div class="calendar__number">14</div>
        <div class="calendar__number">15</div>
        <div class="calendar__number">16</div>
        <div class="calendar__number">17</div>
        <div class="calendar__number calendar__number--current">7</div>
        <div class="calendar__number">19</div>
        <div class="calendar__number">20</div>
        <div class="calendar__number">21</div>
        <div class="calendar__number">22</div>
        <div class="calendar__number">23</div>
        <div class="calendar__number">24</div>
        <div class="calendar__number">25</div>
        <div class="calendar__number">26</div>
        <div class="calendar__number">27</div>
        <div class="calendar__number">28</div>
        <div class="calendar__number">29</div>
        <div class="calendar__number">30</div>
    </div>
</div>

<style>
    .calendar {
        position: relative;
        width: 300px;
        height: 100%; /* Set the height to 100% to fill the container */
        background-color: #fff;
        box-sizing: border-box;
        box-shadow: 0 5px 50px rgb(255, 255, 255);
        border-radius: 8px;
        overflow: hidden;
        display: flex; /* Use flexbox for positioning */
        flex-direction: column; /* Stack elements vertically
    }

    .calendar__picture {
        height: 50px; /* Adjusted height to accommodate year and month */

        padding: 20px;
        color: #000000;
        top: 9.5cm;
       /* background: #262626 url("https://images.unsplash.com/photo-1516912481808-3406841bd33c?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=183f2924ba5a8429441804609b2d4f61") no-repeat center / cover;*/
        text-shadow: 0 2px 2px rgb(255, 255, 255);
        box-sizing: border-box;
        display: flex; /* Use flexbox for positioning */
        justify-content: center; /* Center align text horizontally */
        align-items: center; /* Center align text vertically */
    }

    .calendar__date {
        padding: 20px;
        flex: 1; /* Allow the calendar grid to expand and fill remaining space */
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-gap: 10px;
        box-sizing: border-box;

    }

    .calendar__day {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 25px;
        font-weight: 600;
        color: #262626;
    }

    .calendar__number {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 25px;
        color: #262626;
        cursor: pointer;
    }

    .calendar__number--current {
        background-color: #009688;
        color: #fff;
        font-weight: 700;
    }
</style>

