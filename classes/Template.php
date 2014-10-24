<?php
class Template {
    private static $template_dir = 'include/themes/';
    private static $theme = '';

    public function render($template_file) {
        $config = DB::getInstance()->get('config', array('name', '=', 'current_theme'));

        if (!$config) {

            if ($config->first()->value != 'default') {
                self::$theme = $config->first()->value;
            }
            
        } else {
            self::$theme = Config::get('theme/default');
        }

        

        if (file_exists(self::$template_dir.self::$theme.'/'.$template_file.'.php')) {
           include_once (self::$template_dir.self::$theme.'/'.$template_file.'.php');
        } else {
            throw new Exception('no template file ' . $template_file . ' present in directory ' . self::$template_dir);
        }
    }



    public static function style() {
        $theme = self::$template_dir.self::$theme.'/css/global.css';
        return $theme;
    }

    public static function js() {
        $js = self::$template_dir.self::$theme.'/js/global.js';
        return $js;
    }


}