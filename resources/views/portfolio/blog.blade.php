@extends('layout.layout')
@section("title", "blog")

@section("blog")
<section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 mt-4">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. -->
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/html.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">See more about HTML</a></h3>
                <p class="card-description">
                  HTML uses "markup" to annotate text, images, and other content for display in a web browser. This markup consists of special "elements". These tags tell the browser how to interpret and display the content.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b1.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 19 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/css.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">See more about CSS</a></h3>
                <p class="card-description">
                  CSS controls the visual appearance of web pages, including aspects like fonts, colors, spacing, layout, and responsiveness across different devices. Without CSS, web pages would appear as plain text.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">John Doe</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 19 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/js.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">See more about JavaScript</a></h3>
                <p class="card-description">
                  JavaScript is a dynamic, interpreted programming language primarily known for adding interactivity to web pages. It is one of the three core technologies of the World Wide Web, working wuth HTML and CSS.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b3.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Emily Brooks</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 54 min
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/php.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Development</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">See more about PHP</a></h3>
                <p class="card-description">
                  PHP (PHP: Hypertext Preprocessor) is a widely-used, open-source, server-side scripting language primarily designed for web development. It allows developers to create dynamic and interactive web pages.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b4.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">David Turner</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 26 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/sql.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">RDBMS</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">More about RDBMS</a></h3>
                <p class="card-description">
                  MySQL is a widely used, open-source relational database management system (RDBMS). It uses Structured Query Language (SQL) to manage data stored in tables, and is known for its ease of use.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b5.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Michael Adams</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 45 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('assets/img/lv.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">PHP Framework</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="">See more about Laravel</a></h3>
                <p class="card-description">
                  Laravel is a free, open-source PHP web application framework. It is designed for building web applications following the Model-View-Controller (MVC) architectural pattern.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('assets/img/b6.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Sophia Green</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 36 min
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
@endsection
