{{-- Created By Gullian Van Der Walt Nov 2020 --}}

@extends('layouts.app')
@section('content')

<section class="resume-section">

<div class="resume-container">

    <div class="resume-heading-container">
        <h2 class="grow">Resume</h2>
        <hr class="h2_line">
    </div>

    <div class="education-container">
        <h3>Education</h3>
        <div class="education-row-container">
            <div class="education-col-container">
                <div class="education-heading-container">
                    <img src="/icons/degree.png" alt="Degree">
                <span>
                    Bachelor of Science in Information Technology
                </span>
                </div>
                <p>2018 - 2020: Pearson Institute of Higher Education</p>
            </div>

            <div class="education-col-container">
                <div class="education-heading-container">
                    <img src="/icons/degree.png" alt="Degree">
                <span>

                    Higher Certificate In IT
                </span>
                </div class="education-heading-container">
                <p>2017: Pearson Institute of Higher Education</p>
            </div>
        </div>
        <div class="education-row-container">
            <div class="education-col-container" id="schoolCol">
                <div class="education-heading-container">
                    <img src="/icons/school.png" alt="Degree">
                <span>
                    National Senior Certificate
                </span>
                </div>
                <p>2013: Afrikaanse Hoërskool Sasolburg </p>
                <p>2016: Jeppe Education Centre Vereeniging  </p>
            </div>
        </div>
    </div>

    <div class="technologies-container">
        <h3>Technologies I’ve Worked With</h3>
        <div>
            <ul class="technologies-list">
                <li><span>Java</span></li>
                <li><span>PHP</span></li>
                <li><span>C++</span></li>
                <li><span>Spring Boot Framework</span></li>
                <li><span>Thymeleaf Template Engine</span></li>
            </ul>
            <ul class="technologies-list">
                <li><span>HTML</span></li>
                <li><span>CSS</span></li>
                <li><span>JavaScript</span></li>
                <li><span>SQL</span></li>
            </ul>
        </div>
    </div>
    {{-- <div class="cv-container">
        <a href="/pdf" target="_blank">Download CV</a>
    </div> --}}
 </div>


</section>









@endsection
