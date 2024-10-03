		<?php
			include "../assets/template/head/head.php";
		?>
<script type="text/javascript">
        function codeAddress() {
            alert('ok');
            // hide header naviagation
            document.getElementById('headernav').style.visibility ="hidden"

            // Define the API URL
            const apiUrl = 'https://honeymat.imkerei.wien/availableProducts';

            // Make a GET request
            fetch(apiUrl)
              .then(response => {
                if (!response.ok) {
                  throw new Error('Network response was not ok');
                }
                return response.json();
              })
              .then(data => {
                console.log(data);
              })
              .catch(error => {
                console.error('Error:', error);
              });


        }
        window.onload = codeAddress;
        </script>

<form action="https://honeymat.imkerei.wien/order" method="post" target="_self">
    <label for="honey500">Honey 500:</label>
    <input type="number" id="honey500" name="honey500" min="0" max="10" value="0"><br><br>
    <label for="propolis30">Propolis:</label>
    <input type="number" id="propolis30" name="propolis30" min="0" max="10" value="0"><br><br>
    <input type="submit" value="Submit" id="submitBtn" disabled>
</form>

    <script>
        // Select input fields and submit button
        const honey500 = document.getElementById('honey500');
        const propolis30 = document.getElementById('propolis30');
        const submitBtn = document.getElementById('submitBtn');

        // Function to check the input values and toggle submit button state
        function checkValues() {
            // Convert input values to integers
            const honeyValue = parseInt(honey500.value);
            const propolisValue = parseInt(propolis30.value);

            // Enable submit button if at least one value is greater than 0, otherwise disable
            if (honeyValue > 0 || propolisValue > 0) {
                submitBtn.disabled = false; // Enable submit button
            } else {
                submitBtn.disabled = true;  // Disable submit button
            }
        }

        // Add event listeners to input fields to trigger value check on change
        honey500.addEventListener('input', checkValues);
        propolis30.addEventListener('input', checkValues);
    </script>

		<?php
			include "../assets/template/footer/footer.php";
		?>

