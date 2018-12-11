# WebMail-Login-Pages

That repo contains templates of popular WebMail interfaces for social-engineering and penetration tests

Login form contain PHP script that logging all data that sends on `index.php` page.

PHP script log data to `log.txt` near the `index.php` file.

!!! Don't forget to hide file `log.txt` from public access.

В данном репозитории расположены шаблоны потовых веб-клиентов для применения 
    их в сценариях соц. инженерии.
    
Каждый шаблон содержит файл index.php, который является основной страницей 
    входа в фальшивый почтовый клиент.
    
В начале каждого файла index.php размещен код производящий логирование любых 
    запросов к файлу index.php, в которых есть какие-либо параметры.
    Логирование происходит в файл 'log.txt' в той же папке, что и файл index.php.
    Если программа не обнаруживает файл log.txt, то пытается его создать 
    (если обладает такой возомжностью).

При вводе учетных данных любой пользователь будет отправлен с введенными данными
    на ту же страницу index.php, с которой он вводил данные. Данные будут сохранены
    в файле log.txt.
    
!!! Не забывайте скрывать файл log.txt для чтения из вне.