<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 6:42
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Collection extends Model
{
    /**
     * @var string
     * @desc 当前表
     */
    protected $table = 'tv_collection';

    /**
     * @var array
     * @desc 批量添加
     */
    protected $fillable = [
        'tv_id',
        'collection_index',
        'collection_desc',
        'download_url'
    ];

    public function getTvAttribute()
    {
        return Tv::find($this->tv_id);
    }

}