function downloadWEBP(args) {
    let data, link;
    myChart = args.chart;
    data = encodeURI(myChart.toBase64Image("image/jpeg", 1));
    link = document.createElement("a");
    link.setAttribute("href", data);
    link.setAttribute("download", "chart-data.webp");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  
  const downloadButtonWEBP = document.getElementById("WEBP");
  
  downloadButtonWEBP.addEventListener("click", (event) => {
    downloadWEBP({
      chart: myChart,
    });
  });