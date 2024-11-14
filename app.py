from flask import Flask, render_template, request, jsonify
import math

app = Flask(__name__)

def calculate_emi(loan_amount, interest_rate, tenure, tenure_type):
    # Convert interest rate to monthly rate
    monthly_rate = (float(interest_rate) / 12) / 100
    
    # Calculate number of payments
    num_payments = float(tenure) * 12 if tenure_type == 'Yr' else float(tenure)
    
    # Calculate EMI
    emi = float(loan_amount) * monthly_rate * (math.pow(1 + monthly_rate, num_payments)) / (math.pow(1 + monthly_rate, num_payments) - 1)
    
    # Calculate total payment and interest
    total_payment = emi * num_payments
    total_interest = total_payment - float(loan_amount)
    
    return {
        'emi': round(emi),
        'total_interest': round(total_interest),
        'total_payment': round(total_payment)
    }

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/calculate', methods=['POST'])
def calculate():
    data = request.get_json()
    result = calculate_emi(
        data['loan_amount'],
        data['interest_rate'],
        data['tenure'],
        data['tenure_type']
    )
    return jsonify(result)

if __name__ == '__main__':
    app.run(debug=True)