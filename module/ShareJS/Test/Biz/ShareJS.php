<?php

/**
 * ShareJS 模块业务逻辑测试
 *
 * 覆盖：模块配置、前端资源目录存在。
 */

use ModStart\Test\TestCase;

TestCase::describe('ShareJS', function () {

    TestCase::test('模块配置可解析', function () {
        $file = base_path('module/ShareJS/config.json');
        TestCase::assertTrue(file_exists($file), '配置文件存在');
        $json = json_decode(file_get_contents($file), true);
        TestCase::assertTrue(is_array($json), '配置为合法 JSON');
        TestCase::assertNotEmpty($json['name'], '配置包含模块名');
    });

    TestCase::test('模块视图目录存在', function () {
        TestCase::assertTrue(is_dir(base_path('module/ShareJS/View')), '存在 View 目录');
        TestCase::assertNotEmpty(glob(base_path('module/ShareJS/View/*')), '视图文件非空');
    });

});
