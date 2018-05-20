@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Barang Ditemukan
                    <span>
                        <a href="{{route('temu.create')}}" class="btn btn-info">Tambah Barang Ditemukan</a>
                    </span>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>deskripsi</th>
                                <th>lokasi</th>
                                <th>tanggal</th>
                                <th>action</th>
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
                                <td>{{$barang->tanggal}}</td>
                                <td>
                                    <a href="{{route('temu.edit',$barang->id)}}" class="btn btn-warning">Ubah</a>
                                    <a href="{{route('temu.show',$barang->id)}}" class="btn btn-success">Detail</a>
                                    <a href="" class="btn btn-info">Kepemilikan</a>
                                    <a href="{{ route('temu.delete',$barang->id) }}" class="btn-danger btn"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete').submit();">
                                        Delete
                                    </a>

                                    <form id="delete" action="{{ route('temu.delete',$barang->id) }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </td>
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
