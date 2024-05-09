<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController
{
public function upload( Request $request ) {
        
            $validatedData = $request->validate( [
                'filename'=>'required|mimes:jpg,bmp,png,jpeg,webp',
                ]);
     


            $files = $request->file('filename');
            
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
          
              //$filename = $files->store(path : 'photos');
              $gallery = new Photo() ;
              $gallery->filename = $filename ;
              $gallery->save();

              $destinationPath = 'uploads';
              $files->move($destinationPath,$filename);
           
            
     
    return redirect()->back()->with('success','Upoaded') ;
}

}
