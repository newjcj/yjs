<!-- 引入 ECharts 文件 -->
        <script src="<?=base_url();?>public/js/echarts.js"></script>
        <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                        <div id="main1" style="width:88%;height:400px;"></div>
                        <script type="text/javascript">
                            var myChart = echarts.init(document.getElementById('main1'));
                           var option = {
                                    title: {
                                        text: '关键词详情'
                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
                                    },
                                    grid: {
                                        left: '3%',
                                        right: '4%',
                                        bottom: '3%',
                                        containLabel: true
                                    },
                                    toolbox: {
                                        feature: {
                                            saveAsImage: {}
                                        }
                                    },
                                    xAxis: {
                                        type: 'category',
                                        boundaryGap: false,
                                        data: ['周一','周二','周三','周四','周五','周六','周日']
                                    },
                                    yAxis: {
                                        type: 'value'
                                    },
                                    series: [
                                        {
                                            name:'邮件营销',
                                            type:'line',
                                            stack: '总量',
                                            data:[120, 132, 101, 134, 90, 230, 210]
                                        },
                                        {
                                            name:'联盟广告',
                                            type:'line',
                                            stack: '总量',
                                            data:[220, 182, 191, 234, 290, 330, 310]
                                        },
                                        {
                                            name:'视频广告',
                                            type:'line',
                                            stack: '总量',
                                            data:[150, 232, 201, 154, 190, 330, 410]
                                        },
                                        {
                                            name:'直接访问',
                                            type:'line',
                                            stack: '总量',
                                            data:[320, 332, 301, 334, 390, 330, 320]
                                        },
                                        {
                                            name:'搜索引擎',
                                            type:'line',
                                            stack: '总量',
                                            data:[820, 932, 901, 934, 1290, 1330, 1320]
                                        }
                                    ]
                                };
                                myChart.setOption(option);
                        </script>
