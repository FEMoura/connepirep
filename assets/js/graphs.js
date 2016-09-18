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

$(function () {
    $('#ano').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Quantidade de publicações por ano'
        },
        xAxis: {
            categories: ['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013']
        },
        yAxis: {
            title: {
                text: 'Quantidade'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Total de publicações',
            data: [276,311,440,1069,1029,1637,2195,2540]
        }]
    });
});