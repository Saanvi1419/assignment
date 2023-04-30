<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Crud;
use Illuminate\View\View;

class CrudController extends Controller
{

    public function index(): View
    {
        $crudss = Crud::all();
        return view ('index')->with('cruds', $cruds);
    }

 
    public function create(): View
    {
        return view('create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Crud::create($input);
        return redirect('crud')->with('flash_message', 'crud Addedd!');
    }

    public function show(string $id): View
    {
        $crud = Crud::find($id);
        return view('show')->with('cruds', $crud);
    }

    public function edit(string $id): View
    {
        $crud = Crud::find($id);
        return view('edit')->with('cruds', $crud);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $crud = Crud::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('crud')->with('flash_message', 'crud Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('crud')->with('flash_message', 'crud deleted!'); 
    }
}
?>