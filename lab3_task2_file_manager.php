<?php
$demoFile = "demo.txt";
$copyFile = "demo_copy.txt";
$renamedFile = "demo_renamed.txt";
$demoDir = "demo_folder";
#opening ,writing the file
$file = fopen($demoFile, "w"); #fopen
fwrite($file, "ELAN Task-2 php File-Functions Demo\n"); #fwrite
fwrite($file, "This file is used for read/write operations.");
fclose($file); #fclose
#file locking
$file = fopen($demoFile, "a");
flock($file, LOCK_EX); #flock
fwrite($file, "\nFile locked and appended successfully.");
flock($file, LOCK_UN);
fclose($file);
#file reading
$file = fopen($demoFile, "r");     
$content_fread = fread($file, filesize($demoFile)); #fread
fclose($file);
$content_get = file_get_contents($demoFile); #file_get_comtents
file_put_contents("put_content.txt", "Creating using file_put_contents()");#file_put_contents
#file() fun
$fileArray = file($demoFile); #file()
#file information
$fileInfo = [
    "Exists" => file_exists($demoFile),
    "Size(bytes)" => filesize($demoFile),
    "Type" => filetype($demoFile),
    "Last Access" => date("d-m-Y H:i:s", fileatime($demoFile)),
    "Last Modified" => date("d-m-Y H:i:s", filemtime($demoFile)),
    "Created Time" => date("d-m-Y H:i:s", filectime($demoFile)),
    "Permissions" => substr(sprintf('%o', fileperms($demoFile)), -4),
    "Owner ID" => fileowner($demoFile),
    "Group ID" => filegroup($demoFile),
    "Inode" => fileinode($demoFile)
];
#file,folder managing
copy($demoFile, $copyFile); # copy()
rename($copyFile, $renamedFile); #rename()

if (!is_dir($demoDir)) {
    mkdir($demoDir); #mkdir()
}
$isFile = is_file($demoFile);
$isDir  = is_dir($demoDir);
#to reading directory contents and getting current wornking directory
$scanFiles = scandir(".");
$cwd = getcwd();
#changing the directory and come back
chdir($cwd);
$dirHandle = opendir(".");
$readDirFiles = [];
while (($f = readdir($dirHandle)) !== false) {
    $readDirFiles[] = $f;
}
closedir($dirHandle);
#deleting the file
unlink($renamedFile); #unlink()
rmdir($demoDir); #rmdir()
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task-2 | PHP File Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>ELAN – PHP Task-2(File Manager)</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="dashboard.html">Dashboard</a>
    </nav>
</header>
<section class="media">
    <h2>📄 File Content(fread)</h2>
    <pre><?= htmlspecialchars($content_fread) ?></pre>  
    <h2>📄 File Content(file_get_contents)</h2>
    <pre><?= htmlspecialchars($content_get) ?></pre>
    <h2>📄 File Lines(file())</h2>
    <pre><?php print_r($fileArray); ?></pre> #print_r
</section>
<section class="media">
    <h2>ℹ️ File Information</h2>
    <table border="1" cellpadding="10" align="center">
        <?php foreach ($fileInfo as $k => $v) { ?>
        <tr>
            <td><strong><?= $k ?></strong></td>
            <td><?= $v ?></td>
        </tr>
        <?php } ?>
    </table>
</section>
<section class="media">
    <h2>📁 Directory Listing (scandir)</h2>
    <ul>
        <?php foreach ($scanFiles as $f) {
            if ($f != "." && $f != "..") echo "<li>$f</li>";
        } ?>
    </ul>
</section>
<section class="media">
    <h2>📂 Directory Listing(opendir/readdir)</h2>
    <ul>
        <?php foreach ($readDirFiles as $f) {
            if ($f != "." && $f != "..") echo "<li>$f</li>";
        } ?>
    </ul>
</section>
<section class="media">
    <h2>📌 Working Directory</h2>
    <p><strong><?= $cwd ?></strong></p>
    <p>is_file(): <?= $isFile ? "Yes" : "No" ?></p>
    <p>is_dir(): <?= $isDir ? "Yes" : "No" ?></p>
</section>
<footer>
    <p>© 2025 ELAN Clothing – PHP Task-2</p>
</footer>
</body>
</html>
