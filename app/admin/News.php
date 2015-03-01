<?php

Admin::model(App\News::class)->title('')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Заголовок');
    Column::date('created_at', 'Дата');
})->form(function ()
{
	FormItem::text('title', 'Заголовок');
	FormItem::ckeditor('body', 'Текст');
});