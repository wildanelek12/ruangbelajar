<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz()
    {
        $quiz = Quiz::all();
        return view('quiz')->with(compact('quiz'));
    }
    public function checkJawaban(Request $request)
    {   
        $answer = array();
        $answer[0] = $request->radio1;
        $answer[1] = $request->radio2;
        $answer[2] = $request->radio3;
        $answer[3] = $request->radio4;
        $answer[4] = $request->radio5;
        $answer[5] = $request->radio6;
        $answer[6] = $request->radio7;
        $answer[7] = $request->radio8;
        $answer[8] = $request->radio9;
        $answer[9] = $request->radio10;
        $answer[10] = $request->radio11;
        $answer[11] = $request->radio12;
        $answer[12] = $request->radio13;
        $answer[13] = $request->radio14;
        $answer[14] = $request->radio15;
        $answer[15] = $request->radio16;
        $answer[16] = $request->radio17;
        $answer[17] = $request->radio18;
        $answer[18] = $request->radio19;
        $answer[19] = $request->radio20;

        $kunci = array();

        $quiz = Quiz::all();

        foreach ($quiz as $item) {
           $kunci[] = $item->kunci;
        }
        $skor = 0;
        for ($i=0; $i<count($kunci)  ; $i++) { 
            if($answer[$i]==$kunci[$i]){
                $skor+=5;
            }
        }
        var_dump($skor);


    }
}
