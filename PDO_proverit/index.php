
<?php

echo 'Доступные драйвера:';
print_r(PDO::getAvailableDrivers());
$pdo = new PDO('sqlite:my.db');
echo 'Объект PDO:';
print_r($pdo);
