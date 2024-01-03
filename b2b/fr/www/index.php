<?php
require_once "php/scripts/view.class.php";

$view = new ViewControl();
$view->page_start("B2B Funding");
?>

      <div role="main" class="main">
        <section class="hero">
          <div class="container">
            <div class="hero-content-wrap">
              <div>
                <h1>Nous simplifions <br>le financement <br>des entreprises!</h1>
                <ul class="circle-check-bullets">
                  <li>Pré-approbation en quelques secondes</li>
                  <li>Argent déposé le même jour</li>
                  <li>Sécuritaire et confidentiel</li>
                </ul>
                <a href="https://merchantservices.secure.force.com/B2BApplicationForm " class="btn">Get started now</a>
              </div>
            </div>
          </div>
        </section>
        
        <section class="steps-section" id="our-process">
          <div class="container">
            <h2>Notre processus</h2>
            <div class="steps-wrap">
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-01.png)"></div>
                <h4>Demander un prêt</h4>
                <p>Remplissez et envoyez le formulaire d’inscription. <br>
                Ceci prendra quelques minutes et c’est sans frais ni obligation.<br>
                <a href="#start-now" class="form-popup icon-link">Commencer maintenant <i class="material-icons">keyboard_arrow_right</i></a></p>
              </div>
              
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-02.png)"></div>
                <h4>Obtenez une pré-approbation le même jour</h4>
                <p>Une fois que nos représentants aient analysé votre inscription en ligne, nous vous offrirons le taux de financement le même jour. <br>
                Nous vous informerons sur les meilleurs prix et termes pour votre demande de financement le plus tôt possible.</p>
              </div>
              
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-03.png)"></div>
                <h4>Financement!</h4>
                <p>Vous recevrez vos fonds en quelques jours ou moins.<br>
                Ceci complétera la demande de financement avec nous.<br>
                Obtenez du financement aujourd’hui!</p>
              </div>
            </div>
            <div class="cta-btn-wrap"><a href="#start-now" class="btn form-popup">Commencez maintenant</a></div>
          </div>
        </section>
        
        <section class="icon-info-section" id="qualify" style="background-image:url(img/qualify-bg.jpg)">
          <div class="container">
            <h2>Est-ce que mon entreprise qualifie?</h2>
            <p class="sub-header-sm">Nos exigences de financement sont simples et faciles.<br>
            Vous aurez besoin de répondre aux critères minimums suivants:</p>
            <div class="icon-info-wrap row">
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Vous devez être un propriétaire d’entreprise</h4>
              </div>
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Votre entreprise doit être incorporée depuis 4 mois ou plus</h4>
              </div>
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Votre entreprise doit générer 10 000$ ou plus de revenus annuels</h4>
              </div>
            </div>
            <p>Nous financerons votre entreprise même si une banque a refusé de vous financer ou si vous n'avez pas de plan d’affaires ni de garanties.<br> 
            Notre philosophie est d'approuver une compagnie selon la vue d’ensemble et non seulement sa cote de crédit.</p>
          </div>
        </section>
        
        <section class="border-tile-section" id="funding-programs">
          <div class="container">
            <h2 class="header-small">Programmes de financement</h2>
            <p class="sub-header">Deux programmes de financement flexibles</p>
            <div class="bt-wrap row">
              <div class="col-xs-6">
                <div class="border-tile">
                  <div class="bt-header"></div>
                  <div class="bt-body">
                    <div class="btb-info">
                      <h5>Avance de fonds</h5>
                      <p>La quantité approuvée est basée sur votre volume de transactions traitées mensuellement.</p>
                      <p>Nous achetons vos traitements de créances futures à rabais, vous offrant des fonds dès aujourd’hui.</p>
                      <ul>
                        <li>Utilisez votre compte de traitement de paiements pour repayer l’avance de fonds.</li>
                        <li>Les montants approuvés sont déterminés en utilisant les données marchandes, les relevés bancaires et les informations de l’entreprise inscrite sur votre demande.</li>
                        <li>Vous êtes admissible au refinancement lorsque vous avez repayé 60% du montant total.</li>
                      </ul>
                    </div>
                    <a href="#start-now" class="form-popup icon-link" data-program="MCA">Commencer maintenant <i class="material-icons">keyboard_arrow_right</i></a>
                  </div>
                </div>
              </div>
              
              <div class="col-xs-6">
                <div class="border-tile">
                  <div class="bt-header"></div>
                  <div class="bt-body">
                    <div class="btb-info">
                      <h5>Versement anticipé total</h5>
                      <p>Le montant approuvé se base sur le volume des dépôts mensuels sur votre compte chèques.</p>
                      <ul>
                        <li>Nous achetons vos futurs dépôts bancaires à recevoir à rabais, vous offrant des fonds dès aujourd’hui.</li>
                        <li>Utilisez vos comptes à recevoir futurs.</li>
                        <li>Les montants approuvés sont déterminés selon les 4 derniers mois de transactions.</li>
                        <li>Les avances de fonds sont remboursées avec un paiement fixe CCA quotidien de votre compte chèques, du lundi au vendredi.</li>
                        <li>Vous pouvez refinancer lorsque vous avez atteint 60% du montant à repayer.</li>
                      </ul>
                    </div>
                    <a href="#start-now" class="form-popup icon-link" data-program="TDA">Commencer maintenant <i class="material-icons">keyboard_arrow_right</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="info-section" id="about-us" style="background-image:url(img/about-bg.png)">
          <div class="container">
            <h2>À propos</h2>
            <div class="row is-wrap">
              <div class="col-md-6">
                <h3>Notre objectif est simple. Nous sommes ici pour financer vos objectifs d'affaires!</h3>
              </div>
              <div class="col-md-3 col-xs-6">
                <h6>Notre philosophie</h6>
                <p>Nous aspirons à vous offrir les meilleurs choix de financement basés sur le potentiel et la solidité financière de votre entreprise. Nous ne nous préoccupons pas si la banque a refusé de vous fournir de l’aide financière. Nous ne vous demanderons jamais de garanties personnelles; nous offrons plutôt des options de remboursement flexibles. Nous nous efforçons sans cesse afin de vous offrir une expérience plus novatrice, plus simple et plus rapide.</p>
              </div>
              <div class="col-md-3 col-xs-6">
                <h6>Qui sommes-nous?</h6>
                <p>Notre compagnie est composée de professionnels du marketing parmi les plus intelligents, centrés et ayant le plus de succès au monde. Nous sommes passionnés par la réussite des entreprises, et nous savons à quel point il faut travailler fort pour y arriver. Nous voulons voir plus d’entrepreneurs réaliser leurs rêves, et nous voulons voir croître le monde des affaires. C'est pourquoi nous sommes là pour vous aider!</p>
              </div>
            </div>
          </div>
        </section>
        
        <?php $view->show_contact_tile(); ?>
      </div>
      
      <div class="zoom-anim-dialog form-dialog form-tile mfp-hide" id="start-now">
        <h4>Soyez pré-approuvé pour jusqu’à $500,000</h4>
        <p>Veuillez remplir le formulaire ci-dessous</p>
        <form class="contact-form">
          <input type=hidden name="lang" value="fr">

          <div class="form-group">
            <input type="text" class="form-control" name="name" required>
            <span class="m_placeholder">Nom complet</span>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" required maxlength="80">
            <span class="m_placeholder">Courriel</span>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" required maxlength="40">
            <span class="m_placeholder">Téléphone</span>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="company" required maxlength="40">
            <span class="m_placeholder">Entreprise</span>
          </div>
          <input type="hidden" name="program">
          <div class="form-group fg-mt">
            <button type="submit" class="btn" data-loading-text="Processing…">Commencer maintenant</button>
          </div>
        </form>
      </div>

<?php
$view->page_end();
?>