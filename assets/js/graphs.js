$(function () {
    $('#area').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantidade de publicações por área'
        },
        xAxis: {
            categories: ['Ciências Agrárias', 'Ciências Biológicas', 'Ciências Exatas e da Terra', 'Engenharias', 'Ciências Sociais e Aplicadas']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantidade'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: '2006',
            data: [5, 3, 4, 7, 2]
        }, {
            name: '2007',
            data: [2, 2, 3, 2, 1]
        }, {
            name: '2008',
            data: [3, 4, 4, 2, 5]
        }]
    });
});