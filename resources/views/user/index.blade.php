@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List User
                    <span>
                        <a href="{{route('user.create')}}" class="btn btn-info">Tambah User</a>
                    </span>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>email</th>
                                <th>nama</th>
                                <th>tipe</th>
                                <th>action</th>
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
                                <td>

                                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
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
@section('javascript')
@parent
<script>
    $(function () {
        $('.job-delete').click(function (event) {
            event.preventDefault();
            event.stopPropagation();
            $.ajax({
                method: 'DELETE',
                url: $(this).attr('href'),
                data: {_token: "{{ csrf_token() }}"},
                success: function (response) {
                    // handle success
                },
                error: function (response) {
                    // handle error
                }
            });
        });
    });
</script>
    @endsection