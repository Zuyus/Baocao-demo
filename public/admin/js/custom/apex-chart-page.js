 //apex chart 1
 var options1 = {
    series: [{
        name: 'Series1',
        data: [31, 40, 28, 51, 42, 109, 100]
    }, {
        name: 'Series2',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.50,
            opacityTo: 0.10
        }
    },
    legend: {
        show: true,
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        position: 'bottom',
        horizontalAlign: 'center', 
        labels: {
            colors: ['#596680']
        }
    },
    chart: {
        height: 330,
        type: 'area',
        toolbar:{
            show: false,
        }
    },
    colors: ['#FF6628', '#4CBF4C'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    xaxis: {
        type: 'time',
        categories: ["06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00"],
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
    }
};

var chart1 = new ApexCharts(document.querySelector("#apex-chart-1"), options1);
chart1.render();

//column chart
var options2 = {
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    chart: {
        type: 'bar',
        height: 330,
        toolbar:{
            show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    colors: ['#FF964B', '#BE63F9', '#F96363'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        labels: {
            show: true,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    },
    yaxis: {
        title: {
            text: '$ (thousands)',
            style: {
                colors: ['#596680'],
                fontSize: '14px',
                fontWeight: 400,
            },
        },
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    fill: {
        opacity: 1
    },
    legend: {
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
};

var chart2 = new ApexCharts(document.querySelector("#apex-chart-2"), options2);
chart2.render();

//apex chart 3
var options3 = {
    series: [{
        name: "Session Duration",
        data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
    },
    {
        name: "Page Views",
        data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
    },
    {
        name: 'Total Visits',
        data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
    }],
    chart: {
        height: 350,
        type: 'line',
        toolbar:{
            show: false,
        },
        zoom: {
            enabled: false
        },
    },
    colors: ['#FF6628', '#4CBF4C', '#5991FF'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 3,
        curve: 'straight',
        dashArray: [0, 8, 5]
    },
    title: {
        text: 'Page Statistics',
        align: 'left',
        style: {
            colors: ['#596680'],
            fontFamily: 'Inter, sans-serif',
            fontSize: '14px',
            fontWeight: 400,
        },
    },
    legend: {
        tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
        }
    },
    markers: {
        size: 0,
        hover: {
            sizeOffset: 6
        }
    },
    xaxis: {
        categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan',
        '10 Jan', '11 Jan', '12 Jan'],
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
    legend: {
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
    tooltip: {
        enabled: false,
    },
    grid: {
        borderColor: '#f1f1f1',
    }
};

var chart3 = new ApexCharts(document.querySelector("#apex-chart-3"), options3);
chart3.render();

//apex chart 4
var options4 = {
    series: [
        {
            name: "High - 2013",
            data: [28, 29, 33, 36, 32, 32, 33]
        },
        {
            name: "Low - 2013",
            data: [12, 11, 14, 18, 17, 13, 13]
        }
    ],
    chart: {
        height: 330,
        type: 'line',
        toolbar: {
            show: false
        }
    },
    colors: ['#5991FF', '#BE63F9'],
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: 'smooth',
        width: 3
    },
    title: {
        text: 'Average High & Low Temperature',
        align: 'left',
        style: {
            colors: ['#596680'],
            fontFamily: 'Inter, sans-serif',
            fontSize: '14px',
            fontWeight: 400,
        },
    },
    markers: {
        size: 5,
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        title: {
            text: 'Month',
            style: {
                colors: ['#596680'],
                fontSize: '14px',
                fontWeight: 400,
            },
        },
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
        title: {
            text: 'Temperature',
            style: {
                colors: ['#596680'],
                fontFamily: 'Inter, sans-serif',
                fontSize: '14px',
                fontWeight: 400,
            },
        },
        min: 5,
        max: 40
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5,
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
};

var chart4 = new ApexCharts(document.querySelector("#apex-chart-4"), options4);
chart4.render();

//apex chart 5
var options5 = {
    series: [{
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
    }],
    chart: {
        type: 'bar',
        height: 330,
        style: {
            colors: ['#596680'],
            fontSize: '14px',
            fontWeight: 400,
        },
        toolbar:{
            show: false
        }
    },
    colors: ['#BE63F9'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
        'United States', 'China', 'Germany'],
        
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
    }
};

var chart5 = new ApexCharts(document.querySelector("#apex-chart-5"), options5);
chart5.render();

//apex chart 6
var options6 = {
    series: [{
        name: 'Inflation',
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
    }],
    chart: {
        height: 330,
        type: 'bar',
        toolbar:{
            show: false
        }
    },
    color: ['#5991FF'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            dataLabels: {
                position: 'top',
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "%";
        },
        offsetY: -20,
        style: {
            fontFamily: 'Inter, sans-serif',
            fontSize: '12px',
            fontWeight: 500,
            colors: ['#596680']
        },
    },
    
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        crosshairs: {
            fill: {
                type: 'gradient',
                gradient: {
                    colorFrom: '#D8E3F0',
                    colorTo: '#BED1E6',
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                }
            }
        },
        tooltip: {
            enabled: false,
        },
        style: {
            fontFamily: 'Inter, sans-serif',
            cssClass: 'apexcharts-xaxis-label',
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
            formatter: function (val) {
                return val + "%";
            }
        }
        
    },
    title: {
        text: 'Monthly Inflation in Argentina, 2002',
        floating: true,
        offsetY: 330,
        align: 'center',
        style: {
            color: '#444'
        }
    }
};

var chart6 = new ApexCharts(document.querySelector("#apex-chart-6"), options6);
chart6.render();

//apex chart 7
var options7 = {
    series: [{
        name: 'TEAM A',
        type: 'column',
        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
        name: 'TEAM B',
        type: 'area',
        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }, {
        name: 'TEAM C',
        type: 'line',
        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
    }],
    chart: {
        height: 330,
        type: 'line',
        stacked: false,
        toolbar:{
            show: false
        }
    },
    colors: ['#F96363', '#BE63F9', '#5991FF'],
    stroke: {
        width: [0, 2, 5],
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '50%'
        }
    },
    
    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
    '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
    markers: {
        size: 0
    },
    xaxis: {
        type: 'datetime',
        style: {
            colors: ['#596680'],
            fontSize: '14px',
            fontWeight: 400,
        },
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
        title: {
            text: 'Points',
            style: {
                colors: ['#596680'],
                fontSize: '14px',
                fontWeight: 400,
            },
        },
        min: 0
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
                if (typeof y !== "undefined") {
                    return y.toFixed(0) + " points";
                }
                return y;
                
            }
        }
    },
    legend: {
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
};

var chart7 = new ApexCharts(document.querySelector("#apex-chart-7"), options7);
chart7.render();

//apex chart 8
var options8 = {
    series: [44, 55, 67, 83],
    chart: {
        width: '100%',
        height: 330,
        type: 'radialBar',
    },
    colors: ['#5991FF', '#BE63F9', '#F96363', '#FF964B'],
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249
                    }
                }
            }
        }
    },
    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
};

var chart8 = new ApexCharts(document.querySelector("#apex-chart-8"), options8);
chart8.render();

//apex chart 9
var options9 = {
    series: [44, 55, 41, 17, 15],
    chart: {
        type: 'donut',
        width: '100%',
        height: 330,
    },
    colors: ['#FF964B', '#FF6628', '#BE63F9', '#4CBF4C', '#5991FF'],
    legend: {
        position: 'bottom',
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
};

var chart9 = new ApexCharts(document.querySelector("#apex-chart-9"), options9);
chart9.render();

//apex chart 10
var options10 = {
    series: [59, 18, 10, 13],
    chart: {
        width: '100%',
        height: 330,
        type: 'pie',
    },
    colors: ['#FF964B', '#5991FF', '#4CBF4C', '#BE63F9'],
    labels: ['Team A', 'Team B', 'Team C', 'Team D'],
    legend: {
        position: 'bottom',
        fontFamily: 'Inter, sans-serif',
        fontSize: '14px',
        fontWeight: 400,
        labels: {
            colors: ['#596680']
        }
    },
};

var chart10 = new ApexCharts(document.querySelector("#apex-chart-10"), options10);
chart10.render();