@extends('layouts.app')

        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    @section('title', '| All Posts')

    @section('content')

        <div class="=row">
            <div class="col-md-8">
                <h1>All Posts</h1>
            </div>
            <div class="col-md-2">
                <a href='{{route('posts.create')}}' class="btn btn-lg btn-block btn-primary">Create New Post</a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div><!-- End of row -->

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="#" class="btn btn-default">View</a> <a href="#" class="btn btn-default">Edit</a> </td>
                        </tr>
                    @endforeach
                    </tbody>



                </table>
            </div>
        </div>

@endsection

<!-- JavaScript-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
