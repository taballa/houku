<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div>','utf-8');

        echo 'APP_DEBUG = ' . APP_DEBUG;

        // var_dump(debug_backtrace());
        $info['APP_DEBUG'] = APP_DEBUG;
        $info['get_include_path'] = get_include_path();
        $info['__FILE__'] = __FILE__;
        $info['PHP_SELF'] = $_SERVER['PHP_SELF'];
        $info['SCRIPT_NAME'] = $_SERVER['SCRIPT_NAME'];
        $info['_PHP_FILE_'] = _PHP_FILE_;
        $info['RUNTIME_PATH'] = RUNTIME_PATH;
        $info['APP_PATH'] = APP_PATH;
        $info['RUNTIME_FILE'] = RUNTIME_FILE;
        $info['SCRIPT_FILENAME'] = dirname($_SERVER['SCRIPT_FILENAME']);
        $info['SERVER 变量'] = $_SERVER;

        function see($var){
            if (is_array($var)) {
                foreach ($var as $key => $value) {
                    printf("%s => %s<br />", $key, see($value));
                }
            }
            else{
                return $var;
            }
        }

        see($info);
    }
}