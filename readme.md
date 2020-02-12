#  Teste PHP upLexis
Você deverá desenvolver uma aplicação que utilize PHP (se possível na  
versão mais recente que você conseguir) e Framework Laravel – versão 5 ou  acima. A aplicação deve ser capaz de realizar uma requisição ao Blog da upLexis (http://www.uplexis.com.br/blog) e capturar artigos de acordo com a pesquisa realizada.


# Tecnologias utilizadas

 - php: ^7.2,
 - laravel/framework: ^6.2,
 - laravel-mix: ^5.0.1,
 - laravel/tinker: ^2.0,
 - laravel/ui: ^1.1
 - bootstrap: ^4.0.0,
 - MySql

## Instalação

 1. Baixar o repositório. 

      `$ git clone https://github.com/nosreffejsm/upLexisBlog.git` 

 2.  Abrir o cmd no diretório do projeto e executar o comando 

    `composer install`

 3. Configurar a base de dados mysql
	 
     **obs.: Esses dados são variáveis, o preenchimento deles depende da sua configuração/instalação.**
     
     Criar o banco mySQL: **uplexisdb**
     
     Arquivo: ...\upLexisBlog\ .env

    	DB_CONNECTION=mysql
    	DB_HOST=127.0.0.1
    	DB_PORT=3306
    	DB_DATABASE=uplexisdb
    	DB_USERNAME=root
    	DB_PASSWORD=
 
 1. Migrar tabelas para o banco criado e e realizar a criação do usuario adm.
	 Novamente no CMD, no diretório do projeto, executar:
     
    - Cria as tabelas:`php artisan migrate`               
    - Cria o usuário: `php artisan db:seed`

- usuário: **admin@admin.com**
- senha: **admin**

5. Ainda no terminal/cmd, iniciar o servidor

    `php artisan serve`

------------------------------------------------------------------------------

Agora é só acessar o endereço gerado no terminal/cmd e usar as credenciais. 
usuário: **admin@admin.com** senha: **admin**

## ScreenShot

![alt text](https://i.ibb.co/0MFvdxw/Opera-Instant-neo-2020-02-10-132256-127-0-0-1.png)
![alt text](https://i.ibb.co/3mSLMSW/Opera-Instant-neo-2020-02-10-132352-127-0-0-1.png)
![alt text](https://i.ibb.co/prd7Dtx/Opera-Instant-neo-2020-02-10-132420-127-0-0-1.png)

--------------------------------------------------------------------------------


<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
