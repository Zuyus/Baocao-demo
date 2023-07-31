//calendar mini
function selectDate(date) {
    $('#calendar-wrapper').updateCalendarOptions({
        date: date
    });
}

var defaultConfig = {
    date: '07/08/2021',
    onClickDate: selectDate,
    showYearDropdown: true,
    startOnMonday: false,
    weekDayLength: 2,
    prevButton: '<i class="fa fa-chevron-left"></i>',
    nextButton: '<i class="fa fa-chevron-right"></i>',
    monthYearSeparator: ' ',
    showThreeMonthsInARow: true,
    enableMonthChange: true,
    enableYearView: false,
    showTodayButton: false,
    highlightSelectedWeekday: true,
    highlightSelectedWeek: false,
    showNonCurrentDates: false,
};

var calendar = $('#calendar-wrapper').calendar(defaultConfig);


//main calendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'today ,prev,next',
            center: 'title',
            right: 'timeGridDay,timeGridWeek,dayGridMonth'
        },
        height: 'auto',
        initialView: 'dayGridMonth',
        initialDate: '2021-07-08',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        editable: true,
        selectable: true,
        showNonCurrentDates: false,
        dayClick: function (day){
            $(".day-highlight").removeClass("day-highlight");
            $(this).addClass("day-highlight");
        },
        events: [
            {
                title: 'Design Task',
                start: '2021-07-25',
                color: '#4CBF4C'
            },
            {
                title: 'Product Launch',
                start: '2021-07-13',
                end: '2021-07-15',
                color: '#5991FF'
            },
            {
                title: 'Team Meeting',
                start: '2021-07-13',
                end: '2021-07-15',
                color: '#BE63F9'
            },
            {
                title: 'Project Update',
                start: '2021-07-21',
                end: '2021-07-23',
                color: '#F96363'
            },
            {
                title: 'Development Task',
                start: '2021-07-30',
                end: '2021-08-01',
                color: '#FF964B'
            },
        ],
        eventColor: '#5991FF'
    });
    
    calendar.render();
});