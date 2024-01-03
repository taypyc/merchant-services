<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Acuerdo de licencia'
];

$view->page_start($head_data);
?>

      <div role="main" class="main">
          <div class="article">
              <div class="container">
                  <h1>
                      Acuerdo de licencia de usuario final (el "Acuerdo")
                  </h1>
                  <p>(Fecha de la versión: 1 de marzo de 2022)</p>
                  <p>Lea detenidamente este Acuerdo de licencia de usuario final ("Acuerdo") antes de hacer clic en el botón "Acepto", descargar o usar la aplicación Cumplimiento PR (la "Aplicación").
                      <br>Las referencias a "usted" en este Acuerdo significarán el usuario de la Aplicación. <br>Al hacer clic en el botón "Acepto", descargar o utilizar la Aplicación, usted acepta estar sujeto a los términos y condiciones establecidos en este Acuerdo.
                      <br>Si no está de acuerdo con los términos de este Acuerdo, no haga clic en el botón "Acepto" y no descargue ni use la Aplicación.</p>
                  <h2 class="text-left">Licencia</h2>
                  <p>Merchant Services LLC d/b/a B2B Merchants le otorga una licencia revocable, no exclusiva, intransferible y limitada para descargar, usar e instalar la Aplicación únicamente para su uso comercial y estrictamente de acuerdo con los términos de este Acuerdo.</p>
                  <h2 class="text-left">Restricciones</h2>
                  <p>Usted acepta y no permitirá que otros, excepto aquellos empleados por usted o dentro de su organización, hagan lo siguiente:</p>
                  <p>a) licenciar, vender, alquilar, arrendar, ceder, distribuir, transmitir, hospedar, subcontratar, divulgar o explotar comercialmente la Aplicación o poner la Aplicación a disposición de terceros.
                      <br>b) Realizar ingeniería inversa, descompilar o desensamblar la Aplicación.</p>
                  <h2 class="text-left">Modificaciones a la Aplicación</h2>
                  <p>Merchant Services LLC d/b/a B2B Merchants se reserva el derecho de modificar, suspender o descontinuar, temporal o permanentemente, la Aplicación o cualquier servicio al que se conecte, con o sin previo aviso y sin responsabilidad hacia usted.</p>
                  <h2 class="text-left">Duración y Terminación</h2>
                  <p>Este Acuerdo permanecerá en vigor hasta que usted o Merchant Services LLC d/b/a B2B Merchants lo rescindan. Merchant Services LLC d/b/a B2B Merchants puede, a su exclusivo criterio, en cualquier momento y por cualquier motivo o sin él, suspender o rescindir este Acuerdo con o sin previo aviso.</p>
                  <p>Este Acuerdo terminará de inmediato, sin previo aviso de Merchant Services LLC d/b/a B2B Merchants, en caso de que usted no cumpla con alguna de las disposiciones de este Acuerdo. También puede rescindir este Acuerdo eliminando la Aplicación y todas las copias de la misma de sus dispositivos.</p>
                  <p>Al finalizar este Acuerdo, deberá dejar de usar la Aplicación y eliminar todas las copias de la Aplicación de sus dispositivos.</p>
                  <h2 class="text-left">Limitación de responsabilidad</h2>
                  <p>EN NINGÚN CASO CUALQUIERA DE LAS PARTES SERÁ RESPONSABLE ANTE LA OTRA PARTE POR DAÑOS EJEMPLARES, PUNITIVOS, ESPECIALES, INDIRECTOS, CONSECUENTES, REMOTOS O ESPECULATIVOS (INCLUYENDO CON RESPECTO A LUCRO CESANTE, INTERRUPCIÓN DE NEGOCIOS O INGRESOS), CUALQUIERA DE SU CAUSA Y SOBRE CUALQUIER TEORÍA DE RESPONSABILIDAD (INCLUYENDO LA NEGLIGENCIA) QUE SURJA DE CUALQUIER MANERA DE CUALQUIER DISPOSICIÓN DE ESTE ACUERDO, SE HAYA ADVERTIDO O NO A DICHA PARTE DE LA POSIBILIDAD DE DICHOS DAÑOS O DEFECTOS CONOCIDOS.</p>
                  <h2 class="text-left">No garantías</h2>
                  <p>Merchant Services LLC d/b/a B2B Merchants y sus afiliados renuncian expresamente a cualquier garantía por la Aplicación. La Aplicación y cualquier documentación relacionada y el producto se proporcionan "tal cual" sin garantía de ningún tipo, ya sea expresa o implícita, incluidas, entre otras, las garantías implícitas o comerciabilidad de idoneidad para un propósito particular o no infracción. Todo el riesgo del uso o rendimiento de la Aplicación recae en usted.</p>
                  <h2 class="text-left">Indemnización</h2>
                  <p>Cada parte indemnizará a la otra parte por todas las pérdidas y gastos que surjan de cualquier procedimiento iniciado por un tercero o que surjan del incumplimiento por parte del usuario de sus obligaciones, representaciones, garantías o convenios en virtud de este acuerdo o que surjan de la voluntad del usuario mala conducta o negligencia grave.</p>
                  <h2 class="text-left">Notificación y falta de notificación</h2>
                  <p>Requisito de notificación. Antes de presentar un reclamo de indemnización, el usuario deberá notificar a Merchant Services LLC d/b/a B2B Merchants del procedimiento indemnizable y entregar a Merchant Services LLC d/b/a B2B Merchants todos los alegatos legales y otros documentos razonablemente necesarios para indemnizar o defender el procedimiento indemnizable.</p>
                  <p>Falta de notificación. Si el usuario no notifica a Merchant Services LLC d/b/a B2B Merchants del procedimiento indemnizable, el indemnizante quedará relevado de sus obligaciones de indemnización en la medida en que haya sido perjudicado por la falta del usuario.</p>
                  <h2 class="text-left">Derechos de autor</h2>
                  <p>Todos los derechos de título y copia en y para la Aplicación y la documentación y el producto relacionados (incluidos, entre otros, imágenes, fotografías, imágenes prediseñadas, bibliotecas y ejemplos incorporados en la Aplicación), y cualquier copia de la Aplicación, son propiedad de Merchant Services LLC d/b/a B2B Merchants. La Aplicación está protegida por leyes de derechos de autor y disposiciones de tratados internacionales. Por lo tanto, debe tratar la Aplicación y el material relacionado como cualquier otro material protegido por derechos de autor.</p>
                  <h2 class="text-left">Ley que rige</h2>
                  <p>Este Acuerdo se regirá e interpretará de conformidad con las leyes del Estado de Nueva York, sin tener en cuenta las normas sobre conflictos de leyes de dicho estado.</p>
                  <h2 class="text-left">Divisibilidad</h2>
                  <p>Si alguna disposición de este Acuerdo se considera inaplicable o inválida, dicha disposición se cambiará e interpretará para lograr los objetivos de dicha disposición en la mayor medida posible según la ley aplicable y las disposiciones restantes continuarán en pleno vigor y efecto.</p>
                  <h2 class="text-left">Enmiendas a este Acuerdo</h2>
                  <p>Merchant Services LLC d/b/a B2B Merchants se reserva el derecho, a su sola discreción, de modificar o reemplazar este Acuerdo en cualquier momento. Si una revisión es importante, le proporcionaremos un aviso con al menos treinta días de antelación a la entrada en vigor de los nuevos términos. Lo que constituye un cambio material se determinará a nuestro exclusivo criterio.</p>
                  <h2 class="text-left">Información del contacto</h2>
                  <p>Si tiene alguna pregunta sobre este Acuerdo, contáctenos en <a href="mailto:info@merchantservicespr.com">info@merchantservicespr.com</a></p>
              </div>
          </div>
      </div>

<?php
$view->page_end();
?>
