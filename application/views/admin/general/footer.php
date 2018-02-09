<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2018 &copy; Gumen
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Sobre nosotros
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacidad
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->

		<!-- end::Quick Sidebar -->
	    <!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
    	<!--begin::Base Scripts -->
		<script src="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
        <!--begin::Page Vendors -->
		<script src="<?php echo base_url(); ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
        <!--begin::Page Snippets -->
		<script src="<?php echo base_url(); ?>assets/app/js/dashboard.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.js"></script>
    <?php if ($this->uri->segment('2') == 'dashboard') { ?>

    <script type="text/javascript">

		$( document ).ready(function() {
      /*
      new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'm_morris_1',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
          { day: '1', value: 20 },
          { day: '2', value: 10 },
          { day: '3', value: 5 },
          { day: '4', value: 5 },
          { day: '5', value: 20 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'day',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
      });*/

      var weekday = new Array();
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

      var date = new Date();
      console.log(date.getDay());
      var data = [
      { y: '2012-02-21', a: 50,  b: 90},
      { y: '2012-02-22', a: 65,  b: 75},
      { y: '2012-02-23', a: 50,  b: 50},
      { y: '2012-02-24', a: 75,  b: 60},
      { y: '2012-02-25', a: 80,  b: 65},
      { y: '2012-02-26', a: 90,  b: 70},
      { y: '2012-02-27', a: 100, b: 75}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      xLabels: 'day',
      //xLabelFormat: function (x) { return weekday[date.getUTCDay()]; },
      labels: ['Ingresos esta semana', 'Ingresos semana pasada'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };

    config.element = 'm_morris_1';
    Morris.Line(config);

    Morris.Donut({
    element: 'm_morris_2',
    data: [
      {label: "Normal", value: 30},
      {label: "Diet", value: 15},
      {label: "Comú 1", value: 45},
      {label: "Comú 2", value: 10}
    ],
    colors: [
   'skyblue',
   'tomato',
   'lightgreen',
   'dodgerblue'
 ]
  });

  $('#m_morris_2 svg text').css({
    "font-family" : "'Montserrat' !important",
    "padding" : "3%"
});




var demo4 = function() {

        var data = [];
        var totalPoints = 30;

        // random data generator for plot charts

        function getRandomData() {
            if (data.length > 0) data = data.slice(1);
            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 25;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0) y = 0;
                if (y > 50) y = 50;
                data.push(y);
            }
            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }

            return res;
        }

        //server load
        var options = {
            series: {
                shadowSize: 1
            },
            lines: {
                show: true,
                lineWidth: 0.5,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.1
                    }, {
                        opacity: 1
                    }]
                }
            },
            yaxis: {
                min: 0,
                max: 50,
                tickColor: "#eee",
                tickFormatter: function(v) {
                    return v + "";
                }
            },
            xaxis: {
                show: false,
            },
            colors: ["#6ef146"],
            grid: {
                tickColor: "#eee",
                borderWidth: 0,
            }
        };

        var updateInterval = 2000;
        var plot = $.plot($("#m_flotcharts_4"), [getRandomData()], options);

        function update() {
            plot.setData([getRandomData()]);
            plot.draw();
            setTimeout(update, updateInterval);
        }

        update();
    }

		demo4();
	});
    </script>

  <?php } elseif ($this->uri->segment('2') == 'clientes') { ?>
    <script src="<?php echo base_url(); ?>assets/js/table-ajax.js"></script>
  <?php } ?>
  </body>
  <!-- end::Body -->
</html>
