<script type="text/javascript">
google.load("visualization", '1', {packages:['corechart']});
google.setOnLoadCallback(drawChart);
function drawChart() {
  var query1 = new google.visualization.Query(
      'https://docs.google.com/spreadsheet/ccc?key=0ApuAYbtOQBxGdGYzQVA1c1pzbXplVEJ4YzhmbFkzX3c&range=1:4&drive_web#gid=0');

  query1.send(handleQueryResponse);
}

function handleQueryResponse(response) {
  if (response.isError()) {
    alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
    return;
  }

  var data1 = response.getDataTable();
  var chart1 = new google.visualization.BarChart(document.getElementById('barchart1'));
  chart1.draw(data1, { legend: { position: 'bottom' } });
}

function drawChart() {
  var query2 = new google.visualization.Query(
      'https://docs.google.com/spreadsheet/ccc?key=0ApuAYbtOQBxGdGYzQVA1c1pzbXplVEJ4YzhmbFkzX3c&range=7:13&drive_web#gid=0');

  query2.send(handleQueryResponse);
}

function handleQueryResponse(response) {
  if (response.isError()) {
    alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
    return;
  }

  var data2 = response.getDataTable();
  var chart2 = new google.visualization.BarChart(document.getElementById('barchart2'));
  chart2.draw(data2, { legend: { position: 'bottom' } });
}
</script>