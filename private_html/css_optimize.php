<style><?php echo file_get_contents('http://'.$config_url.'/css_optimize.php');?></style>
<?php 
$css_cache_file = 'upload/cache/styles.css';
$css_path = '';
$css_files = array(
    "css/default.css",
    "style.css",
	"css/css_jssor_slider.css",
    "fontawesome/css/font-awesome.min.css",
    "css/popup.css",
    "css/slick.css",
    "css/slick-theme.css",
	"css/tab.css",
	"css/cloudzoom.css",
	"css/swipebox.css"  
);
function update() {
  global $css_path, $css_cache_file, $css_files;
  if (file_exists($css_cache_file)) {
    $cache_time = filemtime($css_cache_file);
    foreach ($css_files as $file) {
      if (file_exists($css_path.$file)) {
        $time = filemtime($css_path.$file);
        if ($time > $cache_time) {
          return joinCSSFiles();
          break;
        }
      }
    }
  } else {
    return joinCSSFiles();
  }
  return file_get_contents($css_cache_file);
}
function compressCSS($file) {
  $filedata = file_get_contents($file);
  $filedata = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $filedata);
  $filedata = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $filedata);
    $filedata = str_replace('{ ', '{', $filedata);
    $filedata = str_replace(' }', '}', $filedata);
    $filedata = str_replace('; ', ';', $filedata);
    $filedata = str_replace(', ', ',', $filedata);
    $filedata = str_replace(' {', '{', $filedata);
    $filedata = str_replace('} ', '}', $filedata);
    $filedata = str_replace(': ', ':', $filedata);
    $filedata = str_replace(' ,', ',', $filedata);
    $filedata = str_replace(' ;', ';', $filedata);  
  return $filedata;
}
function joinCSSFiles() {
  global $css_cache_file, $css_files, $css_path;
  $data = '';
  foreach ($css_files as $file) {
    if (file_exists($css_path.$file)) {
      $data .= compressCSS($css_path.$file);
    }
  }
  file_put_contents($css_cache_file, $data);
  return $data;
}
ob_start ("ob_gzhandler");
ob_start("compress");
header("Content-type: text/css;charset: UTF-8");
echo update();