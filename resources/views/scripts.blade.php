<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('{{ $charts->getId() }}').getContext('2d');
    new Chart(ctx, @json($charts->getChartObject()));
</script>
