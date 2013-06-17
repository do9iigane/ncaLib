<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <p>NHK番組表APIを利用する為のlibraryです。</p>
        <a target="_blank" href="http://www2.nhk.or.jp/api/">http://www2.nhk.or.jp/api/</a>
        <?php
        include 'nhkChannelLibrary.php';
        
        $ncl = new \nhk\nhkChannelLibrary();
        var_dump($ncl->programGenreAPI());
        var_dump($ncl->programInfoAPI());
        var_dump($ncl->programListAPI());
        var_dump($ncl->nowOnAirAPI());
        ?>
    </body>
</html>
