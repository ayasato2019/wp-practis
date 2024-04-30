#!/bin/bash

# MySQLのルートパスワード
MYSQL_ROOT_PASSWORD="somewordpress"

# WordPressのデータベース設定
WORDPRESS_DB_HOST="localhost"
WORDPRESS_DB_NAME="wordpress"
WORDPRESS_DB_USER="wordpress"
WORDPRESS_DB_PASSWORD="wordpress"

# WordPressのダウンロードと展開
wget https://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
mv wordpress/* /var/www/html/
rm -rf wordpress latest.tar.gz

# WordPressの設定ファイルを作成
cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

# データベースの設定をwp-config.phpに追加
sed -i "s/database_name_here/$WORDPRESS_DB_NAME/" /var/www/html/wp-config.php
sed -i "s/username_here/$WORDPRESS_DB_USER/" /var/www/html/wp-config.php
sed -i "s/password_here/$WORDPRESS_DB_PASSWORD/" /var/www/html/wp-config.php
sed -i "s/localhost/$WORDPRESS_DB_HOST/" /var/www/html/wp-config.php

# MySQLのデータベース作成
mysql -u root -p$MYSQL_ROOT_PASSWORD -e "CREATE DATABASE $WORDPRESS_DB_NAME;"
mysql -u root -p$MYSQL_ROOT_PASSWORD -e "CREATE USER '$WORDPRESS_DB_USER'@'localhost' IDENTIFIED BY '$WORDPRESS_DB_PASSWORD';"
mysql -u root -p$MYSQL_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON $WORDPRESS_DB_NAME.* TO '$WORDPRESS_DB_USER'@'localhost';"
mysql -u root -p$MYSQL_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"

echo "WordPressのインストールが完了しました。"
