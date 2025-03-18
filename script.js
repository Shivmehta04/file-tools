// Navigation
document.querySelectorAll('.nav-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.nav-btn.active').classList.remove('active');
        btn.classList.add('active');
        document.querySelector('.calculator.active').classList.remove('active');
        document.getElementById(btn.dataset.tool).classList.add('active');
    });
});

// Basic Calculator Logic
let currentInput = '0';
document.querySelectorAll('#basic button').forEach(btn => {
    btn.addEventListener('click', () => {
        const value = btn.innerText;
        // Add calculator logic
    });
});

// EMI Calculator
function calculateEMI() {
    const P = parseFloat(document.getElementById('loanAmount').value);
    const r = parseFloat(document.getElementById('interestRate').value) / 1200;
    const n = parseFloat(document.getElementById('loanTenure').value);
    const emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
    document.getElementById('emiResult').innerHTML = `Monthly EMI: ₹${emi.toFixed(2)}`;
}

// GST Calculator
function calculateGST() {
    const amount = parseFloat(document.getElementById('amount').value);
    const rate = parseFloat(document.getElementById('gstRate').value);
    const gst = (amount * rate) / 100;
    document.getElementById('gstResult').innerHTML = `
        GST: ₹${gst.toFixed(2)}<br>
        Total: ₹${(amount + gst).toFixed(2)}
    `;
}

// Add more calculator functions