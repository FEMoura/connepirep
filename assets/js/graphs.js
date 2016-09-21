$(function () {
    $('#area').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantidade de publicações por área'
        },
        xAxis: {
            categories: ['Ciências Agrárias', 'Ciências Biológicas', 'Ciências Exatas e da Terra','Ciências Humanas','Ciências da Saúde','Ciências Sociais e Aplicadas','Engenharias', 'Linguística, Letras e Artes','Multidisciplinar']
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
            data: [276,311,440,1044,1029,1637,2195,2540]
        }]
    });
});

$(function () {
    $('#ano2').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Quantidade de publicações por área/ano'
        },
        xAxis: {
            categories: ['2006', '2007', '2008', '2009', '2010']
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
	
	$(function () {
    $('#ano3').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Quantidade de publicações por área/ano'
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
});

$(function () {
    $('#ano4').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Quantidade de publicações por ano/área'
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