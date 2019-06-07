<?php
namespace App\Http\Controllers;

use App\Models\StructureElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Projects extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('search', $request->has('search') ? $request->get('search') : ($request->session()->has('search') ? $request->session()->get('search') : ''));
        //$request->session()->put('gender', $request->has('gender') ? $request->get('gender') : ($request->session()->has('gender') ? $request->session()->get('gender') : -1));
        $request->session()->put('field', $request->has('field') ? $request->get('field') : ($request->session()->has('field') ? $request->session()->get('field') : 'created_at'));
        $request->session()->put('sort', $request->has('sort') ? $request->get('sort') : ($request->session()->has('sort') ? $request->session()->get('sort') : 'desc'));

        $structure_elements = new StructureElement();

        /*
            if ($request->session()->get('gender') != -1)
            $structure_elements = $structure_elements->where('gender', $request->session()->get('gender'));
        */

        $structure_elements = $structure_elements->where('project_number', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate(10);

        if ($request->ajax())
            return view('projects.index', compact('structure_elements'));
        else
            return view('projects.ajax', compact('structure_elements'));
    }

    public function create(Request $request)
    {
    /*
        if ($request->isMethod('get'))
            return view('projects.form');
        else {
            $rules = [
                'name' => 'required',
                'email' => 'required|email',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->email = $request->email;
            $customer->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('laravel-crud-search-sort-ajax-modal-form')
            ]);
        }
    */
    }

    public function delete($id)
    {
        StructureElement::destroy($id);
        return redirect('/Projects');
    }

    public function update(Request $request, $id)
    {
        /*
        if ($request->isMethod('get'))
            return view('projects.form', ['customer' => Customer::find($id)]);
        else {
            $rules = [
                'name' => 'required',
                'email' => 'required|email',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $customer = Customer::find($id);
            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->email = $request->email;
            $customer->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('laravel-crud-search-sort-ajax-modal-form')
            ]);
        }
        */
    }
}