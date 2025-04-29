  <!-- Feito por Vinícius Henrique Amorim Codo e Marjory Teixeira de Souza -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulário de inscrição</title>
  </head>
  <body>
      <header>
          <h1>Formulário de Inscrição</h1>
          <p>Por favor, complete os dados abaixo para realizar a inscrição.</p>
      </header>
  
      <main>
          <form action="server_post.php" method="post">
              <section>
                  <h2>Dados Pessoais</h2>
                  <p>Preencha seus dados pessoais abaixo:</p>   
                  <div>
                      <label for="nome">Nome Completo:</label>
                      <input type="text" name="nome" id="nome" required>
                  </div>
                  <div>
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email" required >
                  </div>
                  <div>
                  <label for="telefone">Telefone:</label>
                  <input type="telefone" name="telefone" id="telefone" required>
              </div>
              <div>
              <label for="data_de_nascimento">Data de Nascimento:</label>
              <input type="date" id="data_de_nascimento" name="data_de_nascimento" required><br>
                  <div>
                 <label>Gênero:</label>
                 <input type="radio" name="genero" value="Masculino" id="masculino">
                  <label for="masculino">Masculino</label>
                  <input type="radio" name="genero" value="feminino" id="feminino">
                  <label for="feminino">Feminino</label>
                  <input type="radio" name="genero" value="outro" id="outro">
                  <label for="Outro">Outro</label>
                  </div>
              </section>
  
              <section>
                  <h2>Tipo de inscrição</h2>
                  <p>Selecione o tipo de inscrição desejado:</p>
                  <div>
                      <label for="tipoInscriçao">Tipo de inscrição: </label>
                      <select id="tipoInscricao" name="tipoInscricao" id="tipoInscricao" required>
                      <option value="Palestrante">Palestrante</option>
                      <option value="Participante">Participante</option>
                      <option value="Voluntário">Voluntário</option>
                  </select>
                  </div>
              </section>
  
              <section>
                  <h2>Mensagem</h2>
                  <p>Deixe sua mensagem (opcional, máximo de 200 caracteres):</p>
                  <div>
                      <label for="messagem">Mensagem</label>
                      <textarea name="mensagem" id="mensagem" maxlength="200" required></textarea>
                  </div>
              </section>
  
              <footer>
                  <button type="reset">Limpar Formulário</button>
                  <button type="submit">Enviar Dados</button>
              </footer>
          </form>
      </main>
  </body>
  </html>