@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Barang Hilang</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('hilang.store')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nama Barang</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="nama" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Lokasi Kehilangan</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="lokasi" value="" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Tanggal Kehilangan</label>

                                <div class="col-md-6">
                                    <input type="text" name="tanggal" required class="form-control" id="datepicker">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Deskripsi Barang</label>

                                <div class="col-md-6">
                                    <textarea name="deskripsi" required id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <input type="text" hidden value="0" name="tipe">
                            <input type="text" hidden value="0" name="ditemukan">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah
                                    </button>
                                    <a type="button" href="{{route('hilang.index')}}" class="btn btn-primary">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('stylesheet')
    @parent
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('javascript')
    @parent
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
@endsection
