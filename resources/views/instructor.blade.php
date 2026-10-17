
@extends('layouts.app')

@section('title', 'Our Instructor')

@section('content')
    <div class="text-center mb-5">
        <h1 class="fw-bold">Meet Our Instructors</h1>
        <p class="lead text-secondary">
            Learn from passionate and dedicated educators.
        </p>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="display-3 mb-3">👩‍🏫</div>
                    <h5 class="fw-bold">English Instructor</h5>
                    <p class="text-secondary">
                        Guides students to improve their English skills.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="display-3 mb-3">👨‍🏫</div>
                    <h5 class="fw-bold">Mathematics Instructor</h5>
                    <p class="text-secondary">
                        Helps students understand mathematics step by step.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="display-3 mb-3">👨‍💻</div>
                    <h5 class="fw-bold">Coding Instructor</h5>
                    <p class="text-secondary">
                        Introduces students to programming and technology.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
