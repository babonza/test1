$wait = 1; // wait Timeout In Seconds
$host = 'detik.com';
$ports = [
    'http'  => 80,
    'https' => 443,
    'ftp'   => 21,
];

foreach ($ports as $key => $port) {
    $fp = @fsockopen($host, $port, $errCode, $errStr, $wait);
    echo "Ping $host:$port ($key) ==> ";
    if ($fp) {
        echo 'SUCCESS';
        fclose($fp);
    } else {
        echo "ERROR: $errCode - $errStr";
    }
    echo PHP_EOL;
}


// Ping example.com:80 (http) ==> SUCCESS
// Ping example.com:443 (https) ==> SUCCESS
// Ping example.com:21 (ftp) ==> ERROR: 110 - Connection timed out
