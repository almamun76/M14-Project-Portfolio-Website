@extends('layout.layout')
@section("title", "about")

@section("about")
<section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{ asset('assets/img/aam.jpg') }}" class="img-fluid rounded b-shadow-a" alt="" height="300px">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Abdullah Al Mamun</span></p>
                        <p><span class="title-s">Profile: </span> <span>full stack web developer</span></p>
                        <p><span class="title-s">Email: </span> <span>contact@example.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>+880-1712-XXXXXX</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      I have been fascinated with computer since my student days. Due to personal interest, I gained skills in MS Word and MS Excel that time. I had to skilled up on MS Power point for classroom teaching through digital content. I also gained expertise in graphics design and video editing. I also had to learn C and C ++ programming languages for the sake of my profession.
                    </p>
                    <p class="lead">
                      In 2015 I did an In-Service TOT course on C language, HTML, CSS, JavaScript, PHP and MySQLi under A2I and TQI-II projects of the Government of Bangladesh. Since then I have been very interested in working on the backend of web application. Later I worked as a Master Trainer in C language, HTML, CSS, JavaScript, PHP, MySqli training courses in Mymensingh TTC, Dhaka TTC, Rajshahi TTC, Sylhet TTC and Comilla TTC.
                    </p>
                    <p class="lead">
                      With the help of the skills acquired from that TOT course, video tutorials of different youtube channels and various tutorial websites, I developed a dynamic website for Sherpur Government College (https://www.thecodestudy.com/). Complete raw php has been used in the backend of that website. Till the 1st quarter of 2022, features like online result processing system, online admission system, online MCQ test application etc. have been added to the website.
                    </p>
                    <p class="lead">
                      I am currently receiving training on "Full Stack Eeb Development with PHP, Laravel and Vue Js" from the Ostad online platform.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
