<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::latest()->paginate(5);
  
        return view('ads.index',compact('ads'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function affichage()
    {
        $ads = Ad::latest()->paginate(5);
  
        return view('ads.affichage',compact('ads'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
            
        //     'title' => 'required',
        //     'description' => 'required',
        //     'localisation' => 'required',
        //     'price' => 'required',
            
        // ]);
  
        // Ad::create($request->all());
        
        $request->validate([
            
               'title' => 'required',
                'description' => 'required',
               'localisation' => 'required',
                 'price' => 'required',
                 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                
            ]);
        
        
        
        $path = $request->file('image')->store('images');

        $ad = new Ad();
        $ad->title = $request['title'];
        $ad->description = $request['description'];
        
        $ad->image = $path;
        $ad->price = $request['price'];
        $ad->localisation = $request['localisation'];
        $ad->user_id = auth()->user()->id;
        $ad->save();
   
        return redirect()->route('ads.index')
                        ->with('success','ad created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        return view('ads.show',compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('ads.edit',compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'localisation' => 'required',
            'price' => 'required',
        ]);
        
        $input = $request->all();
        if ($image = $request->file('image')) {
            /* $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath , $profileImage); */
            $path = $request->file('image')->store('images');
            $input['image'] = "$path";
        }else{
            unset($input['image']);
        }
        
        $ad->update($input);
    
        return redirect()->route('ads.index')
                        ->with('success','ad updated successfully');
      
        
        
       
    
        
        /* $request->validate([
            'title' => 'required',
            'description' => 'required',
            'localisation' => 'required',
            'price' => 'required',
            
        ]);
  
        
        $input = $request->all();
   
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $path = $request->file('image')->store('images');
 
             return $path;
        }
           
        $ad->update($input);
  
        return redirect()->route('ads.index')
                        ->with('success','ad updated successfully');
    } */
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
  
        return redirect()->route('ads.index')
                        ->with('success','ads deleted successfully');
    }
    /* public function search(Request $request)
    {
        $words = $request->words;
        
        $ads = DB::table('ads')
                    ->where('title' , 'LIKE', '%$words%')
                    ->orWhere('description' , 'LIKE', '%$words%')
                    ->orderBy('created_at' , 'DESC')
                    ->get();
        

        return response()->json(['success'=>true, 'ads' =>$ads]);
    } */
    public function search(Request $request){
 
        $words = $request->words;
    
        $ads = DB::table('ads')
        ->where('title', 'LIKE', "%$words%")
        ->orWhere('description', 'LIKE', "%$words%")
        ->orderBy('created_at', 'DESC')
        ->get();
    
        return response()->json(['success' => true, 'ads' => $ads]);
    
    }


}
