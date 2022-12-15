@extends('template.member_depan.master')
@section('mycss')
    <style>
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
    }
    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }
    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }
    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }
    .timeline > li:after {
        clear: both;
    }
    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }
    .timeline > li:after {
        clear: both;
        }
    .timeline > li > .timeline-panel {
        width: 50%;
        float: left;
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }
    .timeline > li.timeline-inverted + li:not(.timeline-inverted),
    .timeline > li:not(.timeline-inverted) + li.timeline-inverted {
        margin-top: -60px;
    }
        
    .timeline > li:not(.timeline-inverted) {
        padding-right:90px;
    }
        
    .timeline > li.timeline-inverted {
        padding-left:90px;
    }
    .timeline > li > .timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
    }
    .timeline > li > .timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
    }
    .timeline > li > .timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 50%;
        margin-left: -25px;
        background-color: #999999;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }
    .timeline > li.timeline-inverted > .timeline-panel {
        float: right;
    }
    .timeline > li.timeline-inverted > .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }
    .timeline > li.timeline-inverted > .timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }
    .timeline-badge.primary {
        background-color: #2e6da4 !important;
    }
    .timeline-badge.warning {
        background-color: #f0ad4e !important;
    }
    .timeline-title {
        margin-top: 0;
        color: inherit;
    }
    .timeline-body > p,
    .timeline-body > ul {
        margin-bottom: 0;
    }
    .timeline-body > p + p {
        margin-top: 5px;
    }
    @media screen and (max-width: 576px) {
        .timeline > li:not(.timeline-inverted) {
            padding-right:0px;
        }
            
        .timeline > li.timeline-inverted {
            padding-left:0px;
        }

        .timeline-heading h4{
            font-size: 1.3em;
        }

        .timeline > li > .timeline-panel{
            width: 100%;
        }
        .timeline > li > .timeline-badge{
            left:2%;
        }
        .timeline:before{
            left:0;
        }
    }
    </style>
@endsection

@section('content')
    @include('member.partials._navbar')

    <div class="wrapper">

        <!-- section beranda -->
        <div id="beranda" class="page-header page-header-small">
            <div id="page-header-image" class="page-header-image" style="z-index:-1;background-image: url('{{ url('img/bg_sm2.jpg') }}');" data-parallax="true"></div>
            
            <div class="container">
                <div class="content-center">
                    <h2 class="title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0s" >TIME<span style="font-weight: 100;">LINE</span></h2>
                    <h5 class="wow shake" data-wow-duration="1s" data-wow-delay="0.5s" style="color: #BA853A;font-weight:600;margin-bottom:3%;">INVOFEST 2018</h5>
                </div>
            </div>
        </div>
        <!-- end section beranda -->

        <!-- section deskripsi -->
        <div class="section section-deskripsi">
            <div class="container">
                <h4 class="section-title text-center wow bounceInDown" data-wow-duration="0.5s" data-wow-delay="0s">Timeline Invofest 2018</h4>
                
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge primary"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel text-right">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">GRAND OPENING &amp; TALKSHOW</h4>
                            </div>
                            <div class="timeline-body">
                                <p>25 OKTOBER 2018 <small>Pagi - Siang</small></p>
                                <p>Grand Opening Invofest 2018 & Talkshow Interaktif dengan tema "Big Data Pada Software Engineering"</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">WORKSHOP</h4>
                            </div>
                            <div class="timeline-body">
                                <p>25 OKTOBER 2018 <small>Siang - Sore</small></p>
                                <p>Workshop IT : UI/UX Design, Data Science, Cyber Security, dan Web Services</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge primary"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel text-right">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Final IT COMPETITION</h4>
                            </div>
                            <div class="timeline-body">
                                <p>26 OKTOBER 2018</p>
                                <p>Pelaksanaan final IT Competition : Application Development Competition, Web Design Competition &amp; Database Programming Competition</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">SEMINAR NASIONAL</h4>
                            </div>
                            <div class="timeline-body">
                                <p>27 OKTOBER 2018</p>
                                <p>Seminar nasional dengan tema Artificial Intelegence dalam Transformasi Teknologi Industri Masa Depan</p>
                            </div>
                        </div>
                    </li>
                </ul>
                {{-- <ul class="timeline">
                    <li>
                        <div class="timeline-badge primary"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel text-right">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">GRAND OPENING &amp; TALKSHOW</h4>
                            </div>
                            <div class="timeline-body">
                                <p>25 OKTOBER 2018 <small>Pagi - Siang</small></p>
                                <p>Grand Opening Invofest 2018 & Talkshow Interaktif dengan tema "Big Data Pada Software Engineering"</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">WORKSHOP</h4>
                            </div>
                            <div class="timeline-body">
                                <p>25 OKTOBER 2018 <small>Siang - Sore</small></p>
                                <p>Workshop IT : UI/UX Design, Data Science, Cyber Security, dan Web Services</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge primary"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel text-right">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Final IT COMPETITION</h4>
                            </div>
                            <div class="timeline-body">
                                <p>26 OKTOBER 2018</p>
                                <p>Pelaksanaan final IT Competition : Application Development Competition, Web Design Competition &amp; Database Programming Competition</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">SEMINAR NASIONAL</h4>
                            </div>
                            <div class="timeline-body">
                                <p>27 OKTOBER 2018</p>
                                <p>Seminar nasional dengan tema Artificial Intelegence dalam Transformasi Teknologi Industri Masa Depan</p>
                            </div>
                        </div>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
@endsection