<?php


namespace Module\Blog\Core;


use ModStart\Core\Dao\ModelUtil;
use Module\AiAutoArticle\Provider\AbstractAiAutoArticlePostBiz;

class BlogPostBiz extends AbstractAiAutoArticlePostBiz
{
    const NAME = 'Blog';

    public function name()
    {
        return self::NAME;
    }

    public function title()
    {
        return '博客';
    }

    public function push($article, $task, $param = [])
    {
        $bizParam = $this->bizParam($task);
        $categoryId = 0;
        if (!empty($bizParam['categoryId'])) {
            $categoryId = intval($bizParam['categoryId']);
        }
        $data = [
            'categoryId' => $categoryId,
            'title' => $article['title'],
            'tag' => $article['keywords'],
            'summary' => $article['description'],
            'images' => $article['cover'],
            'content' => $article['content'],
            'seoKeywords' => $article['keywords'],
            'seoDescription' => $article['description'],
            'isPublished' => 1,
            'postTime' => date('Y-m-d H:i:s'),
        ];
        $result = ModelUtil::insert('blog', $data);
        return ['id' => $result['id']];
    }
}
