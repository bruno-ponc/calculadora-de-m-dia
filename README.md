# Sistema Escolar - Gestão de Notas (Laravel)

Sistema web desenvolvido em Laravel para gerenciamento escolar, permitindo cadastro de alunos, turmas, lançamento de notas, cálculo automático de médias, recuperação e controle de fechamento de turmas.

---

# Tecnologias Utilizadas

- PHP 8+
- Laravel 12+
- MySQL
- Bootstrap 5
- Blade (Laravel)
- HTML5
- CSS3

---

# Funcionalidades

## Alunos
- Cadastro de alunos
- Listagem de alunos cadastrados

---

## Turmas
- Cadastro de turmas
- Listagem de turmas
- Fechamento de turma
- Bloqueio de edição após fechamento

---

## Notas
- Cadastro de 4 notas por aluno
- Seleção de aluno e turma
- Cálculo automático da média

---

## Sistema de Avaliação

| Média | Conceito | Situação |
|------|----------|----------|
| ≥ 9 | A | Aprovado com louvor |
| ≥ 7 | B | Aluno aprovado |
| ≥ 4 | C | Recuperação |
| < 4 | D | Reprovado |

---

## Recuperação
- Lançamento de nota de recuperação
- Regra:
  - Se (média + recuperação ≥ 10) → Aprovado
  - Caso contrário → Reprovado

---

## Boletim
- Exibição de aluno, turma e notas
- Média final
- Resultado final
- 
---

# Estrutura do Banco de Dados

## Tabelas

### alunos
- id
- nome
- created_at
- updated_at

---

### turmas
- id
- nome
- fechada (boolean)
- created_at
- updated_at

---

### notas
- id
- aluno_id
- turma_id
- nota1
- nota2
- nota3
- nota4
- media
- conceito
- recuperacao
- resultado_final
- created_at
- updated_at

---

# Relacionamentos

- Um aluno pode ter várias notas
- Uma nota pertence a um aluno
- Uma nota pertence a uma turma

---

## Instalação do projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/sistema-escolar.git
cd sistema-escolar
```

### 2. Instalar dependências PHP

```bash
composer install
```

### 3. Configurar o ambiente

Copie o arquivo de exemplo do ambiente:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 4. Configurar o banco de dados

Abra o arquivo `.env` e ajuste as configurações abaixo:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=escola_media
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Criar o banco de dados

No MySQL, execute:

```sql
CREATE DATABASE escola_media;
```

### 6. Executar migrations

```bash
php artisan migrate
```

### 7. Popular o banco de dados

Opcionalmente, você pode inserir dados iniciais com:

```bash
php artisan db:seed
```

### 8. Iniciar o servidor

```bash
php artisan serve
```

Acesse no navegador:

```bash
http://127.0.0.1:8000
```

## Telas do sistema

- Cadastro de alunos.
- Cadastro de turmas.
- Cadastro de notas.
- Boletim do aluno.
- Resultado da média.
- Recuperação.
- Resumo geral.
- Controle de turmas.

## Regras de negócio

- Um aluno pode estar em várias turmas.
- As notas pertencem ao aluno e à turma.
- Turma fechada não permite edição.
- A média é calculada automaticamente.
- A recuperação pode alterar o resultado final.

## Interface

- Layout responsivo com Bootstrap 5.
- Interface adaptada para mobile e desktop.

## Segurança e validações

- Proteção CSRF ativa.
- Validação de formulários.
- Bloqueio de edição em turma fechada.
- Controle de integridade no banco de dados.

---

## S


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
