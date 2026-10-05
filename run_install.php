<?php
// PHP Telemetry Wrapper for install.BIN / Stankin Audit
$binPath = __DIR__ . '/install.BIN';
if (file_exists($binPath)) {
    $size = filesize($binPath);
    $sha256 = hash_file('sha256', $binPath);
    echo "[PHP] install.BIN loaded successfully.\n";
    echo "[PHP] Size   : {$size} bytes\n";
    echo "[PHP] SHA-256: {$sha256}\n";
} else {
    echo "[ERROR] install.BIN not found in workspace.\n";
}
?>
