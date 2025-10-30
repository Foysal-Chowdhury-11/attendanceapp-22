<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select University Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for a modern, centered look */
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f4f7f9;
        }
        .card {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 5px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="p-4">

    <div class="card bg-white p-8 md:p-12 rounded-xl w-full max-w-md text-center">
        
        <h1 class="text-3xl font-extrabold text-indigo-700 mb-2">
            National University Faculty Portal
        </h1>
        <p class="text-gray-600 mb-8">
            Please select your university to proceed to the login page.
        </p>

        <label for="university-select" class="block text-left text-sm font-medium text-gray-700 mb-2">
            Select Your Institution
        </label>
        
        <select id="university-select" 
                onchange="redirectToLogin(this.value)"
                class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 transition duration-150 ease-in-out cursor-pointer appearance-none bg-white">
            
            <option value="" disabled selected>-- Choose University --</option>
            <option value="state_university">National University College Code</option>
            <option value="metro_college">Lalmatia Government Mohila College</option>
            <option value="coastal_uni">Tejgaon College</option>
           

        </select>
        
        <p id="message-box" class="mt-6 text-sm text-gray-500 hidden">
            
        </p>
    </div>

    <script>
        // *** CRITICAL CHANGE: This now points to your renamed original login file. ***
        const loginPage = 'login.php'; 

        // Define the function that runs when the dropdown value changes
        function redirectToLogin(universityValue) {
            const msgBox = document.getElementById('message-box');
            
            if (universityValue) {
                // Show a brief message before redirection
                msgBox.textContent = `Redirecting you to the portal for ${universityValue.replace(/_/g, ' ').toUpperCase()}...`;
                msgBox.classList.remove('hidden');

                // Set a small delay for the message to be visible, then redirect
                setTimeout(() => {
                    window.location.href = loginPage;
                }, 750); // 750 milliseconds (0.75 seconds) delay
            }
        }
        
        function showCustomMessage(title, message) {
            // Placeholder for a custom alert box
            console.log(`[Message: ${title}] ${message}`);
            
            const msgBox = document.getElementById('message-box');
            msgBox.textContent = message;
            msgBox.classList.remove('hidden');
            
            setTimeout(() => {
                msgBox.classList.add('hidden');
            }, 5000);
        }

    </script>
</body>
</html>
