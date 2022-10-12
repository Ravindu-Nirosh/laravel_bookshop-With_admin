<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;
use Image;

class SliderController extends Controller
{
    public function slider_view(){

        $slider =Slider::latest()->get();
        return view('backend.slider.sliderview',compact('slider'));
        
    }

    public function AddSlider(Request $request){

        $request->validate([
            'slider_image' => 'required',  
        ],
        [
            'slider_image.required' => 'Please Select Image',
        ]);


        $image=$request->file('slider_image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(252,357)->save('upload/slider/'.$name_gen);
        $save_url='upload/slider/'.$name_gen;

        
        Slider::insert([

            'slider_image' =>$save_url,
            'title' => $request->title,
            'description' => $request->description,
            
            
        ]);

        $notification =array(
            'message' => 'Slider Added Successfuly',
            'alert-type' =>'success'
        );

        return back()->with( $notification);

    }//end fuction 



    public function slider_Edit_view($id){

        $slider = Slider::findOrFail($id);

        return view('backend.slider.slider_edit',compact('slider'));
    }//end fuction



    public function Slider_Edit_create(Request $request){

        $Slider_id = $request->id;

        Slider::findOrFail($Slider_id)->update([

            'title' => $request->title,
            'description' => $request->description,
            
        ]);

        $notification =array(
            'message' => 'Slider Updated Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('mange-slider')->with($notification);

    }//end fuction


    public function slider_Image_Edit_view($id){

        $slider = Slider::findOrFail($id);

        return view('backend.slider.slider_edit_image',compact('slider'));
    }//end fuction


    public function Slider_image_Edit_create(Request $request){

        $Slider_id = $request->id;


        $imgdel=Slider::findOrFail($Slider_id);
        unlink($imgdel->slider_image);
        $image=$request->file('sliderImage');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(252,357)->save('upload/slider/'.$name_gen);
        $save_url='upload/slider/'.$name_gen;

        Slider::findOrFail($Slider_id)->update([

            'slider_image' =>$save_url,
            
        ]);

        $notification =array(
            'message' => 'Slider Image Updated Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('mange-slider')->with($notification);

    }//end fuction


    public function slider_delete($id){

        $delImag=Slider::findOrFail($id);
        unlink($delImag->slider_image);

        Slider::findOrFail($id)->delete();
        
        $notification =array(
            'message' => 'Category Deleted Successfuly',
            'alert-type' =>'success'
        );

        return back()->with( $notification);

    }
}

