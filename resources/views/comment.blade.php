@extends('layouts.app')

@section('content')

    <div class="container">
        <form  method="post" class="center-block form-review" id="comment">
            {{ csrf_field() }}
            <h2 class="center-block">Оставить отзыв</h2>
            <div class="form-group">
                <label for="name">Ф.И.О.</label>
                <input type="text" class="form-control" name="name" id="name"  required>
            </div>
            <div class="form-group">
                <label for="review">Текст Отзыва</label>
                <textarea class="form-control" name="review" id="review" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block" id='addcomment'>Отправить</button>
        </form>

        <div class="reviews">
            <h2 class="center-block">Все отзывы:</h2>
            <div class="panel panel-default">

                @php($step = $comments->currentPage())
                @php($i = ($step*5)-5)
                @foreach($comments as $comment)
                        @php($i++)
                        <div class="panel-heading">{{'#'.$i.' '.$comment->user}}</div>
                        <div class="panel-body">
                            {!! $comment->comment !!}
                        </div>
                @endforeach
            </div>

            </div>
            <center>{!! $comments->render() !!}</center>
        </div>

    @endsection
