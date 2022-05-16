<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Pet;
 
class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view ('pets.index')->with('pets', $pets);
    }
 
    
    public function create()
    {
        return view('pets.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Pet::create($input);
        return redirect('pet')->with('flash_message', 'pet Addedd!');  
    }
 
    
    public function show($id)
    {
        $pet = Pet::find($id);
        return view('pets.show')->with('pets', $pet);
    }
 
    
    public function edit($id)
    {
        $pet = Pet::find($id);
        return view('pets.edit')->with('pets', $pet);
    }
 
  
    public function update(Request $request, $id)
    {
        $pet = Pet::find($id);
        $input = $request->all();
        $pet->update($input);
        return redirect('pet')->with('flash_message', 'pet Updated!');  
    }
 
   
    public function destroy($id)
    {
        pet::destroy($id);
        return redirect('pet')->with('flash_message', 'Pet deleted!');  
    }
}