<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="#" class="current">Grid Layout</a> 
    </div>
    <h1><?php echo isset($title) ? $title : "";?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <?php $this->view($view);?>
    <!--<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Full Width <code>class=Span12</code></h5>
          </div>
          <div class="widget-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
        </div>
      </div>
    </div>-->
  </div>
</div>