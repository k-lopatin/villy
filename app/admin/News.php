<?php

Admin::model('App\News')->title('')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Заголовок');
    Column::date('created_at', 'Дата');
    //Column::image('thumbnail', 'Изображение');
})->form(function ()
{
	FormItem::text('title', 'Заголовок');
	FormItem::ckeditor('body', 'Текст');
	FormItem::image('photo', 'Изображение');
	//echo 'test';
	//FormItem::view('admin.image');
	//FormItem::postImage();
});