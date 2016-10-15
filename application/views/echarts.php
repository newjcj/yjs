<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- 引入 echarts.js -->
    <script src="<?=base_url();?>public/js/echarts.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    <div id="one" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));
        var myChart1 = echarts.init(document.getElementById('one'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'ECharts 好了好了'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["衬衫","裤子","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [500, 20, 36, 10, 10, 20]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        myChart.on('click', function (params) {
             window.open('https://www.baidu.com/s?wd=' + encodeURIComponent(params.name));
        });
        
    </script>
   
    
        <script type="text/javascript" charset="utf-8">
            myChart1.setOption({
    series : [
        {
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            data:[
                {value:400, name:'搜索引擎'},
                {value:335, name:'直接访问'},
                {value:310, name:'邮件营销'},
                {value:274, name:'联盟广告'},
                {value:235, name:'视频广告'}
            ]
        }
    ]
})
        </script>
  
</body>
</html>