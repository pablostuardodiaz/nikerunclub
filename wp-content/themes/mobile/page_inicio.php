<?php
	global $current_user;
	get_currentuserinfo();
?>
	<div data-role="content" class="jqm-content">
		<ul data-role="listview" data-inset="true" data-theme="a" data-icon="false" data-filter-placeholder="Search..." class="jqm-list jqm-home-list">
            <?php
				if(!is_user_logged_in()){
			?>
            <li><a href="<?php bloginfo('stylesheet_directory'); ?>/widgets/listviews/inicio_sesion.php"><h2>Iniciar Sesión</h2><p>Acceso Socios NRC</p></a></li>
            <?php }else{ ?>
            	<a href="<?php echo wp_logout_url( home_url() ); ?>">Cerrar Sesi&oacute;n </a>
            <?php }?>
			<li data-section="Widgets" data-filtertext="responsive web design rwd adaptive PE accessible mobile breakpoints media query"><a href="<?php bloginfo('stylesheet_directory'); ?>/widgets/listviews/inscripcion.html" data-ajax="false"><h2>Inscripción Nike Run Club</h2><p>Postula al equipo aquí</p></a></li>
		</ul>
		<!--ul data-role="listview" data-inset="true" data-theme="a" data-icon="false" data-filter-placeholder="Search..." class="jqm-list jqm-home-list">
            <?php
				if(!is_user_logged_in()){
			?>
            <li>
            	<a href="<?php bloginfo('stylesheet_directory'); ?>/widgets/listviews/inicio_sesion.php" data-rel="dialog">
            		<h2>Iniciar Sesión</h2>
            		<p>Acceso Socios NRC</p>
            	</a>
            </li>
            <?php }else{ ?>
            	<a href="<?php echo wp_logout_url( home_url() ); ?>">Cerrar Sesi&oacute;n </a>
            <?php }?>
			<li data-section="Widgets" data-filtertext="responsive web design rwd adaptive PE accessible mobile breakpoints media query">
				<a href="<?php bloginfo('stylesheet_directory'); ?>/widgets/listviews/inscripcion.html" data-ajax="false">
					<h2>Inscripción Nike Run Club</h2>
					<p>Postula al equipo aquí</p>
				</a>
			</li>
		</ul-->
        <h2 class="jqm-home-widget">Nike Run Club</h2>

		<!--<p class="jqm-intro">Test drive every component in the library, and easily build pages by copying and pasting the markup configuration you need.</p>-->
		<!--ul data-role="listview" data-inset="true" data-filter="false" data-divider-theme="d" data-icon="false" data-filter-placeholder="Search widgets..."  class="jqm-list"-->
		<ul data-role="listview" data-inset="true" data-theme="a" data-icon="false" data-filter-placeholder="Search..." class="jqm-list">
			<li data-section="Widgets" data-filtertext="listviews thumbnails icons nested split button collapsible ul ol"><a href="<?php bloginfo('stylesheet_directory'); ?>/widgets/listviews/" data-ajax="false">Staff</a></li>
			<li data-section="Widgets" data-filtertext="ajax navigation navigate event method"><a href="#" data-ajax="false">Puntos de Entrenamiento</a></li>
			<li data-section="Widgets" data-filtertext="ajax navigation navigate event method"><a href="#" data-ajax="false">Entrenamientos</a></li>
			<li data-section="Widgets" data-filtertext="autocomplete filter reveal listviews remote listviewbeforefilter placeholder"><a href="#" data-ajax="false">Salud</a></li>
			<li data-section="Widgets" data-filtertext="buttons inputs forms inline theme grouped icons mini disabled"><a href="#" data-ajax="false">Noticias</a></li>
			<li data-section="Widgets" data-filtertext="checkboxes checkboxradio inputs forms mini disabled"><a href="#">Entrevistas</a></li>
			<li data-section="Widgets" data-filtertext="collapsibles content formatting"><a href="#" data-ajax="false">Contacto</a></li>
        </ul>
	</div><!-- /content -->