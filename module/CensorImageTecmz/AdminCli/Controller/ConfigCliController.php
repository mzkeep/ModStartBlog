<?php

namespace Module\CensorImageTecmz\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Input\Response;

class ConfigCliController extends Controller
{

    /**
     * @Api 魔众图片智能审核 配置
     * @ApiDesc 不传参数时返回当前配置；传参时更新配置
     * @ApiMethod post
     * @ApiBodyParam CensorImageTecmz_AppId string CensorImageTecmz_AppId
     * @ApiBodyParam CensorImageTecmz_AppSecret string CensorImageTecmz_AppSecret
     */
    public function index()
    {
        $keys = ['CensorImageTecmz_AppId', 'CensorImageTecmz_AppSecret'];
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
