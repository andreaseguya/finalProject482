$(document).ready(function(){
    //second donut chart on the dashboard page
    $.ajax({
      url: "http://localhost/data.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var Inventory = [];
        var Stock = [];
        var ProductName = [];
        var TransactionID = [];
  
        for(var i in data) {
          Product.push("Product " + data[i].transactionID);
          Sales.push(data[i].stock);
          Sales.push(data[i].Inventory);
        }

//first Bar Graph





  //Second Donut Chart
        var chartdata = {
          labels: TotalOrders,
          datasets : [
            {
              label: 'Expenses',
              
              data: sales,

              label: 'Income',

              data: Income
            }
          ]
        };

        //third Pie Charts/ universal pie Chart
        var options = {
        
            series: [44, 55],
            chart: {
            type: 'donut',
          },
          labels: ['Expenses', 'Income'],
          responsive: [{
            breakpoint: 480,
            options: {
              chart: {
                width: 200
              },
              legend: {
                position: 'bottom'
              }
            }
          }]
          };
  
          var chart = new ApexCharts(document.querySelector("#chart"), options);
          chart.render();


          //Donut Chart rendering:
  
        var ctx = $("#secondChart");
  
        var donutGraph = new Chart(ctx, {
          type: 'donut',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });

