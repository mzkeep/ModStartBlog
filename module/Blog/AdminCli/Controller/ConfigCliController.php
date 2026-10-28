<?php

namespace Module\Blog\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Input\Response;

class ConfigCliController extends Controller
{

    /**
     * @Api 博客系统 配置
     * @ApiDesc 不传参数时返回当前配置；传参时更新配置
     * @ApiMethod post
     * @ApiBodyParam Blog_SeoTitle string Blog_SeoTitle
     * @ApiBodyParam Blog_SeoKeywords string Blog_SeoKeywords
     * @ApiBodyParam Blog_SeoDescription string Blog_SeoDescription
     * @ApiBodyParam Blog_Name string Blog_Name
     * @ApiBodyParam Blog_Slogan string Blog_Slogan
     * @ApiBodyParam Blog_Avatar string Blog_Avatar
     * @ApiBodyParam Blog_ContactQQ string Blog_ContactQQ
     * @ApiBodyParam Blog_ContactWeibo string Blog_ContactWeibo
     * @ApiBodyParam Blog_ContactWechat string Blog_ContactWechat
     * @ApiBodyParam Blog_PanelTagLimit string Blog_PanelTagLimit
     * @ApiBodyParam Blog_DarkModeEnable string Blog_DarkModeEnable
     * @ApiBodyParam Blog_DarkModeType string Blog_DarkModeType
     * @ApiBodyParam Blog_BlogSuperSearchProvider string Blog_BlogSuperSearchProvider
     * @ApiBodyParam Blog_CommentEnable string Blog_CommentEnable
     * @ApiBodyParam Blog_ContentNavEnable string Blog_ContentNavEnable
     * @ApiBodyParam Blog_CommentVerifyEnable string Blog_CommentVerifyEnable
     * @ApiBodyParam Blog_MessageVerifyEnable string Blog_MessageVerifyEnable
     * @ApiBodyParam Blog_Censor_Image string Blog_Censor_Image
     * @ApiBodyParam Blog_Censor_Text string Blog_Censor_Text
     * @ApiBodyParam Blog_BlogCaptchaProvider string Blog_BlogCaptchaProvider
     * @ApiBodyParam Blog_MessageCaptchaProvider string Blog_MessageCaptchaProvider
     * @ApiBodyParam Blog_AboutContent string Blog_AboutContent
     */
    public function index()
    {
        $keys = ['Blog_SeoTitle', 'Blog_SeoKeywords', 'Blog_SeoDescription', 'Blog_Name', 'Blog_Slogan', 'Blog_Avatar', 'Blog_ContactQQ', 'Blog_ContactWeibo', 'Blog_ContactWechat', 'Blog_PanelTagLimit', 'Blog_DarkModeEnable', 'Blog_DarkModeType', 'Blog_BlogSuperSearchProvider', 'Blog_CommentEnable', 'Blog_ContentNavEnable', 'Blog_CommentVerifyEnable', 'Blog_MessageVerifyEnable', 'Blog_Censor_Image', 'Blog_Censor_Text', 'Blog_BlogCaptchaProvider', 'Blog_MessageCaptchaProvider', 'Blog_AboutContent'];
        $data = [];
        foreach ($keys as $key) {
            if (Input::has($key)) modstart_config()->set($key, Input::get($key));
            $data[$key] = modstart_config($key, '');
        }
        return Response::generateSuccessData($data);
    }
}