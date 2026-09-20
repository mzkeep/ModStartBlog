<?php
use ModStart\Test\TestCase;
use ModStart\Test\TestHttp;

// EmailSmtp: 无 API routes.php，跳过 HTTP 测试
TestCase::describe('EmailSmtp Api', function () {
    TestCase::test('无 API 路由', function () {
        TestCase::assertTrue(true, 'EmailSmtp API HTTP: 无路由');
    });
});