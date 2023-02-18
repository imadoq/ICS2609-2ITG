<!doctype html>
<html lang="en">
  <head>
    <title>Tax Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="MA1.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div><h2> <br> </h2></div>
    <div class = "calcuPart">
      <h2>Taxxy: A Tax Calculator</h2>
      <p>Please enter your Salary below</p>
      <form method ="post" action ="FinalTaxCalc.php">
        <label for="salaryAmt">Salary: </label>
        <input type = "number" id="salaryAmt" name="salaryAmt" required><br>
        <label for="salaryType">Type: </label>
        <input type="radio" id="salaryType1" name="salaryType" value="monthly" required>
        <label for="salaryType1">Monthly</label>
        <input type="radio" id="salaryType2" name="salaryType" value="bi-monthly" required>
        <label for="salaryType2">Bi-Monthly</label>
        <br><button>Compute</button>
      </form>
      <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $salary_amt = $_POST['salaryAmt'];
        $salary_amt = $_POST['salaryAmt'];
        $salary_type = $_POST['salaryType'];
        
        if ($salary_type === 'monthly') {
          $annual_salary = $salary_amt * 12;
        } else {
          $annual_salary = $salary_amt * 24;
        }
    
        if($annual_salary < 250000){
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: 0";
          echo "<br>";
          echo "Est. Monthly Tax: 0";
          echo "Net Income: " . $annual_salary;
          }
        elseif($annual_salary > 250000 && $annual_salary < 400000){
          $annual_tax = ($annual_salary-250000)*0.2;
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: " . $annual_tax;
          echo "<br>";
          echo "Est. Monthly Tax: " . $annual_tax/12;
          echo "<br>";  
          echo "Net Income: " . $annual_salary-$annual_tax;
          }
        elseif($annual_salary > 400000 && $annual_salary < 800000){
          $annual_tax = (($annual_salary-400000)*0.25) + 30000;
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: " . $annual_tax;
          echo "<br>";
          echo "Est. Monthly Tax: " . $annual_tax/12;
          echo "<br>";  
          echo "Net Income: " . $annual_salary-$annual_tax;
        }
        elseif($annual_salary > 800000 && $annual_salary < 2000000){
          $annual_tax = (($annual_salary-800000)*0.3) + 130000;
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: " . $annual_tax;
          echo "<br>";
          echo "Est. Monthly Tax: " . $annual_tax/12;
          echo "<br>";  
          echo "Net Income: " . $annual_salary-$annual_tax;
        }
        elseif($annual_salary > 2000000 && $annual_salary < 8000000){
          $annual_tax = (($annual_salary-2000000)*0.32) + 490000;
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: " . $annual_tax;
          echo "<br>";
          echo "Est. Monthly Tax: " . $annual_tax/12;
          echo "<br>";  
          echo "Net Income: " . $annual_salary-$annual_tax;
        }
        else{
          echo "Annual Salary is: " . $annual_salary;
          echo "<br>";
          echo "Est. Annual Tax: " . $annual_tax;
          echo "<br>";
          echo "Est. Monthly Tax: " . $annual_tax/12;
          echo "<br>";  
          echo "Net Income: " . $annual_salary-$annual_tax;
        }

        }
      ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>