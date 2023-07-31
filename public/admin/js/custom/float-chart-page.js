  //apex chart 12
  var options12 = {
    series: [{
        data: [10,20,30,10,20,10,20,30,5,40,10,50,20,10,20,30,14]
    }],
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false
        },
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    colors: ['#F96363'],
    stroke: {
        curve: 'straight'
    },
    fill: {
        type: "gradient",
    },
    markers: {
        size: 0,
    },
    xaxis: {
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    yaxis: {
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        },
        min: 0,
        max: 100
    },
    legend: {
        show: false
    },
};

var chart12 = new ApexCharts(document.querySelector("#apex-chart-12"), options12);
chart12.render();


//apex chart 11
var options11 = {
    series: [{
        name: "Desktops",
        data: [50, 135, 80, 60, 170, 100, 250]
    },
    {
        name: "Laptops",
        data: [80, 100, 60, 120, 145, 100, 110]
    },
    {
        name: 'Tablets',
        data: [30, 85, 80, 140, 250, 82, 200]
    }],
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false
        },
    },
    markers: {
        shape: "square",
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 1.5,
        curve: 'straight'
    },
    colors: ['#FF964B', '#BE63F9', '#5991FF'],
    fill: {
        type: "gradient",
    },
    xaxis: {
        categories: ['0.0', '1.0', '2.0', '3.0', '4.0', '5.0', '6.0'],
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    yaxis: {
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    tooltip: {
        enabled: false,
    },
    grid: {
        show: true,
        borderColor: '#ECEDF0',
        strokeDashArray: 0,
        position: 'back',
        xaxis: {
            lines: {
                show: true
            }
        },   
        yaxis: {
            lines: {
                show: true
            },
        }, 
    },
    legend: {
        position: 'top',
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        },
        markers: {
            width: 10,
            height: 10,
            radius: 0,
        },
    },
};

var chart11 = new ApexCharts(document.querySelector("#apex-chart-11"), options11);
chart11.render();

//apex chart 9
var options9 = {
    series: [40, 30, 30],
    chart: {
        type: 'donut',
        width: '100%',
        height: '330'
    },
    colors: ['#BE63F9', '#FF6628', '#4CBF4C'],
    labels: ['Desktops', 'Laptops', 'Tables'],
    legend: {
        position: 'right',
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        },
        markers: {
            width: 10,
            height: 10,
            radius: 0,
        },
    },
    dataLabels: {
        enabled: false,
    },
    responsive: [{
        breakpoint: 992,
        options: {
            legend: {
                position: 'bottom'
            }
        },
    }]
};

var chart9 = new ApexCharts(document.querySelector("#apex-chart-9"), options9);
chart9.render();

//apex chart 10
var options10 = {
    series: [40,30,30],
    chart: {
        width: '100%',
        type: 'pie',
        height: '330'
    },
    colors: ['#F96363', '#FF964B', '#5991FF'],
    labels: ['Desktops', 'Laptops', 'Tables'],
    legend: {
        position: 'right',
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        },
        markers: {
            width: 10,
            height: 10,
            radius: 0,
        },
    },
    dataLabels: {
        enabled: false,
    },
    responsive: [{
        breakpoint: 992,
        options: {
            legend: {
                position: 'bottom'
            }
        },
    }]
};

var chart10 = new ApexCharts(document.querySelector("#apex-chart-10"), options10);
chart10.render();