import Chart from 'chart.js/auto';
import Chart2 from 'chart.js/auto';

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];

const labels2 = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];


const data = {
    labels: labels,
    datasets: [{
        label: 'Patentes',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
};

const data2 = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Artículos publicados',
      data: [65, 59, 80, 81, 26, 55, 40],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
    }]
  };

const config = {
    type: 'line',
    data: data,
    options: {}
};

const config2 = {
    type: 'line',
    data: data2,
    options: {
      animations: {
        tension: {
          duration: 1000,
          easing: 'linear',
          from: 1,
          to: 0,
          loop: true
        }
      },
      scales: {
        y: { // defining min and max so hiding the dataset does not change scale range
          min: 0,
          max: 100
        }
      }
    }
  };

new Chart(
    document.getElementById('myChart'),
    config
);

new Chart2(
    document.getElementById('myChart2'),
    config2
);