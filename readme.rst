#############################################
Template on Site BackEnd-FrontEnd Codeigniter
#############################################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains a structure ready to use as a backend and front-end in 
any type of project. Codeigniter framework based

*******************
Server Requirements
*******************

- SERVER CENTOS 7.x
	=> yum update -y

- PHP VERSION 7.2 IS RECOMMENDED.
	=> sudo yum install -y epel-release
	=> sudo yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm -y
	=> sudo yum install yum-utils -y
	=> sudo yum-config-manager --enable remi-php72 -y
	=> sudo yum update -y
	=> sudo yum install php -y	
	=> sudo yum install -y php-fpm php-gd php-json php-mbstring php-mysqlnd php-xml php-xmlrpc php-opcache php-pecl-apcu php-cli php-pear php-pdo php-pgsql php-pecl-mongodb php-pecl-redis php-pecl-memcache php-pecl-memcached php-mcrypt php-zip
	=> sudo systemctl enable php-fpm.service
	=> sudo systemctl start php-fpm.service
	--STOP & RESTART--
	=> sudo systemctl stop php-php-fpm.service
	=> sudo systemctl restart php-php-fpm.service
	--STATUS SERVICES--
	=> sudo systemctl status php-fpm.service

- COMPOSER LAST VERSION 1.9.0
	=> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	=> HASH="$(wget -q -O - https://composer.github.io/installer.sig)"
	=> php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
		=> OUTPUT: "Installer verified"
	=> sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
	=> composer --version

- NGINX 1.16
	=> nano /etc/yum.repos.d/nginx.repo
	=> [nginx-stable]
		name=nginx stable repo
		baseurl=http://nginx.org/packages/centos/$releasever/$basearch/
		gpgcheck=1
		enabled=1
		gpgkey=https://nginx.org/keys/nginx_signing.key
	=> yum install nginx -y ; systemctl start nginx.service ; systemctl enable nginx; systemctl restart nginx.service

******************
Quick Installation
******************

-
-

***************************
Steps by Steps Installation
***************************

`$ cd /usr/share/nginx/PROJECT-NAME`
`$ composer create-project juanrdlo/web-front-back-framework`
`$ mv web-front-back-framework PROJECT-NAME`

***********************
Installation on Windows
***********************

- 

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.