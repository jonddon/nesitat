@extends('layouts.pages')

@section('content')
    <div>
       
        <div id="container">
            <h2>
                Overview
            </h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="overall-stats">
                        <p class="title">
                            DAILY POWER GENERATED
                        </p>
                        <hr class="dotted">
                        <p class="value">
                            579090
                        </p>
                        <p class="unit text-right">
                            MWH/Day
                        </p>
                        <p>
                            <span class="percentage">
                                    -5%
                            </span>
                        
                            <span class="margin bg-danger">
                                <i class="lni-chevron-down"></i>
                            </span>
                        </p>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="overall-stats energy-demand">
                            <p class="title">
                                DAILY ENERGY DEMAND
                            </p>
                            <hr class="dotted">
                            <p class="value">
                                579090
                            </p>
                            <p class="unit text-right">
                                MWH/Day
                            </p>
                            <p>
                                <span class="percentage">
                                        +2%
                                </span>
                            
                                <span class="margin">
                                    <i class="lni-chevron-up"></i>
                                </span>
                            </p>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="overall-stats">
                                <p class="title">
                                    REVENUE LOSS
                                </p>
                                <hr class="dotted">
                                <p class="value">
                                    N 2.5 BN
                                </p>
                                {{-- <p class="unit text-right">
                                    MWH/Day
                                </p> --}}
                                <p>
                                    <span class="percentage">
                                            +2%
                                    </span>
                                
                                    <span class="margin">
                                        <i class="lni-chevron-up"></i>
                                    </span>
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="overall-stats bg-success">
                                    <p class="title">
                                        Active Power Plant
                                    </p>
                                    <hr class="dotted">
                                    <p class="value">
                                        16
                                    </p>
                                    
                                    <p>
                                        <span class="percentage">
                                                +2%
                                        </span>
                                    
                                        <span class="margin">
                                            <i class="lni-chevron-up"></i>
                                        </span>
                                    </p>
                                </div>
                                
                            </div>
            
            </div>


            {{-- Generation Section --}}

            

            <div class="row">
                
                <div class="col-lg-6 ">
                    <div class="mr-3">
                        <h3>Generation by Type</h3>
                        
                        <div id="chartdiv">
                            
                        </div>   
                            
                    </div>
                   

                </div>
                <div class="col-lg-6">
                    <h2>Genco Output</h2>
                    
                    <div class="row gen-type-wrapper">
                        <div id="container1">
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
     
       
    </div>
@endsection
@section('script')
<script>
    $(function(){
    $('#container1').highcharts({
        chart:{
    	type: 'area'
    },

    legend: {
        enabled: false
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        name: 'Kainji',
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        
        
    },
    {
        name: 'Egbin',
    data: [59.9, 71.5, 100.4, 200.2, 288.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }]
    });
});
</script>

<script>

</script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<!-- Chart code -->
<script>
        am4core.ready(function() {
        
        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end
        
        
        
        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.RadarChart);
        
        // Add data
        chart.data = [{
          "category": "Steam",
          "value": 80,
          "full": 100
        }, {
          "category": "Gas",
          "value": 35,
          "full": 100
        }, {
          "category": "Hydro",
          "value": 92,
          "full": 100
        }];
        
        // Make chart not full circle
        chart.startAngle = -90;
        chart.endAngle = 180;
        chart.innerRadius = am4core.percent(20);
        
        // Set number format
        chart.numberFormatter.numberFormat = "#.#'%'";
        
        // Create axes
        var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.grid.template.strokeOpacity = 0;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.fontWeight = 500;
        categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
          return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
        });
        categoryAxis.renderer.minGridDistance = 10;
        
        var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.grid.template.strokeOpacity = 0;
        valueAxis.min = 0;
        valueAxis.max = 100;
        valueAxis.strictMinMax = true;
        
        // Create series
        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
        series1.dataFields.valueX = "full";
        series1.dataFields.categoryY = "category";
        series1.clustered = false;
        series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
        series1.columns.template.fillOpacity = 0.08;
        series1.columns.template.cornerRadiusTopLeft = 20;
        series1.columns.template.strokeWidth = 0;
        series1.columns.template.radarColumn.cornerRadius = 20;
        
        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
        series2.dataFields.valueX = "value";
        series2.dataFields.categoryY = "category";
        series2.clustered = false;
        series2.columns.template.strokeWidth = 0;
        series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
        series2.columns.template.radarColumn.cornerRadius = 20;
        
        series2.columns.template.adapter.add("fill", function(fill, target) {
          return chart.colors.getIndex(target.dataItem.index);
        });
        
        // Add cursor
        chart.cursor = new am4charts.RadarCursor();
        
        }); // end am4core.ready()
        </script>
    
@endsection