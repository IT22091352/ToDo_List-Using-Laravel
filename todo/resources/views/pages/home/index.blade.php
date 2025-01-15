@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Hero Section -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Welcome to the Home Page</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                    to featured content or information.</p>
                <a href="{{ route('todo') }}" class="btn btn-primary btn-lg">Go to Todo List</a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row mt-5">
            <div class="col-lg-4 text-center">
                <div class="feature-box">
                    <i class="bi bi-check-circle" style="font-size: 2rem; color: #a61818;"></i>
                    <h3>Feature One</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas quaerat consequuntur eaque
                        nulla maxime mollitia assumenda provident quae reprehenderit.</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="feature-box">
                    <i class="bi bi-check-circle" style="font-size: 2rem; color: #a61818;"></i>
                    <h3>Feature Two</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit minus ea! Voluptate ullam id quas
                        qui temporibus pariatur amet.</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="feature-box">
                    <i class="bi bi-check-circle" style="font-size: 2rem; color: #a61818;"></i>
                    <h3>Feature Three</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil distinctio debitis veritatis beatae
                        molestiae itaque laborum eaque inventore commodi saepe!</p>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequatur quae, totam atque earum
                    impedit. Corrupti porro dicta quia nesciunt.
                </p>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            font-size: 40px;
            font-weight: bold;
            color: #a61818;
            margin-top: 20px;
        }

        .lead {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .feature-box {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .feature-box i {
            margin-bottom: 10px;
        }
    </style>
@endpush
