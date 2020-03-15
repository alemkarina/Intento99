<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.html">
								<img src="images/logo/Logo90.png" alt="logo Avatar">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.html">Início</a></li>
								<li class="drop"><a href="#">Comprar</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Comunicate</li>
											<li><a href="faq.html">Preguntas Frecuentas</a></li>
											<li><a href="contact.html">Contactanos</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Tienda</li>

											<li><a href="cart.html">Carrito</a></li>
											<li><a href="checkout.html">Pagos</a></li>
											<li><a href="faq.html">Preguntas frecuentes</a></li>
                                            <?php if(!isset($_SESSION["usuario"])) {?>
                                            <li><a href="inicio sesion.php">Iniciar Sesión</a></li>
                                            <li><a href="registro.php">Registrate</a></li>
                                            <?php }else{?>
                                                <?php if ($_SESSION["usuario"]["privilegio"] == 1){
                                                ?>
                                            <li><a href="admin.php">Admin</a></li>
                                            <?php }else{?>
                                            <li><a href="usuario.php">Mi cuenta</a></li>
                                            <li><a href="wishlist.html">Mis favoritos</a></li>
                                            <?php }?>
                                            										</ul>   
										<ul class="item item03">
											<li class="title">Outlet</li>
											<li><a href="shop-grid.html">Smartwacht</a></li>
											<li><a href="shop-grid.html">Accesorios</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="shop-grid.html">Gift card</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Regalos</li> 
											<li><a href="shop-grid.html">Mujer</a></li>
											<li><a href="shop-grid.html">Hombre </a></li>
											<li><a href="shop-grid.html">Niños </a></li>
																				</ul>
										
									</div>																	
							
							
							
								</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>Agregá al carrito</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>0 items</span>
											<span>COSTO TOTAL</span>
										</div>
										<div class="total_amount text-right">
											<span>$0.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.html">Pagá acá</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Moneda</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">AR$</span>
													<ul class="switcher-dropdown">
														<li>AR$</li>
														<li>Dolar</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Idioma</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Elegir</span>
													<ul class="switcher-dropdown">
														<li>Español</li>
														<li>Inglés</li>
														<li>Portugues</li>
																											</ul>
												</div>
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->

 
        </div>
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
                 !Error                               