<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\groupstudent;
use App\Models\Latihan\Absensi;
use App\Models\Latihan\Lesson;
use App\Models\Latihan\Schedule as LatihanSchedule;
use App\Models\User;
use Illuminate\Http\Request;

class schedule extends Controller
{
    public function index()
    {
    
            return view('student.schedule',[
            'post'=>LatihanSchedule::all(),
            'title'=>'schedule'
        ]);
     
    }

    public function add()
    {
        return view('student.schedule_add',[
            'lesson'=>Lesson::all(),
            // 'user'=>User::all(),
            'group'=>groupstudent::all()
        ]);
    }

    public function create(Request $insert)
    {
        $this->validate($insert,[
            'lesson'=>'required',
        ]);
        // dd($insert->lesson);
        LatihanSchedule::create([
            'user_id'=>$insert->user,
            'group_id'=>$insert->group,
            'lesson_id'=>$insert->lesson
        ]);
        return redirect('/schedule')->with('succes','Succes add schedule');
        
    }

    public function edit(LatihanSchedule $edit)
    {
    return view('student.schedule_edit',[
        'post' =>$edit,
        'lesson'=>Lesson::all(),
        'user'=>User::all(),
        'group'=>groupstudent::all()
    ]);
    }

    public function update(Request $update, LatihanSchedule $data)
    {
        $this->validate($update,[
            'lesson'=>'required',
            'user'=> 'required',
            'group'=>'required'
        ]);
        

    $data->where('id',$update->id)->update([
            'user_id'=>$update->user,
            'group_id'=>$update->group,
            'lesson_id'=>$update->lesson
        ]);
    // $data->where('id',$update->id)->update([
    //         'lesson_id'=>$update->lesson
    //     ]);
        return redirect('/schedule')->with('succes','Succes update schedule');

    }

    public function delete(LatihanSchedule $del)
    {
        // hapus absensi yang menggunakan schedule
        foreach($del->absensis as $delete){
        $del=$delete->schedule_id;
        $de=Absensi::where('schedule_id',$del)->get();
        $de->delete();
        }
        // hapus schedule
        $del->delete();
        return redirect('/schedule')->with('succes','Succes delete your data');
    }
    
}

