<?php
use ModStart\Test\TestCase;
use ModStart\Test\TestHttp;

// CensorTextTecmz: 无 API routes.php，跳过 HTTP 测试
TestCase::describe('CensorTextTecmz Api', function () {
    TestCase::test('无 API 路由，跳过 HTTP 测试', function () {
        TestCase::assertTrue(true, 'CensorTextTecmz API HTTP: 无路由');
    });
});