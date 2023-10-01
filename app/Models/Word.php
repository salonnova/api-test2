<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Word extends Model
{
    use HasFactory;
    
    
    protected $table ='words';
    protected $fillable = ['id','word','mean','a_part_of_speech','example','pronounce','choices','correct_choice'];

    protected $casts = [
        'choices' => 'array'
    ];

    protected function validation () {
        return [
            
        ];
            
    }
    
        
    

    public function renew_deal($request)
    {
        $validation = $request->validate([
            'word' => 'required',
            'mean' => 'required',
            'choice' =>'required',
        ]);
        
        
        // choicesという配列からchoiceを取り出すので
        // 複数形　単数形となる
        return $this->fill([
        'id' => $request->id,
        'word' => $request->word,
        'mean' => $request->mean,
        'a_part_of_speech' => $request->a_part_of_speech,
        'example' => $request->example,
        'pronounce' => $request->pronounce,
        'choices' => $request->choice,
        'correct_choice' => $request->correct_choice,
        
        
        ])->save();
    }

    public function destroy_deal($request)
    {
        
        
        // choicesという配列からchoiceを取り出すので
        // 複数形　単数形となる
        return $this->fill([
        'id' => $request->id,
        'word' => $request->word,
        'mean' => $request->mean,
        'a_part_of_speech' => $request->a_part_of_speech,
        'example' => $request->example,
        'pronounce' => $request->pronounce,
        'choices' => $request->choice,
        'correct_choice' => $request->correct_choice,
        
        ])->save();
    }



}
