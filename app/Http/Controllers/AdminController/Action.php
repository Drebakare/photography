<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Picture;
Use App\Category;
use App\Contact;
use App\About;


class Action extends Controller
{
    public function Home(){
        $totalFiles = Picture::get();
        $allCategories = Category::get();
        $contact = Contact::first();
        $getAboutUs = About::first();
        return view('welcome', compact('totalFiles', 'allCategories', 'contact', 'getAboutUs'));
    }
   public function display(){
        $totalFile = Picture::get();
        $all_Message = Message::get();
       return view('home', compact('totalFile', 'all_Message'));
   }
   public function logout(){
       Auth::logout();
       return redirect('/');
   }
   public function renderUpload(){
       $categories = Category::get();
       $all_Message = Message::get();
       return view('admin_action.upload_photo', compact('categories','all_Message'));
   }
   public function uploadPicture(Request $request){
       for($i=1;$i<=1;$i++){
           $this->validate($request,[
               'project'.$i =>'bail|required',
               'category'.$i =>'bail|required',
               'image'.$i =>'bail|required|max:3000',
           ]);
       }
       for($i=1;$i<=1;$i++){
           if($request->hasFile('image'.$i)){
               $image = $request->file('image'.$i);
               $image_name = str_random(10).'.'.$image->getClientOriginalExtension();
               $image->move(public_path("/uploads"), $image_name);
               $new_project = 'project'.$i;
               $new_category = 'category'.$i;
               $new_picture = Picture::create([
                   'ProjectName'=>$request->$new_project,
                   'ImageName'=>$image_name,
                   'category_id'=>$request->$new_category,
               ]);

           }
       }
       return redirect()->back()->with('success', 'Success uploading pictures');

   }
   public function renderCategory(){
       $all_Message = Message::get();
       return view('admin_action.add_category', compact('all_Message'));

   }
   public function addCategory(Request $request){
       $validation = $this->validate($request,[
           'description' =>'bail|required',
           'category' =>'bail|required',
           'image' =>'bail|required|max:3000',
       ]);
       if($request->hasFile('image')){
           $image = $request->file('image');
           $image_name = str_random(10).'.'.$image->getClientOriginalExtension();
           $image->move(public_path("/uploads"), $image_name);
           $new_category = Category::create([
               'category'=>$request->category,
               'image'=>$image_name,
               'description'=>$request->description,
           ]);
           if($new_category){
               return redirect()->back()->with('success', 'success adding category');
           }
           else{
               return redirect()->back()->with('failure', 'Error adding category');
           }

       }
       else{
           return redirect()->back()->with('failure', 'No image is selected');
       }
   }
   public function renderUpdateContact(){
       $all_Message = Message::get();
        return view('admin_action.updateContact', compact('all_Message'));
   }
   public function updateContact(Request $request){
      $validation = $this->validate($request,[
          'address'=>'bail|required',
          'phone'=>'bail|required',
          'email'=>'bail|required',
      ]);
      if($validation){
          $check_contact = Contact::first();
          if($check_contact ){
              $delete_previous_contact = Contact::delete();
              if($delete_previous_contact){
                  $add_contact = Contact::create([
                     'address'=>$request->address,
                     'email'=>$request->email,
                     'phone_number'=>$request->phone,
                  ]);
                  if($add_contact){
                      return redirect()->back()->with('success', 'Contact address updated successfully');
                  }
                  else{
                      return redirect()->back()->with('failure', ' Failure updating Contact address');
                  }
              }
              else{
                  return redirect()->back()->with('failure', ' Failure updating Contact address');
              }



          }
          else{
              $add_contact = Contact::create([
                  'address'=>$request->address,
                  'email'=>$request->email,
                  'phone_number'=>$request->phone,
              ]);
              if($add_contact){
                  return redirect()->back()->with('success', 'Contact address updated successfully');
              }
              else{
                  return redirect()->back()->with('failure', ' Failure updating Contact address');
              }
          }
      }
   }
   public function get_message(Request $request){
        $validation = $this->validate($request,[
        'name'=>'bail|required',
          'message'=>'bail|required',
          'email'=>'bail|required',
            ]);
        if($validation){
            $add_message = Message::create([
             'name'=>$request->name,
             'messsage'=>$request->message,
              'email' =>$request->email,
            ]);
            if($add_message){
                return redirect()->back()->with('success', 'message submitted successfully');
            }
            else{
                return redirect()->back()->with('failure', 'Something came up when submitting the form');
            }
        }
   }
   public function renderViewMessage(){
        $getMessages=Message::orderBy('id', 'dsc')->paginate(2);
       $all_Message = Message::get();
       return view('admin_action.view_messages',compact('getMessages','all_Message'));

   }
    public function delete_message($id){
        $delete_result = Message::where('id',$id)->delete();
        if($delete_result){
            return redirect()->back()->with('success', 'message deleted successfully');
        }
        else{
            return redirect()->back()->with('failure', 'Something happened when deleting message, please try again');

        }


    }
    public function renderAboutUs(){
        $all_Message = Message::get();
        return view('admin_action.Update_About_us', compact('all_Message'));
    }
    public function UpdateAboutUs(Request $request){
        $validation = $this->validate($request,[
            'title'=>'bail|required',
            'body'=>'bail|required',
            'image1'=>'bail|required',
        ]);
        if($validation){
            $check_AboutUs = About::first();
            if($check_AboutUs){
                $delete_previous_About = About::delete();
                if($delete_previous_About){
                    if($request->hasFile('image1')){
                        $image = $request->file('image1');
                        $image_name = str_random(10).'.'.$image->getClientOriginalExtension();
                        $image->move(public_path("/uploads"), $image_name);
                        $new_About = About::create([
                            'title'=>$request->title,
                            'image'=>$image_name,
                            'body'=>$request->body,
                        ]);
                        if($new_About){
                            return redirect()->back()->with('success', 'success adding About Us');
                        }
                        else{
                            return redirect()->back()->with('failure', 'Error adding About Us');
                        }

                    }
                    else{
                        return redirect()->back()->with('failure', 'No image is selected');
                    }

                }
                else{
                    return redirect()->back()->with('failure', 'Something came up during processing, kindly try again');

                }
            }
            else{
                if($request->hasFile('image1')){
                    $image = $request->file('image1');
                    $image_name = str_random(10).'.'.$image->getClientOriginalExtension();
                    $image->move(public_path("/uploads"), $image_name);
                    $new_About = About::create([
                        'title'=>$request->title,
                        'image'=>$image_name,
                        'body'=>$request->body,
                    ]);
                    if($new_About){
                        return redirect()->back()->with('success', 'success adding About Us');
                    }
                    else{
                        return redirect()->back()->with('failure', 'Error adding About Us');
                    }

                }
                else{
                    return redirect()->back()->with('failure', 'No image is selected');
                }
            }


        }
    }
}
