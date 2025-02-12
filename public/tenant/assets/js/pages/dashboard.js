var options={series:[{name:"Revenue",data:[50,85,60,100,70,45,90,75]}],chart:{height:45,type:"area",sparkline:{enabled:!0},animations:{enabled:!1}},colors:[getComputedStyle(document.documentElement).getPropertyValue("--abstack-success").trim()],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.1,stops:[0,90,100]}},tooltip:{enabled:!1},dataLabels:{enabled:!1},grid:{show:!1},xaxis:{labels:{show:!1},axisBorder:{show:!1},axisTicks:{show:!1}},yaxis:{show:!1},stroke:{curve:"smooth",width:1}},chart=new ApexCharts(document.querySelector("#chart-revenue"),options),options=(chart.render(),{series:[{name:"Expenses",data:[30,60,35,80,50,25,70,55]}],chart:{height:45,type:"area",sparkline:{enabled:!0},animations:{enabled:!1}},colors:[getComputedStyle(document.documentElement).getPropertyValue("--abstack-primary").trim()],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.1,stops:[0,90,100]}},tooltip:{enabled:!1},dataLabels:{enabled:!1},grid:{show:!1},xaxis:{labels:{show:!1},axisBorder:{show:!1},axisTicks:{show:!1}},yaxis:{show:!1},stroke:{curve:"smooth",width:1}}),options=((chart=new ApexCharts(document.querySelector("#chart-products"),options)).render(),{series:[{name:"Investments",data:[20,40,25,50,35,15,45,30]}],chart:{height:45,type:"area",sparkline:{enabled:!0},animations:{enabled:!1}},colors:[getComputedStyle(document.documentElement).getPropertyValue("--abstack-danger").trim()],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.1,stops:[0,90,100]}},tooltip:{enabled:!1},dataLabels:{enabled:!1},grid:{show:!1},xaxis:{labels:{show:!1},axisBorder:{show:!1},axisTicks:{show:!1}},yaxis:{show:!1},stroke:{curve:"smooth",width:1}}),options=((chart=new ApexCharts(document.querySelector("#chart-customers"),options)).render(),{series:[{name:"Savings",data:[40,70,50,90,60,35,80,65]}],chart:{height:45,type:"area",sparkline:{enabled:!0},animations:{enabled:!1}},colors:[getComputedStyle(document.documentElement).getPropertyValue("--abstack-warning").trim()],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.1,stops:[0,90,100]}},tooltip:{enabled:!1},dataLabels:{enabled:!1},grid:{show:!1},xaxis:{labels:{show:!1},axisBorder:{show:!1},axisTicks:{show:!1}},yaxis:{show:!1},stroke:{curve:"smooth",width:1}}),colors=((chart=new ApexCharts(document.querySelector("#chart-profit"),options)).render(),["#777edd","#0acf97","#fa5c7c","#f9bc0b"]),dataColors=$("#statistics-chart").data("colors"),options={series:[{name:"Open Campaign",type:"bar",data:[89.25,98.58,68.74,108.87,77.54,84.03,51.24,28.57,92.57,42.36,88.51,36.57]}],chart:{height:310,type:"line",toolbar:{show:!1}},stroke:{width:0,curve:"straight"},plotOptions:{bar:{columnWidth:"60%",barHeight:"70%",borderRadius:5,borderRadiusApplication:"end"}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},colors:colors=dataColors?dataColors.split(","):colors},colors=((chart=new ApexCharts(document.querySelector("#statistics-chart"),options)).render(),["#777edd","#0acf97","#fa5c7c","#f9bc0b"]),dataColors=$("#revenue-chart").data("colors"),options={series:[{name:"Conversion Rate",data:[45,60,-20,60,0,45,-80,65,-30,58]},{name:"Average Sale Value",data:[-80,60,80,-40,15,60,-40,80,-50,2]}],chart:{height:300,type:"line",zoom:{enabled:!1},toolbar:{show:!1}},stroke:{width:[4,4],curve:"smooth",dashArray:[0,8]},dataLabels:{enabled:!1},markers:{size:5},colors:colors=dataColors?dataColors.split(","):colors,legend:{position:"top"},xaxis:{categories:["January","February","March","April","May","June","July","August","September","October"]},tooltip:{shared:!0,intersect:!1}};(chart=new ApexCharts(document.querySelector("#revenue-chart"),options)).render();