<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ProductGalleryController extends Controller
{
    protected $pathUploadImage = 'admin/uploads/productGallery/file';
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();

            $request->validate([
                'file.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'product_id' => 'required|exists:products,id'
            ]);
            // dd($data);
            
            foreach ($request->file('file') as $file) {
                $path = $file->store($this->pathUploadImage, 'public');
                
                ProductGallery::create([
                    'product_id' => $request->product_id,
                    'file' => $path,
                    'active' => 1,
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Arquivos enviados com sucesso!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao enviar arquivos: ' . $e->getMessage());
        }
    }

    public function update(Request $request, ProductGallery $productGallery)
    {
        //
    }

    public function destroy(ProductGallery $productGallery)
    {
        Storage::delete(isset($productGallery->file) ? $productGallery->file : '');
        $productGallery->delete();

        Session::flash('success','Arquivo(s) deletado com sucesso!');
        return redirect()->route('admin.dashboard.galleryApprovalRequest');
    }

        public function destroySelected(Request $request)
    {
        if($deleted = ProductGallery::whereIn('id', $request->deleteAll)->delete()){
            return Response::json
            (
                [
                    'status' => 'success',
                    'message' => $deleted.' itens deletados com sucessso!'
                ]
            );
        }
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id){
            ProductGallery::where('id', $id)->update(['sorting' => $sorting]);
        }
        return Response::json(['status' => 'success']);
    }
}
