@extends('layouts.app')
@section('title','Ürün Listesi')
@section('pageCss')
    <link rel="stylesheet" href="/assets/styles/vendor/datatables.min.css">
@endsection
@section('content')
    @component('particular._breadcum',['page' => 'Stok Durumu','links' => ['stock.index' => 'Stok Listesi']])@endcomponent
    <div class="separator-breadcrumb border-top"></div>
    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <h4 class="card-title mb-3">Sistemdeki Ürünlerin Stok Durumları</h4>
                    <div class="table-responsive">
                        <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ADI</th>
                                <th>KOLİ</th>
                                <th>ADET</th>
                                <th>TOPLAM</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($rows) > 0 )
                                @foreach($rows as $row)
                                    <tr>
                                        <td>#{{ $row->id }}</td>
                                        <td>{{ $row->product->pName }}</td>
                                        <td>{{ $row->parcel }}</td>
                                        <td>{{ $row->piece}}</td>
                                        <td>{{ $row->count}}</td>
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
@endsection

@section('pageJs')
    <script src="/assets/js/vendor/datatables.min.js"></script>
    <script src="/assets/js/datatables.script.js"></script>
    <script src="/assets/js/modal.script.js"></script>


@endsection
