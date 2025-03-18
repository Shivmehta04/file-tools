<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-One Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1><i class="fas fa-calculator"></i> Ultimate Calculator</h1>
        <nav>
            <button class="nav-btn active" data-tool="basic">Basic</button>
            <button class="nav-btn" data-tool="emi">EMI</button>
            <button class="nav-btn" data-tool="gst">GST</button>
            <!-- Add more buttons -->
        </nav>
    </header>

    <!-- Calculator Sections -->
    <main>
        <!-- Basic Calculator -->
        <div class="calculator active" id="basic">
            <div class="display">0</div>
            <div class="buttons">
                <button>7</button> <button>8</button> <button>9</button> <button class="operator">+</button>
                <!-- Add all buttons -->
            </div>
        </div>

        <!-- EMI Calculator -->
        <div class="calculator" id="emi">
            <input type="number" id="loanAmount" placeholder="Loan Amount (₹)">
            <input type="number" id="interestRate" placeholder="Interest Rate (%)">
            <input type="number" id="loanTenure" placeholder="Tenure (months)">
            <button onclick="calculateEMI()">Calculate</button>
            <div id="emiResult"></div>
        </div>

        <!-- GST Calculator -->
        <div class="calculator" id="gst">
            <input type="number" id="amount" placeholder="Amount (₹)">
            <select id="gstRate">
                <option value="5">5%</option>
                <option value="12">12%</option>
                <option value="18">18%</option>
            </select>
            <button onclick="calculateGST()">Calculate</button>
            <div id="gstResult"></div>
        </div>

        <!-- Add more calculator sections -->
    </main>

    <script src="script.js"></script>
</body>
</html>