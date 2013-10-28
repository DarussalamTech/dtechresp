<?php

/**
 * 
 */
class CacheGenerater {

    function set_header($modefied, $expires, $etag) {
        ob_start("ob_gzhandler"); //Gzip compress
        header("Etag: {$etag}");
        header("Content-type: text/css; charset: UTF-8");
        header("Pragma: public; maxage={$expires}");
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT');
        header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modefied) . ' GMT');
    }

    function compress($css) {
        // Compress css
        $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
        $css = preg_replace('/(\s(?=\W))|((?<=\W)\s)/', '', $css);
        $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);
        return $css;
    }

    function cache($data, $path) {
        // Write server side cache
        $handle = fopen($path, 'w+');
        fwrite($handle, $data);
        fclose($handle);
    }

}

?>
