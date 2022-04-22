<?php

namespace App\Http\Controllers;
use App\Models\Passer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PasserController extends Controller
{
    //
    public function Addpasser()
    {
        return view('dashboard.passer.add-passer');
    }
    public function passerStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image'=>'required',
           

        ]);

            $passer = new Passer();
            $passer ->title =$request->title;  
          if($request->hasfile('image'))
           {
                $image=$request->file('image');
                $imageName=time().'.'.$image->extension();
                $image->move(public_path('/uploads/passerimg'), $imageName);
                    
                $passer ->image=$imageName;
        

      
            }
            $passer->save();
           return redirect()->back()->with('passer_added','passer   added successfully'); 
    }

    public function passers()
    { 
        $passers=Passer::all();
        return view('dashboard.passer.all-passer',compact('passers'));
    }

    public function Editpasser($id)
    {
        $passer=Passer::find($id);
        return view('dashboard.passer.edit-passer',compact('passer'));
    }

    public function Updatepasser(Request $request)
    {
        
      
        $passer=Passer::find($request->id); 
        $passer->title =$request->title;
       
  
  
       
        if($request->hasfile('image'))
          {
              $destination ='uploads/passerimg/'. $passer->image;
              if(File::exists($destination))
              { 
                  File::delete($destination);
  
              }
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename = time().'.'.$extension;
              $file->move('uploads/passerimg/',$filename); 
              $passer->image=$filename;
  
          } 
  
       
      
          $passer->update();
        return back()->with('success','Advertisement updated successfully is successfully updated');
    }
   
    public function Deletepasser($id)
    {
        $passer = Passer::find($id);
        $passer->delete();
        return redirect()->back()->with('Advertisement_deleted','Advertisement   deleted  successfully');
    }

}
