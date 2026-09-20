<?php
use ModStart\Test\TestCase;
use ModStart\Test\TestHttp;

TestCase::describe('NotifierEmail Api', function () {
    TestCase::test('无独立 HTTP 路由跳过', function () {
        // NotifierEmail: 无 API routes.php，跳过 HTTP 测试
        TestCase::assertTrue(true, 'NotifierEmail API HTTP: 无路由');
    });
});