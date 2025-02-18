<?php

class eclApp_adminHome extends eclApp
{
    public static $name = '-home';
    public static $content = 'adminHome_content';

    public static function constructorHelper(eclEngine_application $me): void
    {
        $me->path = $me->parent->path;
    }

    public static function dispatch(eclEngine_page $page): void
    {
        /*
        $me->endpoints->edit = 'adminHome_edit';

        $me->menus->context = 'system_menuContext';
        $me->menus->context->appendChild('adminHome_edit')
        ->action('view-edit');
        $me->menus->context->appendChild('adminHome_remove')
        ->action('dialog-removeConfirm');

        $me->dialogs->removeConfirm = 'adminHome_dialogRemoveConfirm';
$me->dialogs->removeConfirm->appendChild('system_cancel')
->action();
$me->dialogs->removeConfirm->appendChild('system_confirm')
->action('view-remove');

        $me->views->main = 'adminHome_content';
        $me->views->edit = 'adminHome_edit';
        $me->views->remove = 'adminHome_remove';
        */
    }

    static function view_main(eclEngine_page $page): void
    {
        $page->buffer = [
            'title' => 'Página inicial'
        ];
    }

    static function view_edit(eclEngine_page $page): void
    {
        $page->buffer = [
            'title' => 'Editando a página inicial'
        ];
    }

    static function view_remove(eclEngine_page $page): void
    {
        $page->buffer = [
            'title' => 'Removendo conteúdo'
        ];
    }

}
