<?php

require_once CORE.'/Model.php';

class Category extends Model
{
    protected static $table = 'categories';
    protected static $primaryKey = 'id';

    public static function getCategories()
    {
        return parent::get(['status'=>1]);
    }

}
