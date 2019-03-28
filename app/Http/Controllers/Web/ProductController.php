<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebBaseController;
use App\Models\Product;
use App\Models\Stock;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection  as ProductCollection;
use Illuminate\Support\Facades\Auth;

class ProductController extends WebBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products =  new ProductCollection(Product::all());

        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $product = Product::create($request->only('pName','price'));
            $this->helper->toaster('success','Ürün Ekleme Başarılı','İşlem Başarılı');
            $this->helper->createLog('001',$product->pName.' İsimli Ürün Eklendi',$request->ip(),Auth::user()->id);
            if (!empty($request->piece) && !empty($request->parcel)){
                $insert = [
                  'product_id' => $product->id,
                  'parcel' => $request->parcel,
                  'piece' => $request->piece,
                ];

                $stock = Stock::create($insert);
                if ($stock){
                    $this->helper->createLog('001',$product->pName.' li ürünün stok Bilgisi Eklendi',$request->ip(),Auth::user()->id);
                }
            }
        }catch (\Exception $exception){
            $this->helper->toaster('error',$exception->getMessage().' -> Kayıt Başarısız Oldu','Veri Tabanı Hatası');
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $row = Product::findOrFail($id);
            $row->update($request->only('pName','price'));
            if (!empty($request->piece)){
                $row->stock()->update([
                   'piece' => $request->piece,
                   'parcel' => $request->parcel,
                   'count' => $request->piece * $request->parcel
                ]);
            }
            $this->helper->toaster('success','Ürün Güncelleme','İşlem Başarılı');
            $this->helper->createLog('002',$row->pName.' Ürünü Güncellendi',$request->ip(),Auth::user()->id);

        }catch (\Exception $exception){
            $this->helper->toaster('error',$exception->getMessage().' -> Güncelleme Başarısız Oldu','Veri Tabanı Hatası');
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try{
            $row = Product::findOrFail($id);
            $row->delete();
            $this->helper->createLog('003',$row->pName.' Ürünü Sistemden Kaldırıldı.',$request->ip(),Auth::user()->id);
            $this->helper->toaster('success','Ürün Başarılı Şekilde Silindi','İşlem Başarılı');
        }catch (\Exception $exception){
            $this->helper->toaster('error','Veri Tabanı Hatası : '.$exception->getMessage(),'Hata');
        }
        return redirect()->route('product.index');
    }
}
