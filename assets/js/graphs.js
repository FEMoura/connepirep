$(function () {
    $('#ano').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Quantidade de publicações por Ano'
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
                enableMouseTracking: true
            }
        },
        series: [{
            name: 'Total de publicações',
            data: [276,311,440,1044,1029,1637,2195,2540]
        }]
    });
});

	$(function () {
    $('#ano3').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantidade de publicações por Área/Ano'
        },
        xAxis: {
            categories: ['Ciências Agrárias', 'Ciências Biológicas', 'Ciências Exatas e da Terra','Ciências Humanas','Ciências da Saúde','Ciências Sociais e Aplicadas','Engenharias', 'Linguística, Letras e Artes','Multidisciplinar'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantidade'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} publicações</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
       series: [{
            name: '2006',
            data: [9, 60, 43, 50, 7, 47, 60, 0, 0]
        }, {
            name: '2007',
            data: [17, 21, 73, 15, 13, 54, 108, 1, 9]
        }, {
            name: '2008',
            data: [0, 114, 130, 99, 0, 20, 55, 21, 0]
        }, {
            name: '2009',
            data: [98, 66, 149, 131, 40, 115, 244, 28, 0]
        }, {
            name: '2010',
            data: [140, 68, 150, 0, 226, 35, 163, 43, 204]
        }]
    });
});

$(function () {
    $('#ano4').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Quantidade de publicações por Ano/Área'
        },
        xAxis: {
            categories: ['2006', '2007', '2008', '2009', '2010'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantidade',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' publicações'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Ciências Agrárias',
            data: [9,17,0,98,140]
        }, {
            name: 'Ciências Biológicas',
            data: [60, 21, 114, 66, 68]
        }, {
            name: 'Ciências Da Saúde',
            data: [7, 13, 0, 40, 226]
        }, {
            name: 'Ciências Exatas e da Terra',
            data: [43, 73, 130, 149, 150]
        }, {
            name: 'Ciências Humanas',
            data: [50, 15, 199, 131, 0]
        }, {
            name: 'Ciências Sociais e Aplicadas',
            data: [47, 54, 20, 115, 35]
        }, {
            name: 'Engenharias',
            data: [60, 108, 55, 244, 163]
        }, {
            name: 'Linguística, Letras e Artes',
            data: [0, 1, 21, 28, 43]
        }, {
            name: 'Multidisciplinar',
            data: [0, 9, 0, 0, 204]
        }]
    });
});

$(function () {
    $('#ifano').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantidade de publicações por IF/Ano'
        },
        xAxis: {
            categories: ['IFAL','IFAM','IFBA','IFCE','IFMA','IFPA','IFPB','IFPE','IFPI','IFRN'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantidade'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} publicações</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
       series: [{
            name: '2006',
            data: [13, 11, 3, 27, 8, 4, 31, 2, 26, 116]
        }, {
            name: '2007',
            data: [12, 12, 10, 6, 60, 19, 42, 53]
        }, {
            name: '2008',
            data: [13, 16, 14, 93, 33, 12, 57, 34, 36, 70]
        }, {
            name: '2009',
            data: [71, 25, 26, 194, 87, 72, 66, 73, 131, 173]
        }, {
            name: '2010',
            data: [65, 39, 45, 170, 92, 6, 95, 95, 76, 165]
        }]
    });
});

$(function () {
    $('#anoif').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Quantidade de publicações por Ano/IF'
        },
        xAxis: {
            categories: ['2006 (RN)', '2007 (PB)', '2008 (CE)', '2009 (PA) ', '2010 (AL)'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantidade',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' publicações'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'IFAL',
            data: [13, 12, 13, 71, 65]
        }, {
            name: 'IFAM',
            data: [11, 12, 16, 25, 39]
        }, {
            name: 'IFBA',
            data: [3, 10, 14, 26, 45]
        }, {
            name: 'IFCE',
            data: [27, 38, 93, 194, 170]
        }, {
            name: 'IFMA',
            data: [8, 16, 33, 87, 92]
        }, {
            name: 'IFPA',
            data: [4, 6, 12, 72, 6]
        }, {
            name: 'IFPB',
            data: [31, 60, 57, 66, 95]
        }, {
            name: 'IFPE',
            data: [2, 19, 34, 73, 95]
        }, {
            name: 'IFPI',
            data: [26, 42, 36, 131, 76]
        }, {
            name: 'IFRN',
            data: [116, 53, 70, 173, 165]
        }]
    })
});