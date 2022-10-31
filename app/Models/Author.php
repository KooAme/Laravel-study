<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
   //테이블의 기본 키를 id 가 아닌 author_id로 설정한다
   protected $primaryKey = 'author_id';
   protected $timestamps = false;
   protected $fillable = [
     'name', //name필드: 대량할당 가능
   ];
   use HasFactory; 

   use SoftDeletes;

   public function getNameAttribute(string $value)
   {
      //MB_CASE_TITLE 모드로 이름 변환
      return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
   }

   public function setNameAttribute(string $value)
   {
      //MB_CASE_UPPER 모드로 name 컬럼값을 변환한다.
      $this->attributes['name'] = mb_convert_case($value, MB_CASE_UPPER, "UTF-8");
   }
}
