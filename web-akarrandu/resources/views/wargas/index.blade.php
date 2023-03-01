@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Warga</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('wargas.create') }}">
                        Add New
                    </a>
                </div>
            </div>
            <div class="row mb-2 pl-2"> 
                <div class="co-sm-6">
                    <form action="/wargas" method="GET">
                    <input type="search" name="search" class="form-control" placeholder="Search">  
                    </form>                 
                </div>
            </div>
        </div>
     
    </section>
    

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('wargas.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

