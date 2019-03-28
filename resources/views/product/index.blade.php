@extends('layouts.app')
@section('title','Ürün Listesi')
@section('pageCss')
    <link rel="stylesheet" href="/assets/styles/vendor/datatables.min.css">
@endsection
@section('content')
    @component('particular._breadcum',['page' => 'Ürün Listesi','links' => ['product.index' => 'Ürün Listesi']])@endcomponent
    <div class="separator-breadcrumb border-top"></div>
    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <h4 class="card-title mb-3">Sistemdeki Ürünler</h4>
                        <button class="btn btn-primary btn-rounded text-white float-right mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="nav-icon i-Add"></i> Yeni Ekle
                        </button>
                        <p>Ürünlerin Listesini, Stok Durumu Görebilir ve Yeni Ürün Ekliyebilirsiniz.</p>
                    <div class="table-responsive">
                        <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ADI</th>
                                <th>STOK</th>
                                <th>ÜCRET</th>
                                <th>İŞLEMLER</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($products) > 0 )
                                @foreach($products as $product)
                                    <tr>
                                        <td>#{{ $product->id }}</td>
                                        <td>{{ $product->pName }}</td>
                                        <td>{{ $product->stock()->count() > 0 ? $product->stock->count.' Adet Kaldı' : 'Stok Bilgisi Yok' }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a onclick="openEditModal({{json_encode([$product->stock()->count() > 0 ?$product->stock->toArray() : null,$product])}})" class="btn btn-info btn-rounded text-white"><i class="nav-icon i-Edit"></i> Düzenle</a>
                                            <a href="{{route('product.destroy',$product->id)}}" data-method="Delete" data-confirm="Silmek İstediğinize Emin misiniz ?" class="btn btn-danger btn-rounded"><i class="nav-icon i-Close"></i> Sil</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of col -->
    </div>
      <!-- end of row -->

    <!-- Insert Large Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ürün Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Adı :</label>
                                <input type="text" name="pName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-form-label">Ücret :</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>
                            <div class="separator-breadcrumb border-top"></div>
                            <p>Stok Bilgisi Olan Ürünlerde Stok Bilgilerini Giriniz</p>
                            <div class="form-group">
                                <label for="koli" class="col-form-label">Koli :</label>
                                <input type="text" name="parcel" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="piece" class="col-form-label">Adet :</label>
                                <input type="text" name="piece" class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Large Modal -->
    <div class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" id="editForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ürün Güncelle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Adı :</label>
                            <input type="text" name="pName" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">Ücret :</label>
                            <input type="text" name="price" class="form-control" id="price" required>
                        </div>
                        <div class="separator-breadcrumb border-top"></div>
                        <p>Stok Bilgisi Olan Ürünlerde Stok Bilgilerini Giriniz</p>
                        <div class="form-group">
                            <label for="koli" class="col-form-label">Koli :</label>
                            <input type="text" name="parcel" class="form-control" id="parcel">
                        </div>
                        <div class="form-group">
                            <label for="piece" class="col-form-label">Adet :</label>
                            <input type="text" name="piece" class="form-control" id="piece">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('pageJs')
    <script src="/assets/js/vendor/datatables.min.js"></script>
    <script src="/assets/js/datatables.script.js"></script>
    <script src="/assets/js/modal.script.js"></script>

    <script>

        function openEditModal(product) {

            $('#name').val(product[1].pName);
            $('#price').val(product[1].price);
            if (product[0] != null){
                $('#parcel').val(product[0].parcel);
                $('#piece').val(product[0].piece);
            }
            $('#editForm').attr('action','/product/'+product[1].id);
            $('.bd-example-modal-lg-edit').modal('show');
        }

    </script>


@endsection
