		<div id="navbar" class="navbar navbar-default          ace-save-state">
                    {% include "includes/navbarsup.volt" %} <!--Menu Iconos-->                        
		</div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                           {% include "includes/menuiconos.volt" %} <!--Menu Iconos-->
                           {% include "includes/menu.volt" %} <!--Menu Lateral-->
                            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                            </div>
			</div>
			<div class="main-content">
                           {{ content() }}
                        </div><!-- /.main-content -->
			<div class="footer">
                           {% include "includes/footer.volt" %} <!--Footer-->
                        </div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
