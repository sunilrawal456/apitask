 <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" ></div>
              </div>
            <!--logo start-->
           
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                  
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                   
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                	<ul class="nav pull-right top-menu">
                        <button class="btn-btn-primary" style="margin-top: 10px;">Logout</button>
                	</ul>
                </form>

            </div>
        </header>
      <!--header end-->