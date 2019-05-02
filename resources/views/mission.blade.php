@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">待辦事項清單</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('mission') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="mission" class="col-form-label text-md-left">任務：</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="mission" required autofocus>
                                </div>
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
