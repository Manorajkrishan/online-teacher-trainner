// Send form data to the server using AJAX or fetch
// Process the response and display the monthly and yearly graphs
document.getElementById('budgetForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var income = document.getElementById('income').value;
    var expenses = document.getElementById('expenses').value;
    var spendLimit = document.getElementById('spendLimit').value;
  
    var formData = new FormData();
    formData.append('income', income);
    formData.append('expenses', expenses);
    formData.append('spendLimit', spendLimit);
  
    // Send the form data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'test.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          displayGraphs(response);
        } else {
          console.log('Error:', xhr.status);
        }
      }
    };
    xhr.send(formData);
  });
  
  function displayGraphs(data) {
    // Process the response and extract the necessary data
    var monthlyLabels = data.monthly.labels;
    var monthlyExpensesData = data.monthly.expenses;
    var monthlyIncomeData = data.monthly.income;
  
    var yearlyLabels = data.yearly.labels;
    var yearlyExpensesData = data.yearly.expenses;
    var yearlyIncomeData = data.yearly.income;
  
    // Create the monthly chart using the extracted data
    var monthlyChartCtx = document.getElementById('monthlyChart').getContext('2d');
    var monthlyChart = new Chart(monthlyChartCtx, {
      type: 'line',
      data: {
        labels: monthlyLabels,
        datasets: [{
          label: 'Expenses',
          data: monthlyExpensesData,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }, {
          label: 'Income',
          data: monthlyIncomeData,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        // Specify chart options as needed
      }
    });
  
    // Create the yearly chart using the extracted data
    var yearlyChartCtx = document.getElementById('yearlyChart').getContext('2d');
    var yearlyChart = new Chart(yearlyChartCtx, {
      type: 'line',
      data: {
        labels: yearlyLabels,
        datasets: [{
          label: 'Expenses',
          data: yearlyExpensesData,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }, {
          label: 'Income',
          data: yearlyIncomeData,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        // Specify chart options as needed
      }
    });
  }
  