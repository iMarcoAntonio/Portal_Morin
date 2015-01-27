<?php

class UploadController extends BaseController {

    public function getUpload(){
            return View::make('upload/upload');
            /*$data = file_get_contents(public_path()."\\"."data2.json");
            $products = json_decode($data, true);
            return $products;
            foreach ($products as $product) {
                print_r($product);
            }*/
    }

    public function doUpload(){
        $validacion = Validator::make(Input::all(), 
            [
                'file' => 'required'
            ]);
        if($validacion->fails()){
            return Redirect::back()->withInput()->withErrors($validacion);
        }
        $file = Input::file('file');

        $extension = $file->guessExtension();

        if($extension == 'xlsx' || $extension == 'xls'){
            $url_file = $file->getClientOriginalName();
            $destinoPath = public_path();
            $subir = $file->move($destinoPath, $url_file);
            Excel::load($destinoPath."\\".$url_file, function($archivo){
                $result = $archivo->get();

                foreach ($result as $key => $value) {
                    $product = new Product;
                    $product->name = $value->name;
                    $product->description = $value->description;
                    $product->presentation = $value->presentation;
                    $product->save();
                }
            })->get();
            File::delete($destinoPath."\\".$url_file);
            return View::make('upload/upload')->with('msg','1');
        }
        else
            //return "No se subió el archivo".$extension;
            return View::make('upload/upload');
    }

}