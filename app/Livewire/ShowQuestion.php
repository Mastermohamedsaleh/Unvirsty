<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Question;
use App\Models\Degree;
use App\Models\Quizze;
use Illuminate\Support\Facades\Session;

Use Carbon\Carbon;

class ShowQuestion extends Component
{


    public   $quiz , $quizze_id, $student_id, $data, $counter = 0, $questioncount = 0;

    public function render()
    {
        $this->data = Question::where('quizze_id', $this->quizze_id)->get();
        $this->questioncount = $this->data->count();
        $this->quiz = Quizze::where('id', $this->quizze_id)->first();
        return view('livewire.show-question', ['data']);
    }

    public function nextQuestion($question_id, $score, $answer, $right_answer)
    {


        $mytime = Carbon::now('Africa/Cairo');
        $mytime = $mytime->toDateTimeString();
        $start_time = $this->quiz->start_time;
        $end_time = $this->quiz->end_time;

    
    if($mytime <= $end_time){

        $stuDegree = Degree::where('student_id', $this->student_id)
            ->where('quizze_id', $this->quizze_id)
            ->first();
        // insert
        if ($stuDegree == null) {
            $degree = new Degree();
            $degree->quizze_id = $this->quizze_id;
            $degree->student_id = $this->student_id;
            $degree->question_id = $question_id;
            $degree->course_id = $this->quiz->course_id;
            if (strcmp(trim($answer), trim($right_answer)) === 0) {
                $degree->score += $score;
            } else {
                $degree->score += 0;
            }
            $degree->date = date('Y-m-d');
            $degree->save();
        } else {

            // update
            if ($stuDegree->question_id >= $this->data[$this->counter]->id) {
                $stuDegree->score = 0;
                $stuDegree->abuse = '1';
                $stuDegree->save();
                Session::flash('message','تم إلغاء الاختبار لإكتشاف تلاعب بالنظام');
                return redirect('student_quiz');
            } else {

                $stuDegree->question_id = $question_id;
                if (strcmp(trim($answer), trim($right_answer)) === 0) {
                    $stuDegree->score += $score;
                } else {
                    $stuDegree->score += 0;
                }
                $stuDegree->save();
            }
        }

        if ($this->counter < $this->questioncount - 1) {
            $this->counter++;
        } else {
           Session::flash('message','تم إجراء الاختبار بنجاح');
            return redirect('student_quiz');
        }
    }else{
        return redirect('student_quiz');
    }
    

    }


}
