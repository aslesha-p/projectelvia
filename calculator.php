<?php
// You can add PHP logic here if needed in the future
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV Calculator</title>
    <style>
        :root {
            --primary-color: #10B981;
            --secondary-color: #064E3B;
            --background-color: #ECFDF5;
            --card-background: #FFFFFF;
            --text-color: #1F2937;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .calculator {
            max-width: 480px;
            width: 100%;
            margin: 0 auto;
            padding: 2rem;
            border-radius: 16px;
            background-color: var(--card-background);
            box-shadow: 0 4px 6px var(--shadow-color),
                        0 1px 3px var(--shadow-color);
            transition: transform 0.2s ease;
        }

        .calculator:hover {
            transform: translateY(-2px);
        }

        h1 {
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: 700;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--secondary-color);
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #E5E7EB;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
            outline: none;
        }

        input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        button {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        button:hover {
            background-color: var(--secondary-color);
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        #ev-list {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 2px solid #E5E7EB;
        }

        .ev-item {
            padding: 1rem;
            margin-bottom: 0.5rem;
            background-color: var(--background-color);
            border-radius: 8px;
            transition: transform 0.2s ease;
        }

        .ev-item:hover {
            transform: translateX(4px);
        }

        @media (max-width: 480px) {
            .calculator {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>EV Budget Calculator</h1>
        <div class="input-group">
            <label for="price-input">Enter Your Budget (Rs.):</label>
            <input 
                type="number" 
                id="price-input" 
                min="0" 
                placeholder="Enter amount..."
                autocomplete="off"
            >
        </div>
        <button id="go-button">Find EVs</button>
        <div id="ev-list"></div>
    </div>

    <script>
        document.getElementById('go-button').addEventListener('click', function() {
            const price = document.getElementById('price-input').value;
            const evList = document.getElementById('ev-list');
            
            // Clear previous results
            evList.innerHTML = '';
            
            if (price) {
                // Add loading indicator
                evList.innerHTML = '<div class="ev-item">Searching for EVs...</div>';
                
                // Here you can add logic to fetch and display EVs based on the price
                // For now, just showing a placeholder message
                setTimeout(() => {
                    evList.innerHTML = `
                        <div class="ev-item">
                            <strong>Available EVs in your budget range (Rs.${price}):</strong>
                        </div>
                    `;
                }, 500);
            }
        });
    </script>
</body>
</html>