<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Intervention\Image\Facades\Image;

class TrainerController extends Controller
{
    public function AddTrainer()
    {
        $trainer = Trainer::latest()->get();
        return view('backend.trainer.trainerview', compact('trainer'));
    }
    public function StoreTrainer(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'img' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'category' => 'required',
                'description' => 'required',
            ]
        );

        $trainer = new Trainer();

        $image = $request->img;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 200)->save('upload/trainer/' . $imagename);
        $image_url = 'upload/trainer/' . $imagename;
        $trainer->img = $image_url;

        $trainer->name = $request->name;
        $trainer->phone = $request->phone;
        $trainer->email = $request->email;
        $trainer->category = $request->category;
        $trainer->fblink = $request->fblink;
        $trainer->description = $request->description;

        $code_generate = 'TRA-';
        $gid = IdGenerator::generate(['table' => 'trainers', 'field' => 'GID', 'length' => 6, 'prefix' => $code_generate]);

        $trainer->GID = $gid;
        $trainer->save();

        return redirect()->back()->with('message', 'New Trainer Added Successfully');
    }

    public function EditTrainer($id)
    {
        $trainer = Trainer::find($id);
        return view("backend.trainer.edittrainer", compact("trainer"));
    }

    public function UpdateTrainer(Request $request, $id)
    {
        $trainer = Trainer::find($id);


        $trainer->name = $request->name;
        $trainer->phone = $request->phone;
        $trainer->email = $request->email;
        $trainer->category = $request->category;
        $trainer->fblink = $request->fblink;
        $trainer->description = $request->description;

        $image = $request->img;

        if ($image) {
            unlink($trainer->img);
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 200)->save('upload/trainer/' . $imagename);
            $image_url = 'upload/trainer/' . $imagename;
            $trainer->img = $image_url;
        }

        $trainer->save();

        return redirect()->route('view.trainer')->with('message', 'New Trainer Update Successfully');
    }
    public function DeleteTrainer($id)
    {
        $trainer = Trainer::find($id);
        unlink($trainer->img);
        $trainer->delete();

        return redirect()->route('view.trainer')->with('message', 'New Trainer Deleted Successfully');
    }
}
