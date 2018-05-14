@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List User</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>email</th>
                                <th>nama</th>
                                <th>tipe</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @forelse($user as $user)
                            <tr>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{ $user->is_admin == 1 ? "Super Admin" : "Admin" }}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
