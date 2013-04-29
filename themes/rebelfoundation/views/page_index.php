<ion:partial view="header" />


<div class="row">
 <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-2 columnsheader ">
       <img src="<ion:theme_url />assets/images/lecteur.png" alt="" width="200" height="162" />
      
    </div>
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-8 columns">
      <!-- Feed Entry -->
	  <ion:page>
                <ion:articles type="">
      <div class="row">
       
        <div class="large-12 columns">
                        <ion:article>
                            <ion:title tag="h2" class="dotted-title hcenter" />
                            <ion:content />

                        </ion:article>
        </div>
      </div>
		
      <!-- End Feed Entry -->
 
      <hr />
		</ion:articles>
     </ion:page>
     
    
 
    </div>
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-2 columnsheader hide-for-small">

     <img src="<ion:theme_url />assets/images/parcourir.png" alt="" width="200" height="162" />
	<div class="panel">
        <img id="u218_img" src="<ion:theme_url />assets/images/bouton_parcourir.png" alt="" width="179" height="61">
     
    </div>
    </aside>
 
  </div>
  


<ion:partial view="footer" />
