<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();
$view->page_start(array('title' => "License Agreement"));
?>

      <div role="main" class="main">

        <section class="block-pth">
          <div class="container">
            <h2>End-User License Agreement (the “Agreement”)</h2>
            <p>(Version date: March 1, 2022)</p>

            <p>Please read this End-User License Agreement (“Agreement”) carefully before clicking the “I Agree” button, downloading or using PR Comply application (the “Application”). <br>
            References to “you” in this Agreement shall mean the user of the Application.<br>
            By clicking the “I Agree” button, downloading or using the Application, you are agreeing to be bound by the terms and conditions stated in this Agreement.<br>
            If you do not agree to the terms of this Agreement, do not click on the “I Agree” button and do not download or use the Application.</p>
            
            <h6>License</h6>
            
            <p>MERCHANT SERVICES LLC (“MSPR”) hereby grants you a revocable, non-exclusive, non-transferable, limited license to download, use and install the Application solely for your business use, and strictly in accordance with the terms of this Agreement.</p>
            
            <h6>Restrictions</h6>
            
            <p>You agree not to, and you shall not permit others except those employed by you or within your organization to:</p>
            
            <ul class="list-default">
              <li>a) license, sell, rent, lease, assign, distribute, transmit, host, outsource, disclose or otherwise commercially exploit the Application or make the Application available to any third party.</li>
              <li>b) Reverse engineer, decompile or disassemble the Application.</li>
            </ul>
            
            <h6>Modifications to Application</h6>
            
            <p>MSPR reserves the right to modify, suspend or discontinue, temporarily or permanently, the Application or any service to which it connects, with or without notice and without liability to you.</p>
            
            <h6>Term and Termination</h6>
            
            <p>This Agreement shall remain in effect until terminated by you or by MSPR. MSPR may, in its sole discretion, at any time and for any or no reason, suspend or terminate this Agreement with or without prior notice.</p>
            
            <p>This Agreement will terminate immediately, without prior notice from MSPR in the event that you fail to comply with any provision of this Agreement. You may also terminate this Agreement by deleting the Application and all copies thereof from your devices.</p>
            
            <p>Upon termination of this Agreement, you shall cease all use of the Application and delete all copies of the Application from your devices.</p>
            
            <h6>Limitation of Liability</h6>
            
            <p>IN NO EVENT SHALL EITHER PARTY BE LIABLE TO THE OTHER PARTY FOR ANY EXEMPLARY, PUNITIVE, SPECIAL, INDIRECT, CONSEQUENTIAL, REMOTE OR SPECULATIVE DAMAGES (INCLUDING IN RESPECT OF LOST PROFITS, BUSINESS INTERRUPTION OR REVENUES), HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY (INCLUDING NEGLIGENCE) ARISING IN ANY WAY OUT OF ANY PROVISION OF THIS AGREEMENT, WHETHER OR NOT SUCH PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR KNOWN DEFECTS.</p>
            
            <h6>No Warranties</h6>
            
            <p>MSPR and its affiliates expressly disclaim any warranty for the Application. The Application and any related documentation and product is provided “as is” without warranty of any kind, either express or implied, including, without limitation, the implied warranties or merchantability of fitness for a particular purpose or noninfringement. The entire risk out of use or performance of the Application remains on you.</p>
            
            <h6>Indemnification</h6>
            
            <p>Each party shall indemnify the other party against all losses and expenses arising out of any proceeding brought by either a third party and or arising out of user’s breach of its obligations, representations, warranties, or covenants under this agreement or arising out of the user’s willful misconduct or gross negligence.</p>
            
            <h6>Notice and Failure to Notify</h6>
            
            <p>Notice Requirement. Before bringing a claim for indemnification, the user shall notify MSPR of the indemnifiable proceeding, and deliver to MSPR all legal pleadings and other documents reasonably necessary to indemnify or defend the indemnifiable proceeding.</p>
            
            <p>Failure to Notify. If the user fails to notify MSPR of the indemnifiable proceeding, the indemnifying will be relieved of its indemnification obligations to the extent it was prejudiced by the user’s failure.</p>
            
            <h6>Copyright</h6>
            
            <p>All title and copy rights in and to the Application and related documentation and product (including but not limited to any images, photographs, clipart, libraries and examples incorporated in the Application), and any copies of the Application, are owned by MSPR. The Application is protected by copyright laws and international treaty provisions. Therefore, you must treat the Application and related material like any other copyrighted material.</p>
            
            <h6>Governing Law</h6>
            
            <p>This Agreement shall be governed by and construed in accordance with the laws of the State of New York, without regard to the conflicts of law rules of such state.</p>
            
            <h6>Severability</h6>
            
            <p>If any provision of this Agreement is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
            
            <h6>Amendments to this Agreement</h6>
            
            <p>MSPR reserves the right, at its sole discretion, to modify or replace this Agreement at any time. If a revision is material we will provide at least thirty days’ notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
            
            <h6>Contact Information</h6>
            
            <p>If you have any questions about this Agreement, please contact us at info@merchantservicespr.com</p>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>