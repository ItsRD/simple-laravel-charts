<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var {{ Str::camel($charts->getId()) }} = document.getElementById('{{ $charts->getId() }}').getContext('2d');
    new Chart({{ Str::camel($charts->getId()) }}, @json($charts->getChartObject()));
</script>
