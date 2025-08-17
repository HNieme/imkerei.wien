		<?php
			include "../assets/template/head/head.php";
		?>
        <h2>
            Vielen Dank für deine Bestellung!
        </h2>
        <p>
            Der Automat wird dir deine Produkte gleich ausgeben!
            <br/>
            Bestellnummer: <span id="bestellnr" style="word-break: break-all;"></span>
            <script>
                // insert payment_id into above <span>
                const queryString = window.location.search;
                document.getElementById('bestellnr').textContent = new URLSearchParams(queryString).get('payment_id');


                // hide newsletter subscription form
                document.getElementById('newsletter-outer').style.display = "none";

            </script>
            <br/>
            <br/>
            <br/>
            Du hast noch Fragen? Irgendetwas hat nicht geklappt? Ruf mich an!
            <ul class="wide-ul">
                <li>
                    <a href="tel:+4367761208583">+43 677 61208583</a>
                </li>
                <li>
                    Falls ich nicht erreichbar sein sollte kannst du mir auch via Signal/Telegram schreiben oder eine E-Mail senden: <a href="mailto:kontakt@imkerei.wien">kontakt@imkerei.wien</a>
                </li>
            </ul>
        </p>


		<?php
			include "../assets/template/footer/footer.php";
		?>

