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
<!-- World Clock -->
<script src="{{ asset('plugins/worldclock/worldclock.js') }}"></script> 
<!-- CKeditor -->
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    window.onload = function() {
        CKEDITOR.replace( 'editor1' );
        worldClockZone();
    };
</script>



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
  }

  // jvectormap highlight states
  var highlighted_states = {
    al  : '#C8102E',
    ca  : '#C8102E',
    co  : '#C8102E',
    ct  : '#C8102E',
    fl  : '#C8102E',
    ga  : '#C8102E',
    il  : '#C8102E',
    in  : '#C8102E',
    md  : '#C8102E',
    mi  : '#C8102E',
    mn  : '#C8102E',
    mt  : '#C8102E',
    ne  : '#C8102E',
    nj  : '#C8102E',
    nc  : '#C8102E',
    ok  : '#C8102E',
    or  : '#C8102E',
    pa  : '#C8102E',
    sc  : '#C8102E',
    tn  : '#C8102E',
    tx  : '#C8102E',
    ut  : '#C8102E',
    va  : '#C8102E',
    wa  : '#C8102E',
    wi  : '#C8102E',
  }

  var unhighlighted_states = 
    'nv';
  
  // World map by jvectormap
  $('#world-map').vectorMap({
    map              : 'usa_en',
    backgroundColor  : 'transparent',
    color            : '#B1B3B3',
    colors           : highlighted_states,
    hoverColor       : '#3D3935',
    selectedColor    : '#AB2328',
    regionStyle      : {
      initial: {
        fill            : 'rgba(171, 35, 40, 0.7)',
        'fill-opacity'  : 1,
        stroke          : 'rgba(255,255,255,.2)',
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

    // Show state licenses
    onLabelShow: function(event, label, code){ 
      // if(!highlighted_states.hasOwnProperty(code)){
      //   event.preventDefault(); // Hides non-licensed states
      // }
      // State licenses
      if(code== 'al') {
        label.append(`<br><br>
        Alabama Consumer Credit License #22078`);
      }
      if(code== 'ca') {
        label.append(`
        <br>
        <br>
        Licensed under Division of Business Oversight Under the California
        <br> 
        Residential Mortgage Lending Act License# 41DBO-74196
        <br>
        <br>
        Department of Real Estate (DRE) ID #: 01799059 
        <br>
        <br>
        Finance Lenders Law License (DBO) ID #: 60DBO94450`);
      }
      if(code== 'co') {
        label.append(`
        <br>
        <br>
        Colorado Mortgage Company Registration ML-144549`);
      }
      if(code== 'ct') {
        label.append(`
        <br>
        <br>
        Connecticut Mortgage Lender License# ML-144549`);
      }
      if(code== 'fl') {
        label.append(`
        <br>
        <br>
        Florida Mortgage Lender Servicer License #MLD523`);
      }
      if(code== 'ga') {
        label.append(`
        <br>
        <br>
        Georgia Mortgage Lender License/Registration #23462`);
      }
      if(code== 'il') {
        label.append(`<br><br>
        Illinois Residential Mortgage License #MB.6761204
        <br>
        <br>
        Licensed by the Department of Financial and Professional Regulation, 
        <br>
        Mortgage Banking Division, James R. Thompson Center, 
        <br>
        IDFPR-Residential Mortgage Banking
        <br>
        <br>
        100 W. Randolph, 9th Floor,
        <br>
        Chicago, Illinois, 60601
        <br>
        Tel: (844) 768-1713`);
      }
      if(code== 'in') {
        label.append(`
        <br>
        <br>
        Indiana Mortgage Lending License #30531`);
      }
      if(code== 'md') {
        label.append(`
        <br>
        <br>
        Maryland Mortgage Lender License #18483`);
      }
      if(code== 'mi') {
        label.append(`
        <br>
        <br>
        Michigan 1st Mortgage Broker/Lender/Servicer License #FL00206854`);
      }
      if(code== 'mn') {
        label.append(`
        <br>
        <br>
        Minnesota Residential Mortgage Originator License #MN-MO-144549`);
      }
      if(code== 'mt') {
        label.append(`
        <br>
        <br>
        Montana Mortgage Lender License #144549`);
      }
      if(code== 'ne') {
        label.append(`
        <br>
        <br>
        Nebraska Mortgage Broker License #L-160722`);
      }
      if(code== 'nj') {
        label.append(`
        <br>
        <br>
        New Jersey Residential Mortgage Lender License #L-160722
        <br>
        <br>
        Licensed by the N.J. Department of Banking and Insurance`);
      }
      if(code== 'nc') {
        label.append(`
        <br>
        <br>
        Montana Mortgage Lender License #144549`);
      }
      if(code== 'ok') {
        label.append(`
        <br>
        <br>
        Oklahoma Mortgage Lender License #MLO10720`);
      }
      if(code== 'or') {
        label.append(`
        <br>
        <br>
        Oregon Mortgage Lending License #ML-5599`);
      }
      if(code== 'pa') {
        label.append(`
        <br>
        <br>
        Pennsylvania Mortgage Lending License #51804`);
      }
      if(code== 'sc') {
        label.append(`
        <br>
        <br>
        Tennessee Mortgage License #125315`);
      }
      if(code== 'tn') {
        label.append(`
        <br>
        <br>
        South Carolina Mortgage Lender/Servicer License #MLS-144549`);
      }
      if(code== 'tx') {
        label.append(`
        <br>
        <br>
        SML Mortgage Company License and SML Residential Mortgage Loan Servicer Registration
        <br>
        <br>
        Consumers wishing to file a complaint against a mortgage banker or a licensed mortgage 
        <br>
        banker residential mortgage loan originator should complete and send a complaint form to the <br>
        Texas Department of Savings and Mortgage Lending, 
        <br>2601 North Lamar, Suite 201, Austin, Texas 78705. 
        <br>
        Complaint forms and instructions may be obtained from the department’s website at www.sml.texas.gov. 
        <br>
        A toll-free consumer hotline is available at 1-877-276-5550.
        <br>
        <br>
        The department maintains a recovery fund to make payments of a certain actual out of pocket damages 
        <br>
        sustained by borrowers caused by acts of licensed mortgage banker residential mortgage loan originator. 
        <br>
        A written application for reimbursement from the recovery fund must be filed with and investigated by 
        <br>
        the department prior to the payment of a claim. For more information about the recovery fund. 
        <br>
        Please consult the department’s website at www.sml.texas.gov.`);
      }
      if(code== 'ut') {
        label.append(`
        <br>
        <br>
        Utah Mortgage Entity License #6573920`);
      }
      if(code== 'va') {
        label.append(`
        <br>
        <br>
        Virginia Lender License #MC-5845
        <br>
        <br>
        D.C. Mortgage Lender License #MLB144549 and #MLO273860`);
      }
      if(code== 'wa') {
        label.append(`
        <br>
        <br>
        Washington Consumer Loan Company License #CL-144549`);
      }
      if(code== 'wi') {
        label.append(`
        & Washington, D.C.
        <br>
        <br>
        Wisconsin Mortgage Banker License #144549BA`);
      }
    },

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
    $('#dashboardCalendar').datetimepicker({
  format: 'L',
  inline: true
})
</script>
