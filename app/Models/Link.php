<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = "link";
    public $timestamps = true;
    protected $primaryKey = 'link_id';

    //友链展示
    public static function getLink ()
    {
        try {
            $result = self::select('link_id', 'name','produce','tx_url','blog_url')->get();
            return $result;
        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
            return null;
        }
    }
}
