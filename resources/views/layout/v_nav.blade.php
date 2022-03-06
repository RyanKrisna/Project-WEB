<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
    <li class="{{ request()->is('produk') ? 'active' : ''}}"><a href="/produk"><i class=" fa fa-shopping-cart"></i> <span>Produk</span></a></li>
    <li class="{{ request()->is('baju & penjahit') ? 'active' : ''}} treeview">
        <a href="#">
            <i class="fa fa-plane"></i> <span>Pemesanan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="/penjahit"><i class="fa fa-circle-o"></i> Pesan Penjahit</a></li>
            <li><a href="/baju"><i class="fa fa-circle-o"></i> Pesan Baju</a></li>
        </ul>
    </li>
    <li class="{{ request()->is('keranjang') ? 'active' : ''}}"><a href="/keranjang"><i class="fa fa-cart-plus"></i> <span>Keranjang</span></a></li>
</ul>