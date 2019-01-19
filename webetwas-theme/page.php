<?php
	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package webetwas-theme
	 */

	get_header();
?>
<style>
	
	.features-col-description ul li {
		display: none;
	}
	.features-col-description ul li:first-of-type {
		display: inline-block;
	}
	.features-col-description strong {
		display: none;
	}


</style>
<!-- aici aducem pagnina home -->
<!-- about us -->
<section class="main-section" id="aboutus">
    <div class="container">
        <div class="row text-center section-heading">
            <div class="col-md-12">
                <h1><?php the_field('titlu_despre_noi');?></h1>
                <hr>
            </div>
        </div>
        <div class="row about-row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <span class="icon fa fa-star" data-animation="slideInUp"></span>
                    <?php the_field('descriere1');?>
                </div>
                <div class="col-md-6">
                    <span class="icon fa fa-clock-o" data-animation="slideInUp"></span>
                    <?php the_field('descriere2');?>
                </div>
                <div class="col-md-12 text-center">
                    <img src="<?php the_field('imagine_despre_noi');?>" alt="logo expert criminalist focsani"/>
                    	</div>
                    <div class="col-md-12">
                        <span class="icon fa fa-lightbulb-o col-xs-12" data-animation="slideInUp"></span>
                        <?php the_field('descriere3');?>
                    </div>
                </div> <!-- end list icons -->
            </div> <!-- end about-row -->
        </div>
</section>
<!-- about us ends -->
<!-- statistics  -->
<section id="statistics">
    <div class="parallax-window section-background" data-parallax="scroll" data-image-src="assets/images/statistics.jpg">
        <div class="container">
            <div class="row stats-row">
                <div class="col-md-4 col-sm-4">
                    <div class="stats">
                        <div class="stats-icon">
                            <span class="fa fa-level-up"></span>
                        </div>
                        <div class="stats-count">
                            <span class="counter-up"><?php the_field('cantitate_statistici1');?></span>
                        </div>
                        <div class="stats-caption">
                            <?php the_field('denumire_statistici1');?>
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
                <div class="col-md-4 col-sm-4">
                    <div class="stats">
                        <div class="stats-icon">
                            <span class="fa fa-smile-o"></span>
                        </div>
                        <div class="stats-count">
                            <span class="counter"><?php the_field('cantitate_statistici2');?></span>
                        </div>
                        <div class="stats-caption">
                            <?php the_field('denumire_statistici2');?>
                        </div>
                    </div>
                </div><!-- end col md 3 -->
                <div class="col-md-4 col-sm-4">
                    <div class="stats">
                        <div class="stats-icon">
                            <span class="fa fa-coffee"></span>
                        </div>
                        <div class="stats-count">
                            <span class="counter"><?php the_field('cantitate_statistici3');?></span>
                        </div>
                        <div class="stats-caption">
                            <?php the_field('denumire_statistici3');?>
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
            </div> <!-- end stats row -->
        </div> <!-- end container -->
    </div> <!-- end section background -->
</section>
<!-- statistics ends  -->
<!-- features -->
<section class="main-section" id="features">
    <div class="container">
        <div class="row text-center section-heading">
            <div class="col-md-12">
                <h1>Domenii de activitate</h1>
                <hr>
            </div>
        </div>
        <div class="row features-row">
            <?php
			 var_dump(have_rows('titlu_activitate_domeniu', $post_id)); 

						if( have_rows('titlu_activitate_domeniu') ) { 
				    while ( have_rows('titlu_activitate_domeniu') ) { the_row();  ?>
	            <div class="col-md-6 col-sm-6">
	                <div class="features-col" data-animation="fadeInDown">
	                    <div class="features-col-icon">
	                        <span class="fa fa-eye"></span>
	                    </div>
	                    <div class="features-col-title">
	                        <h4><?php the_sub_field('titlu_activitate'); var_dump(get_sub_field('titlu_activitate')->id);?></h4>
	                    </div>
	                    <div class="features-col-description">
                        <?php 
                        	$activitate=get_sub_field('descriere_activitate');
                         echo $activitate;
                         ?>

	                    </div>
	                    <div class="col-md-4 pull-right">
	                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#EXPERTIZAGRAFICA">Citeste mai mult</a>
	                    </div>
	                </div>
	            </div>
             <?php 
           }
          }
				?>

        </div>
    </div>
</section>
<!-- features ends -->
<!-- subscribe -->
<section id="subscribe">
    <div class="parallax-window section-background" data-parallax="scroll" data-image-src="assets/images/subscribe.jpg">
        <div class="container">
            <div class="row subscribe-row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <form role="form">
                        <div class="row text-center">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="introdu email-ul tau" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" data-animation="bounceInUp">ABONATI-VA</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe ends -->
<!-- about us -->
<section class="main-section" id="legislation">
    <div class="container">
        <div class="row text-center section-heading">
            <div class="col-md-12">
                <h1>Legislatie</h1>
                <hr>
                <h4>Extras din Ordonanta 75/24.08.2000 privind autorizarea expertilor criminalisti </h4>
            </div>
        </div>
        <div class="row about-row">
            <div class="col-md-12">
                <ul class="list-icons">
                    <li>
                        <h4 class="list-title">Art. 1 alin. 2 </h4>
                        <p class="list-description">La efectuarea expertizelor criminalistice de catre experti oficiali, pot participa si experti numiti de organele judiciare, la cererea partilor si recomandati de acestea, autorizati in conditiile prezentei ordonante.</p>
                    </li>
                    <li>
                        <h4 class="list-title">Art. 7 alin. 1</h4>
                        <p class="list-description">Expertii autorizati, numiti de organele judiciare, la cererea partilor, participa personal la efectuarea expertizelor prin observatii cu privire la obiectul expertizei, modificarea sau completarea acestuia, verificarea si completarea materialului necesar pentru efectuarea expertizei, precum si prin obiectii la raportul de expertiza, adresate organului judiciar.</p>
                    </li>
                    <li>
                        <h4 class="list-title">Art. 7 alin. 2</h4>
                        <p class="list-description">Participarea expertilor autorizati numiti de organele judiciare se consemneaza in partea introductiva a raportului de expertiza intocmit de expertul oficial.</p>
                    </li>
                    <li>
                        <h4 class="list-title">Art. 7 alin. 3</h4>
                        <p class="list-description">Expertii autorizati, numiti de organele judiciare, la cererea partilor si recomandati de acestea, au dreptul sa ia cunostinta de materialul dosarului, necesar pentru efectuarea expertizei.</p>
                    </li>
                    <li>
                        <h4 class="list-title">Art. 8 alin. 1</h4>
                        <p class="list-description">Partea din proces care solicita ca, pe linga expertul oficial, sa participe la efectuarea expertizei si un expert criminalist autorizat recomandat de ea, va achita acestuia un onorariu de comun acord. </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <p class="list-description">Codul de procedura penala cu privire la dreptul expertului recomandat de parti sa participe la efectuarea expertizei efectuata de expertul desemnat de a efectua expertiza.</p>
            </div>
            <!-- end list icons -->
            <!-- <div class="col-md-6 about-image">
                        <img src="assets/images/about.jpg" alt="Image description"/>
                    </div> -->
        </div> <!-- end about-row -->
    </div>
</section>
<!-- about us ends -->
<!-- team -->
<section class="main-section" id="team">
    <div class="container">
        <div class="row text-center section-heading">
            <div class="col-md-12">
                <h1>ECHIPA</h1>
                <hr>
            </div>
        </div> <!-- end section heading -->
    </div>
    <div class="row no-gutters" style="margin-left: 0; margin-right: 0;">
        <div id="meet-team">
            <div class="team-member">
                <div class="member-picture">
                    <img src="assets/images/expert-criminalist-popescu-tudorel.jpg" class="img-responsive" />
                            </div>
                    <div class="member-description">
                        <h4 class="member-name">TUDOREL POPESCU</h4>
                        <p class="member-title">Expert Criminalist</p>
                        <a href="" data-toggle="modal" data-target="#bibliografie">Bibliografie</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- end container -->
</section>
<!-- team ends -->
<!-- contact -->
<section id="contact">
    <div class="contact-row">
        <div class="row no-gutters">
            <div class="row text-center contact-heading">
                <div class="col-md-12">
                    <h1>CONTACT</h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features-col" data-animation="fadeInUp">
                    <div class="features-col-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="features-col-title">
                        <h4>Persoana contact: </h4>
                    </div>
                    <div class="features-col-description">
                        <p><strong>Col.(r) TUDOREL POPESCU</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features-col" data-animation="fadeInUp">
                    <div class="features-col-icon">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="features-col-title">
                        <h4>Telefon: </h4>
                    </div>
                    <div class="features-col-description">
                        <p><strong>0744 861 588</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features-col" data-animation="fadeInUp">
                    <div class="features-col-icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="features-col-title">
                        <h4>Email: </h4>
                    </div>
                    <div class="features-col-description">
                        <p><strong>tedypops@yahoo.com</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div id="map-marker" style="width: 100%; height: 600px;"></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row text-center contact-heading">
                    <div class="col-md-12">
                        <h1>Trimite mesaj</h1>
                        <hr>
                    </div>
                </div>
                <div class="contact-form" name="contactform" method="post" action="send_form_email.php">
                    <!-- end section heading -->
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" maxlength="50" placeholder="Introdu numele" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" maxlength="80" placeholder="Introdu prenume" />
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="telephone" maxlength="30" placeholder="Introdu telefon" required />
                        </div>
                        <div c <div class="form-group">
                            <input type="email" class="form-control" name="email" maxlength="80" placeholder="Introdu email" required />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="comments" placeholder="Scrie un mesaj" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" data-animation="fadeInUp">TRIMITE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact ends -->
<!-- aici aducem pagnina home -->
<?php
	get_footer();