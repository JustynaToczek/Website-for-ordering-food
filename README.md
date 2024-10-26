## Wstęp

Tematem projektu jest aplikacja do zamawiania jedzenia do domu online. Projekt ma na celu w sposób prosty i przyjazny przedstawić użytkownikom ofertę strony oraz zachęcić ich do skorzystania z oferowanych usług. Użytkownik może wybrać spośród miast i restauracji oraz zamówić wybrane przez niego produkty i dania. Kolejnym założeniem projektu jest możliwość zarządzania przez administratora złożonymi przez użytkownika zamówieniami oraz ofertą, tj. miastami, restauracjami, produktami.

## Uruchamianie aplikacji

Aby uruchomić aplikację należy wykonać poniższe kroki.

1. Zainstaluj XAMPP.
2. W XAMPP uruchom usługę Apache oraz MySQL.
3. Uruchom plik projektu „start.bat” (utworzy on bazę danych, zainstaluje composer, utworzy storage link).
4. W terminalu, w katalogu projektu wprowadź komendy „php artisan migrate” oraz „php artisan db:seed”.
5. W terminalu w katalogu projektu wprowadź komendę „php artisan serve” oraz w przeglądarce przejdź pod adres http://127.0.0.1:8000/

## Diagram ERD bazy danych
![image](https://github.com/user-attachments/assets/20aa1cd3-9d80-4ab8-bfa4-8e22aebeab6f)

## Warstwa prezentowa
### Strona główna aplikacji
![image](https://github.com/user-attachments/assets/35874245-0337-477b-af56-6e6264abf36a)

Strona główna aplikacji zrobiona jest w sposób przejrzysty dla użytkownika. Użytkownik może wybrać z menu dropdown miasto, z którego będzie przeglądał oferty restauracji.
W pasku nawigacyjnym przycisk „Home” przekierowuje właśnie do ww. strony głównej. Ikona wózka na zakupy przekierowuje do koszyka zalogowanego użytkownika.
Przyciski z prawej strony paska nawigacyjnego służą zalogowaniu lub rejestracji użytkowników.
<br><br>

### Widok wyboru restauracji
![image](https://github.com/user-attachments/assets/0c2839d2-e7b6-462c-bc18-78f3a175f523)

Po wybraniu miasta na stronie głównej, aplikacja przekierowuje użytkownika do widoku z wyborem restauracji. Każdą restaurację reprezentuje zdjęcie, jej nazwa oraz opis.
<br><br>


### Widok koszyka
![image](https://github.com/user-attachments/assets/3ec17bd5-e79b-4af9-8d00-1d30e7ba5ff6)

Widok koszyka jest zapewniony tylko dla zalogowanych użytkowników. Zalogowani użytkownicy po przejściu do widoku koszyka mogą zobaczyć dodane przez nich dania, ilości oraz należną cenę.
<br><br>



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
