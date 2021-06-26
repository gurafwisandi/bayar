<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?=base_url()?>assets/img/profile.jpg" alt="" class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?=$this->fungsi->user_login()->nama?>
              <span class="user-level"><?=$this->fungsi->user_login()->email?></span>
             
            </span>
          </a>
          <div class="clearfix"></div>

          
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item 
          <?php 
            if( $this->uri->segment('1') == 'dashboard' )
            {
              echo 'active';
            }
          ?>">
          <a  href="<?=site_url('dashboard')?>" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Menu</h4>
        </li>
        <?php if ($this->fungsi->user_login()->level == 1) { ?>
        <li class="nav-item 
          <?php 
            if( $this->uri->segment('1') == 'customer' OR 
                $this->uri->segment('1') == 'kurs' OR 
                $this->uri->segment('1') == 'payment' OR 
                $this->uri->segment('1') == 'uang' OR 
                $this->uri->segment('1') == 'produk' )
            {
              echo 'active';
            }
          ?>">

            <a data-toggle="collapse" href="#base">
              <i class="fas fa-layer-group"></i>
              <p>Data Master</p>
              <span class="caret"></span>
            </a>
            <div class="collapse 
              <?php 
                if( $this->uri->segment('1') == 'customer' OR 
                  $this->uri->segment('1') == 'kurs' OR 
                  $this->uri->segment('1') == 'payment' OR 
                  $this->uri->segment('1') == 'uang' OR 
                  $this->uri->segment('1') == 'produk' )
                {
                  echo 'show';
                }
              ?>" id="base">
              <ul class="nav nav-collapse">
              
                <li class="<?php if($this->uri->segment('1') == 'customer'){ echo 'active'; } ?>">
                  <a href="<?=site_url('customer')?>">
                    <span class="sub-item">Customer</span>
                  </a>
            
              </li>
              <li class="<?php if($this->uri->segment('1') == 'kurs'){ echo 'active'; } ?>">
                <a href="<?=site_url('kurs')?>">
                  <span class="sub-item show">Kurs</span>
                </a>
              </li>
              <li class="<?php if($this->uri->segment('1') == 'payment'){ echo 'active'; } ?>">
                <a href="<?=site_url('payment')?>">
                  <span class="sub-item">Payment</span>
                </a>
              </li>
              <li class="<?php if($this->uri->segment('1') == 'uang'){ echo 'active'; } ?>">
                <a href="<?=site_url('uang')?>">
                  <span class="sub-item">Mata Uang</span>
                </a>
              </li>
              <li class="<?php if($this->uri->segment('1') == 'produk'){ echo 'active'; } ?>">
                <a href="<?=site_url('produk')?>">
                  <span class="sub-item">Produk</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      <?php } ?>
        <li class="nav-item 
          <?php 
            if( $this->uri->segment('1') == 'transaksi' )
            {
              echo 'active';
            }
          ?>">
          <a  href="<?=site_url('transaksi')?>" class="collapsed" aria-expanded="false">
            <i class="fas fa-th-list"></i>
            <p>Transaksi</p>
          </a>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#charts">
            <i class="far fa-chart-bar"></i>
            <p>Laporan</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav nav-collapse">
              <li>
                <a href="#">
                  <span class="sub-item">Laporan 1</span>
                </a>
              </li>
              <li>
                <a href="charts/sparkline.html">
                  <span class="sub-item">Laporan 2</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?=site_url('user')?>">
            <i class="fas fa-user-alt"></i>
            <p>Profil</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->