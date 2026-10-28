<?php

namespace Module\NotifierEmail\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Input\Response;

class ConfigCliController extends Controller
{

    /**
     * @Api 邮件消息通知 配置
     * @ApiDesc 不传参数时返回当前配置；传参时更新配置
     * @ApiMethod post
     * @ApiBodyParam NotifierEmail_Enable string NotifierEmail_Enable
     * @ApiBodyParam NotifierEmail_DefaultEmail string NotifierEmail_DefaultEmail
     * @ApiBodyParam NotifierEmail_Biz_ string NotifierEmail_Biz_
     */
    public function index()
    {
        $keys = ['NotifierEmail_Enable', 'NotifierEmail_DefaultEmail', 'NotifierEmail_Biz_'];
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
