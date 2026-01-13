# Laravel 12 — Projeto de Exemplo

Um projeto web construído com **Laravel 12**, aprendendo e aplicando funcionalidades como autenticação, middleware, permissões de admin, CRUD de usuários e boas práticas de rotas e controllers.

⚡ Baseado no framework Laravel, que proporciona sintaxe expressiva, sistema de rotas simples, ORM Eloquent e muitos recursos poderosos para desenvolvimento web moderno. :contentReference[oaicite:0]{index=0}

---

## 🧰 Tecnologias

🔹 PHP 8.4  
🔹 Laravel 12  
🔹 Blade (templates)  
🔹 Git e GitHub  
🔹 Banco de dados (MySQL ou SQLite, à sua escolha)

---

## 🚀 Funcionalidades

✔ Autenticação de usuários  
✔ Middleware para permissões de admin  
✔ CRUD de usuários (listar, ver, criar, editar e deletar)  
✔ Proteção contra exclusão do próprio usuário  
✔ Uso de Gates para controle de acesso

---

## 🚧 Pré-requisitos

Antes de começar, você precisa ter instalado:

✔ PHP (versão recomendada >= 8.1)  
✔ Composer  
✔ Banco de dados (MySQL/PostgreSQL/SQLite)  
✔ Node.js (opcional)  
✔ Git

---

## 📦 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/Rodrigo-Tunala/Laravel-12.git
cd Laravel-12
```

2. Istale as dependênsias:
```
composer install
```

3. Copie e configure o .env:
```
cp .env.example .env
```
4. Gere a chave de aplicação:
```
php artisan key:generate
```
5.  Configure as variáveis de ambiente no .env (ex: banco de dados)

## 🗄️ Banco de Dados
Rode as migrations para criar as tabelas:
```
php artisan migrate
```
Se quiser popular com dados de teste:
```
php artisan db:seed
```

## ▶️ Executar o Projeto
Inicie o servidor de desenvolvimento:
```
php artisan serve
```
Acesse no navegador:
```
http://localhost:8000
```
## 🛡️ Controle de Acesso

Este projeto usa middleware e Gates para verificar se o usuário é admin antes de permitir certas ações.

Exemplo no AuthServiceProvider:
```
use App\Models\User;
use Illuminate\Support\Facades\Gate;

public function boot(): void
{
    Gate::define('is-admin', function (User $user): bool {
        return $user->isAdmin();
    });
}

```
## 📁 Estrutura Básica
```
app/
  Http/
    Controllers/
    Middleware/
  Models/
routes/
  web.php
database/
  migrations/
resources/
  views/
.env.example

```

## 🤝 Contribuição

Contribuições são bem-vindas!
Para sugerir melhorias, abra uma issue ou envie um pull request.

## 📝 Licença

Este projeto está sob a licença MIT — veja o arquivo LICENSE para mais detalhes.

## ⭐ Agradecimentos

Obrigado por conferir este projeto!
Se achou útil, deixe uma ⭐ no repositório 😉
