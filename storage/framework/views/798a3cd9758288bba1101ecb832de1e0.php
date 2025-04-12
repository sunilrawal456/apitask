
<?php echo $__env->yieldContent('css'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Task</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(URL::asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo e(URL::asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/zabuto_calendar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('js/gritter/css/jquery.gritter.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('lineicons/style.css')); ?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/style-responsive.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(URL::asset('js/chart-master/Chart.js')); ?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
        <?php echo $__env->make('template.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
         <?php echo $__env->make('template.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php echo $__env->yieldContent('content'); ?>
      <!--main content end-->
      <!--footer start-->
       <?php echo $__env->make('template.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery-1.8.3.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo e(URL::asset('js/jquery.dcjqaccordion.2.7.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::asset('js/jquery.sparkline.js')); ?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo e(URL::asset('js/common-scripts.js')); ?>"></script>
    
    <script type="text/javascript" src="<?php echo e(URL::asset('js/gritter/js/jquery.gritter.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/gritter-conf.js')); ?>"></script>

    <!--script for this page-->
    <script src="<?php echo e(URL::asset('js/sparkline-chart.js')); ?>"></script>    
	<script src="<?php echo e(URL::asset('js/zabuto_calendar.js')); ?>"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>

<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/template/layout/app.blade.php ENDPATH**/ ?>