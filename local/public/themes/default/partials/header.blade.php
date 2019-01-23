<!-- start topBar -->
       <div class="middleBar">
           <div class="container">
               <div class="row display-table">
                   <div class="col-sm-3 vertical-align text-left hidden-xs">
                       <a href="{{ URL::to('/')}}">
                           <h1 style="color:#2F57AF">Metalbaba</h1>
                       </a>
                   </div><!-- end col -->
                   <div class="col-sm-9 vertical-align text-center">
                       <form>
                           <div class="row grid-space-1">
                               <div class="col-sm-3">


                                 <div class="btn-group dropdown dropdown-select" style="width: 218px">

                                  <button class="form-control btn btn-default dropdown-toggle ajitems" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-th-large ng-scope" aria-hidden="true" ></i>SELECT <span class="caret"></span>

                                   </button>


                                   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/product-list')}}">PRODUCT</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/seller-list')}}">SUPPLIERS</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/enquiry-buylead-list')}}">BUY LEADS</a></li>

                                  </ul>


                                  </div>
                               </div><!-- end col -->
                               <div class="col-sm-5">
                                   <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                               </div><!-- end col -->
                               <div class="col-sm-4">
                                  <!-- need to code  -->
                                  code pending
                                  <!-- need to code  -->
                               </div><!-- end col -->
                           </div><!-- end row -->
                       </form>
                   </div><!-- end col -->
                   <!-- <div class="col-sm-2 vertical-align header-items hidden-xs">
                       <div class="header-item mr-5">
                           <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Buy Leads">
                             <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                               <sub>32</sub>
                           </a>
                       </div>
                       <div class="header-item">
                           <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Notifications">
                             <i class="fa fa-bell" aria-hidden="true"></i>
                               <sub>10</sub>
                           </a>
                       </div>
                   </div> -->
                   <!-- end col -->
               </div><!-- end  row -->
           </div><!-- end container -->
       </div><!-- end middleBar -->

       <!-- start navbar -->
       <div class="navbar yamm navbar-default">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a href="javascript:void(0);" class="navbar-brand visible-xs">
                         <h1 style="color:#2F57AF">Metalbaba</h1>
                   </a>
               </div>
               <div id="navbar-collapse-3" class="navbar-collapse collapse">

                 dd
               </div><!-- end navbar collapse -->
           </div><!-- end container -->
       </div><!-- end navbar -->
