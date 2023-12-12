@extends('layouts.global')
@section('content')
    @include('components.navuser')
    <div class="w-full h-full flex justify-center">
        <div class="w-full flex flex-col bg-[#8d6624]">
            <div class="h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4 text-[#8d6624]">Statistika Komik</p>
                <hr><br>
                <div class="flex justify-center">
                    <canvas id="comicStatisticsChart" width="300" height="400"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    var chartData = {
                        labels: [
                            @foreach ($komik as $kmk)
                                @php
                                    $words = explode(' ', $kmk->nama); // Memisahkan nama komik berdasarkan spasi
                                    $shortName = $words[0]; // Mengambil kata pertama
                                    if (isset($words[1])) {
                                        $shortName .= ' ' . $words[1]; // Menggabungkan dengan kata kedua jika ada
                                    }
                                    if (isset($words[2])) {
                                        $shortName .= ' ' . $words[2]; // Menggabungkan dengan kata ketiga jika ada
                                    }
                                @endphp
                                '{{ $shortName }}',
                            @endforeach
                        ],
                        datasets: [{
                            label: 'Rating Komik',
                            data: [
                                @foreach ($komik as $kmk)
                                    {{ $kmk->rating }},
                                @endforeach
                            ],
                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                            borderColor: 'rgba(255, 206, 86, 1)',
                            borderWidth: 1
                        }]
                    };

                    var chartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                    };

                    var ctx = document.getElementById('comicStatisticsChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: chartData,
                        options: chartOptions
                    });
                </script>
            </div>
        </div>
    </div>
@include('components.footer')
@endsection
