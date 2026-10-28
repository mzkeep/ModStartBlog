<?php

namespace Module\CensorTextTecmz\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Input\Response;

class ConfigCliController extends Controller
{

    /**
     * @Api 魔众文本智能审核 配置
     * @ApiDesc 不传参数时返回当前配置；传参时更新配置
     * @ApiMethod post
     * @ApiBodyParam CensorTextTecmz_AppId string CensorTextTecmz_AppId
     * @ApiBodyParam CensorTextTecmz_AppSecret string CensorTextTecmz_AppSecret
     */
    public function index()
    {
        $keys = ['CensorTextTecmz_AppId', 'CensorTextTecmz_AppSecret'];
        $data = [];
        foreach ($keys as $key) {
            if (Input::has($key)) {
                modstart_config()->set($key, Input::get($key));
            }
            $data[$key] = modstart_config($key, '');
        }
        return Response::generateSuccessData($data);
    }
}
