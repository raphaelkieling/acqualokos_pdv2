<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/acqualokos.css">
</head>
<body>
    <div class="container">
        <h2>Está sendo criado ...</h2>
        <a href="<?=base_url()?>acqualokos"><button type="">Voltar</button></a>
        <div class="container-statistic">
            <canvas id="newChart" width="50" height="50" style="border:1 solid;"></canvas>
        </div>
        
        
    </div>
    
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/Chart.min.js"></script>
    <script src="<?=base_url()?>src/js/moment.min.js"></script>
    <script>
        var ctx = $('#newChart');
        var Chartnova = new Chart(ctx,{
            type:'line',
            data:{
                labels:['maio','junho','julho'],
                datasets:[{
                    label:"Temporada 2017",
                    data:[1,6,4],
                    borderWidth:3
                }]
            }
        });
    </script>
</body>