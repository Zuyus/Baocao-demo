   //toast chart 1
   var el = document.getElementById('toast-chart-1');
   var data = {
       categories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
       series: [
       {
           name: 'Budget',
           data: [5000, 3000, 5000, 7000, 6000, 4000, 1000],
       },
       {
           name: 'Income',
           data: [8000, 4000, 7000, 2000, 6000, 3000, 5000],
       },
       {
           name: 'Expenses',
           data: [4000, 4000, 6000, 3000, 4000, 5000, 7000],
       },
       ],
   };
   var options = {
       chart: { },
   };
   
   var chart = toastui.Chart.columnChart({ el, data, options });
   
   //toast chart 2
   var el = document.getElementById('toast-chart-2');
   var data = {
       categories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
       series: [
       {
           name: 'Budget',
           data: [5000, 3000, 6000, 3000, 6000, 4000],
       },
       {
           name: 'Income',
           data: [8000, 1000, 7000, 2000, 5000, 3000],
       },
       {
           name: 'Expenses',
           data: [900, 6000, 1000, 9000, 3000, 1000],
       },
       ],
   };
   var options = {
       chart: { },
       xAxis: {
           title: 'Month',
       },
       yAxis: {
           title: 'Amount',
       },
       tooltip: {
           formatter: (value) => `${value}°C`,
       },
       series: {
           spline: true,
       },
   };
   
   var chart = toastui.Chart.lineChart({ el, data, options });
   
   
   //toast chart 3
   var el = document.getElementById('toast-chart-3');
   var data = {
       categories: [
       'Jan',
       'Feb',
       'Mar',
       'Apr',
       'May',
       'Jun',
       'Jul',
       'Aug',
       'Sep',
       'Oct',
       'Nov',
       'Dec',
       ],
       series: [
       {
           name: 'Bangladesh',
           data: [20, 40, 25, 50, 15, 45, 33, 34, 20, 30, 22, 13],
       },
       {
           name: 'India',
           data: [5, 30, 21, 18, 59, 50, 28, 33, 7, 20, 10, 30],
       },
       {
           name: 'China',
           data: [30, 5, 18, 21, 33, 41, 29, 15, 30, 10, 33, 5],
       },
       ],
   };
   var options = {
       chart: { },
       xAxis: { pointOnColumn: false, title: { text: 'Month' } },
       yAxis: { title: 'Temperature (Celsius)' },
   };
   
   var chart = toastui.Chart.areaChart({ el, data, options });
   
   
   //toast chart 4
   var el = document.getElementById('toast-chart-4');
   var data = {
       categories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
       series: [
       {
           name: 'Budget',
           data: [5000, 3000, 5000, 7000, 6000, 4000, 1000],
       },
       {
           name: 'Income',
           data: [8000, 4000, 7000, 2000, 6000, 3000, 5000],
       },
       ],
   };
   var options = {
       chart: {  },
   };
   
   var chart = toastui.Chart.barChart({ el, data, options });
   
   
   //toast chart 5
   var el = document.getElementById('toast-chart-5');
   var data = {
       categories: ['Browser'],
       series: [
       {
           name: 'Chrome',
           data: 46.02,
       },
       {
           name: 'Firefox',
           data: 20.47,
       },
       {
           name: 'Edge',
           data: 17.71,
       },
       {
           name: 'Opera',
           data: 5.45,
       },
       {
           name: 'Safari',
           data: 3.1,
       },
       ],
   };
   var options = {
       chart: { },
       series: {
           radiusRange: {
               inner: '40%',
               outer: '100%',
           },
       },
   };
   
   var chart = toastui.Chart.pieChart({ el, data, options });
   
   
   //toast chart 6
   var el = document.getElementById('toast-chart-6');
   var data = {
       categories: ['Browser'],
       series: [
       {
           name: 'Chrome',
           data: 46.02,
       },
       {
           name: 'Firefox',
           data: 20.47,
       },
       {
           name: 'Edge',
           data: 17.71,
       },
       {
           name: 'Opera',
           data: 5.45,
       },
       {
           name: 'Safari',
           data: 3.1,
       },
       ],
   };
   var options = {
       chart: { },
       series: {
           radiusRange: {
               
               outer: '100%',
           },
       },
   };
   
   var chart = toastui.Chart.pieChart({ el, data, options });