<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
     	<ul class="sidebar-menu">            
            <li class="treeview">                                
                <a href="#">                                    
                    <i class="fa fa-lock"></i> 权限控制 <i class="fa fa-angle-left pull-right"></i>                                
                </a>                                
                <ul class="treeview-menu">                                    
                    <li><a href="/advanced/backend/web/admin/route"><i class="fa fa-circle-o"></i> 路由</a></li>                                    
                    <li><a href="/advanced/backend/web/admin/permission"><i class="fa fa-circle-o"></i> 权限</a></li>                                    
                    <li><a href="/advanced/backend/web/admin/role"><i class="fa fa-circle-o"></i> 角色</a></li>                                    
                    <li><a href="/advanced/backend/web/admin/assignment"><i class="fa fa-circle-o"></i> 分配</a></li>                                    
                    <li><a href="/advanced/backend/web/admin/menu"><i class="fa fa-circle-o"></i> 菜单</a></li>                                
                </ul>                           
            </li>                        
        </ul> 
    </section>
</aside>
