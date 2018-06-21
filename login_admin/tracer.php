<?php
	include("header.php");
	include("header-menu.php");
	include("sidebar-kiri.php");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tracer Study
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tracer Study</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >

		<div class="row">
            <div class="col-md-6">  
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Gaji Lulusan Informatika</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="box-body chart-responsive">
				    <div class="chart" id="bar-chart" style="height: 200px;"></div>
				    </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->  
            </div>
            
            
            
            
             <div class="col-md-6">  
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Gaji Lulusan Akuntansi</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="box-body chart-responsive">
				    <div class="chart2" id="bar-chart2" style="height: 200px;"></div>
				    </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->  
            </div>
            
        </div>
	</div>

    </section>
    <!-- /.content -->
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
<script>
	var data = [
		{ y: 'Angkatan 2012', 
			a: 30, 
			b: 55,
			c: 95,
            d: 20
		},
		{ y: 'Angkatan 2013', 
			a: 21, 
			b: 30,
			c: 95,
            d: 100
		}
		
    ],
    config = {
		data: data,
		xkey: 'y',
		ykeys: ['a','b','c','d'],
		labels: ['< 3.000.000 ', '3.000.001 < x < 5.000.000','5.000.0001 < x < 9.000.000.000','> 9.000.001'],
		fillOpacity: 0.6,
		barColors: ["#5b83cb", "#d08b64", "#a0a6b6", "#deb944", "#6b9fd8", "#7bad72", "#456395", "#9a674c", "#747883", "#968245", "#4574aa", "#5a7c61"],
		hideHover: 'true',
		behaveLikeLine: true,
		resize: true,	
		pointFillColors:['#ffffff'],
		pointStrokeColors: ['black'],
		lineColors:['gray','red']
  };
	config.element = 'bar-chart';
	Morris.Bar(config);
  </script>
  <script>
	var data2 = [
		{ y: 'Angkatan 2012', 
			a: 11, 
			b: 33,
			c: 22,
            d: 100
		},
		{ y: 'Angkatan 2013', 
			a: 21, 
			b: 11,
			c: 95,
            d: 11
		}
		
    ],
    config2 = {
		data: data,
		xkey: 'y',
		ykeys: ['a','b','c','d'],
		labels: ['< 3.000.000 ', '3.000.001 < x < 5.000.000','5.000.0001 < x < 9.000.000.000','> 9.000.001'],
		fillOpacity: 0.6,
		barColors: ["#5b83cb", "#d08b64", "#a0a6b6", "#deb944", "#6b9fd8", "#7bad72", "#456395", "#9a674c", "#747883", "#968245", "#4574aa", "#5a7c61"],
		hideHover: 'true',
		behaveLikeLine: true,
		resize: true,	
		pointFillColors:['#ffffff'],
		pointStrokeColors: ['black'],
		lineColors:['gray','red']
  };
	config2.element = 'bar-chart2';
	Morris.Bar(config2);
  </script>
<?php
	include("footer.php");	
?>

