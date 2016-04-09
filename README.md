## Laravel query log
enable by adding middleware. See folder

## Mysql slow queries
enable slow query log. See folder

## Magento slow queries
enable in lib/Varien/Db/Adapter/Pdo/Mysql.php around line 86. See folder

## parse_logs.php

Advanced PHP Programming by George Schlossnagle

Identifying bottlenecks by collecting page delivery time then parse the results.

1. Add %T to LogFormat
LogFormat “%h %l %u %t \”%r\” %>s %b \”%{Referer}i\” \”%{User-Agent}i\” %T” combinedplus
2. Use new format
CustomLog /var/apache-logs/default/access_log combinedplus
3. Use the parser. See folder
