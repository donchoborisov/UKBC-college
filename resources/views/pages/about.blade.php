@extends('layouts.default')

@section('content')
  <!-- banner start -->
  <section>
    <div class="container-fluid">
       
        <div class="row banner-about justify-content-center align-items-center banner-heading "  style="height: 50vh;">
            <div class="col-sm-10 text-right">
                <h1 class="display-3 text-capitalize banner-heading "><span class="text-warning banner-s  ">{!!$page1->title!!}</span></h1>
                    
                    
                  
            </div>

        </div>
    </div>

  
  </section>
  {{ Breadcrumbs::render('about') }}

   <!-- nammer end -->




  {!!$page1->body!!}}





 




    <!---about us start-->
     {{-- <section class="bg-light p-7 ">
       <div class="container-fluid">
        
           <!-- <div class="row">
              <div class="col text-left mb-3">
                  <h1 class="text-warning display-4 mt-2">About US</h1>
                 
              </div>
           </div> -->
     
          <div class="row text-center text-secondary font-weight-bold">
              <div class="col-lg-10 col-sm-10 mx-auto border-bottom mt-3 mb-3 ">
              
                
                 <p class="text-muted text-left"><span class="text-warning display-3 fa-link-about">If</span> you are looking for an exclusive learning experience matched with high quality teaching and state-of-the-art facilities, then you have come to the right place. UK BUSINESS COLLEGE caters for the academic needs of students from all over the world from different social and ethnic backgrounds.</p>

                 <p class="text-muted text-left">UKBC is strongly committed towards academic excellence and professional growth. We aim to provide the best environment possible for teaching and learning.</p>
                  
                 <p class="text-muted text-left"> We offer a variety of courses and provide a lively and caring environment. You will be valued as a person, encouraged to value others and to respond positively to high quality teaching. The quality of our staff and resources make the college an exciting and enjoyable place in which to learn.</p>
                  
                 <p class="text-muted text-left">If you choose to study with us, you can be assured that we are committed to enable you to move on to the world of employment or Higher Education with the confidence and self-assurance to succeed. This gives you an opportunity to achieve your full potential.</p>                   
                  
              </div>

            </div>

            <div class="row text-left text-secondary font-weight-bold">
              <div class="col-lg-10 col-sm-10 mx-auto border-bottom mt-3 mb-3 ">
                <div class="shadow-sm bg-info p-1 rounded mb-3">
                <h1 class="text-warning  "> At UKBC we strive to:</h1>
              </div>
                <p class="text-info">Provide internationally recognised and comprehensive high-quality education to the students. Cater to the cravings of international community thriving for quality education across borders.</p>
                <ul class="list-unstyled">
                  <li>
                      <p><i class="fas fa-atom"></i> Provide up-to-date curriculum and teaching methods appropriate to meet students needs which are consistent with the goals of life-long learning, ethics and leadership.</p>
                  </li>
                  <li>
                      <p><i class="fas fa-atom"></i> Achieve this within an environment which is intellectually stimulating for both staff and students.</p>
                  </li>
                  <li>
                    <p><i class="fas fa-atom"></i>  Provide an education ensuring value for time and money. </p>
                  </li>
                  <li>
                    <p> <i class="fas fa-atom"></i> Provide the link between industry requirements and academic training. </p>
                  </li>
                  <li >
                    <p class="text-info ">We look forward to welcoming you to UK BUSINESS COLLEGE where ability is transformed into employability</stron></b> </p>
                  </li>
                </ul>
                   
                  
                
                  
              </div>

              <div class="col-lg-10 col-sm-10 mx-auto border-bottom text-left mt-3 mb-3 ">
                <div class="bg-info rounded p-1 shadow-sm mb-3">
                <h1 class="text-warning  font-italic">Principal's Message</h1>
                </div>
                <p >Welcome to UK Business College website. We provide higher education and professional courses. We are welcoming and open to all who seek an excellent education. At UK Business College we believe in the development of the whole person. Each student is encouraged to grow academically, socially, emotionally, spiritually and physically. We are particularly proud of our curriculum and co-curriculum offerings, which cater for the holistic development of each student.</p>
                <p>Our students enjoy a relevant and diverse curriculum taught by professional and dedicated staff. We aim to meet the needs of all learners with both vocational and academic pathways throughout their education years. Additionally, the College offers a wide range of co-curricular offerings including sporting, cultural, community and spiritual activities. It is important that our College be a community in which all students are welcomed, valued and cared for. I believe our College has much to offer. A dedicated and professional staff, a variety of co-curricular activities and a commitment to on-going modernization of facilities and resources contribute to the development of each person’s potential. If you are seeking enrolment, I look forward to meeting you during the enrolment process.</p>
                 <p>I thank you for your interest in our College.</p> 

                 <p class="text-info">College Principal</p>
              </div>


              <div class="col-lg-10 col-sm-10 mx-auto border-bottom text-md-left mt-3 mb-3 ">
                <div class="shadow-sm bg-info p-1 rounded mb-3">
                <h1 class="text-warning  font-italic">QAA Quality Code</h1>
                </div>
                <p>We comply with all aspects of the <span class="text-info">QAA Quality Code</span>. The Quality Assurance Agency (QAA) is one of the most important bodies for ensuring high standards in the British education system. It has produced a Quality Code which covers all aspects of the student experience in higher education. The code can be inspected in full at the QAA website <a class="text-info" href="https://www.qaa.ac.uk/quality-code#" target="_blank" rel="noopener">UK QUALITY CODE FOR HIGHER EDUCATION</a></p>
                
              </div>

            </div>

        </div>
      

     </section>  --}}






  
@stop