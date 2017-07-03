$(function () {
    $.get(WWW + "merlo/cargas_merlo/ajax_get_respuestas", function (data) {
        var jdata = $.parseJSON(data);
        for (var i in jdata) {
            var categories = [], data = [];
            for (var j in jdata[i]) {
                var opcion = cambiarOpciones(jdata[i][j].CargaMerlo.respuesta)
                categories.push(opcion);
                data.push({name: opcion, y: parseInt(jdata[i][j][0].cantidad), color: getColor(jdata[i][j].CargaMerlo.respuesta)});
                pie("piePregunta" + i, null, data);
                column("columnPregunta" + i, null, categories, [{name: "Pregunta" + i, data: data}]);
            }
        }
    });
});

function pie(container, title, data) {
    var plotOptions = container == "piePregunta11" ?
            {pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            } : {
        pie: {allowPointSelect: true, cursor: 'pointer', dataLabels: {enabled: false}, showInLegend: true},
        series: {
            dataLabels: {
                enabled: true,
                formatter: function () {
                    return Math.round(this.percentage * 100) / 100 + ' %';
                },
                distance: -30
            }
        }
    };
    $("[id='"+container+"']").highcharts({
        chart: {
            style: {fontFamily: 'Gotham'},
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        colors: ['#50B432', '#5176A3', '#A655AC', '#FF9702', '#299CB4', '#4265BC', '#FFD300', '#F44336'],
        credits: {enabled: false},
        exporting: {enabled: false},
        title: {text: title},
        tooltip: {pointFormat: '<b>{point.percentage:.1f}%</b>'},
        plotOptions: plotOptions,
        series: [{name: 'Torta', colorByPoint: true, data: data}]
    });
}

function column(container, title, categories, series) {
    $("[id='"+container+"']").highcharts({
        chart: {
            style: {fontFamily: 'Gotham'},
            type: 'column'
        },
        xAxis: {categories: categories, crosshair: true},
        legend: {enabled: false},
        yAxis: {min: 0, allowDecimals: false, title: {text: null}},
        colors: ['#FFD300', '#50B432', '#5176A3', '#A655AC', '#FF9702', '#299CB4', '#4265BC', '#F44336'],
        title: {text: title},
        credits: {enabled: false},
        exporting: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: series
    });
}

function cambiarOpciones(opcion) {
    switch (opcion) {
        case "B":
            return "Buena";
        case "R":
            return "Regular";
        case "M":
            return "Mala";
    }
    return opcion;
}

function getColor(opcion) {
    //var colors = ['#50B432', '#5176A3', '#A655AC', '#FF9702', '#299CB4', '#4265BC', '#FFD300', '#F39C12'];
    var colors = ['#99C25F', '#5176A3', '#A655AC', '#F39C12', '#037DBF', '#4265BC', '#FCDA59', '#E76056'];
    switch (opcion) {
        case "Si":
            return colors[0];
        case "No":
            return colors[7];
        case "B":
            return colors[0];
        case "R":
            return colors[6];
        case "M":
            return colors[7];
        case "Frente Renovador":
            return colors[7];
        case "Cambiemos":
            return colors[6];
        case "Cumplir":
            return colors[3];
        case "Union Ciudadana":
            return colors[4];
        case "Otro":
        case "NS/NC":
            return "#CCC";
    }
    return null;
}