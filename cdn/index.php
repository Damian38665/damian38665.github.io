<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>文件目录列表</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #666;
            padding-bottom: 10px;
        }
        .file-list {
            list-style: none;
            padding: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .file-item {
            padding: 12px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .file-item:hover {
            background-color: #f9f9f9;
        }
        .file-item:last-child {
            border-bottom: none;
        }
        .file-name a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }
        .file-name a:hover {
            text-decoration: underline;
        }
        .file-size {
            color: #666;
            font-size: 0.9em;
            min-width: 100px;
            text-align: right;
        }
        .file-date {
            color: #888;
            font-size: 0.85em;
            margin-left: 15px;
        }
        .dir-indicator {
            color: #0d904f;
            font-weight: bold;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>当前目录文件列表</h1>
    <ul class="file-list">
        <?php
        // 获取当前目录文件列表
        $files = scandir('.');
        foreach ($files as $file) {
            // 排除当前目录和上级目录
            if ($file == '.' || $file == '..') continue;
            
            $filePath = $file;
            $isDir = is_dir($filePath);
            $fileSize = $isDir ? '-' : formatSizeUnits(filesize($filePath));
            $modTime = date("Y-m-d H:i:s", filemtime($filePath));
            
            echo '<li class="file-item">';
            echo '<div class="file-name">';
            echo $isDir ? '<span class="dir-indicator">📁</span>' : '';
            echo '<a href="' . htmlspecialchars($file) . '" download>' . htmlspecialchars($file) . '</a>';
            echo '</div>';
            echo '<div class="file-info">';
            echo '<span class="file-date">修改时间: ' . $modTime . '</span>';
            echo '<span class="file-size">大小: ' . $fileSize . '</span>';
            echo '</div>';
            echo '</li>';
        }

        // 格式化文件大小单位
        function formatSizeUnits($bytes) {
            if ($bytes >= 1073741824) {
                return number_format($bytes / 1073741824, 2) . ' GB';
            } elseif ($bytes >= 1048576) {
                return number_format($bytes / 1048576, 2) . ' MB';
            } elseif ($bytes >= 1024) {
                return number_format($bytes / 1024, 2) . ' KB';
            } else {
                return $bytes . ' B';
            }
        }
        ?>
    </ul>
</body>
</html>