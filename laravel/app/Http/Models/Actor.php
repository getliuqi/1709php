<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 10:45
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Actor extends Model
{
    /**
     * @var string
     *@desc 当前表
     */
    protected $table='actor';

//    protected $timestamps = 'true';

    /**
     * @var array
     * @desc 批量添加
     */
protected $fillable = ['actor_name'];


}