let myBarChart;

const getItems = async (page) => {

    var apiResponse = await fetch(`../FunClo_Alexandrescu_Nicolae_Vacaru_Robert_2A4/methods/get${page}Products.php`);
    var items = await apiResponse.json();

    localStorage.setItem(`${page}`, items.length);
}


function displayChart() {
    getItems("Ski");
    getItems("Worker");
    getItems("Diving");
    getItems("Firefighter");
    var canvas = document.getElementById('myChart');
    var data = {
        labels: ["Ski Equipment", "Worker Safety Equipment", "Diving Equipment", "Firefighter Safety Equipment"],
        datasets: [
            {
                label: "Products statistics",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                borderWidth: 2,
                hoverBackgroundColor: "rgba(255,99,132,0.4)",
                hoverBorderColor: "rgba(255,99,132,1)",
                data: [parseInt(localStorage.getItem('Ski')), parseInt(localStorage.getItem('Worker')), parseInt(localStorage.getItem('Diving')), parseInt(localStorage.getItem('Firefighter'))],
            }
        ]
    };
    var option = {
        animation: {
            duration: 5000
        }

    };


    myBarChart = new Chart(canvas, {
        type: 'bar',
        data: data,
        options: option
    });
}

displayChart();


function downloadSVG(args) {
    let data, link;
    myBarChart = args.chart;
    data = encodeURI(myBarChart.toBase64Image("image/jpeg", 1));
    link = document.createElement("a");
    link.setAttribute("href", data);
    link.setAttribute("download", "chart-data.pdf");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  
  const downloadButtonSVG = document.getElementById("SVG");
  
  downloadButtonSVG.addEventListener("click", (event) => {
    downloadSVG({
      chart: myBarChart,
    });
  });



