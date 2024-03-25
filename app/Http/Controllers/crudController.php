<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phoneDetails;


class crudController extends Controller
{

    public function add_form()
    {
        return view('addIphoneForm');
    }

    public function edit_form($id){
        $data = array(
            'phone' => phoneDetails::where('id', $id)->first(),
        );
        return view('edit_form', $data);
    }


    public function phone_list(){
        $records = phoneDetails::all();
        $data = array(
            'records' => $records,
        );
        return view('phonesList', $data);
    }

    public function edit_process(Request $request){

        $fileName = time().'.'.$request->file('image')
        ->getClientOriginalExtension(); 
        $request->file('image')->move(public_path('/img'), $fileName);
        
        $record = [
            'phone_name' => $request->input('phoneName'),
            'price' => $request->input('price'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'image' => $fileName,
            'processor' => $request->input('processor'),
            'ram' => $request->input('ram'),
            'storage' => $request->input('storage'),
            'camera' => $request->input('camera'),
            'display' => $request->input('display'),
        ];
        phoneDetails::where('id',$request->input('id'))->update($record);

        return redirect('/')->with('success_message', 'Phone Successfully EDITED!');

    }

    public function add_phone(Request $request)
    {
        $fileName = time().'.'.$request->file('image')
            ->getClientOriginalExtension(); 
        $request->file('image')->move(public_path('/img'), $fileName);

        $record = [
                'phone_name' => $request->input('phoneName'),
                'price' => $request->input('price'),
                'color' => $request->input('color'),
                'size' => $request->input('size'),
                'image' => $fileName,
                'processor' => $request->input('processor'),
                'ram' => $request->input('ram'),
                'storage' => $request->input('storage'),
                'camera' => $request->input('camera'),
                'display' => $request->input('display'),
        ];
        phoneDetails::create($record);

        return redirect('/')->with('success_message', 'New Record Added!');
    }

    


    public function searchContent(Request $request) {
        $search_text = $request->input('query');
        $records = phoneDetails::where('phone_name', 'LIKE', '%'.$search_text.'%') 
            ->orWhere('price', 'LIKE', '%'.$search_text.'%') 
            ->orWhere('color', 'LIKE', '%'.$search_text.'%')
            ->orWhere('size', 'LIKE', '%'.$search_text.'%') 
            ->orWhere('processor', 'LIKE', '%'.$search_text.'%')
            ->orWhere('ram', 'LIKE', '%'.$search_text.'%')
            ->orWhere('storage', 'LIKE', '%'.$search_text.'%') 
            ->orWhere('camera', 'LIKE', '%'.$search_text.'%') 
            ->orWhere('display', 'LIKE', '%'.$search_text.'%')
            ->get();
        

            if ($records->isEmpty()) {
                return view('phonesList')->with('no_results', 'No results found')->with('records', $records);
            } else {
                return view('phonesList', compact('records'))->with('', 'No results found');
            }
    }
    

    public function delete_phone($id)
    {       
        phoneDetails::where('id',$id)->delete();

        return redirect('/')->with('success_message', 'A phone successfully deleted');
    }

}