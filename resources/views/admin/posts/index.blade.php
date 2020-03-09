@extends('layouts/admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Maqolalar    
            </h6>
        </div>
        <div class="card-body">
            <table>
                <thead>
                    <th>Sarlavha</th>
                    <th>Amallar</th>
                </thead>
                <tbody>
                    @foreach($posts as post)
                        <tr>
                            <td>{{ $post -> title }}</td>
                            <td>
                                <a  class="btn btn-warning" href="{{'route(posts.edit', ['id' => $post -> id])}}">O'zgartirish</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection