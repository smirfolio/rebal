<ion:partial view="header" />

 <div class="row">
 <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 columns ">
      <div class="panel">
        <a href="#"><img src="http://placehold.it/300x240&text=[img]" /></a>
        <h5><a href="#">Your Name</a></h5>
          <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
          <section class="section">
            <h5 class="title"><a href="#">Section 1</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="#">Section 2</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="#">Section 3</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="#">Section 4</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="#">Section 5</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="#">Section 6</a></h5>
          </section>
        </div>
 
      </div>
    </div>
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-6 columns">
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
		
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
 
 
          <h6>2 Comments</h6>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
 
 
          <h6>2 Comments</h6>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
 
    </div>
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-3 columns hide-for-small">
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
    </aside>
 
  </div>
  
	<!-- Page : Current | Medias From Current Page -->
	<div class="container">

		<!-- Page title -->
        <ion:page:title tag="h1"/>

        <!-- Page's subtitle -->
        <ion:page:subtitle tag="h2"/>


        <!-- Page : Current -->
		<ion:page>

			<div class="row">
				<div calss="span12">
					<ion:articles type="">
						<ion:article>
                            <div class="span3">
							<ion:title tag="h3" />
							<ion:content helper="text:word_limiter:20" />
							</div>
						</ion:article>
					</ion:articles>

                </div>
            </div>

		</ion:page>

		<!-- Page : Blog | Articles Limit : 3 -->
		<ion:page id="blog">
			<div class="row">
				<div class="span12">
                    <ion:lang key="home_last_post" tag="h2" class="dotted-title" />
				</div>
				<ul class="thumbnails">
					<ion:articles limit="3">
						<li class="span4">
							<ion:article>
								<div class="thumbnail">
									<ion:medias type="picture" limit="1">
										<ion:media size="280,193" method="adaptive">
											<img src="<ion:src />" alt="<ion:alt />" />
										</ion:media>
									</ion:medias>
									<div class="caption">
										<ion:title tag="h3" />
										<ion:content helper="text:word_limiter:10" />
										<p class="right"><a href="<ion:url />" title="<ion:title />" class="btn"><ion:lang key="button_read_more" /></a></p>
									</div>
								</div>
							</ion:article>
						</li>
					</ion:articles>
				</ul>
			</div>
		</ion:page>

	</div>

<ion:partial view="footer" />
