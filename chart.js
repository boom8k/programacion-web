
const labels = ['Argentina','Bolivia','Brasil','Chile','Colombia','Costa Rica','Cuba','Ecuador','El Salvador','Guatemala','Honduras','México','Nicaragua','Panamá','Paraguay','Perú','República Dominicana','Uruguay','Venezuela'];


const data = {
    labels: labels,
    datasets: [{
      axis: 'y',
      label: 'Millones de Personas Vacunadas',
      data: [37.557,6.003,168.570,17.566,36.081,4.143,9.972,14.004,4.315,6.323,5.368,79.947,5.423,3.111,3.442,27.531,5.995,2.886,14.287],
      fill: false,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 3
    }]
  };

  const config = {
    type: 'bar',
    data,
    options: {
      indexAxis: 'y',
    }
  };


  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );