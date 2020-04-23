<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- BS Custom File Input -->
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset ('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset ('js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset ('js/pages/dashboard.js') }}"></script>
<script src="{{ asset ('js/pages/dashboard3.js') }}"></script>
<script src="{{ asset ('js/demo.js') }}"></script>

<script>

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'ATR in Full', 
          'OMBS',
          'Foreign National',  
          'Non-Prime', 
          'ODF', 
          'ODF+',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- POLAR CHART -
    //-------------

var ctx = document.getElementById('polarChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: [
            'Region 1', 
            'Region 2', 
            'Region 3', 
            'Region 4', 
            'Region 5', 
            'Region 6'
        ],
        datasets: [
            {
                label: '# of Sales',
                data: [12, 36, 22, 12, 23, 31],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
        yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>

<script>
    //-------------
    //- Lightbox -
    //-------------
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
    })
  </script>

<script>
    // jvectormap data
    var visitorsData = {
    'US': 398, //USA
    'SA': 400, //Saudi Arabia
    'CA': 1000, //Canada
    'DE': 500, //Germany
    'FR': 760, //France
    'CN': 300, //China
    'AU': 700, //Australia
    'BR': 600, //Brazil
    'IN': 800, //India
    'GB': 320, //Great Britain
    'RU': 3000 //Russia
  }
  // World map by jvectormap
  $('#world-map').vectorMap({
    map              : 'usa_en',
    backgroundColor  : 'transparent',
    regionStyle      : {
      initial: {
        fill            : 'rgba(255, 255, 255, 0.7)',
        'fill-opacity'  : 1,
        stroke          : 'rgba(0,0,0,.2)',
        'stroke-width'  : 1,
        'stroke-opacity': 1
      }
    },
    series           : {
      regions: [{
        values           : visitorsData,
        scale            : ['#ffffff', '#0154ad'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] != 'undefined')
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
    }
  })

  // Sparkline charts
  var sparkline1 = new Sparkline($("#sparkline-1")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
  var sparkline2 = new Sparkline($("#sparkline-2")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
  var sparkline3 = new Sparkline($("#sparkline-3")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});

  sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
  sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]);
  sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);
</script>
<script>
    // The Calender
    $('#calendar').datetimepicker({
  format: 'L',
  inline: true
})
</script>
