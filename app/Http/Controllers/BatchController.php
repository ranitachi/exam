<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Batch;
class BatchController extends Controller
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
            $batch=Batch::where('active','=',1)
                    ->where('code','LIKE','%'.$request->search.'%')
                    ->paginate($page);
            
        }
        else
        {
            $batch=Batch::where('active','=',1)->paginate($page);
        }
        
        if ($request->ajax()) {
             return view('pages.back.batch.data')
                ->with('batch',$batch)
                ->with('hal',$hal)
                ->render();
        }

        
        return view('pages.back.batch.index')
                ->with('batch',$batch)
                ->with('hal',$hal);
    }

    public function show($id)
    {
        $det=array();
        if($id!=-1)
        {
            $det=Batch::where('id','=',$id)->get()->first();
        }
        return view('pages.back.batch.form')
            ->with('det',$det)
            ->with('id',$id);
    }
    public function store(Request $request)
    {
        $create=Batch::create($request->all());
        return redirect('batch')->with('pesan', 'Tambah Data Batch Baru Berhasil');
        // return response()->json([$create]);
    }
    public function update(Request $request,$id)
    {
       $update = Batch::find($id)->update($request->all());
       return redirect('batch')->with('pesan', 'Edit Data Batch Berhasil');
    //    return response()->json([$update]);
    }
    public function destroy($id)
    {
        Batch::find($id)->delete();
        return response()->json(['done']);
    }
}
