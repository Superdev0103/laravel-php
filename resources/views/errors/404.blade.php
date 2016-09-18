@extends('nodes.backend::layouts.base')

@section('content')
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <span class="fa fa-exclamation-circle"></span>
        Not found.
    </div>
    <section class="panel panel-default">
        <header class="panel-heading border">
            <h3 class="panel-title">Not found</h3>
        </header>
        <div class="panel-body">
            <p>You've tried to view a page when does not exist</p>
            <p>If you believe this is a mistake, please contact an administrator.</p>
        </div>
    </section>
@endsection
