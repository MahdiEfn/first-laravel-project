@extends('layouts.master')


@section('content')
    <h2>All Articles</h2>

        <a href="/admin/articles/create">New Aticle</a>
  
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        @can('update',$article)
                        <a href="/admin/articles/{{$article->id}}/edit">Edit</a>
                        @endcan
                        @can('update',$article)
                        <form action="/admin/articles/{{$article->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button>delete</button>
                        </form>
                        @endcan
                          
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
