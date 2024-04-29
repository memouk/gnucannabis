<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GnuCannabis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Inicio',
                        'icon' => 'home',
                        'url' => ['/site/index']
                    ],
                    [
                        'label' => 'Cultivos',
                        'icon' => 'leaf',
                        'items' => [
                            ['label' => 'Ver Cultivos', 'url' => ['/cultivo/index']],
                            ['label' => 'Nuevo Cultivo', 'url' => ['/cultivo/create']],
                        ]
                    ],
                    [
                        'label' => 'Plantas',
                        'icon' => 'seedling',
                        'items' => [
                            ['label' => 'Ver Plantas', 'url' => ['/planta/index']],
                            ['label' => 'Nueva Planta', 'url' => ['/planta/create']],
                        ]
                    ],
                    [
                        'label' => 'Procedimientos',
                        'icon' => 'tools',
                        'items' => [
                            ['label' => 'Ver Procedimientos', 'url' => ['/procedimiento/index']],
                            ['label' => 'Nuevo Procedimiento', 'url' => ['/procedimiento/create']],
                        ]
                    ],
                    [
                        'label' => 'Cosechas',
                        'icon' => 'hand-holding',
                        'items' => [
                            ['label' => 'Ver Cosechas', 'url' => ['/cosecha/index']],
                            ['label' => 'Nueva Cosecha', 'url' => ['/cosecha/create']],
                        ]
                    ],
                    [
                        'label' => 'Inventario',
                        'icon' => 'box-open',
                        'url' => ['/inventario/index']
                    ],
                    ['label' => 'Gii', 'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>