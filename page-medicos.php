<?php get_header(); ?>	

	<section id="home">
		
		<div class="owl-carousel owl-theme">

			<div class="item">
				<div class="bgSlide" style="background-image: url('<?php bloginfo('template_url') ?>/images/featured-home.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 center-all center-x">
							<div class="call-to-action">
								<h2><strong>Dedique seu tempo aos pacientes.</strong> Nós cuidamos do seu negócio, com alta tecnologia e equipe qualificada</h2>
								<a href="#vantagens" id="benefits" class="btn btn-site">Quero saber mais</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php $args = array(
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => '2',
				);
			?>
			<?php query_posts($args); ?>


			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
				
				<div class="item">
					<div class="bgSlide" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');" data-speed="4"></div>
					<div class="mask"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 center-all center-x">
								<div class="call-to-action">
									<h2><strong><?php the_title(); ?></strong></h2>
									<a href="<?php the_permalink(); ?>" id="benefits" class="btn btn-site">Quero saber mais</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query() ?>

		</div>
	</section>



	<section id="vantagens">

		<div class="owl-carousel owl-theme">

			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 center-x center-all">

							<article class="content">

								<h3>Mensalidade de acordo<br /> com a sua necessidade</h3>

								<img src="<?php bloginfo('template_url') ?>/images/vantagens-mensalidade.png" alt="Mensalidade de acordo com a sua necessidade" title="Mensalidade de acordo com a sua necessidade">

								<p><strong>Oferecemos o pacote ideal para sua necessidade.</strong><br />

								Contrate apenas as horas que for utilizar para atender seus pacientes e não se preocupe em administrar pessoas.</p>

								<span class="abrevantagens btn btn-site">Conheça todas as vantagens</span>

							</article>

						</div>
					</div>
				</div>
			</div>



			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 center-x center-all">
							<article class="content">

								<h3>Flexibilidade <br />de horários</h3>
								<img src="<?php bloginfo('template_url') ?>/images/vantagens-flexibilidade.png" alt="Flexibilidade de Horários" title="Flexibilidade de Horários">
								<p><strong>Nossos planos possibilitam você fechar sua agenda de modo a otimizar o seu dia de trabalho.</strong></p>
								<span class="abrevantagens btn btn-site">Conheça todas as vantagens</span>

							</article>

						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 center-x center-all">

							<article class="content">

								<h3>Bem localizado e com <br />excelente infraestrutura</h3>

								<img src="<?php bloginfo('template_url') ?>/images/vantagens-infraestrutura.png" alt="Bem localizado e com excelente infraestrutura" title="Bem localizado e com excelente infraestrutura">

								<p><strong>Localizado no coração dos negócios. O <?php bloginfo('name') ?></strong> está a <strong>poucos minutos do aeroporto de Guarulhos</strong> e do <strong>Centro de São Paulo.</strong></p>

								<span class="abrevantagens btn btn-site">Conheça todas as vantagens</span>

							</article>

						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 center-x center-all">

							<article class="content">
								<h3>Conheça nossa proposta</h3>
								<img src="<?php bloginfo('template_url') ?>/images/vantagens-proposta.png" alt="Conheça nossa proposta" title="Conheça nossa proposta">
								<p><strong>O <?php bloginfo('name') ?></strong> nasceu com uma visão moderna de negócios.<br /><br />
								Nós <strong>queremos facilitar sua vida</strong> e nossa missão é <strong>deixar você cuidando apenas dos seus pacientes.</strong></p>
								<span class="abrevantagens btn btn-site">Conheça todas as vantagens</span>
							</article>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="vantagens2">
		<div class="container">
			<div class="center-all">

				<article>
					<div class="row">
						<div class="col-lg-12">
							<header>
								<h2><a href="<?php bloginfo('url') ?>/vantagens/">Vantagens +</a></h2>
							</header>
						</div>
					</div>

					<?php get_template_part('content-vantagens') ?>

				</article>
			</div>
		</div>
	</section>

	<section id="especialidades">
		<div class="container">
			<div class="row">

				<header class="col-lg-5 col-md-7 col-sm-12 col-xs-12 center-x">

					<h4>O <strong><?php bloginfo('name') ?></strong> foi planejado para atender os mais variados profissionais de saúde.</h4>

				</header>

			</div>

			<div class="row">

				<div class="list-specials">

					<ul class="col-lg-3 col-md-6 col-sm-6">
						<li>Cardiologia</li>
						<li>Dermatologia</li>
						<li>Endocrinologia</li>
						<li>Fisiatria</li>
					</ul>

					<ul class="col-lg-3 col-md-6 col-sm-6">
						<li>Gastroenterologia</li>
						<li>Ginecologia e obstetrícia</li>
						<li>Homeopatia</li>
						<li>Mastologia</li>
					</ul>

					<ul class="col-lg-3 col-md-6 col-sm-6">
						<li>Medicina do esporte</li>
						<li>Metabologia</li>
						<li>Nutrição </li>
						<li>Neurologia</li>
					</ul>

					<ul class="col-lg-3 col-md-6 col-sm-6">
						<li>Nutrologia</li>
						<li>Otorrinolaringologia</li>
						<li>Pediatria</li>
						<li>Psiquiatria</li>
						<li>Urologia</li>
					</ul>		

				</div>

			</div>

		</div>

	</section>



	<!--<section id="nossasunidades"></section>-->

	<?php $txt_btn_planos = "Saiba Mais"; ?>

	<section id="planos">

		<section class="plano1 plan-block">

			<header>
				<h3>Plano Smart 16H</h3>
				<p>Inicie seus atendimentos de uma forma inteligente com o plano  Smart 16h</p>
			</header>

			<section class="content-livings">
				<div class="container">
					<div class="row">
						<div class="living-blocks col-xs-11 center-x">
							
							<!--<p>Proin mollis et tortor ut fringilla. Mauris at rhoncus lacus.<br />
							Sed finibus, lorem in varius imperdiet</p>-->

							<div class="owl-carousel owl-theme">
								
								<!--sala-->
								<div class="item">																
									<h4>Sala com até 13 m²</h4>
									<div class="block 1-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 40,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 17 m²</h4>
									<div class="block 2-plano active">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 45,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 20 m²</h4>
									<div class="block 3-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 55,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</section>

		





		<section class="plano2 plan-block">

			<header>
				<h3>Plano Essential 32h</h3>
				<p>Atenda seus pacientes sem preocupação de horário com o plano Essential 32h</p>
			</header>

			<section class="content-livings">
				<div class="container">
					<div class="row">
						<div class="living-blocks col-xs-11 center-x">
							<!--<p>Proin mollis et tortor ut fringilla. Mauris at rhoncus lacus.<br />
							Sed finibus, lorem in varius imperdiet</p>-->

							<div class="owl-carousel owl-theme">

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 13 m²</h4>
									<div class="block 1-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 36,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>



								<!--sala-->
								<div class="item">																
									<h4>Sala com até 17 m²</h4>
									<div class="block 2-plano active">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 40,50/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>


								<!--sala-->
								<div class="item">																
									<h4>Sala com até 20 m²</h4>
									<div class="block 3-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 49,50/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</section>
		</section>



		<section class="plano3 plan-block">

			<header>
				<h3>Plano Advance 64h</h3>
				<p>Fique sempre à frente com maior Flexibilidade de horário para atender seus pacientes com o plano Advance 64h</p>
			</header>

			<section class="content-livings">
				<div class="container">
					<div class="row">
						<div class="living-blocks col-xs-11 center-x">

							<div class="owl-carousel owl-theme">

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 13 m²</h4>
									<div class="block 1-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 34,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 17 m²</h4>
									<div class="block 2-plano active">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 38,25/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 20 m²</h4>
									<div class="block 3-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 46,75/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
		</section>



		<section class="plano4 plan-block">

			<header>
				<h3 class="destaque">Plano Infinity 128h</h3>
				<p>Uma Infinidade de horários para atender seus pacientes da melhor forma possível com o plano Infinity 128h</p>
			</header>

			<section class="content-livings">
				<div class="container">
					<div class="row">
						<div class="living-blocks col-xs-11 center-x">
							
							<!--<p>Proin mollis et tortor ut fringilla. Mauris at rhoncus lacus.<br />
							Sed finibus, lorem in varius imperdiet</p>-->

							<div class="owl-carousel owl-theme">

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 13 m²</h4>
									<div class="block 1-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 32,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 17 m²</h4>
									<div class="block 2-plano active">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 36,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>

								<!--sala-->
								<div class="item">																
									<h4>Sala com até 20 m²</h4>
									<div class="block 3-plano">
										<div class="block-content">
											<ul>
												<li><p>Agenda online;</p></li>
												<li><p>Recepcionistas;</p></li>
												<li><p>Mobiliario completo;</p></li>
												<li><p>Isento de IPTU, conta de água e luz;</p></li>
												<li><p>Serviço de copeira e limpeza;</p></li>
												<li><p>Sistema para gerenciamento de consultas e pacientes;</p></li>
												<li><p>Marketing e divulgação para trazer mais pacientes;</p></li>
												<li><p>Segurança 24 horas;</p></li>
											</ul>
											<p><span>R$ 44,00/hora</span></p>
											<div class="mask"></div>
										</div>

										<span class="block-link"><?php echo $txt_btn_planos ?></span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!--call to action 30 days-->

	<section id="call-to-action_30days">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 center-x">
					<img src="<?php bloginfo('template_url') ?>/images/selo-garantia.png" alt="30 dias para chamar de seu!" title="30 dias para chamar de seu!" style="max-width: 250px; margin-bottom: 30px" />
					<h3><span>30 dias</span> para chamar de seu!</h3>
					<p>Estamos certos de que com o <span>JM Consultórios compartilhados você vai economizar e melhorar seus rendimentos.</span> Pensando nisso estamos oferecendo uma garantia incondicional de 30 dias, nos contratos firmados de 3 meses.</p>
				</div>
			</div>
		</div>
		
	</section>

	<!--forms planos -->

	<div id="boxplanos" class="lightbox">
		<div class="center-all">
			<div class="box col-lg-6 center-x">

				<h2>Insira seus dados e selecione o plano que combina com você</h2>
				<span class="closed"></span>
				<div id="jm-consultorios-planos-79a38ffce6f9ce331547"></div>
			</div>
			<div class="mask"></div>
		</div>
	</div>
	
<?php get_footer(); ?>