{!!Html::script("assets/js/jquery.min.js")!!}
{!!Html::script("assets/js/popper.min.js")!!}
{!!Html::script("assets/js/bootstrap.min.js")!!}
{!!Html::script("assets/js/jquery.blockUI.js")!!}
{!!Html::script("assets/js/jquery.nicescroll.js")!!}
{!!Html::script("assets/js/jquery.scrollTo.min.js")!!}
{!!Html::script("assets/js/jquery.slimscroll.js")!!}
{!!Html::script("assets/js/modernizr.min.js")!!}

{!!Html::script("assets/js/waves.js")!!}
{!!Html::script("assets/js/detect.js")!!}
{!!Html::script("assets/js/fastclick.js")!!}

{!!Html::script("assets/plugins/skycons/skycons.min.js")!!}
{!!Html::script("assets/plugins/raphael/raphael-min.js")!!}
{!!Html::script("assets/plugins/morris/morris.min.js")!!}
{!!Html::script("assets/pages/dashborad.js")!!}

{!!Html::script("assets/plugins/datatables/jquery.dataTables.min.js")!!}
{!!Html::script("assets/plugins/datatables/dataTables.bootstrap4.min.js")!!}

{!!Html::script("assets/plugins/datatables/dataTables.buttons.min.js")!!}
{!!Html::script("assets/plugins/datatables/buttons.bootstrap4.min.js")!!}
{!!Html::script("assets/plugins/datatables/jszip.min.js")!!}
{!!Html::script("assets/plugins/datatables/pdfmake.min.js")!!}
{!!Html::script("assets/plugins/datatables/vfs_fonts.js")!!}
{!!Html::script("assets/plugins/datatables/buttons.html5.min.js")!!}
{!!Html::script("assets/plugins/datatables/buttons.print.min.js")!!}
{!!Html::script("assets/plugins/datatables/buttons.colVis.min.js")!!}

{!!Html::script("assets/plugins/datatables/responsive.bootstrap4.min.js")!!}
{!!Html::script("assets/plugins/datatables/dataTables.responsive.min.js")!!}

{!!Html::script("assets/plugins/datatables/dataTables.responsive.min.js")!!}

{!!Html::script("assets/pages/datatables.init.js")!!}



{!!Html::script("assets/plugins/datatables/jszip.min.js")!!}



{!!Html::script("assets/plugins/jquery-ui/jquery-ui.min.js")!!}

{!!Html::script("assets/plugins/select2/select2.min.js")!!}
{!!Html::script("assets/js/app.js")!!}
  <script>
    /* BEGIN SVG WEATHER ICON */
                 if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                    {"color": "#fff"},
                    {"resizeClear": true}
                    ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;
    
                    for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                    icons.play();
                };
    
            // scroll
    
            $(document).ready(function() {
            
            $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
            $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
            
            });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
@include('sweetalert::alert')
@yield('js')