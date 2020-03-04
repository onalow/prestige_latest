@extends('layouts.site.app')
@section('content')
<div id="main" style="padding:0;">


	<section class="section hero" style="height: 100%">
		{{-- <canvas id="clx-banner-canvas1"></canvas> --}}
		<div class="backgrounds" style="padding-right: 0;">
			<canvas id="map" style="padding-right: 0;"></canvas>

		</div>
		<div class="container h-100 content-top">



			<div class="row">
				<div class="col-lg-6  text-center" style="padding-top:15px;">
					<div class="contact d-flex justify-content-center align-items-center">
						<div class="rotating"></div>
						<div class="rotating two"></div>
						<div>
							<h2 id="txt" style="display: block;height: 200px; padding-top: 20px; font-weight: 600;">
								<span id="headerTitleText"></span></h2>
								<h2 class="mb-5" style="font-size: 20px; font-weight: 900;">Never a better time than now!</h2>
								@guest
								<a href="/register"> <button class="btn btn-lg btn-icon btn-danger mx-auto text-uppercase" >Sign Up
									<i class="fas fa-arrow-circle-right"></i></button></a>
									@else
									<a href="/home"> <button class="btn btn-lg btn-icon btn-danger mx-auto text-uppercase" >Dashboard
										<i class="fas fa-arrow-circle-right"></i></button></a>
										@endguest

									</div>
								</div>
							</div>

					{{-- 		<div class="col">
					</div> --}}

					<div class="col-lg-6" style="padding-top:30px;">


						{{-- CALCULATOR --}}
						<div class="form-container" style="padding: 5px 15px 40px 15px;" id="calc">
							<div class="heading row justify-content-between align-items-center animated fadeIn text-center">
									{{-- <div class="col-md-12">
										<p>Your investment with a daily profit from </p>
									</div> --}}
									<div class="col-md-12 text-center">
										<h4>Our Investment profit calculator</h4>
									</div>
								</div>
								<form class="box animated zoomIn" action="/login">
									<div class="calculator">
										<div class="row justify-content-between align-items-center text-center">
											<div class="col-md-12 col-sm-12">
												<p class="mb-0 text-uppercase">currency  ($)</p>
											</div>

										</div>
										<div class="amount d-flex justify-content-between align-items-center">
											<span><p class="small mb-0 text-uppercase">amount</p></span><span>
												<input onkeyup="calculate()" type="text" id="calculatorAmount" value="500"></span><span><p class="mb-0" data-currency-symbol="" >USD</p></span>
											</div>
											<div class="row"><div class="col-sm-6">
												<div class="profit">
													<p class="mb-0 text-uppercase">daily profit &nbsp;</p>
													{{-- <p class="mb-0 text-uppercase">&nbsp;</p> --}}
													{{-- <input type="hidden" id="dailyProfit" value="1.49"> --}}
													
													<h2 id="dailyProfit">10.0</h2>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="profit">
													<p class="mb-0 text-uppercase">TOTAL PROFIT FOR <strong>ONE</strong> INDENTURE DURATION</p>
													<h2 id="totalProfit">210.0</h2>
												</div>
											</div>
										</div>
									</div>
								</form>

							</div>
							{{-- CALCULATOR --}}



						</div>
					</div>


					<div class="row align-items-center trigger-animation">
						<div class="col-md-6">

							<p class="mt-4 mb-4" style="margin-top: 0px; font-size: 15px; font-weight: 700;">Prestige Investment Services has achieved Trust and consistent growth by sequentially highlighting and ameliorating all possible errors in any Of it’s Client’s Investment</p>
							<a class="linkc" href="/register">Join Us today <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				{{-- <div class="curved_border"></div> --}}
			</section>

			<section class="section pb-0 pt-0 watermark-chart" style="margin-top: -700px;">
				<div class="container " style="margin-top:700px;">

{{-- 					<div class="row" >
						<div class="col-md-8 col-sm-12 mx-auto text-center trigger-animation">
							<div class="title animated zoomIn">
								<h2>
									<span class="d-block">Advantages of working with us</span>
								</h2>
								<hr>
								<p >
									Prestige Investment Services specialises in cryptocurrency investment. We actively manage a diversified portfolio, consisting of more than fifty different types of these digital tokens. There is a great variety of cryptocurrencies, each developed for different purposes, based on different fundamentals. PrestigeInvestment Services thoroughly analyses those fundamentals and invests in cryptocurrencies that have a promising value proposition, providing utility to its users.
								</p>
							</div>
						</div>
					</div> --}}

					<div class="trigger-animation">					
						<div class="row" style="margin-top:50px;">
							<div class="col-md-8 col-sm-12 mx-auto text-center">
								<div class="title animated zoomIn ">
									<h2 style="margin-bottom: 10px;">
										<span class="d-block">Why Investors prefer working with us</span>
									</h2>
									<hr style="margin-top: 0;">
								</div>
							</div>
						</div>

						<div class="row trigger-animation" style="margin-top:20px;">
							{{-- class="has-animation" data-animation="flipInY" --}}
							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img  src="{{asset ("css/bundles/frontend/images/expertise.svg")}}" 
									style="height: 80px; width: 80px;" >
								</div>
								<h4 style="margin-top: -15px;">Expertise</h4> 
								<p style="text-align: justify;">Having an international world class team of professionals with in-depth market and sector knowledge puts us in an excellent position to manage your Investment. Our efforts result in solid returns for our investors.	</p>
							</div>

							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img  src="{{asset ("css/bundles/frontend/images/protection.svg")}}" 
									style="height: 80px; width: 80px;" >
								</div>
								<h4 style="margin-top: -15px;">Risk management</h4> 
								<p style="text-align: justify;">Helping investors net the highest returns, with the lowest risk, requiring the minimum effort, all in one easy to use suite with intuitive reporting.</p>
							</div>
							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									{{-- <i class="fa fa-phone" aria-hidden="true" style="height: 80px; width: 80px;" ></i> --}}
									<img  src="{{asset ("css/bundles/frontend/images/communication.svg")}}" 
									style="height: 80px; width: 80px;" >
								</div>
								<h4 style="margin-top: -15px;">Communication</h4> 
								<p style="text-align: justify;">Our client’s relationship with us goes far beyond investing their assets. It’s about creating true value for our clients. We are committed to understanding them, and their financial needs, their risk tolerance, and their time horizon.Tightly integrated in our platform is a support and messaging system to facilitate communication between investors and the Company.</p>
							</div>

							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img src="{{asset ("css/bundles/frontend/images/automated.svg")}}" 
									style="height: 80px; width: 80px;">
								</div>
								<h4 style="margin-top: -15px;">Automated system</h4> 
								<p style="text-align: justify;">We operate with a completely automated payment system(deposits and withdrawals).This has enabled us avoid delay in any of our transactions.
								</p>
							</div>

							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img src="{{asset ("css/bundles/frontend/images/diversification.svg")}}" 
									style="height: 100px; width: 100px;">
								</div>							
								<h4 style="margin-top: -15px;">Diversification</h4> 
								<p style="text-align: justify;">We use professional strategies in managing a diversified portfolio and optimizing the risk reward ratio of any investment.
								</p>

							</div>	

							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img src="{{asset ("css/bundles/frontend/images/security.svg")}}" 
									style="height: 80px; width: 80px;">
								</div>
								<h4 style="margin-top: -15px;">Security</h4> 
								<p style="text-align: justify;">We use the best encryption software possible for all financial information, including COMODO EV SSL(Extended Validation SSL) encryption,HTTPS secure web protocols,trusted DDoS Protection and mitigation provider.
								</p>
							</div>

							<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
								<div style="padding-left: 40px;">
									<img src="{{asset ("css/bundles/frontend/images/growth.svg")}}" 
									style="height: 100px; width: 100px;"> 
								</div>

								<h4 style="margin-top: -15px;">Growth</h4> 
								<p style="text-align: justify;">Innovative developments are moving extremely fast and are constantly gaining more traction.We honor our Investors who take steps in sharing their awesome experience with us and also steps leading the Company to a global position with good referral commissions.
								</p>
							</div>
					{{-- 	<div class="col-sm-4 text-center" style="margin-bottom: 25px;">
							<div style="padding-left: 40px;">
								<img src="{{asset ("css/bundles/frontend/images/protection.svg")}}" 
								style="height: 100px; width: 100px;">
							</div>
							
							<h4 style="margin-top: -15px;">Protection</h4> 
							<p style="text-align: justify;"> During times of economic crisis and uncertainty cryptocurrencies tend to thrive. As an independent store of value cryptocurrencies can act as a good hedge against fiat currency devaluation.
							</p>
						</div> --}}

					{{-- 	<div class="col-sm-4 text-center" style="margin-bottom: 25px;">

							<div style="padding-left: 40px;">
								<img class="d-block mx-auto"  src="{{asset ("css/bundles/frontend/images/transparency.svg")}}" 
								style="height: 80px; width: 80px;">
							</div>
							<h4 style="margin-top: -15px;">Transparency</h4> 
							<p style="text-align: justify;"> The client and financial administration is executed by our partner SGG Group, constantly monitoring all financial movements and total solvency of our crypto portfolio.
							</p>
						</div>	 --}}

					</div>
				</div>
			</section>
			<section class="section blue-bg video trigger-animation watermark"  style="padding-top:25px;">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 mx-auto">
							<div class="box" data-animation="fadeInLeft">
								<div class="plyr__video-embed" id="player" 
								style="	
								position: relative;
								padding-bottom: 56.25%; /* 16:9 */
								padding-top: 25px;
								height: 0;">
								<video style="
								position: absolute;
								top: 0;
								left: 0;
								width: 100%;
								height: 100%;
								" src="{{asset ("css/bundles/frontend/images/pis.mp4")}}" allowfullscreen allowtransparency controls></video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
{{-- 		<section class="section blue-bg video trigger-animation watermark"  style="padding-top:25px;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 mx-auto">
						<div class="box" data-animation="fadeInLeft">
							<div class="plyr__video-embed" id="player" 
							style="	
							position: relative;
							padding-bottom: 56.25%; /* 16:9 */
							padding-top: 25px;
							height: 0;">
							<iframe style="
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							" src="https://www.youtube.com/embed/gzb4-HgS480" allowfullscreen allowtransparency allow="0" controls="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}


	<section class="section trigger-animation watermark" style="padding-top:10px;">

		<div class="title text-center trigger-animation" style="margin-top: 0">
			<h2>Statistics</h2>
			<hr>
		</div>
		<div class="statistics-list-container" style="margin-bottom: 80px; padding-top:5px;">
			<div class="container">
				<ul class="list-unstyled statistics-list clearfix">
					<li class="has-animation" data-animation="flipInY">
						<span class="dot"></span>
						<div class="content">
							<i class="fa fa-area-chart"></i>
							<h3>$220M+</h3>
							<p>Invested</p>
						</div>
					</li>
					<li class="has-animation" data-animation="flipInY" data-delay="200">
						<span class="dot"></span>
						<div class="content">
							<i class="fa fa-area-chart"></i>
							<h3>160k+</h3>
							<p>Total Users</p>
						</div>
					</li>
					<li class="has-animation" data-animation="flipInY" data-delay="400">
						<span class="dot"></span>
						<div class="content">
							<i class="fa fa-area-chart"></i>
							<h3>190k+</h3>
							<p>Packages</p>
						</div>
					</li>
					<li class="has-animation" data-animation="flipInY" data-delay="600">
						<span class="dot"></span>
						<div class="content">
							<i class="fa fa-area-chart"></i>
							<h3>70k+</h3>
							<p>Followers</p>
							<footer style="margin-top: 20px;">
								<br>
								{{-- <a target="_blank" href="https://www.instagram.com/prestigeinvestmentservices"><strong>Join Group</strong></a> --}}
								<a  href="/login"><strong>Join Group</strong></a>
								|
								{{-- <a target="_blank" href="https://www.instagram.com/prestigeinvestmentservices/"><strong>Visit Page</strong></a> --}}
								<a  href="/login"><strong>Visit Page</strong></a>
							</footer>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 mx-auto text-center">
					<div class="title">
{{-- 							<h2>Statistics</h2>
	<hr> --}}
	{{-- 	<p style="font-size: 20px;">PIS has helped many of our happy customers earn daily profits even in the worst periods of cryptocurrency waves</p> --}}
	<br>

	<div class="tradingview-widget-container">
		<div class="tradingview-widget-container__widget"></div>
		<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"></a></div><a href="https://www.tradingview.com" rel="noopener" target="_blank">
			<div style="width: 95%; height: 72px;"><style>
				.tradingview-widget-copyright {
					font-size: 13px !important;
					line-height: 32px !important;
					text-align: center !important;
					vertical-align: middle !important;
					font-family: 'Trebuchet MS', Tahoma, Arial, sans-serif !important;
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright .blue-text {
					color: #3bb3e4 !important;
				}

				.tradingview-widget-copyright a {
					text-decoration: none !important;
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright a:visited {
					color: #9db2bd !important;
				}

				.tradingview-widget-copyright a:hover .blue-text {
					color: #38acdb !important;
				}

				.tradingview-widget-copyright a:active .blue-text {
					color: #299dcd !important;
				}

				.tradingview-widget-copyright a:visited .blue-text {
					color: #3bb3e4 !important;
				}
			</style><iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/tickerswidgetembed/?locale=en#%7B%22symbols%22%3A%5B%7B%22title%22%3A%22S%26P%20500%22%2C%22proName%22%3A%22INDEX%3ASPX%22%7D%2C%7B%22title%22%3A%22Nasdaq%20100%22%2C%22proName%22%3A%22INDEX%3AIUXX%22%7D%2C%7B%22title%22%3A%22EUR%2FUSD%22%2C%22proName%22%3A%22FX_IDC%3AEURUSD%22%7D%2C%7B%22title%22%3A%22BTC%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3ABTCUSD%22%7D%2C%7B%22title%22%3A%22ETH%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AETHUSD%22%7D%5D%2C%22width%22%3A%22100%25%22%2C%22height%22%3A72%2C%22utm_source%22%3A%22harveytrades.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D" style="box-sizing: border-box; height: 72px; width: 100%;"></iframe>
		</div></a>
	</div>
	<!-- TradingView Widget END -->

	<!-- TradingView Widget BEGIN -->
{{-- 	<div class="row">
		<div class="col-sm-11 mx-auto">	
			<div class="tradingview-widget-container">
				<div class="tradingview-widget-container__widget"></div>
				<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
				<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
					{
						"width": "100%",
						"height": 600,
						"defaultColumn": "overview",
						"screener_type": "crypto_mkt",
						"displayCurrency": "USD",
						"locale": "en"
					}
				</script>
			</div>
		</div>
	</div> --}}
	<!-- TradingView Widget END -->
	{{-- chart --}}
	<!-- TradingView Widget BEGIN -->
	<br> <br>
	<div class="row">
		<div class="col-sm-11 mx-auto">
			<div class="tradingview-widget-container">
				<div id="tradingview_26a08"></div>
				<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL chart</span></a> by TradingView</div>
				<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
				<script type="text/javascript">
					new TradingView.widget(
					{
						"width": "100%",
						"height": 320,
						"symbol": "NASDAQ:AAPL",
						"interval": "D",
						"timezone": "Etc/UTC",
						"theme": "Light",
						"style": "1",
						"locale": "en",
						"toolbar_bg": "#f1f3f6",
						"enable_publishing": false,
						"allow_symbol_change": true,
						"container_id": "tradingview_26a08"
					}
					);
				</script>
			</div>
		</div>
	</div>
	{{-- end chart --}}

	<br> <br>
	{{-- new chart --}}
	<!-- TradingView Widget BEGIN -->
	<div class="tradingview-widget-container mx-auto d-block">
		<div class="tradingview-widget-container__widget"></div>
		<div class="tradingview-widget-copyright">
			<a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Forex Rates</span></a> by TradingView</div>
			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
				{
					"width": "100%",
					"height": 320,
					"currencies": [
					"EUR",
					"USD",
					"JPY",
					"GBP",
					"CHF",
					"AUD",
					"CAD",
					"NZD",
					"CNY",
					"TRY",
					"SEK",
					"NOK",
					"DKK",
					"ZAR",
					"HKD",
					"SGD",
					"THB",
					"MXN",
					"IDR",
					"KRW",
					"PLN",
					"ISK",
					"KWD",
					"PHP",
					"MYR",
					"INR",
					"TWD",
					"SAR",
					"RUB",
					"ILS"
					],
					"locale": "en"
				}
			</script>
		</div>
		<!-- TradingView Widget END -->
	</div>
</div>
</div>
</div>

</section>
{{-- <section class="section cta">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 mx-auto text-center">
				<h2 class="mb-5" style="display: block;height: 100px"><span id="justStepsAway"></span></h2>
				<a class="btn btn-lg btn-icon btn-primary mx-auto text-uppercase" href="#calc">
					See a profit simulation here <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
	</div>
</section> --}}

<section class="section" style="padding-top: 0; margin-top: 0; padding-bottom: 20px;">
	{{-- <img src="{{asset ("css/bundles/frontend/images/watermark.jpeg")}}" class="watermark"> --}}
	<div class="container-fluid">
		<div class="row">
			<div class="her col-sm-12" style="padding: 0;">	
				<img id="travel" src="{{asset ("css/bundles/frontend/images/travel.jpeg")}}" alt="Snow" style="width:100%;">
				<div class="centered">Be among the first 50 Investors on the NFP plan for November</div>

			</div>

		</div>

	</div>

	<div class="container-fluid ">
		{{-- <div style="background-image: url('css/bundles/frontend/images/wines.jpeg')">GFUNS TESTING</div> --}}
		<div class="row text-center">		
			<div class="col-11 mx-auto" style="margin-top: 20px; ">	

				<p style="font-size: 20px;">Prestige Investment Services will be sponsoring completely, first 50 of Her Investors on the NFP plans for November on a trip to <b>BERLIN BLOCKCHAIN FOR SCIENCE.</b><br>
				This includes Hotel reservations and dining.</p>

				{{-- <p style="font-size: 20px;"><b>Get new intelligence on:</b></p> --}}
				<p style="font-size: 20px;">The emerging cryptoeconomy for Science Blockchain as a mean to perform high value transactions is the perfect backend to revolutionize money flow in science, make it more effective, streamlined and reduce the organizational overhead.</p>
				<p style="font-size: 20px;">Blockchain and the token economy can create unforseen economies and allows realization of novel value propositions. Reward structures for early adopters could make revolutionary approaches and ideas fly faster and higher than today, hopefully overcoming the first mover dilemma and potentially the innovators dilemma.</p>
				
				<p style="font-size: 20px;">Drive your financial services into the future with new blockchain technologies!
</p>

				<p>Theme: <strong>Blockchain For Science 2019</strong> <br>
					Venue: <strong>Kreuzberg, Berlin, Germany</strong><br>
					Date: <strong>04 Nov 2019 - 05 Nov 2019</strong><br>
					Further information will be relayed to these first 50 investors. <br>
					<strong>All payments must be made on or before 25th October.</strong>
				</p>	
			</div>
		</div>
	</div>
</section>
{{-- <section class="section blue-bg video trigger-animation" style="padding-top:10px;">

	<div class="container">
		<div class="row">
			@isset($videos)
			@foreach ($videos as $video)
			<div class="col-sm-4 mx-auto">
				<div class="box " data-animation="fadeInLeft">
					<div class="plyr__video-embed" id="player" 
					style="	
					position: relative;
					padding-bottom: 56.25%; /* 16:9 */
					padding-top: 25px;
					height: 0;">
					<iframe style="
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					" src="{{$video->url}}" allowfullscreen allowtransparency allow=""></iframe>
				</div>
			</div>
			<h5 class="text-center" style="margin-top:15px;">{{$video->description}}</h5>
			<p> <i>Posted By: {{$video->user->username}}</i></p>
		</div>
		@endforeach
		@endisset


	</div>
</div>
</section> --}}

<section class="section" style=" padding-bottom: -40px !important;">

	<div id="carouselExampleIndicators" data-interval="8000" class="carousel slide" data-ride="carousel" style="border: none;" >
	{{-- 	<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol> --}}
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-sm-5 mx-auto">
						<div class="card text-center" style="border: none; margin-bottom: 20px;">
							<img class="rounded-circle d-block mx-auto" src="{{asset("css/bundles/frontend/images/helen.jpeg")}}" alt="" style="width: 150px; height: 150px;">
							<h4>Quang and Helen</h4>
							<p class="title">Vietnam</p>
							<p> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>

							<h4 style="font-size: 18px; font-weight: 400; padding-right: 10px; padding-left: 10px;"><strong>“</strong>Started Investing with P.I.S some months ago, met Helen here, a business oriented Lady. We combined Funds and went in for a Larger project, it has been an awesome experience ever since.Thank you P.I.S.<strong>”</strong></h4>
						</div>
					</div>

				</div>
				{{-- <img class="d-block w-100" src="..." alt="Second slide"> --}}
			</div>
			<div class="carousel-item ">
				<div class="row">
					<div class="col-sm-5 mx-auto">
						<div class="card text-center" style="border: none; margin-bottom: 20px;">
							<img class="rounded-circle d-block mx-auto" src="{{asset("css/bundles/frontend/images/tehran.jpeg")}}" alt="" style="width: 150px; height: 150px;">
							<h4>Ehsan</h4>
							<p class="title">Iran</p>
							<p> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>

							<h4 style="font-size: 18px; font-weight: 400; padding-right: 10px; padding-left: 10px;"><strong>“</strong>With over 12 years of experience in investment management(banking and technology sector), I highly recommend Prestige Investment Services. Their Financial engagement has proven to be the best.<strong>”</strong></h4>
						</div>
					</div>

				</div>
			</div>
			<div class="carousel-item ">
				<div class="row">
					<div class="col-sm-5 mx-auto">
						<div class="card text-center" style="border: none; margin-bottom: 20px;">
							<img class="rounded-circle d-block mx-auto" src="{{asset("css/bundles/frontend/images/juan.jpeg")}}" alt="" style="width: 150px; height: 150px;">
							<h4>Juan Diego</h4>
							<p class="title">Venezuela</p>
							<p> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>

							<h4 style="font-size: 18px; font-weight: 400; padding-right: 10px; padding-left: 10px;"><strong>“</strong>I want to say a big thank you to Prestige Investment Services, the result I got from the NFP2 plan is a Testimony and I’ll sing it wherever I go, more business to come with this Team.<strong>”</strong></h4>
						</div>
					</div>

				</div>
			</div>
			<div class="carousel-item ">
				<div class="row">
					<div class="col-sm-5 mx-auto">
						<div class="card text-center" style="border: none; margin-bottom: 20px;">
							<img class="rounded-circle d-block mx-auto" src="{{asset("css/bundles/frontend/images/wines.jpeg")}}" alt="" style="width: 150px; height: 150px;">
							<h4>Mandiba Wines</h4>
							<p class="title">Italy</p>
							<p> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>

							<h4 style="font-size: 18px; font-weight: 400; padding-right: 10px; padding-left: 10px;"><strong>“</strong>Representing the management of the company, we thank God for our Investment with Prestige Investment Services,The Non-Farm Payroll(NFP) plans has helped with transitioning the company from waterfall to  Agile methodology,creating quality frameworks and branching strategies,we intend making our investments stronger.Thank you P.I.S.<strong>”</strong></h4>
						</div>
					</div>

				</div>
			</div>

			<div class="carousel-item">
				<div class="row">
					<div class="col-sm-5 mx-auto">
						<div class="card text-center" style="border: none; margin-bottom: 20px;">
							<img class="rounded-circle d-block mx-auto" src="{{asset("css/bundles/frontend/images/halabi.jpeg")}}" alt="" style="width: 150px; height: 150px;">
							<h4>Nicoletta Halabi</h4>
							<p class="title">Qatar</p>
							<p> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>

							<h4 style="font-size: 18px; font-weight: 400; padding-right: 10px; padding-left: 10px;"><strong>“</strong>Thank you so much P.I.S for your Loan,it has played a crucial role in some great corporate achievements as the Head of the Engineering department in my firm with over 150 employees.I am grateful.<strong>”</strong></h4>
							

							{{-- <p><button>Contact</button></p> --}}
						</div>
					</div>

				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<i class="fa fa-angle-left" style="font-size:48px;color:black;"></i>
			{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
			<span class="sr-only">Previous</span>
		</a>
		<a style="color: black" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<i class="fa fa-angle-right" style="font-size:48px;color:black;"></i>
			{{-- <i class="fa fa-angle-right"></i> --}}
			{{-- <span  style="color: black" class="carousel-control-next-icon" aria-hidden="true"></span> --}}
			<span style="color: black"  class="sr-only">Next</span>
		</a>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-12 mx-auto text-center">
			<div class="title">
				<h2>
					<span class="d-block">Strategic partners</span>
				</h2>
				<hr>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-12 mx-auto text-center">
				<ul class="list-unstyled exchange-list d-flex justify-content-center">
					<li><img src="{{asset("css/bundles/frontend/images/bloomberg.jpg")}}">
					</li>
					<li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/bitfinex.png")}}">
					</li>

					<li><img src="{{asset("css/bundles/frontend/images/fd.png")}}">
					</li>

					<li><img src="{{asset("css/bundles/frontend/images/binsider.png")}}">
					</li>
				</ul>
				<ul class="list-unstyled exchange-list d-flex justify-content-center">
					{{-- <li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/binance.png")}}">
					</li> --}}
					<li><img src="{{asset("css/bundles/frontend/images/dft.png")}}">
					</li>
					<li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/bittrex.png")}}">
					</li>

				</ul>
			</div>
		</div>
	</div>
</section>
</div>
</div>
</div>
</div>
</div>



<div class="mapouter d-block mx-auto" style="margin:0;">
	<div class="gmap_canvas">
		<iframe width="100%" height="210" id="gmap_canvas" src="https://maps.google.com/maps?q=130%20Kendemere%20Pointe%2C%20Roswell%2C%20GA%2030075&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			
		</iframe>
		<a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
	</div>
	<style>.mapouter{text-align:right;height:210px;width:100%;}
	.gmap_canvas {overflow:hidden;background:none!important;height:210px;width:100%;}
</style>
</div>

<script >

	function calculate()
	{
		calculatorAmount = document.getElementById("calculatorAmount").value;
			// n = document.getElementById("n").value;
			// r = document.getElementById("r").value;
			dailyProfit = document.getElementById("dailyProfit");
			totalProfit = document.getElementById("totalProfit");
			if(calculatorAmount >= 500 && calculatorAmount <=5000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.10/5)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.10/5 )* 21).toFixed(1);
			}
			else if(calculatorAmount >= 5100 && calculatorAmount <=20000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.135/5)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.135/5 ) * 30).toFixed(1);
			}
			else if(calculatorAmount >= 20100 && calculatorAmount <=50000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.30/10)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.30/10 )* 45).toFixed(1);
			}
			else if(calculatorAmount >= 50100 && calculatorAmount <=150000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.35/10)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.35/10 )* 45).toFixed(1);
			}
			else if(calculatorAmount >= 150100 && calculatorAmount <=300000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.50/15)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.50/15 )* 60).toFixed(1);
			}
			else if(calculatorAmount >= 300100 && calculatorAmount <=500000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.74/20)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.74/20 )* 60).toFixed(1);
			}			
			else if(calculatorAmount >= 500100 && calculatorAmount <=1000000){
				dailyProfit.innerHTML = parseFloat(calculatorAmount * (0.80/20)).toFixed(1);
				totalProfit.innerHTML = parseFloat(calculatorAmount * (0.80/20 )* 84).toFixed(1);
			}else {

			}

		}

	</script>

	@endsection
