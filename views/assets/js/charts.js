const menuChartLeft  = document.getElementById('menuChartLeft');
const menuChartRight = document.getElementById('menuChartRight');

const dataLeft = [{
    values: [30, 35, 35],
    labels: ['OFICIAL', 'COMERCIAL', 'PRIVADO'],
    type: 'pie'
}]
const dataRight = [{
    x: [1, 2, 3, 4, 5],
    y: [1, 2, 4, 8, 16],
    type: 'bar'
}]
const layoutLeft = {
    title: {
        text: 'Grafica 1',
        font: {
            color: '#000',
            family: 'Roboto,Arial',
            size: 18
        },
        x: 0,
        xanchor: 'left',
        y: 0.98
    },
    margin: {
        l: 0,
        r: 0,
        b: 0,
        t: 70,
        pad: 0
    },
    paper_bgcolor: '#e5e6ee',
};

const layoutRight = {
    title: {
        text: 'Semana 22-04-24 al 28-04-24',
        font: {
            color: '#000',
            family: 'Roboto,Arial',
            size: 18
        },
        x: 0,
        xref: 'paper',
        xanchor: 'left',
        y: 0.98
    },
    margin: {
        l: 20,
        r: 0,
        b: 20,
        t: 70,
        pad: 0
    },
    paper_bgcolor: '#e5e6ee',
    plot_bgcolor: '#ffffff'
};

const config = {
    responsive: true,
    displaylogo: false
};

Plotly.newPlot(menuChartLeft, dataLeft, layoutLeft, config);
Plotly.newPlot(menuChartRight, dataRight, layoutRight, config);