<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:07
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Tv extends Model
{
    /**
     * @var string
     * @desc 当前表
     */
    protected $table = 'tv';

    /**
     * @var array
     * @desc 批量添加
     */
    protected $fillable = [
        'tv_name',
        'img_url',
        'download_url',
        'score',
        'lanaguage_type',
        'area_id',
        'type_id',
        'year_id',
        'director_id',
        'actor_id',
        'desc',
    ];

    public function getAreaAttribute()
    {
        return Area::find($this->area_id);
    }

    public function getTypeAttribute()
    {
        return Type::find($this->type_id);
    }

    public function getYearAttribute()
    {
        return HomeMade::find($this->year_id);
    }

    public function getDirectorAttribute()
    {
        return Director::find($this->director_id);
    }

    public function getActorAttribute()
    {
        return Actor::find($this->actor_id);
    }

}