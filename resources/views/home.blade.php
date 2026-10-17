
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="fta-hero">
        <div class="fta-hero-content">
            <span class="fta-label">
                WELCOME TO FIRSTTECHNOS ACADEMY
            </span>

            <h1>
                WE ARE THE FIRST<br>
                <span>WE ARE THE FUTURE</span>
            </h1>

            <p>
                Discover your potential, develop new skills,
                and prepare yourself for a brighter future with FTA.
            </p>

            <div class="fta-buttons">
                <a href="/product" class="fta-button-primary">
                    Explore Our Programs →
                </a>

                <a href="/about" class="fta-button-secondary">
                    About Us
                </a>
            </div>
        </div>

        <div class="fta-bottom-note">
            LEARN · GROW · CREATE THE FUTURE
        </div>
    </section>
@endsection
