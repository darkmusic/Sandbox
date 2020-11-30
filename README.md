<p align="center">
  <a href="https://metroui.org.ua/v4/">
    <img src="Views/images/logo.png" alt="">
  </a>

  <h3 align="center">The Sandbox</h3>

  <p align="center">
    The Sandbox is a tool for prototyping and testing your HTML, CSS and JavaScript code and getting support with your problems.
    You write code in the browser and see the results of it as you build.
    <br>
  </p>
</p>

<br>

[![Version: 2018.1](https://img.shields.io/badge/version-2018.1-brightgreen.svg)](https://github.com/olton/Sandbox)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?style=flat)](https://github.com/olton/Sandbox/blob/master/LICENSE)

### Installation Notes
Edit Config/.htaccess as needed.

Copy Config/database.demo.php and edit as needed.

If desired, edit salt in index.php.

Be sure docker and docker-compose are installed.

Start the web and db containers by doing the following:
```
docker-compose up
```
Note: due to the DB being on a separate container, you will need to create a mysql user that allows all hosts.  Eventually, this should be integrated in the docker setup.

Replace "password" with password configured in database.php.
```
docker exec -it --privileged -u root sandbox-db bash
mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 13
Server version: 8.0.22 MySQL Community Server - GPL

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> CREATE USER 'root'@'%' IDENTIFIED BY 'password';
Query OK, 0 rows affected (0.01 sec)

mysql> GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
Query OK, 0 rows affected (0.02 sec)

mysql> ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
Query OK, 0 rows affected (0.00 sec)
mysql> quit
Bye
bash-4.2# exit
exit
```
The site will be running at http://localhost:8080

### Credits
- [Metro 4](https://metroui.org.ua) by Sergey Pimenov
- Domain by [Imena.ua](https://imena.ua)
- Hosting by [Mirohost](https://mirohost.net)
- CDN by [Key CDN](https://www.keycdn.com/)
- IDE PhpStorm by [JetBrains](https://www.jetbrains.com/)

### Thanks
Personal thanks to [Alexandr Olshansky](https://www.facebook.com/olshanskiy)

### Browser Compatibility
IE11+, Edge, Chrome, Firefox, Opera, Safari, Android, IOS

# License
- Metro 4 has [MIT License](https://github.com/olton/Metro-UI-CSS/blob/master/LICENSE)
- Sandbox has [MIT License](https://github.com/olton/Sandbox/blob/master/LICENSE)
