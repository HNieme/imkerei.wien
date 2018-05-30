		<?php 
			include "../assets/template/head/head.php";
		?>
			<p><br /><br /></p>
			<h1>Kontakt</h1>
			<p>
				So kannst du mich erreichen:
				<ul class="wide-ul">
					<li>
						E-Mail: <a href="mailto:kontakt@imkerei.wien">kontakt@imkerei.wien</a> (Verschlüsselung via <a href="https://niemeczek.at/blog/gpg/">GPG</a> möglich.)
					</li>
					<li>
						Telefon: <a href="tel:+4367761208583">+43 677 61208583</a> - Please respect that I live in Europe and really like undisturbed sleep during the night and early morning.
					</li>
					<li>
						Signal: <a href="tel:+4367761208583">+43 677 61208583</a>
					</li>
					<li>
						XMPP/Jabber: <a href="xmpp:postmaster@niemeczek.at">postmaster@niemeczek.at</a>, OMEMO-schlüssel siehe unten
					</li>
					<li>
						<a href="https://twitter.com/HNieme" target="_blank">Twitter</a> (rarely visited!)
					</li>
				</ul>
				<br /><br /><br /><br />
			</p>
			<h2>GPG-Schlüssel:</h2>
			<p>
				<a href="/GnuPG">Was ist PGP?</a>
				<br /><br />
				<b>Schlüssel für alltägliches Verschlüsseln und Unterschreiben:</b> 
				<br />
				<a href="/GnuPG/Harald Niemeczek harald@niemeczek.at (0x68A0EF1D) pub.asc">0x68A0EF1D</a>  -  
				Fingerprint: 9258 49E8 4B61 5C76 235A DE49 FD27 9AD7 68A0 EF1D
				<br /><br />
				Dieser Schlüssel verwendet <a target="_blank" href="https://wiki.debian.org/Subkeys">Subkeys</a>, der Hauptschlüssel (master-key) ist offline gespeichert, sodass im Falle der Kompromittierung des Schlüssels nur die Subkeys ersetzt werden müssen. Diese werden außerdem alle 2 Jahre rotiert/ersetzt. Es kann davon ausgegangen werden, dass der Schlüssel ein niedriges Sicherheitslevel hat. Er ist signiert durch meinen ...
				<br /><br />
				<b>Keysigning Key</b>
				<br />
				<a href="/GnuPG/Harald Niemeczek (offline long-term identity key) (0x8B2E508B) pub.asc">SCHLÜSSELKENNUNG</a>  -  
				Fingerprint: 5A64 3A84 3226 9551 F76A 6A9B D059 3ABB 8B2E 508B
				<br /><br />
				Das ist ein Offline-Schlüssel, ausschließlich verwendet zum signieren der Hauptschlüssel und als Verbindung zum "Web of Trust". Dieser Schlüssel hat ein hohes Sicherheitslevel.
				
				<br /><br />
				<a href="https://keybase.io/hnieme">Keybase.io</a>
				
				
				
				<br /><br />
				<b><a target="_blank" href="https://www.heise.de/security/artikel/OMEMO-fuer-Jabber-eine-Einordnung-3603601.html" >OMEMO</a>-Fingerprint:</b> 
				<br />
				d6e3efb6 11f2203c 3543f765 9a3ccfe3 e03ed899 41f69dfb a1c2679d 3d02f217
				<br />
				(for <a href="xmpp:postmaster@niemeczek.at">postmaster@niemeczek.at</a>)
				<br /><br />
			</p>
		<?php 
			include "../assets/template/footer/footer.php";
		?>
