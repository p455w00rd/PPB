@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List Barang Ditemukan</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>deskripsi</th>
                                <th>lokasi</th>
                                <th>tanggal</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @forelse($barang as $barang)
                            <tr>
                                <td>
                                    {{$barang->nama}}
                                </td>
                                <td>{{$barang->deskripsi}}</td>
                                <td>{{ $barang->lokasi }}</td>
                                <td>{{$barnag->tanggal}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada data</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
