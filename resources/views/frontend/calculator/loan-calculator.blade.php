@extends('frontend.layout.app')
@section('title', 'Loan Calculator')
@section('content')
    <div class=" container mt-3 emi-container">
        <div class="emi-header">
            Loan EMI Calculator
        </div>
        <div class="emi-body">
            <!-- Form Section -->
            <div class="emi-form">
                <form id="loanForm">
                    <label>Loan Amount (₹)</label>
                    <input type="number" id="amount" value="500000" step="1000" required>

                    <label>Interest Rate (%)</label>
                    <input type="number" id="rate" value="8.5" step="0.1" required>

                    <label>Loan Tenure (Years)</label>
                    <input type="number" id="years" value="5" required>

                    <button type="submit" class="btn btn-primary">Calculate EMI</button>
                </form>
            </div>

            <!-- Result Section -->
            <div class="emi-result">
                <h4>Result</h4>
                <p><strong>EMI:</strong> ₹<span id="emi">0</span></p>
                <p><strong>Total Payment:</strong> ₹<span id="total">0</span></p>
                <p><strong>Total Interest:</strong> ₹<span id="interest">0</span></p>
                <canvas id="emiChart" width="100" height="100"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('emiChart').getContext('2d');
        let emiChart;

        document.getElementById('loanForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let P = parseFloat(document.getElementById('amount').value);
            let annualRate = parseFloat(document.getElementById('rate').value);
            let years = parseFloat(document.getElementById('years').value);

            let r = annualRate / 12 / 100;
            let n = years * 12;

            let emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
            let totalPayment = emi * n;
            let totalInterest = totalPayment - P;

            document.getElementById('emi').innerText = emi.toFixed(2);
            document.getElementById('total').innerText = totalPayment.toFixed(2);
            document.getElementById('interest').innerText = totalInterest.toFixed(2);

            // Update Chart
            if (emiChart) emiChart.destroy();
            emiChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Principal', 'Interest'],
                    datasets: [{
                        data: [P, totalInterest],
                        backgroundColor: ['#00ffd0', '#ff4d6d'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            labels: {
                                color: '#fff',
                                font: {
                                    size: 14
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
