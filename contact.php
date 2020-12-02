<?php include("header.php") ?>
        
        <main>
			<div class="contact-form">
				<div class="container">
					<h2 class="contact-title-form">Contato</h2>
					<div class="contact-box">
						<form class="contact-content" action="email.php" method="POST">
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" required>

							<label for="e-mail">E-mail</label>
							<input type="email" id="e-mail" name="e-mail" required>

							<label for="message">Mensagem</label>
							<textarea name="mensagem" id="message" rows="2" required></textarea>

							<button class="btn btn-submit">Enviar</button>
						</form>
					</div>						
				</div>
			</div>
        </main>

<?php include("footer.php") ?>		