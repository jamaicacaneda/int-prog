// Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('userForm');
    const responseDiv = document.getElementById('response');

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get the name input value
        const nameInput = document.getElementById('name');
        const name = nameInput.value.trim();

        // Clear previous response
        responseDiv.innerHTML = '<p class="loading">Sending data...</p>';

        // Prepare data to send
        const formData = new FormData();
        formData.append('name', name);

        // Send AJAX request using Fetch API
        fetch('process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Check if the response is ok
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            // Display the JSON response
            displayResponse(data);
        })
        .catch(error => {
            // Handle errors
            responseDiv.innerHTML = `
                <div class="error">
                    <h3>Error</h3>
                    <p>${error.message}</p>
                </div>
            `;
        });
    });

    // Function to display the response
    function displayResponse(data) {
        const statusClass = data.status === 'success' ? 'success' : 'error';

        responseDiv.innerHTML = `
            <div class="${statusClass}">
                <h3>Response from Server</h3>
                <p><strong>Status:</strong> ${data.status}</p>
                <p><strong>Message:</strong> ${data.message}</p>
                <div class="json-display">
                    <h4>Raw JSON Response:</h4>
                    <pre>${JSON.stringify(data, null, 2)}</pre>
                </div>
            </div>
        `;
    }
});
