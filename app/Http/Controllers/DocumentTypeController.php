<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentType;

class DocumentTypeController extends Controller
{
    public function create(){
        return view("settings.document-type.create");
    }

    public function index(){
        $document_types = DocumentType::all();
        return view("settings.document-type.index", compact('document_types'));
    }

    public function store(Request $request){
        // return $request;
        $document_type = new DocumentType;
        $document_type->name = $request->name;
        $document_type->is_active = $request->is_active;
        $document_type->save();
        return redirect()->route('document-type.index')->with('success', 'Document Type created successfully');
    }

    public function edit($id){
        $document_type = DocumentType::find($id);
        return view('settings.document-type.edit', compact('document_type'));
    }

    public function update(Request $request, $id){
        $document_type = DocumentType::find($id);
        $document_type->name = $request->name;
        $document_type->is_active = $request->is_active;
        $document_type->save();
        // session()->flash('key', 'value');
        return redirect()->route('document-type.index')->with('success', 'Document Type updated successfully');
    }

    public function delete($id){
        $document_type = DocumentType::findOrFail($id);
        $document_type->delete();

        return redirect()->route('document-type.index')->with('success', 'Document Type deleted successfully');
    }
}
