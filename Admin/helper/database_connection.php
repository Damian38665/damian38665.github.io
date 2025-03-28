<?php
require_once __DIR__ . '/../../config.global.php';

require_once __DIR__ . '/../../System/Core/Helpers/HandleException.php';
set_exception_handler('HandleException');

// 检查是否安装
if (FRAMEWORK_INSTALL_LOCK === false) {
    header('Location: /Admin/install/index.php');
    exit;
}
// 数据库连接
try {
    $db = new PDO('sqlite:' . FRAMEWORK_DATABASE_PATH);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('PRAGMA journal_mode=WAL;');
} catch (PDOException $e) {
    throw new Exception('数据库错误：' . $e->getMessage());
}
