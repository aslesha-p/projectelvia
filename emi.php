<?php
$interest = isset($_POST['interest_rate']) ? floatval($_POST['interest_rate']) : 8.5;
$tenure = isset($_POST['loan_tenure']) ? floatval($_POST['loan_tenure']) : 120;

// Get the loan amount in INR
$amount = isset($_POST['loan_amount']) ? floatval($_POST['loan_amount']) : 1500000; // Default to 15 Lakh INR

// Correct calculation for monthly interest rate
$monthlyInterest = ($interest / 100) / 12;

// Correct EMI calculation formula
$emi = $amount * $monthlyInterest * pow(1 + $monthlyInterest, $tenure) / (pow(1 + $monthlyInterest, $tenure) - 1);

// Total amount to be paid
$totalAmount = $emi * $tenure;

// Total interest paid
$totalInterest = $totalAmount - $amount;

// Function to format Indian currency
function formatIndianCurrency($number) {
    $decimal = (string)($number - floor($number));
    $money = floor($number);
    $length = strlen($money);
    $delimiter = '';
    $money = strrev($money);

    for ($i = 0; $i < $length; $i++) {
        if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $length) {
            $delimiter .= ',';
        }
        $delimiter .= $money[$i];
    }

    $result = strrev($delimiter);
    $decimal = preg_replace("/0\./i", ".", $decimal);
    $decimal = substr($decimal, 0, 3);

    if ($decimal != '0') {
        $result = $result . $decimal;
    }

    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Loan Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #FF6B6B, #4ECDC4);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .loan-calculator {
            width: 800px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            overflow: hidden;
        }

        .top {
            background: #2C3E50;
            color: #fff;
            padding: 32px;
        }

        .top h2 {
            font-size: 28px;
            margin-bottom: 24px;
            text-align: center;
            color: #ECF0F1;
        }

        form {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .group {
            position: relative;
        }

        .title {
            font-size: 16px;
            margin-bottom: 12px;
            color: #BDC3C7;
        }

        input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #FF6B6B;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.1);
            color: #fff;
        }

        input:focus {
            outline: none;
            border-color: #4ECDC4;
        }

        .result {
            padding: 32px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .result-box {
            background: #F8F9FA;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .result-box:hover {
            transform: translateY(-5px);
        }

        .result-box h3 {
            color: #2C3E50;
            font-size: 18px;
            margin-bottom: 12px;
        }

        .value {
            font-size: 24px;
            font-weight: 700;
            color: #FF6B6B;
        }

        .value::before {
            content: "₹";  /* Rupee symbol */
            font-size: 20px;
            font-weight: 500;
            margin-right: 2px;
        }

        .calculate-btn {
            grid-column: 1 / -1;
            background: #FF6B6B;
            color: #fff;
            border: none;
            padding: 16px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .calculate-btn:hover {
            background: #ff5252;
        }

        @media (max-width: 768px) {
            .loan-calculator {
                width: 95%;
            }

            form {
                grid-template-columns: 1fr;
            }

            .result {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="loan-calculator">
        <div class="top">
            <h2>EMI Calculator</h2>
            <form method="POST" action="">
                <div class="group">
                    <div class="title">Loan Amount (INR)</div>
                    <input type="number" name="loan_amount" value="<?php echo $amount; ?>" required>
                </div>
                <div class="group">
                    <div class="title">Interest Rate (%)</div>
                    <input type="number" step="0.1" name="interest_rate" value="<?php echo $interest; ?>" required>
                </div>
                <div class="group">
                    <div class="title">Tenure (months)</div>
                    <input type="number" name="loan_tenure" value="<?php echo $tenure; ?>" required>
                </div>
                <button type="submit" class="calculate-btn">Calculate</button>
            </form>
        </div>

        <div class="result">
            <div class="result-box">
                <h3>Monthly EMI</h3>
                <div class="value"><?php echo formatIndianCurrency($emi); ?></div>
            </div>
            <div class="result-box">
                <h3>Total Interest</h3>
                <div class="value"><?php echo formatIndianCurrency($totalInterest); ?></div>
            </div>
            <div class="result-box">
                <h3>Total Amount</h3>
                <div class="value"><?php echo formatIndianCurrency($totalAmount); ?></div>
            </div>
        </div>
    </div>
</body>
</html>
