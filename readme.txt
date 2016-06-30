Для установки на веб сервер, требуется:
-Распаковать архив.
-Залить дамп базы данных.
-Настройки сайта, а так же логин и пароль к бд и админке хранятся в /app/core/config.php
-Примечание: в моем движке исползуется библиотека PDO для работы с БД. Необходимо раскомментировать в php.ini: extension=php_pdo.dll и extension=php_pdo_mysql.dll
-Так же для корректной работы желательно изменить: session.auto_start = 1
-Так же неободимо настроить апач для чтения .htaccess файла:  apache.conf > 
                                           *UNIX
                                             <Directory /var/www/>
                                             	Options Indexes FollowSymLinks
                                             	AllowOverride All
                                             	Require all granted
                                             </Directory>
