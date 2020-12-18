<?php

namespace normphp\package\globalSsh\controller;

use normphp\staging\Controller;
use normphp\staging\Request;

/**
 * Class NormPhpHelperTool
 * @package normphp\cloudStorage\controller
 */
class BasicsGlobalSsh extends Controller
{
    /**
     * 基础控制器信息
     */
    const CONTROLLER_INFO = [
        'User'=>'pizepei',
        'title'=>'global-ssh管理控制器',//控制器标题
        'baseAuth'=>'UserAuth:public',//基础权限继承（加命名空间的类名称）
        'namespace'=>'global_ssh',//门面控制器命名空间
        'basePath'=>'/global-ssh/',//基础路由
    ];

    /**
     * @param \normphp\staging\Request $Request
     * @return string [cli]
     * @title  入口
     * @router cli cli
     */
    public function groupList(Request $Request)
    {
        echo '开始';
    }

}