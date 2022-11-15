<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type;

class TypeController extends Controller
{
    //
    public function getType()
    {
        $types = Type::all();
        return view('admin.type-manage.view', ['types' => $types]);
    }

    public function getAddType(){
        return view('admin.type-manage.add');
    }

    public function postAddType(Request $request)
    {
        $type = new Type();
        $type->type_name = $request->type_name;
        $type->type_description = $request->type_description;
        $type->save();
        return redirect()->back();
    }

    public function getEditType($id)
    {
        $type = Type::find($id);
        return view('admin.type-manage.edit', ['type' => $type]);
    }

    public function postEditType(Request $request, $id)
    {
        $type = Type::find($id);
        $type->type_name = $request->type_name;
        $type->type_description = $request->type_description;
        $type->save();
        return redirect()->route('view.type');
    }

    public function getDeleteType($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->back();
    }

    public function getSearchType(Request $request)
    {
        $types = Type::where('type_name', 'like', '%' . $request->key . '%')->get();
        return view('admin.type', compact('types'));
    }

}
