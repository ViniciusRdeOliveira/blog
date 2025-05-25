============================================================
              BLOG PHP CODAR - Vinicius Ribeiro
============================================================

📌 SOBRE O PROJETO
-------------------
Este é um projeto simples de blog desenvolvido com PHP, HTML e CSS.  
Permite listar e visualizar posts, utilizando dados organizados em arquivos PHP.

É ideal para quem está aprendendo lógica e estruturação de sites com PHP puro, sem frameworks.

📁 ESTRUTURA DE PASTAS
-----------------------
/
├── css/
│   └── styles.css              # Estilo principal do site
├── data/
│   ├── categories.php          # Lista de categorias dos posts
│   └── posts.php               # Dados dos posts simulando um "banco de dados"
├── helpers/
│   └── url.php                 # Funções auxiliares para manipulação de URLs
├── img/
│   ├── logo.svg                # Logotipo do blog
│   ├── prog-1.jpg              # Imagens dos posts
│   ├── prog-2.jpg
│   ├── prog-3.jpg
│   └── prog-4.jpg
├── templates/
│   (adicione aqui seus templates reutilizáveis)
├── contato.php                 # Página de contato do blog
├── index.php                   # Página inicial do blog, listagem de posts
└── post.php                    # Página de visualização individual do post

🧰 REQUISITOS
--------------
- PHP 7.4 ou superior
- Servidor Apache ou similar (XAMPP, WAMP, Laragon, etc)
- Navegador web moderno (Chrome, Firefox, Edge...)

⚙️ INSTALAÇÃO E USO
---------------------
1. Clone ou copie os arquivos para a pasta pública do seu servidor local (ex: `htdocs` ou `www`).
2. Inicie o Apache pelo painel do XAMPP ou similar.
3. Acesse via navegador: `http://localhost/BLOG/index.php`
4. Os posts estão definidos manualmente no arquivo: `data/posts.php`.

✏️ FUNCIONALIDADES
--------------------
- Listagem de posts na página inicial
- Visualização de posts individualmente via `post.php`
- Organização de categorias via `data/categories.php`
- Estrutura modular para futuras expansões (como adicionar comentários ou painel admin)

💡 SUGESTÕES DE MELHORIA
--------------------------
- Implementar sistema de administração para adicionar e editar posts via painel
- Conectar a um banco de dados MySQL real
- Adicionar paginação e sistema de busca

📄 LICENÇA
-----------
Este projeto é open-source e pode ser utilizado livremente para fins educacionais ou pessoais.

📬 CONTATO
-----------
Vinicius Ribeiro de Oliveira  
E-mail: vinicius.r.oliveira@outlook.com.br  
