<?php

namespace App\Admin\Controllers;

use Slowlyo\OwlAdmin\Controllers\AdminController;
use Slowlyo\OwlAdmin\Renderers\Alert;
use Slowlyo\OwlAdmin\Renderers\Button;

class WeChatController extends AdminController
{
    public function index()
    {
        $page = \Slowlyo\SlowAdmin\Renderers\Page::make();
        $page->body(
            \Slowlyo\SlowAdmin\Renderers\Button::make()->label('我是按钮')->level('primary');
       );
        return $this->response()->success($page);
    }

}
