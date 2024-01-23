<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Question;
use App\Models\Degree;
use Illuminate\Support\Facades\Session;


class ShowQuestion extends Component
{



    public $quizze_id, $student_id, $data, $counter = 0 , $questioncount = 0;


    public function render()
    {


        $this->data = Question::where('quizze_id', $this->quizze_id)->get();
        $this->questioncount = $this->data->count();
        return view('livewire.show-question', ['data']);
    }


    public function nextQuestion($question_id, $score, $answer, $right_answer){
    
        $studentDegree = Degree::where('student_id', $this->student_id)
        ->where('quizze_id', $this->quizze_id)
        ->first();





        if( $studentDegree == null ){

               // insert
            $degree = new Degree();
            $degree->quizze_id = $this->quizze_id;
            $degree->student_id = $this->student_id;
            $degree->question_id = $question_id;
     
            if(strcmp(trim($answer), trim($right_answer)) === 0){
                $degree->score += $score;
            }else{
                $degree->score += 0;
            }
            $degree->date = date('Y-m-d');
            $degree->save();
        }else{
            
       // update

                   
             
        }


        if ($this->counter < $this->questioncount - 1) {
            $this->counter++;
        } else {     
             Session::flash('message', 'م إجراء الاختبار بنجاح');
            return redirect('student_exams');
        }



       
    }



}
