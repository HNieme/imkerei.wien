		<?php
			include "../assets/template/head/head.php";
		?>
<script type="text/javascript">
        function codeAddress() {

            // hide header navigation
            document.getElementById('headernav').style.display = "none";

            // hide newsletter subscription form
            document.getElementById('newsletter-outer').style.display = "none";

            // hide footer navigation
            elems = Object.values(document.getElementsByClassName('footer-link-collection'));

            elems.forEach(function (e) {
                 if (e.id != 'footer_info'){
                    e.style.display = "none";
                }
            });

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
                document.getElementById('honey500').max = data.honey500.amount_available;
                document.getElementById('price_honey500').textContent = data.honey500.price + "€";
                document.getElementById('amount_honey500').textContent = "Verfügbar: " + data.honey500.amount_available + " Gläser";
                document.getElementById('propolis30').max = data.propolis30.amount_available;
                //document.getElementById('price_propolis30').textContent =  data.propolis30.price + "€";
                document.getElementById('amount_propolis30').textContent = "Verfügbar: " + data.propolis30.amount_available + " Stück";
              })
              .catch(error => {
                console.error('Error:', error);
              });
            checkValues();
        }
        window.onload = codeAddress;
        </script>

            <form action="https://honeymat.imkerei.wien/order" method="post" target="_self" id="orderForm">
                <img src="https://imkerei.wien/produkte/honig/img/preview.png" width="100%" />
                <label class="productLabel" for="honey500">
                    <span class="product">Honig</span>
                    <span class="size">500g</span>
                    <span class="amount" id="amount_honey500">ddd</span>
                    <span class="price" id="price_honey500">Preis: 5,50€</span>
                </label>
                <div class="quantity-control">
                    <button class="decrementBtn inDecBtn" type="button" >-</button>
                    <input type="number" id="honey500" class="input-pcs quantityInput" name="honey500" min="0" max="10" value="0" readonly>
                    <button class="incrementBtn inDecBtn" type="button" >+</button>
                </div>
                <img src="https://imkerei.wien/produkte/propolis/img/propolis-preview.jpg" width="100%" />
                <label class="productLabel" for="propolis30">
                    <span class="product">Propolis</span>
                    <span class="size">30ml</span>
                    <span class="amount" id="amount_propolis30">ddd</span>
                    <span class="price" id="price_propolis30">Preis: 5,50€</span>
                </label>
                <div class="quantity-control">
                    <button class="decrementBtn inDecBtn" type="button" >-</button>
                    <input type="number" id="propolis30" class="input-pcs quantityInput" name="propolis30" min="0" max="10" value="0" readonly>
                    <button class="incrementBtn inDecBtn" type="button" >+</button>
                </div>


                <label for="submitBtn" id="submitBtnEmptyOrder">Bitte mindestens ein Produkt bestellen</label>
                <input type="submit" value="Zur Kasse gehen" id="submitBtn" disabled>
            </form>

            <script>
                // Select input fields and submit button
                const honey500 = document.getElementById('honey500');
                const propolis30 = document.getElementById('propolis30');
                const submitBtn = document.getElementById('submitBtn');
                const submitBtnLabelEmptyOrder = document.getElementById('submitBtnEmptyOrder');

                // Function to check the input values and toggle submit button state
                function checkValues() {
                    // Convert input values to integers
                    const honeyValue = parseInt(honey500.value);
                    const propolisValue = parseInt(propolis30.value);
                    const honeyMin = parseInt(honey500.min);
                    const propolisMin = parseInt(propolis30.min);
                    const honeyMax = parseInt(honey500.max);
                    const propolisMax = parseInt(propolis30.max);
                    if (honeyValue > honeyMax) {
                        honey500.value = honeyMax;
                    }
                    if (propolisValue > propolisMax) {
                        propolis30.value = propolisMax;
                    }

                    // Enable submit button if at least one value is greater than 0, otherwise disable
                    if (honeyValue > honeyMin || propolisValue > propolisMin) {
                        submitBtn.disabled = false; // Enable submit button
                        submitBtnLabelEmptyOrder.style.display = "none";

                    } else {
                        submitBtn.disabled = true;  // Disable submit button
                        submitBtnLabelEmptyOrder.style.display = "block";
                    }
                }

                // Add event listeners to input fields to trigger value check on change
                honey500.addEventListener('input', checkValues);
                propolis30.addEventListener('input', checkValues);

                ////////////////////////////////////////////
                //  Code for increment/decrement-buttons  //
                ////////////////////////////////////////////

                // Function to increment or decrement the value
                function changeValue(input, step) {
                    const currentValue = parseInt(input.value);
                    const min = parseInt(input.min);
                    const max = parseInt(input.max);
                    const newValue = currentValue + step;
                    // Ensure the value stays within the min and max range
                    if (newValue >= min && newValue <= max) {
                        input.value = newValue;
                    }
                    input.dispatchEvent(new Event('input')); // Dispatch input event

//                     } else if (currentValue > max) {
//                         input.value = max;
//                         input.dispatchEvent(new Event('input')); // Dispatch input event
//                     } else if (currentValue < min) {
//                         input.value = min;
//                         input.dispatchEvent(new Event('input')); // Dispatch input event
//                     }
                }

                // Get all quantity input fields
                const quantityInputs = document.querySelectorAll('.quantityInput');
                console.log(quantityInputs)
                // Loop through each input field and attach event listeners to associated buttons
                quantityInputs.forEach((input) => {
                    const decrementBtn = input.previousElementSibling;
                    const incrementBtn = input.nextElementSibling;

                    // Attach click event listeners to the increment and decrement buttons

                    incrementBtn.addEventListener('click', () => changeValue(input, 1));
                    decrementBtn.addEventListener('click', () => changeValue(input, -1));
                });


            </script>

		<?php
			include "../assets/template/footer/footer.php";
		?>

