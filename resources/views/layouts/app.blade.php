<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        primaryHover: '#4338ca',
                        sidebar: '#1e1b4b',
                        surface: '#ffffff',
                        background: '#f8fafc',
                    }
                }
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="text-slate-800 bg-background flex h-screen overflow-hidden">

    {{-- Sidebar --}}
    @auth
    @include('partials.sidebar')
    @endauth

    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        @auth
        @include('partials.header')
        @endauth
        {{-- Main Content --}}
        <main class="@auth flex-1 overflow-y-auto p-4 lg:p-8 @else flex items-center justify-center min-h-screen @endauth">
            @yield('content')
        </main>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        const userMenuBtn = document.getElementById('userMenuBtn');
        const userDropdown = document.getElementById('userDropdown');

        if (userMenuBtn && userDropdown) {

            userMenuBtn.addEventListener('click', function (e) {
                e.stopPropagation();

                userDropdown.classList.toggle('hidden');
                userDropdown.classList.toggle('opacity-0');
                userDropdown.classList.toggle('scale-95');
                userDropdown.classList.toggle('opacity-100');
                userDropdown.classList.toggle('scale-100');
            });

            document.addEventListener('click', function (e) {

                if (
                    !userMenuBtn.contains(e.target) &&
                    !userDropdown.contains(e.target)
                ) {
                    userDropdown.classList.add('hidden');
                    userDropdown.classList.remove('opacity-100', 'scale-100');
                    userDropdown.classList.add('opacity-0', 'scale-95');
                }
            });
        }
    });
</script>
<script>
        // Sidebar Toggle Logic
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            // Small delay to allow display block to apply before changing opacity
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
            }, 10);
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300); // match transition duration
        }

        openBtn.addEventListener('click', openSidebar);
        closeBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        // User Dropdown Logic
        const userMenuBtn = document.getElementById('userMenuBtn');
        const userDropdown = document.getElementById('userDropdown');

        userMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (userDropdown.classList.contains('hidden')) {
                userDropdown.classList.remove('hidden');
                setTimeout(() => {
                    userDropdown.classList.remove('opacity-0', 'scale-95');
                    userDropdown.classList.add('opacity-100', 'scale-100');
                }, 10);
            } else {
                userDropdown.classList.remove('opacity-100', 'scale-100');
                userDropdown.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    userDropdown.classList.add('hidden');
                }, 200);
            }
        });

        document.addEventListener('click', (e) => {
            if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                if (!userDropdown.classList.contains('hidden')) {
                    userDropdown.classList.remove('opacity-100', 'scale-100');
                    userDropdown.classList.add('opacity-0', 'scale-95');
                    setTimeout(() => {
                        userDropdown.classList.add('hidden');
                    }, 200);
                }
            }
        });

        // Sidebar Nav Dropdown Logic
        const productsMenuBtn = document.getElementById('productsMenuBtn');
        const productsSubmenu = document.getElementById('productsSubmenu');
        const productsMenuChevron = document.getElementById('productsMenuChevron');

        if (productsMenuBtn) {
            productsMenuBtn.addEventListener('click', () => {
                productsSubmenu.classList.toggle('hidden');
                productsSubmenu.classList.toggle('flex');
                productsMenuChevron.classList.toggle('rotate-180');
            });
        }

        // Chart.js Configuration
        document.addEventListener('DOMContentLoaded', function () {
            // Main Revenue Line Chart
            const ctx1 = document.getElementById('revenueChart').getContext('2d');

            // Create gradient
            let gradient = ctx1.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(79, 70, 229, 0.5)'); // Indigo 600
            gradient.addColorStop(1, 'rgba(79, 70, 229, 0.0)');

            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Revenue',
                        data: [15000, 22000, 18000, 28000, 25000, 32000, 38000, 34000, 42000, 48000, 50000, 54239],
                        borderColor: '#4f46e5',
                        backgroundColor: gradient,
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#4f46e5',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1e293b',
                            padding: 12,
                            titleFont: { size: 13, family: 'Inter' },
                            bodyFont: { size: 14, weight: 'bold', family: 'Inter' },
                            callbacks: {
                                label: function (context) {
                                    return '$' + context.parsed.y.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#64748b',
                                font: { family: 'Inter' },
                                callback: function (value) {
                                    return '$' + value / 1000 + 'k';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: '#64748b',
                                font: { family: 'Inter' }
                            }
                        }
                    }
                }
            });

            // Traffic Doughnut Chart
            const ctx2 = document.getElementById('doughnutChart').getContext('2d');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: ['Direct', 'Organic', 'Social'],
                    datasets: [{
                        data: [45, 30, 25],
                        backgroundColor: [
                            '#4f46e5', // Primary
                            '#38bdf8', // Sky 400
                            '#34d399'  // Emerald 400
                        ],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '75%',
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1e293b',
                            padding: 10,
                            bodyFont: { family: 'Inter' }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>