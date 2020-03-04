@extends('layouts.site.app')
@section('content')
<div id="main">
    <section class="section hero sub">
        <div class="container content-top">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1><span class="d-block">Meet Our Team</span></h1>
                </div>
            </div>
        </div>
        <div class="curved_border"></div>
    </section>
    <section class="section pt-0">
        <div class="container">
            <ul class="team_founders list-unstyled">
                <li>
                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/5_1.png")}}">
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <div class="_content">
                                <div class="title left">
                                    <h2>Robert Alexander</h2>
                                    <p>CEO & Founder</p>
                                    <hr>
                                </div>
                            {{--     <p> <h3>CEO with a vision - Ready to revolutionize the world!</h3><br>
                                    With over 35 years of experience in the bank industry, Robert Alexander is now one of the biggest cryptocurrency enthusiasts whose biggest goal is to connect the world and give everyone the same possibility to generate a stable income.
                                    <br /><br />
                                    Robert grew up in very poor conditions. From the beginning he was very ambitious to reach financial freedom for him and his family. His older brother noticed that early and supported him financially by working on construction sites so Robert can put all his effort into education. All this assistance made him more dedicated to give everything back in the near future!
                                    <br /><br />
                                    After school Robert has graduated university and started working in the asset management section of a bank where he met his colleague Julien Petra after 9 years. From the beginning, both got along very well, so that a while later they harmonized like friends. But with the position in this bank Robert hadn´t reached his goal yet! And with his years of experience in financial service institutions he noticed that such businesses cannot give good possibilities to live from! Not for Robert and not for other people! The many disadvantages of such institutes annoyed him, for example ever-decreasing yearly interest rates due to inflation, no anonymity, no possible participation for all groups, e.g. "poorer" countries and so on.
                                    <br /><br />
                                    So he came up with an idea. An idea which shall change the world. An idea which shall give everyone the possibility to generate a passive income from which someone can live from. With this idea he put himself on the opposing side of banks. But before starting this project, he will need assistance. Therefore, next thing Robert did was asking his old friend Julien to help him founding an equalized financial system. Julien rapidly recognized the potential and the many benefits of this idea, so that a while later he joined Robert.
                                    <br /><br />
                                    Both stopped working at the bank in the end of year 2016 and started to work on CryptoLux with a vision! A vision to change the world. A vision with equal earning possibilities. A vision to simply earn money without much effort. A vision where everybody - also people like his family - has the opprtunity to afford luxury. This is CryptoLux!<br><br>
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row order_mobile">
                        <div class="col-lg-9 col-sm-12 _order_2">
                            <div class="_content text-right">
                                <div class="title right">
                                    <h2>Julien Petra</h2>
                                    <p>CFO & Co-Founder</p>
                                    <hr>
                                </div>
                               {{--  <p><h3>The Financial Management in the right hands </h3><br>
                                    Unlike Robert, Julien Petra grew up in very good conditions in London. Being the son of one of the best investment bankers in the UK, it was clear that Julien will also tread that path.
                                    <br /><br />
                                    From an early age, Julien unterstood the business world through his environment. When he was an adolescent, Bruce decided to definitely follow in his father´s footsteps. His goal was to take the position of his father in the company when he will retire!
                                    <br /><br />
                                    Julien has a very high passion for numbers from the beginning and knows how to deal with them. At a young age he started studying in a private school. His father provided him all financial resources so that one day Julien will be better than his role model. At 18 he started studying Economics focusing on Banking and Finance. He has always been very ambitious, so that he started completing internships in England and abroad very early.
                                    <br /><br />
                                    After graduation, Julien started to work in the asset management section of a bank but another one than his father worked in. First he wanted to follow his own path by being promoted in the company on his own and not with help of his father. And it worked very well for him! Only after 6 years he had a position with a high responsibility.
                                    <br /><br />
                                    He worked there over 8 years until his father took the decision of putting Julien in his position because of his high knowledge in this industry. Julien reached his goal much earlier than he thought. He was the executive director of the bank where his father had worked and where he met his colleague Robert Alexander.
                                    <br /><br />
                                    Julien had never thought that he will leave his position after he worked so hard for it. But the idea of CryptoLux has gotten him so convinced that both left the company to work on a whole new type of financial service institution. One in which everyone can participate! And due to the high volatility in the cryptocurrency market he knew that it is possible to offer such services.
                                    <br /><br />
                                    With over $5 Million of investments and over 100k Users at CryptoLux, Julien is very proud of his decisions and proud of being the CFO of CryptoLux Ltd. And the statistics are permanently growing!<br><br> </p>
                                </div> --}}
                            </div>
                            <div class="col-lg-3 col-sm-12 _order_1">
                                <img src="{{asset("css/bundles/homepage/landing/assets/img/team/3_1.png")}}">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 mx-auto text-center">
                        <div class="title mb-lg-5">
                            <h2>Other Professionals</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <ul class="team_boxes list-unstyled row">
                   {{--  <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/9_1.png")}}">
                    </li>
                    <li class="_content la col-lg-3 col-sm-12">
                        <div>
                            <h3>Manish Sengupta</h3>
                            <p>Managing Director</p>
                        </div>
                    </li>
                    <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/14_1.png")}}">
                    </li>
                    <li class="_content la col-lg-3 col-sm-12">
                        <div>
                            <h3>Vanessa Graham</h3>
                            <p>Sales Marketing Manager</p>
                        </div>
                    </li>
                    <li class="_content ra col-lg-3 col-sm-12">
                        <div>
                            <h3>Saranda Piegsa</h3>
                            <p>Head of Marketing and Sales</p>
                        </div>
                    </li>
                    <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/13_1.png")}}">
                    </li>
                    <li class="_content ra col-lg-3 col-sm-12">
                        <div>
                            <h3>Oliver Stone</h3>
                            <p>Software Development Manager</p>
                        </div>
                    </li>
                    <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/2_1.png")}}">
                    </li>
                    <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/4_1.png")}}">
                    </li>
                    <li class="_content la col-lg-3 col-sm-12">
                        <div>
                            <h3>Laquan Sheng</h3>
                            <p>Enterprise Architect Manager</p>
                        </div>
                    </li>
                    <li class="photo col-lg-3 col-sm-12">
                        <img src="{{asset("css/bundles/homepage/landing/assets/img/team/10_1.png")}}">
                    </li>
                    <li class="_content la col-lg-3 col-sm-12">
                        <div>
                            <h3>Jamaal Price</h3>
                            <p>Head of Human Resources</p>
                        </div>
                    </li>
                    <li class="_content ra col-lg-3 col-sm-12">
                        <div>
                           <h3>Kliment Pavlovsky</h3>
                           <p>Research Analyst</p>
                       </div>
                   </li>
                   <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/1_1.png")}}">
                </li>
                <li class="_content ra col-lg-3 col-sm-12">
                    <div>
                        <h3>Jui Lei</h3>
                        <p>Digital Communication Management</p>
                    </div>
                </li>
                <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/6_1.png")}}">
                </li>
                <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/12_1.png")}}">
                </li>
                <li class="_content la col-lg-3 col-sm-12">
                    <div>
                        <h3>Grace Evans</h3>
                        <p>Client Service Coordinator</p>
                    </div>
                </li>
                <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/7_1.png")}}">
                </li>
                <li class="_content la col-lg-3 col-sm-12">
                    <div>
                        <h3>Alfred Steyn</h3>
                        <p>Brand, Content and Campaign Management </p>
                    </div>
                </li>
                <li class="_content ra col-lg-3 col-sm-12">
                    <div>
                        <h3>Marie Peers</h3>
                        <p>Accounting & Controlling</p>
                    </div>
                </li>
                <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/11_1.png")}}">
                </li>
                <li class="_content ra col-lg-3 col-sm-12">
                    <div>
                        <h3>THIS COULD BE YOU!</h3>
                        <p>Apply <a href="">here</a></p>
                    </div>
                </li>
                <li class="photo col-lg-3 col-sm-12">
                    <img src="{{asset("css/bundles/homepage/landing/assets/img/team/question.png")}}">
                </li> --}}
            </ul>
        </div>
    </section>
</div>
@endsection
