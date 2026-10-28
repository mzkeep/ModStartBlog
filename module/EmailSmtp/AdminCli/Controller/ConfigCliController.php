<?php

namespace Module\EmailSmtp\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Input\Response;

class ConfigCliController extends Controller
{

    /**
     * @Api SMTP邮箱 配置
     * @ApiDesc 不传参数时返回当前配置；传参时更新配置
     * @ApiMethod post
     * @ApiBodyParam systemEmailEnable string systemEmailEnable
     * @ApiBodyParam systemEmailSmtpServer string systemEmailSmtpServer
     * @ApiBodyParam systemEmailSmtpSsl string systemEmailSmtpSsl
     * @ApiBodyParam systemEmailSmtpUser string systemEmailSmtpUser
     * @ApiBodyParam systemEmailSmtpPassword string systemEmailSmtpPassword
     * @ApiBodyParam EmailSmtp_FromName string EmailSmtp_FromName
     * @ApiBodyParam EmailSmtp_FromEmail string EmailSmtp_FromEmail
     * @ApiBodyParam _test_email_ string _test_email_
     */
    public function index()
    {
        $keys = ['systemEmailEnable', 'systemEmailSmtpServer', 'systemEmailSmtpSsl', 'systemEmailSmtpUser', 'systemEmailSmtpPassword', 'EmailSmtp_FromName', 'EmailSmtp_FromEmail', '_test_email_'];
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
