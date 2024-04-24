  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header"><strong>MAIN MENU</strong></li>
      
      <li class="treeview beranda" id="beranda">
        <a href="<?php echo base_url() ?>dashboard">
          <i class="ion ion-ios-home"></i> <span>Beranda</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <li class="treeview" id="master">
        <a href="#">
          <i class="ion ion-ios-folder"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="pelanggan"><a href="<?php echo base_url('Master/datapelanggan') ?>"><i class="ion ion-ios-checkmark"></i> Data Pelanggan</a></li>
        </ul>
      </li>
      <li class="treeview" id="transaksi">
        <a href="#">
          <i class="fa fa-cog"></i>
          <span>Transaksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="dataprestasi"><a href=""><i class="ion ion-ios-checkmark"></i> Penjualan</a></li>
          
        </ul>
      </li>
	  <li class="treeview" id="cetak">
        <a href="#">
          <i class="ion ion-ios-folder"></i>
          <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="mapres"><a href=""><i class="ion ion-ios-checkmark"></i> Penjualan</a></li>
        </ul>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>