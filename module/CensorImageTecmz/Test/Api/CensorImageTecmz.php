<?php
use ModStart\Test\TestCase;
use ModStart\Test\TestHttp;

// CensorImageTecmz: 无 API routes.php，跳过 HTTP 测试
TestCase::describe('CensorImageTecmz Api', function () {
    TestCase::test('无 API 路由，跳过 HTTP 测试', function () {
        TestCase::assertTrue(true, 'CensorImageTecmz API HTTP: 无路由');
    });
});