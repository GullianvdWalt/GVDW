{{-- Created By Gullian Van Der Walt Nov 2020 --}}

@extends('layouts.app')
@section('content')

<section class="project-section">

<div class="project-container">

<div class="project-heading-container">
    <h2 class="grow">Projects</h2>
    <hr class="h2_line">
</div>
<div class="project-row">
    <div class="project-col">
        <div class="overlay"></div>
        <h3>Mobile Pet Grooming Progressive Web Applicaton</h3>
        <br>
        <p>
            Java with SQL application built with Springboot framework
            for managing the operations of a mobile pet grooming business.
        </p>
        <div class="cc-rockmenu">
            <a href="https://github.com/GullianvdWalt/Pet-Grooming" class="rolling">
                <figure class="rolling_icon"> <i class="far fa-eye" id="eye">
                    </i></figure>
                <span>View Project</span>
            </a>
        </div>
    </div>

    <div href="https://github.com/GullianvdWalt/RecordCollector" class="project-col">
        <h3>Record Collector Progressive Web Application</h3>
        <p>
            Spring Boot application with Thymeleaf and MySQL for managing my Vinyl Record Collection.
        </p>
        <div class="cc-rockmenu">
            <a href="https://github.com/GullianvdWalt/RecordCollector" class="rolling">
                <figure class="rolling_icon"> <i class="far fa-eye" id="eye">
                    </i></figure>
                <span>View Project</span>
            </a>
        </div>
    </div>
</div>
<div class="project-row">
    <div href="https://github.com/GullianvdWalt/BroadReach" class="project-col">
        <h3>BroadReach Clinic Management Application</h3>
        <p>
            BroadReach Clinic Management System: BSC IT Pearson Level 3 ITDA301 - Project. Java Swing and Mysql
            MySQL Roles and Rules for Admin, Clinician, Community Healthcare Worker and Receptionist.
        </p>
        <div class="cc-rockmenu">
            <a href="https://github.com/GullianvdWalt/RecordCollector" class="rolling">
                <figure class="rolling_icon"> <i class="far fa-eye" id="eye">
                    </i></figure>
                <span>View Project</span>
            </a>
        </div>
    </div>
    <div href="https://github.com/GullianvdWalt/SisonkeBankApp" class="project-col">
        <h3>Sisonke Bank Application</h3>
        <p>
            BSC IT Pretoria Final Year Project ITJA321. Basic Android Application with SQLite for managing user transactions.
        </p>
        <div class="cc-rockmenu">
            <a href="https://github.com/GullianvdWalt/RecordCollector" class="rolling">
                <figure class="rolling_icon"> <i class="far fa-eye" id="eye">
                    </i></figure>
                <span>View Project</span>
            </a>
        </div>
    </div>
</div>

</div>

</section>

@endsection
