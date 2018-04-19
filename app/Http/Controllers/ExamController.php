<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Exam;
class ExamController extends Controller
{
    public function index(Request $request)
    {
        $urll = $request->fullUrl();
        $ur=explode('?',$urll);
        $hal=0;
        $page=10;
        if(isset($ur[1]))
        {
            $pg=explode('=',$ur[1]);
            
            if($pg[0]=='page')
            {
                if(isset($pg[1]))
                    $hal=($pg[1]*$page)-$page;
                else
                    $hal=(0*$page);
            }
        }

        if(isset($request->search))
        {
            $exam=Exam::where('code','LIKE','%'.$request->search.'%')
                    ->orWhere('name','LIKE','%'.$request->search.'%')
                    ->paginate($page);
            
        }
        else
        {
            $exam=Exam::paginate($page);
        }
        
        if ($request->ajax()) {
             return view('pages.back.exam.data')
                ->with('exam',$exam)
                ->with('hal',$hal)
                ->render();
        }

        
        return view('pages.back.exam.index')
                ->with('exam',$exam)
                ->with('hal',$hal);
    }

    public function show($id)
    {
        $det=array();
        if($id!=-1)
        {
            $det=Exam::where('id','=',$id)->get()->first();
        }
        return view('pages.back.exam.form')
            ->with('det',$det)
            ->with('id',$id);
    }
    public function store(Request $request)
    {
        $create=Exam::create($request->all());
        return redirect('exam')->with('pesan', 'Tambah Data Batch Baru Berhasil');
        // return response()->json([$create]);
    }
    public function update(Request $request,$id)
    {
       $update = Exam::find($id)->update($request->all());
       return redirect('exam')->with('pesan', 'Edit Data Batch Berhasil');
    //    return response()->json([$update]);
    }
    public function destroy($id)
    {
        Exam::find($id)->delete();
        return response()->json(['done']);
    }
}
