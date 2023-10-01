<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\user_create;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Reflector;

class WordController extends Controller
{
   

   public function index()
   {
      
      
      return view('word.index');
   }

   public function quiz_view()
   {
      $id = Word::where('id', '>=' ,1)->first();

      return  view('word.quiz_ready',compact(('id')));
   }
   // 処理
   public function quiz($id)
   {
      $word=Word::findOrFail($id);

      return  view('word.index_quiz',compact('word'));
   }
  
   public function answer (Request $request)
   {
      $userAnswer = $request->input('choice');
      $id = $request->input('id');
      $word=Word::findOrFail($id);
      $correctChoiceIndex = $word->correct_choice -1;

      if($userAnswer == $correctChoiceIndex){
         $isCorrect =true;
      }else{
         $isCorrect =false;
      }
      
      $next_word = Word::where('id', '>',$id)->first();

      return view('word.answer',compact('isCorrect','word','userAnswer','next_word'));
   }


   public function edit() 
   {

      return view('word.edit');

   }

   public function create(Request $request)
   {
    
    $word = new Word();
    $word->word = $request['word'];
    $word->mean = $request['mean'];
    $word->a_part_of_speech = $request['a_part_of_speech'];
    $word->example = $request['example'];
    $word->pronounce = $request['pronounce'];
    $word->choices = $request['choice'];
    $word->correct_choice = $request['correct_choice'];
    
    
    $this->validate($request,[
      'word' => 'required',
      'mean' => 'required',
      'choice' =>'required',
    ]);
    $word->save();
    
    return back();

   
    }
   // choicesという配列からchoiceを取り出すので
   // 複数形　単数形となる
    
 
   
    
   
    
   public function list() 
   {
         $word=Word::all();

      return view('word.list',compact('word'));

   }

   
   
    /**
     * 編集画面(viewに注目)
     */
   
   public function renew_view($id) 
   {
         $word=Word::find($id);
      
      return view('word.renew',compact('word'));
   
   }
   /**
     * 編集処理
     */
   public function renew(Request $request,$id)
   {
      $word = Word::find($id);

      $words=$word->renew_deal($request,$word);

      

      return redirect()->route('word.list');
   }
  
   /**
     * 削除処理
     */
    public function destroy_word(Request $request,$id)
    {
      $word = Word::destroy($id);
      return redirect()->route('word.list');
    }

}
