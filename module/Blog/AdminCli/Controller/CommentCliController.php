<?php

namespace Module\Blog\AdminCli\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use ModStart\Core\Dao\ModelUtil;
use ModStart\Core\Exception\BizException;
use ModStart\Core\Input\Response;
use Module\AdminCli\AdminCli\CliCrud;

class CommentCliController extends Controller
{
    use CliCrud;

    /**
     * @Api 博客系统 列表
     * @ApiMethod post
     */
    public function index()
    {
        return $this->paginateModel(\Module\Blog\Model\BlogComment::class, 'username');
    }

    /**
     * @Api 博客系统 新增
     * @ApiMethod post
     */
    public function add()
    {
        $data = $this->modelInput(\Module\Blog\Model\BlogComment::class);
        BizException::throwsIfEmpty('没有可写入的字段', $data);
        $id = ModelUtil::insert(\Module\Blog\Model\BlogComment::class, $this->withRequiredDefaults(\Module\Blog\Model\BlogComment::class, $data));
        $id = is_array($id) ? intval($id['id']) : intval($id);
        return Response::generateSuccessData(['id' => $id]);
    }

    /**
     * @Api 博客系统 编辑
     * @ApiMethod post
     */
    public function edit()
    {
        $id = intval(Input::get('id', 0));
        BizException::throwsIfEmpty('id不能为空', $id);
        $data = $this->modelInput(\Module\Blog\Model\BlogComment::class);
        BizException::throwsIfEmpty('没有可更新的字段', $data);
        ModelUtil::update(\Module\Blog\Model\BlogComment::class, $id, $data);
        return Response::generateSuccess();
    }

    /**
     * @Api 博客系统 删除
     * @ApiMethod post
     */
    public function delete()
    {
        $ids = $this->parseIds();
        BizException::throwsIfEmpty('ids不能为空', $ids);
        ModelUtil::deleteIn(\Module\Blog\Model\BlogComment::class, $ids);
        return Response::generateSuccess();
    }
}