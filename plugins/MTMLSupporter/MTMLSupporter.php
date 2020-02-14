<?php
require_once(LIB_DIR . 'Prototype' . DS . 'class.PTPlugin.php');

class MTMLSupporter extends PTPlugin
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * タグリスト画面
     *
     * @param Prototype $app
     * @return void
     */
    public function listTags($app)
    {
        $app->ctx->vars['page_title'] = 'テンプレートタグ一覧';
        $app->build_page('list_tags.tmpl');
    }
}
