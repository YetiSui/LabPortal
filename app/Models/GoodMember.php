<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodMember extends Model
{
    protected $table = "good_members";
    public $timestamps = true;
    protected $primaryKey = 'member_id';

    //获取历届优秀成员
    Public static function getMembers()
    {
        try {
            $data = self::select('member_id','name','priority','member_url')->get();
            return $data;
        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
        }
    }

}
