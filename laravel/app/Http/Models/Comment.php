<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 8:38
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Comment extends Model
{
    /**
     * @var string
     * @desc 当前表
     */
    protected $table = 'comment';

    /**
     * @var array
     * @desc 批量添加
     */
    protected $fillable = [
        'user_id','comment_id','comment_type',
        'repay_id','score','content'
    ];

//    public function getAttribute()
//    {
//
//    }

//    public function getAttribute()
//    {
//
//    }
//
//    public function getAttribute()
//    {
//
//    }

}