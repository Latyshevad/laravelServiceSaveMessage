<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## О проекте

Этот проект является тестовым заданием для компании "Сайтсофт". 

### Задание:
>***
>##### Сервис “Стена сообщений”.
>Верстка сервиса - в приложенном файле.
>##### Требования к технологиям
>Тестовое задание должно быть выполнено на PHP-фреймворке: Laravel 5.4.*.
>##### Главная страница
>Содержит список всех сообщений. Сортировка - снизу-вверх (последние добавленное
сообщение - сверху). У каждого сообщения, помимо текста, указано имя (username)
автора.
Если пользователь авторизован, ему становится доступна форма отправки сообщения.
Сообщение не может быть пустым (или состоять только из пробелов). При попытке
отправки такого сообщения - пользователю выдается предупреждение “Сообщение не
может быть пустым”.
Для проверки сообщения использовать валидацию входящих запросов (создается с
помощью команды «artisan make:request»).
После успешной отправки, сообщение пользователя сразу появляется на “стене”.
>##### Авторизация
>В случае неуспешной авторизации, пользователю выводится сообщение “Вход в систему с
указанными данными невозможен”.
Регистрация
Требования к логину и паролю пользователя могут быть следующие:
>* Логин — только альфа-символы (a-z) (в любом регистре) + возможно цифры (0-9),
минимальная длинна — 8 символов.
>* Пароль — обязательно символы в верхнем и нижнем регистрах + цифры, минимальная
длинна — 6 символов.
>В случае неуспешной регистрации, каждое некорректно заполненное поле должно быть
снабжено сообщением об ошибке.
>##### Главное меню (сверху)
>Пункт “Главная” - ведет на главную страницу, показывается всегда;
Пункты “Авторизация” и “Регистрация” показываются только неавторизованным
пользователям.
Блок справа показывается только авторизованному пользователю. Содержит Имя
пользователя и ссылку “Выход”, нажав на которую пользователь выходит из - под своей
учетной записи.
>
>##### Дополнительная информация
>Разрешено использовать любые сторонние composer-пакеты.
Все реализуемые методы должны иметь корректный phpdoc-комментарий (описание на
русском языке, @params, @return).
База данных должна создаваться с помощью миграций (никаких sql-файлов).
База данных должна наполняться фейковыми записями с помощью механизма сидов.
>
>##### Бонусом будут являться
>Начилие минимальных функциональных тестов (проверить, возвращается ли контент
страниц при обращении по их роутам; содержал ли они ошибки).
Наличие юнит-тетов моделей (phpunit 5.7.*).
Интуитивно-понятное разбитие коммитов — одной конкретной задаче — один коммит (её
правки — отдельный коммит).
Результат выполнения выложить на https://github.com
>*******

### Системные требования
Системные требования не отличяются от стандартных:
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

### Установка
В этом разделе предпологается что у Вас уже установлен и настроин `git` и `composer`. Если нет то установите эти инструменты следуя инструкции с официального сайта: [githab](https://git-scm.com/book/ru/v1/%D0%92%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5-%D0%A3%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0-Git) и [composer](https://getcomposer.org/)
```angular2html
1. Установить фреймворк laravel 5.4.*: composer create-project --prefer-dist laravel/laravel sitename.ru "5.4.*"
    Где sitename.ru - имя Вашего домена.
2. Установить проект из репозитория: https://github.com/Latyshevad/laravelServiceSaveMessage.git, любым удобным способом и перенести, с заменой, файлы клонированного каталога в основной каталог.
3. Создать (если не созданна) новую бызу данных.
4. Внести минимальные изменения в файле конфигурации .env, в соответствии с вашими парамметрами сервера:
   * DB_DATABASE=sitename_db // Имя базы данных
   * DB_USERNAME=root        // Пользователь для базы
   * DB_PASSWORD=null        // Его пароль, если есть
5. Сделать миграции проекта командой: php artisan migrate
6. Заполнить начальными данными: php artisan db:seed
Готово.
```

### Комментарии к проекту
От себя лично хочу сказать, что Laravel один из лучших и удобных фреймворков. Хоть это и первый мой проект на нем, я не чувствовал дискомфорта или непонимания. Всё сделано что-бы программист реально делал вещи и не задумывался о громозких конструкциях для той или иной задачи. После этого тестового задания я полностью хочу переключиться на Laravel. Думаю в ближайшее время мой GIT наполнится еще и Open Source проектами. 
По самому проекту: Старался придерживаться методологией Dry, KISS, YAGNI. Комментировал все функции. И просто старался сделать код человекопонятным. Что бы любой другой программист смог разобраться и по желанию внести свою лепту (хоть это и маловероятно). 