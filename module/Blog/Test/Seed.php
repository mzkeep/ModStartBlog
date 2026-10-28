<?php

/**
 * Blog 模块 Seed 测试数据填充
 *
 * 在 AUTO_TEST=true 时写入场景化演示数据，供后台列表 / 前台页面展示。
 * 写入前先清空对应表，保证多次执行结果一致且不与唯一索引冲突。
 */

use ModStart\Core\Dao\ModelUtil;
use ModStart\Test\TestCase;
use Illuminate\Support\Facades\DB;
use ModStart\Test\TestSeed;

TestCase::describe('Blog Seed', function () {

    if (!TestSeed::ensureTable('blog')) {
        return;
    }

    $rows = [
        [
            'id' => 1,
            'title' => '如何快速搭建企业官网',
            'tag' => '',
            'summary' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'images' => '["asset\/image\/avatar.png","theme\/default\/image\/bg_1.png"]',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'seoKeywords' => '精选好物，品质保障',
            'seoDescription' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'isPublished' => 1,
            'postTime' => '2026-10-16 17:37:16',
            'clickCount' => 1,
            'isTop' => 1,
            'commentCount' => 1,
            'categoryId' => 1,
            'templateView' => '',
            'isHot' => 1,
            'isRecommend' => 1,
            'visitMode' => 1,
            'visitPassword' => '',
            'likeCount' => 1,
            'favCount' => 1,
        ],
        [
            'id' => 2,
            'title' => '产品迭代的五个关键节点',
            'tag' => '',
            'summary' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'images' => '["theme\/default\/image\/bg_1.png","theme\/default\/image\/bg_2.png"]',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'seoKeywords' => '限时特惠，先到先得',
            'seoDescription' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'isPublished' => 1,
            'postTime' => '2026-10-15 17:37:16',
            'clickCount' => 2,
            'isTop' => 1,
            'commentCount' => 2,
            'categoryId' => 1,
            'templateView' => '',
            'isHot' => 1,
            'isRecommend' => 1,
            'visitMode' => 1,
            'visitPassword' => '',
            'likeCount' => 2,
            'favCount' => 2,
        ],
        [
            'id' => 3,
            'title' => '从零开始的内容运营方法论',
            'tag' => '',
            'summary' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'images' => '["theme\/default\/image\/bg_2.png","theme\/default\/image\/bg_3.png"]',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'seoKeywords' => '官方正品，假一赔十',
            'seoDescription' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'isPublished' => 1,
            'postTime' => '2026-10-14 17:37:16',
            'clickCount' => 3,
            'isTop' => 1,
            'commentCount' => 3,
            'categoryId' => 1,
            'templateView' => '',
            'isHot' => 1,
            'isRecommend' => 1,
            'visitMode' => 1,
            'visitPassword' => '',
            'likeCount' => 3,
            'favCount' => 3,
        ],
    ];

    // 先清空再写入，保证可重复执行且不与唯一索引冲突
    DB::table('blog')->delete();
    foreach ($rows as $row) {
        ModelUtil::insert('blog', $row);
    }

    if (!TestSeed::ensureTable('blog_comment')) {
        return;
    }

    $rows = [
        [
            'id' => 1,
            'blogId' => 1,
            'username' => '如何快速搭建企业官网',
            'email' => 'demo0@example.com',
            'url' => '/demo-blog-1',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'memberUserId' => 0,
            'status' => 1,
        ],
        [
            'id' => 2,
            'blogId' => 1,
            'username' => '产品迭代的五个关键节点',
            'email' => 'demo1@example.com',
            'url' => '/demo-blog-2',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'memberUserId' => 0,
            'status' => 1,
        ],
        [
            'id' => 3,
            'blogId' => 1,
            'username' => '从零开始的内容运营方法论',
            'email' => 'demo2@example.com',
            'url' => '/demo-blog-3',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'memberUserId' => 0,
            'status' => 1,
        ],
    ];

    // 先清空再写入，保证可重复执行且不与唯一索引冲突
    DB::table('blog_comment')->delete();
    foreach ($rows as $row) {
        ModelUtil::insert('blog_comment', $row);
    }

    if (!TestSeed::ensureTable('blog_category')) {
        return;
    }

    $rows = [
        [
            'id' => 1,
            'pid' => 0,
            'sort' => 1,
            'title' => '如何快速搭建企业官网',
            'blogCount' => 1,
            'cover' => 'asset/image/avatar.png',
            'keywords' => '精选好物，品质保障',
            'description' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'templateView' => '',
        ],
        [
            'id' => 2,
            'pid' => 0,
            'sort' => 2,
            'title' => '产品迭代的五个关键节点',
            'blogCount' => 2,
            'cover' => 'theme/default/image/bg_1.png',
            'keywords' => '限时特惠，先到先得',
            'description' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'templateView' => '',
        ],
        [
            'id' => 3,
            'pid' => 0,
            'sort' => 3,
            'title' => '从零开始的内容运营方法论',
            'blogCount' => 3,
            'cover' => 'theme/default/image/bg_2.png',
            'keywords' => '官方正品，假一赔十',
            'description' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'templateView' => '',
        ],
    ];

    // 先清空再写入，保证可重复执行且不与唯一索引冲突
    DB::table('blog_category')->delete();
    foreach ($rows as $row) {
        ModelUtil::insert('blog_category', $row);
    }

    if (!TestSeed::ensureTable('blog_message')) {
        return;
    }

    $rows = [
        [
            'id' => 1,
            'username' => '如何快速搭建企业官网',
            'email' => 'demo0@example.com',
            'url' => '/demo-blog-1',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'upCount' => 1,
            'downCount' => 1,
            'reply' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'memberUserId' => 0,
            'status' => 1,
        ],
        [
            'id' => 2,
            'username' => '产品迭代的五个关键节点',
            'email' => 'demo1@example.com',
            'url' => '/demo-blog-2',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'upCount' => 2,
            'downCount' => 2,
            'reply' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'memberUserId' => 0,
            'status' => 1,
        ],
        [
            'id' => 3,
            'username' => '从零开始的内容运营方法论',
            'email' => 'demo2@example.com',
            'url' => '/demo-blog-3',
            'content' => '<p>本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。</p>',
            'upCount' => 3,
            'downCount' => 3,
            'reply' => '本文结合实际项目经验，系统梳理完整流程与落地要点，供实践参考。',
            'memberUserId' => 0,
            'status' => 1,
        ],
    ];

    // 先清空再写入，保证可重复执行且不与唯一索引冲突
    DB::table('blog_message')->delete();
    foreach ($rows as $row) {
        ModelUtil::insert('blog_message', $row);
    }

    TestCase::test('测试数据填充执行完成', function () {
        TestCase::assertTrue(true, 'Blog Seed: 执行完成');
    });
});
