<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addARequest;
use App\Models\Item;

class GeneralController extends Controller
{
    public function start(){
        $info=new Item();

        return view('mainStart.start',['data'=>$info->all()]);
    }
    public function add_article()
    {
        return view('Add_Article.add_article');
    }
    public function add_article_action(addARequest $request){
        $info=new Item();
        $info->Title=$request->input('Title');
        $info->Description=$request->input('Description');
        $info->Text=$request->input('Text');

        $info->save();

        return redirect()->route('start');
    }

    public  function full($id){
    $info=new Item();
    return view('show_all.showAll',['data'=>$info->find($id)]);
    }

    public  function update($id){
        $info=new Item();
        return view('update.update',['data'=>$info->find($id)]);
    }

    public function sub_update($id,addARequest $request){
        $info=Item::find($id);
        $info->Title=$request->input('Title');
        $info->Description=$request->input('Description');
        $info->Text=$request->input('Text');

        $info->save();

        return redirect()->route('Full_text',$id);

    }

    public function delete($id){
        Item::find($id)->delete();
        return redirect()->route('start');

    }
}
