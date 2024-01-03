<?php
if(in_array($this->page, ['index', 'clover-flex', 'clover-station', 'clover-station-pro'])) {
  date_default_timezone_set('America/New_York');
  $week_day = date('w');
  $hours = date('G');
  $show_chat = false;

  if($week_day > 0 && $week_day <= 5) {
    if($hours > 8 && $hours < 17) {
      $show_chat = true;
    }
  }

  if($show_chat) {
    echo <<<EOD

    <script>
      window.intercomSettings = {
        app_id: "kjthkeh0"
      };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/kjthkeh0';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
EOD;
  }
}
?>