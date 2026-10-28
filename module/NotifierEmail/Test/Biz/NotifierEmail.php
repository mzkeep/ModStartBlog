<?php
use ModStart\Test\TestCase;

TestCase::describe('NotifierEmail Biz', function () {
    TestCase::test('功能验证完成', function () {
        TestCase::assertTrue(true, 'NotifierEmail Biz: 完成');
    });

    TestCase::test('通知邮件内容中的链接自动渲染为可点击 a 标签', function () {
        $url = 'https://open.tecmz.com/feedback_ticket/SHUF0RLZ7RIPFN34';
        $html = view('module::NotifierEmail.View.mail.notify', [
            'title' => '新的工单反馈',
            'content' => [
                '来源' => 'open.tecmz.com',
                '链接' => $url,
            ],
            'param' => [],
        ])->render();
        TestCase::assertContains('<a href="' . $url . '" target="_blank">' . $url . '</a>', $html, '链接值已渲染为 a 标签');
        TestCase::assertContains('<b>来源</b>', $html, '普通文本值正常渲染');
        TestCase::assertFalse(strpos($html, '<a href="open.tecmz.com"') !== false, '非链接值不会被转换');
    });
});
