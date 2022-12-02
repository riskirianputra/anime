<footer class="footer py-5">
    <div class="container">
    <div class="column one">
        <aside id="text-4" class="widget widget_text"><h4>Follow Us</h4>			
          <div class="textwidget">
            
            <a href="" title="Imagenic" target="_blank" rel="dofollow">            
              <img alt="Imagenic" width="205" height="36" src="../assets/img/mugiwara.png" draggable="true" data-bukket-ext-bukket-draggable="true"></a>
          </div>
		    </aside>
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 textfoot">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by 
              <a style="color: #DAA520;" href="#" class="textfoot" target="_blank">@riskirian__</a>             
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

  <style>
     .textfoot {
    
    text-decoration: none;
    color: #696969!important; 
    font-size: 15px; 
    padding: 15px;  
}
  </style>