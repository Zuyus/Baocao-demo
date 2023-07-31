/*---------------------------
Income Statistics charts
----------------------------*/
var incomeStatisticsDailyOptions = {
    series: [{
        name: 'income',
        data: [2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8]
    }],
    chart: {
        height: 300,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    colors: ['#5991FF'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            columnWidth: '45%',
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
            colors: ["#596680"],
            fontSize: '12px',
            fontWeight: 400
        },
    },
    tooltip: {
        enabled: false,
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            show: true,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
            formatter: function (val) {
                return "$" + (val * 100);
            }
        }
    },
};

var incomeStatisticsChartDaily = new ApexCharts(document.querySelector("#income-statistics-chart-daily"), incomeStatisticsDailyOptions);
incomeStatisticsChartDaily.render();

/*---------------------------
Income Statistics charts
----------------------------*/
var incomeStatisticsMonthOptions = {
    series: [{
        name: 'income',
        data: [2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8]
    }],
    chart: {
        height: 300,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    colors: ['#5991FF'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            columnWidth: '45%',
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
            colors: ["#596680"],
            fontSize: '12px',
            fontWeight: 400
        },
    },
    tooltip: {
        enabled: false,
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            show: true,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
            formatter: function (val) {
                return "$" + (val * 100);
            }
        }
    },
};

var incomeStatisticsChartMonth = new ApexCharts(document.querySelector("#income-statistics-chart-month"), incomeStatisticsMonthOptions);
incomeStatisticsChartMonth.render();

/*---------------------------
Income Statistics charts
----------------------------*/
var incomeStatisticsOptions = {
    series: [{
        name: 'income',
        data: [2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8]
    }],
    chart: {
        height: 300,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    colors: ['#5991FF'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            columnWidth: '45%',
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
            colors: ["#596680"],
            fontSize: '12px',
            fontWeight: 400
        },
    },
    tooltip: {
        enabled: false,
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            show: true,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
            formatter: function (val) {
                return "$" + (val * 100);
            }
        }
    },

};

var incomeStatisticsChart = new ApexCharts(document.querySelector("#income-statistics-chart"), incomeStatisticsOptions);
incomeStatisticsChart.render();



//sales traffic chart
var salesTrafficOptions = {
    series: $('#sales_ratio').data("dt"),
    chart: {
        //width: 300,
        height: 300,
        type: 'pie',
    },
    labels: ['Delivered', 'Returned'],
    colors: ['#FF964B', '#5991FF'],
    legend: {
        show: false,
    },
    responsive: [{
        breakpoint: 991,
        options: {
            chart: {
                height: 250,
            },
        }
    }]
};

var salesTrafficChart = new ApexCharts(document.querySelector("#sales-traffic-chart"), salesTrafficOptions);
salesTrafficChart.render();
