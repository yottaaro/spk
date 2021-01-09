
                                    <!-- Page-header start -->
                                    
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                    
                                                        <h4>  Form <?php echo ucfirst($this->uri->segment(3)) ?> <?php echo ucfirst($this->uri->segment(2)) ?></h4>
                                                        
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="<?php echo site_url('dashboard') ?>"> <i class="feather icon-home"></i>
                                                            </a>
                                                        </li>
                                                        <?php foreach ($this->uri->segments as $segment): ?>
                                                                        <?php 
                                                                            $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                                                                            $is_active =  $url == $this->uri->uri_string;
                                                                        ?>
                                                                        <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                                                                            <?php if($is_active): ?>
                                                                                <?php echo ucfirst($segment) ?>
                                                                            <?php else: ?>
                                                                                <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                                                                            <?php endif; ?>
                                                                        </li>
                                                        <?php endforeach; ?>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
