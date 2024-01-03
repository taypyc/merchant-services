<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();

$target = (isset($_GET['target'])) ? trim($_GET['target']) : false;
$title = 'General FAQ';
$tile = 'general';
$faq_general = ' class="active"';
$faq_cash_discount = '';
$faq_credit_surcharge = '';
$faq_business_financing = '';
$faq_equipment = '';

if($target !== false) {
  $faq_general = '';
  if($target === 'cash-discount') {
    $title = 'Cash Discount FAQ';
    $tile = 'cash-discount';
    $faq_cash_discount = ' class="active"';
  } else if($target === 'business-financing') {
    $title = 'Business Financing FAQ';
    $tile = 'business-financing';
    $faq_business_financing = ' class="active"';
  }/* else if($target === 'equipment') {
    $title = 'Equipment FAQ';
    $tile = 'equipment';
    $faq_equipment = ' class="active"';
  }*/ else {
    header('Location: ' . $view->site_root . 'faq', true, 301);
  }
}

$view->page_start(array('title' => $title . ' | Slice'));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-01"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Frequently asked questions</h1>
              </div>
              <div class="tile-content">
                <div class="row">
                  <div class="col-12 col-md-4 text-center">
                    <ul class="list-links-lg list-links-lg-dib">
                      <li><a href="faq"<?php echo $faq_general; ?>>General FAQ</a></li>
                      <li><a href="faq/cash-discount"<?php echo $faq_cash_discount; ?>>Cash Discount FAQ</a></li>
                      <li><a href="faq/business-financing"<?php echo $faq_business_financing; ?>>Business Financing FAQ</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-8">
                    <div class="collapse-info-wrap">
                      <?php if($tile === 'general'): ?>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">How long does the approval process take?</div>
                        <div class="ciw-item-info"><p>Once your application is complete, the processing time is usually 24 hours or less, especially if we receive your application before noon EST. If approved, we will ship your terminal equipment or software promptly.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">How soon will I get my money after the transaction is processed?</div>
                        <div class="ciw-item-info"><p>Visa, MasterCard, and Discover transactions are deposited next business day depending on the type of business.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Do I need a business license to obtain a merchant account?</div>
                        <div class="ciw-item-info"><p>You do not necessarily need to have a business license if you can provide a different acceptable documentation item that is required. These items vary depending upon the level of risk associated with your business.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Do I need a business checking account to obtain a merchant account?</div>
                        <div class="ciw-item-info"><p>You only need a business checking account if your business is set up as a corporation. If it is a sole proprietorship, you may use a personal checking account or a business checking account.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Do I need to have an American Express or Discover account before I apply?</div>
                        <div class="ciw-item-info"><p>No, you do not. We can do all this for you.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What is the discount rate?</div>
                        <div class="ciw-item-info"><p>The discount rate is the fee that a merchant pays to the acquirer for processing services that enable the merchant to accept bankcards as payment. Our discount rates are extremely competitive. If we can’t beat you current rate, Slice will give you a $100 gift card.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What is Interchange Fee?</div>
                        <div class="ciw-item-info"><p>A fee paid by an acquirer to an issuer for transactions entered into interchange. The interchange fee is a percentage applied, according to Visa/MasterCard regulations, to the dollar value of each transaction. There are multiple categories of interchange, and Visa and MasterCard each have their own criteria for their own categories. A transaction must meet the specified criteria for a category in order for that category's rate to be applied. Each transaction is evaluated individually, so various interchange rates may apply within one batch of merchant transactions.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What is NPF?</div>
                        <div class="ciw-item-info">
                          <p>The Visa Network Participation Fee / Fixed Acquirer Network Fee applies to all settled (batched out) U.S issued Visa credit card and Visa debit card transactions processed by a U.S. based merchant. <br>
                          The fee will be billed on one line item and one amount on the merchant’s month end statement with a descriptor of “Visa NPF” for TSYS merchants. <br>
                          The fee amount will vary from merchant to merchant and is calculated by Visa based on a number of factors including: </p>
                          <ul class="list-default">
                            <li>Number of Tax ID’s</li>
                            <li>Card Present vs. Card Not Present</li>
                            <li>Merchant Category Codes (MCC)</li>
                            <li>Number of Locations</li>
                            <li>Visa Gross Monthly Sales Volume</li>
                          </ul>
                          <p>If a merchant does not process any Visa cards during the month, a minimum fee of $3.00 is still charged to the merchant.</p>
                        </div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Do I have to be PCI compliant?</div>
                        <div class="ciw-item-info"><p>Yes. Anyone who accepts credit card payments needs to comply with PCI-DSS rules.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What are the charges for PCI compliance?</div>
                        <div class="ciw-item-info"><p>When you have a merchant account with us, we provide free PCI compliance validation. Please call <?php echo $view->i['mobile']; ?> for assistance.</p></div>
                      </div>
                      <?php elseif($tile === 'cash-discount'): ?>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What is the Slice Cash Discount Program?</div>
                        <div class="ciw-item-info"><p>The Slice Cash Discount Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What kind of businesses can use Slice?</div>
                        <div class="ciw-item-info"><p>Just about any business that accepts credit cards can benefit from Slice. From auto repair shops and daycare centers to retail establishments and professionals like doctors, lawyers, dentists and accountants, Slice can put more money in your pocket every month — a lot of it!</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What do I need to get started with Slice?</div>
                        <div class="ciw-item-info"><p>This is the fun part. We’ll send you everything you need in one handy package. You’ll receive a payment terminal, along with signage for your front door and terminal area explaining the discount for cash-paying customers. You’ll also receive free training, as will your sales staff. You’ll also receive a great gift while supplies last.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">OK, I really like the idea of Slice. What do I do now?</div>
                        <div class="ciw-item-info"><p>Just give us a call and one of our representatives will help you get started. Unfortunately, our representatives are unable to accept really expensive gifts, so a simple “Thanks for your help!” will suffice.<br>
                        <strong>Call us at <?php echo $view->i['mobile']; ?></strong>.<br>
                        Welcome to the Slice family of smart merchants who are saving money every day!</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What if I don't like the Cash Discount Program?</div>
                        <div class="ciw-item-info"><p>We have a 100% satisfaction guarantee. If for any reason you want to stop using Cash Discount Program, we will immediately change you back to traditional interchange pricing. We got you covered!</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Who else is using the Cash Discount Program?</div>
                        <div class="ciw-item-info"><p>Slice is new, yet thousands of merchants are already using Slice, and more are signing on every day. Gas stations have been using this program in the US for over 15 years. In addition, many national, state and local governments like the DMV, IRS, Post Offices, Schools and Courts use the cash discount program and new federal regulations now allow merchants to reclaim their fair share of processing fees. <a href="https://www.nerdwallet.com/blog/credit-cards/credit-card-charged-more-gas-station/" target="_blank">Read More</a></p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Do I need to get a PhD to figure this out and set it up?</div>
                        <div class="ciw-item-info"><p>Not at all. We’ve made Slice incredibly easy to order, set up and manage. If you have any questions, just give us a call and one of our super-smart (and very friendly) tech people we mentioned earlier will help you with any questions or concerns.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Is it legal to offer a Cash Discount?</div>
                        <div class="ciw-item-info"><p>As Mitchell Katz, spokesman for the Federal Trade Commission, said in May 2011, “The Dodd-Frank Law prohibits a payment card network such as Visa from inhibiting the ability to provide a discount for payment by cash, checks, debit cards or credit cards… neither surcharging nor cash discounting is illegal.”</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Is there anything you can show me to say that it's legal?</div>
                        <div class="ciw-item-info">
                          <p><strong>From NBCNews.com…</strong><br>
                          Visa, MasterCard in $7.3 billion settlement over credit card fees.<br>
                          <span class="text-color-violet-grey">Plaintiffs attorney Martin Lueck, chairman of the executive board of Robins, Kaplan, said the allowed “surcharge” is actually a pro-consumer provision of the settlement. “Really it’s a discount that the merchants are now allowed to offer for the less expensive form of payments,” he said. He also said merchants would for the first time be allowed to disclose how much it costs them to accept credit cards.</span><br>
                          – Genaro C.Armas, Associated Press; Geoff Mulvihill, Associated Press; Mark Scolforo, Associated Press <br>
                          <a href="https://www.nbcnews.com/business/business-news/visa-mastercard-7-3-billion-settlement-over-credit-card-fees-f881386" target="_blank">CLICK HERE TO READ MORE</a></p>
                          <p><strong>From Washington Post...</strong><br>
                          Judge Approves Visa, Mastercard $5.7 billion settlement with retailers.<br>
                          <span class="text-color-violet-grey">“It will reduce the fees and overall prices that consumers pay, which is good for merchants and consumers,” said Patrick J. Coughlin, one of the merchants’ attorneys and senior trial counsel at Robbins Geller, Rudman & Dowd. “There will be more transparency in the pricing.”</span><br>
                          – Danielle Douglas <br>
                          <a href="https://www.washingtonpost.com/business/economy/us-judge-approves-visa-mastercard-57-billion-credit-card-settlement-with-retailers/2013/12/13/bd42b88c-643a-11e3-aa81-e1dab1360323_story.html" target="_blank">CLICK HERE TO READ MORE</a></p>
                        </div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What will my receipt look like?</div>
                        <div class="ciw-item-info"><p><img src="img/slice-receipt.jpg" alt=""></p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Is this the same as a surcharge?</div>
                        <div class="ciw-item-info"><p>This is not a credit or debit card surcharge program which is not allowed in several states. Slice provides you with a technology that allows you to offer discounts to its customers who chose to pay using cash or check which is allowed in all states.</p></div>
                      </div>
                      <?php elseif($tile === 'business-financing'): ?>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">How can I qualify for a Business Loan or a Business Cash Advance?</div>
                        <div class="ciw-item-info"><p>Slice is not a bank! This allows us to look at the unique financial situation of each of our clients rather than trying to fit each merchant into a pre-existing set of pre-qualifying criteria. At Slice we believe that each merchant has unique needs and qualifying for loans or advances should be based on these unique needs. Contact one of our knowledgeable sales or customer services representatives to determine what type of financial help Slice can offer to your business.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Will my credit score affect my ability to obtain a Business Loan?</div>
                        <div class="ciw-item-info"><p>Although your credit score is one of the factors considered, it is not the only or even the predominant factor considered in determining your eligibility for business loan. Contact one of our sales representatives to discuss your businesses unique needs and how we can help you obtain a business loan.</p></div>
                      </div>
                      <div class="ciw-item">
                        <div class="ciw-item-toggle">Are there any personal guarantees involved in a Business Cash Advance?</div>
                        <div class="ciw-item-info"><p>There are absolutely no personal guarantees given for a business cash advance. The money which is advanced to the merchant is advanced against future credit card transaction.</p></div>
                      </div>
                      <?php elseif($tile === 'equipment'): ?>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">How do I decide what type of terminal to get?</div>
                        <div class="ciw-item-info"><p>Our knowledgeable staff is here to help you make this decision. Taking into consideration such factors as the type of business you run and the volume of your transactions our experience sales representative will help you determine what type of terminal and processing services would be best fitted for your businesses unique needs.</p></div>
                      </div>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">What if I can't afford to purchase a terminal?</div>
                        <div class="ciw-item-info"><p>There is no need to purchase a terminal. Slice offers flexible leasing options to those merchants who cannot afford to purchase the equipment.</p></div>
                      </div>

                      <div class="ciw-item">
                        <div class="ciw-item-toggle">How can I troubleshoot my terminal?</div>
                        <div class="ciw-item-info"><p>Choose your problem from the most common problem sets below and check to see if you have tried each of the solutions listed. If you cannot find the solution here call our customer service help desk.</p>

                        <p>If you have no power first make sure that you are using the correct power cord. If you are try unplugging and plugging the cord back in or try a different outlet. If that does not work, contact our technical support team for further questions.</p>

                        <p>If your terminal is having a hard time reading a particular card, first try to use a different card to ensure to eliminate the card itself as a source of the problem. Once that is complete you should also perform the Card Read Test and reset the terminal if necessary. It’s possible that the problem came from a dirty card swipe. If all else fails, you may need to re-download the unit.</p>

                        <p>If you are having a problem with debit transactions first make sure the key is working in the terminal and also make sure to check the master key location. Check whether the encrypted key sticker is working and if non of these efforts reveal a problem, reset the terminal. Should you have continued difficulties with your terminal, please contact our technical support team.</p></div>
                      </div>

                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>

<?php
$view->page_end();
?>