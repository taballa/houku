<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div>','utf-8');

        var_dump(debug_backtrace());
        $info['RUNTIME_PATH'] = dump(RUNTIME_PATH);
        $info['APP_PATH'] = dump(APP_PATH);
        $info['RUNTIME_FILE'] = dump(RUNTIME_FILE);
        $info['SCRIPT_FILENAME'] = dump(dirname($_SERVER['SCRIPT_FILENAME']));
        $info['SERVER 变量'] = dump($_SERVER);
        trace($info);
    }
}