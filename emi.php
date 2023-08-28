<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "businessdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['calculate'])) {
    $loanAmount = $_POST['loanAmount'];
    $interestRate = $_POST['interestRate'] / 100; // Convert percentage to decimal
    $loanTenure = $_POST['loanTenure'];

    // Formula to calculate EMI
    $r = $interestRate / 12; // Monthly interest rate
    $numerator = $loanAmount * $r * pow(1 + $r, $loanTenure);
    $denominator = pow(1 + $r, $loanTenure) - 1;
    $emi = $numerator / $denominator;

    // Insert EMI calculation data into the database
    $insertQuery = "INSERT INTO emi (loan_amount, interest_rate, loan_tenure, emi)
                    VALUES ('$loanAmount', '$interestRate', '$loanTenure', '$emi')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "EMI calculation saved successfully.<br>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car EMI Calculator with Totals</title>
    <script>
        function updateSliderValue(sliderId, valueId) {
            var slider = document.getElementById(sliderId);
            var valueDisplay = document.getElementById(valueId);
            valueDisplay.innerHTML = slider.value;
            calculateEMI();
        }

        function calculateEMI() {
            var loanAmount = parseInt(document.getElementById('loanAmount').value);
            var interestRate = parseFloat(document.getElementById('interestRate').value) / 100;
            var loanTenure = parseInt(document.getElementById('loanTenure').value);
            
            var r = interestRate / 12;
            var denominator = Math.pow(1 + r, loanTenure) - 1;
            var emi = (loanAmount * r * Math.pow(1 + r, loanTenure)) / denominator;
            
            var totalRepayment = emi * loanTenure;
            var totalInterest = totalRepayment - loanAmount;
            
            document.getElementById('emiOutput').innerHTML = "Monthly EMI: ₹" + emi.toFixed(2);
            document.getElementById('totalInterestOutput').innerHTML = "Total Interest: ₹" + totalInterest.toFixed(2);
            document.getElementById('totalRepaymentOutput').innerHTML = "Total Repayment: ₹" + totalRepayment.toFixed(2);
        }
    </script>
</head>
<body>
    <h1>Car EMI Calculator with Totals</h1>
    <form method="post" action="">
    <label for="loanAmount">Loan Amount: </label>
        <input type="range" id="loanAmount" name="loanAmount" min="1000" max="500000" step="1000" value="50000" 
               onchange="updateSliderValue('loanAmount', 'loanAmountDisplay')">
        <span id="loanAmountDisplay">50000</span><br>
        
        <label for="interestRate">Interest Rate (%): </label>
        <input type="range" id="interestRate" name="interestRate" min="0.1" max="20" step="0.1" value="5" 
               onchange="updateSliderValue('interestRate', 'interestRateDisplay')">
        <span id="interestRateDisplay">5</span><br>
        
        <label for="loanTenure">Loan Tenure (months): </label>
        <input type="range" id="loanTenure" name="loanTenure" min="12" max="120" step="1" value="36" 
               onchange="updateSliderValue('loanTenure', 'loanTenureDisplay')">
        <span id="loanTenureDisplay">36</span><br>
        <br>
        <button type="submit" name="calculate">Calculate EMI</button>
</form>
    
    <div id="emiOutput"></div>
    <div id="totalInterestOutput"></div>
    <div id="totalRepaymentOutput"></div>
</body>
</html>
