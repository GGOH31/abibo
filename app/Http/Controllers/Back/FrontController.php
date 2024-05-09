<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function listeFront()
    {
        $fronts=Front::orderBy("created_at","ASC")->paginate(100);
        return view('back.front',compact('fronts'));

    }


    public function editFront(Request $request)
    {
        $front=Front::find($request->id);
        // dd($request->all());
        if (isset($front)) {
            if ($front->type==1) {

               $front->value=$request->value;
               $front->save();
               return redirect()->back()->with('success', 'Parametre modifié avec succès.');
            }else {
                 $reponse=$this->_saveImage($request->value,$front->name);
                 if ($reponse['code']==200) {
                    $front->value=$reponse['data'];
                    $front->save();
                    return redirect()->back()->with('success', 'Parametre modifié avec succès.');
                 } else {
                    return redirect()->back()->withError('erreur');
                 }
                 
            }
            # code...
        }else {
            return redirect()->back()->withError('erreur');
        }
    }






    public static function _saveImage($images,$name)
    {
        $extention = $images->getClientOriginalExtension();
            $extensions = array('png', 'gif', 'jpg', 'jpeg','svg','webp','pdf','doc','xlsx','xls','docx','JPG','GIF','PDF','PNG','JPEG','DOC','DOCX');
            if (!in_array($extention, $extensions)) 
            {
                return ['code' => 400, 'msg' => "Le format de l'image est incorrecte", 'data' => ''];
            }
            Log::info($images);
            $file_name = time().'.'.$extention;
            $destinationPath = public_path('/images/');
            
            $save=$images->move($destinationPath,$file_name);

            $file_name='/images/'.$file_name;
            if ($save)
            {
                return ['code' => 200, 'msg' => "Image enregistré avec succès", 'data' => $file_name,'extention'=>$extention];
            }else {
                return ['code' => 400, 'msg' => "Erreur systheme", 'data' =>$file_name];
            }
    
    
    }
}

