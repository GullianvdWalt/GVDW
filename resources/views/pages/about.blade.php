{{-- Created By Gullian Van Der Walt Nov 2020 --}}

@extends('layouts.app')
@section('content')

<section class="about-me-section">

    <div class="about-me-main-container">

    <div class="about-me-picture-container">
        <div class="about-me-img-inner">

            <div class="about-me-image-contaier"></div>
            <img src="images/dots.png" alt="" class="dots">
        </div>
    </div>

    <div class="about-me-content-container">
        <div class="about-me-heading-div">
            <h2 class="grow">About Me</h2>
            <hr class="h2_line">
        </div>

        <div class="intro-container">
            <h3> <span> Hi I'm </span> Gullian Van Der Walt</h3>
            <br>
            <span class="intro-subtext"> Aspiring Developer </span>
            <br>
            <p>
                I am a recent BSc IT gradaute. I completed my degree at Pearson Institute of Higher Education at their Pretoria campus in 2020.
                I am eager to gain real world experience and help a company to be as efficient and effective as possible.
            </p>
        </div>
        <br>
        <hr class="abot-me-line">
        <div class="about-details-container">
            <ul>
                <li>Name: &nbsp;<span> Gullian Van Der Walt</span></li>
                <li>Birth Date: &nbsp;<span> 1995/11/03</span></li>
                <li>Current Position: &nbsp;<span> Student, Recent Graduate</span></li>
            </ul>
            <ul>
                <li>Email: &nbsp;<span> gullianvdwalt1@gmail.com</span></li>
                <li>Phone: &nbsp;<span> 082 839 7273</span></li>
                <li>From: &nbsp;<span> Sasolburg, South Africa</span></li>
            </ul>
        </div>
        <hr class="abot-me-line">
        <div class="hobbies-container">
            <span class="hobbies-heading">My Interests & Hobbies</span>
            <ul class="hobbies-list">
                <li class="hobbies-item">
                    <img src="icons/icons8-headphones-100.png" alt="Music">
                    <span>Music</span>
                </li>
                <li class="hobbies-item">
                    <img src="icons/icons8-music-record-100.png" alt="Records">
                    <span>Record Collector</span>
                </li>
                <li class="hobbies-item">
                    <img src="icons/icons8-retro-tv-96.png" alt="Movies">
                    <span>Movies & Series</span>
                </li>
                <li class="hobbies-item">
                    <img src="icons/icons8-camping-tent-96.png" alt="Camping">
                   <span>Camping</span>
                </li>
                <li class="hobbies-item">
                     <img src="icons/fishing.png" alt="Fishing">
                   <span> Fishing</span>
                </li>
            </ul>
        </div>
    </div>

</div>

</section>


@endsection
