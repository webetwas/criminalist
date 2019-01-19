        <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <span class="copyright-text">Copyright &copy <?php echo date('Y');?> Cabinet Expert Criminalist |
                            website realizat de <a href="http://www.webetwas.ro">WebEtwas</a></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Expert-Criminalist-1502249906563857/" class="social-link fb" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="" class="social-link twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="social-link instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends -->
        <!-- site content ends here -->


        <!-- scripts goes here -->
       
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/js/bootstrap.min.js"></script>
        <!-- <script src="assets/js/jquery.easing.min.js"></script> -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scrolling-nav.js"></script>

        <!-- theme scripts -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vegas/vegas.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/parallax.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl-carousel/owl.carousel.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyD_KzWTEUamporvI2DqK0dTRjRLDf4xsd4"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/countdown/jquery.countdown.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/counterup/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/smoothscroll.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.inview.min.js"></script>
        <!-- scripts ends here-->


        <!-- Modal EXPERTIZA GRAFICA-->
        <div class="modal fade" id="EXPERTIZAGRAFICA" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">EXPERTIZA GRAFICA SI TEHNICA A DOCUMENTELOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> 
          <?php if (have_rows('titlu_activitate_domeniu')) { 
            while(have_rows('titlu_activitate_domeniu')) { the_row(); ?>
                <div class="modal-body">
                  <?php the_sub_field('descriere_activitate') ?>
                </div>
                <div class="modal-footer">
                  <div class="col-md-6">
                      <a href="tel:0744 861 588" class="btn btn-primary">Suna</a>
                  </div>
                  <div class="col-md-6">
                      <a type="button" class="btn btn-primary" data-dismiss="modal">Close</a>
                  </div>
                </div>

           <?php }
              }?>

            </div>
          </div>
        </div>
        <!-- Modal EXPERTIZA GRAFICA-->



        <!-- Modal EXPERTIZA bibliografie-->
        <div class="modal fade" id="bibliografie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle"><strong>Bibliografie: Col.(r) TUDOREL POPESCU</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <ul>
                    <strong>Data nasterii</strong>: 17.04.1963 in mun. Brasov<br />
                    <strong>Domiciliu</strong>: Focsani, Vrancea<hr>
                    <strong>STUDII</strong>
                    <li>Academia de Politie Al.I.Cuza Bucuresti, profil Criminalistica - promotia 1989</li>
                    <li>Facultatea de Drept din cadrul Universitatii Al.I.Cuza Iasi - promotia 1998</li>
                    <li>Studii Postuniversitare de Specializare (2000-2001) la Universitatea Bucuresti - Facultatea de Drept, profil Știinte penale - criminalistica, coordonator prof. univ. dr. Emilian Stancu</li>
                    <li>Examen de atestare ca Expert Criminalist Autorizat la Institutul National de Criminalistica Bucuresti (2003) si autorizat de Ministerul Justitiei conform Ordonantei Guvernului nr. 75/2000 si a Legii 488/2002, (publicat in Monitorul Oficial nr. 4482/16.12.2011, part.IV).</li>
                    <li>Curs de formare privind managementul calitatii pentru laboratoarele criminalistice acreditate, in conformitate cu ISO/IEC 17025:2005, ILAC G19 si ISO 19011:2011 - Bucuresti 2013</li>
                    <li>Curs instructori-formatori cu tema: "Educatia comportamentala in probleme de politie, Purtarea in momente conflictuale pe baza Analizei Tranzactionale" organizat de SWISS POLICE INSTITUTE, SWISS AGENCY FOR DEVELOPAMENT AND COOPERATION - Malans 30 septembrie 2005</li>
                </ul>

                <ul>
                    <strong>EXPERIENTA PROFESIONALA</strong>
                    <li>1989 - 2016 - Inspectoratul Judetean de Politie Vrancea, Serviciul de criminalistica cu activitate in  Investigarea tehnico-stiintifica a locului faptei si Expertiza criminalistica</li>
                    <li>Efectuare audit intern la laboratoarele acreditate conform ISO 17025:2005 din tara</li>
                    <li>Predare cursuri de Analiza Tranzactionala cu cadrele de Politie din Judetele Vrancea si Braila</li>
                    <li>2016 - trecere in rezerva cu gradul de Colonel</li>
                </ul>
              </div>
              <div class="modal-footer">
                <div class="col-md-6">
                    <a href="tel:0744 861 588" class="btn btn-primary">Suna</a>
                </div>
                <div class="col-md-6">
                    <a type="button" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal EXPERTIZA bibliografie-->

    </body>
</html>