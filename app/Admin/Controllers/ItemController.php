<?php

namespace App\Admin\Controllers;

use App\Models\item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new item());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('category_id', __('Category id'));
        $grid->column('img_url', __('Img url'));
        $grid->column('price', __('Price'));
        $grid->column('pr', __('Pr'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('category_id', __('Category id'));
        $show->field('img_url', __('Img url'));
        $show->field('price', __('Price'));
        $show->field('pr', __('Pr'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new item());

        $form->text('name', __('Name'));
        $form->number('category_id', __('Category id'))->default(1);
        $form->image('img_url', __('Img url'))->move('all_image')->uniqueName();
        $form->number('price', __('Price'));
        $form->textarea('pr', __('Pr'));

        return $form;
    }
}
