<?php
$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp-internal/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

require_once "php/scripts/view.class.php";
$view = new ViewControl();

$proof_data = $dapp->proof_access();
$data_crm = $proof_data['data_crm'];

$call_center_name = $data_crm['account'];
$pin = $data_crm['pin'];
$dapp->http_header_action(['action' => 'unset', 'key' => 'ls']);
$callcenter_agent_name = $dapp->get_http_header('ccan');

$view->page_start(array('title' => $call_center_name));
?>

      <div role="main" class="main">

        <form id="form" enctype="multipart/form-data">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 bg-gradient">
                <div class="d-flex flex-column justify-content-center form-side-wrap">
                  <div class="hightlighted-info">
                    <div class="company-logo block-mb-sm">
                      <img src="img/logo-light.svg" alt="">
                    </div>
                    <div class="internal-contacts-info">
                      <h2><?php echo $call_center_name; ?></h2>
                      <div class="form-group">
                        <label>Call Center Agent Name</label>
                        <input type="text" class="form-control" name="agent_name" data-field-string value="<?php echo $callcenter_agent_name; ?>">
                      </div>
                      <div class="form-group">
                        <label>Manager Name</label>
                        <select name="manager_name" class="form-control select-item" style="width:100%;" data-select-placeholder="">
                          <option value=""></option>
                          <!-- <option value="/5dBet/mRJmQarZO0OFS5DXDQecIbokumGm8wfZmf2k">Max Katsap</option> -->
                          <!-- <option value="8rXduV43JKkQr5iLCaaCoqViFKhmp5IbtNWY2M065b8">Archie Kotlyar</option> -->
                          <!-- <option value="hn02WgRL4wieQSb0iNXNHT5qlIf5B6ZfT0pOfWf+ab4">Joe Bellantuono</option> -->
                          <!-- <option value="s10ZYVFNMKcahpGIM/Cn1N48JGM77XoDuVsN03FH8Ds">Zach Goldstein</option> -->
                          <!-- <option value="ewwtZoTQvnYFQLwwXqgta4qGoo8isfd4pooEVtBO6Fk">John Freehauf</option> -->
                          <option value="KgrRE+xDX+4r/sG5WVfy4fQOwkm2x2GLlg62PyMN9fw">Morris Katsap</option>
                          <option value="BU3cQ2xenii3n61/Z4eqt/52fzotnQOmjCJAgKtdF64">Rick Bottelli</option>
                          <option value="vO/AE5KSu4UttyKXq7FDjg93sjrZiYq4Q0cmhVdjSnc">Daniel Britva</option>
                          <option value="BabiLV3Sv6iTBRKdd++ISLcgbm490pAd0LshoQ/O9wk">Brett Seltzer</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Slice Agent Name</label>
                        <select name="agent_id" class="form-control select-item" style="width:100%;" data-select-placeholder="">
                          <option value=""></option>
                          <optgroup label="Morris Katsap">
                            <option value="O3ngHs2WBgWJjVRIhAQOX46DMOSeclqks8EaVhPvpC2nfB2nESDAiPgIGkCl/Ri3">Angel Rivera</option>
                            <option value="vE03I9S9COo1lC+z+cafJVXCf/ZuranXIijaINyPeti8D7p/KxAUWkcZGu7VibhS">Robert Phillips</option>
                            <option value="NZgtu+elhmqOcU2JJEPtd191WmrqorotAGpxW83GyR54lPiaikFp3oLUUEtIVQQI">Rheda McNamara</option>
                            <option value="y6eYmktfOXpSIhilFJR+9piaKYpJfd+LxPYKwrMS4/0OdZ+Mx4RjEFLIJuMsoBQ2">Richard Kern</option>
                            <option value="qXBPovYr+QzgebIYpj93cC6PnH4p/0PTS0pwLCh8eALrL6uBRXbBRGaVtJ7ohh0L">Rodney Bell</option>
                          </optgroup>
                          <optgroup label="Rick Bottelli">
                            <option value="DN64+clTClOCHMT8KWIYdzi5dn9xuLFNhU5TcosaceMAa6rp4epG36NhSKObztQo">Rick Bottelli</option>
                          </optgroup>
                          <optgroup label="Daniel Britva">
                            <option value="fQ0iqf2EJVKExiWgxsQjrFNzMJoaEE1nUDG5SDCm92kmqmv8YllfvGNAc2Wnah+e">Dale Somers</option>
                            <option value="s8M990y14zNGw4wPyDQXwPenl5uEf6+VoMZjr3bJpGAXH7jmRpEAWgfofIXo3RGj">Paul Njambi</option>
                            <option value="qwTexHE7NiAUsParHPsWdSKviZ0qNIie3mBGjfgAxtrg5OI2DmmlY2pbLFNoSH5a">Jerry Katz</option>
                            <option value="J3VDXzfsA2hkzwgaAz2x33Ho9KQSPhUJq9aNVWhnCfC2ZdTdwCLtKLQ9mZRaZvhw">Jordan Simanski</option>
                            <option value="VaZ8P2zdwVHhU+w9PvkMko443ShrZIzsE5QERAzcSn4Ov2OiKFD2xD+ecAJmNDvE">Brian Nielsen</option>
                            <option value="mVz5nKlk8wdLFyh2yWjivkoAOhePCgJvRrqo9u3mBMOV9lFH4Ar01knUwOsoRBQq">Jesse Festa - Cardamone</option>
                            <option value="8dhGdIPP4lLx843zCHFKAWG+C3qhT0QRd1IQe7Fj5qq9/MNQve4IxT46qhOWhoDu">Ryan Todt</option>
                            <option value="ovjtpZkdaSWj8EVqTVGXciX800UlgB4xSRtx7LeprztPfSuWRksVdbDu64A4RF+e">William Almieda</option>
                          </optgroup>
                          <optgroup label="Brett Seltzer">
                            <option value="K/kON4z/A+TT0T3uxIa+HKdhxmoGcSFlgO588ka3KbWIPJtwLnaa5I2VJKWLLhid">Laura Atkins</option>
                            <option value="CutfdDpnfOnM3p+nSBFKLgMI5i3mhBRJwTi/aGPp4I1DLFH9HgAI1Z/tyIGj7/KE">Deitria Levine</option>
                            <option value="27hpLERBzfyZ1I2+HDS8oC/GqpTwcQ0y3kOp7GBmr5ZMCgmRhY2kiRkC+wOCoFbk">Troy Ashton</option>
                            <option value="9THHXPUOdx5ApStdvFJbL7+t7QeMFVvKZu+1BqoiSF6N9zIIX2ksfvo1ozODA8WZ">John Jenkins</option>
                            <option value="xX9jcsRKV7jjvd2sRNFIyG2e8F9766ngqopNASpkqGC6GUVD7FNOrCYm7SttTuiL">Jordan Medina</option>
                            <option value="ZZV3F0F9QAlTf+ALpfpL/6OFHAFTFkWfL5Pu223QpenDWFt87zzflg+05KIRuzuz">Ian Frias</option>
                            <option value="WqPyItF/c+NnqYRrW0BpCT0rQsu8AJEGzJOhIXCWHK6oezeXa1lgs+kW8V5hruHp">Joseph Brown</option>
                            <option value="MZ/mT/yLkS49RuL1Jokbw5NErTcA8gd9VyG+7hIs68qWYQw+lFoU3ncFPh2Y3oex">Joseph Robinson</option>
                            <option value="ZuG0pXlf8nj60zoauAGy3mwKv0lxkWc6NmV6VIIrd5Sftjx2i+Ia2kuY87+WoFhx">Rodney Smith</option>
                          </optgroup>
                          <!-- <optgroup label="Morris Katsap"> -->
                            <!-- <option value="O3ngHs2WBgWJjVRIhAQOX46DMOSeclqks8EaVhPvpC2nfB2nESDAiPgIGkCl/Ri3">Angel Rivera</option> -->
                            <!-- <option value="i3OJS0YvybJjUU9ub243JOycFA8F8+mWaZQ/bAIW2yKF2FJxH8OLr31wnLVNXwP0">Jonathan Hinton</option> -->
                            <!-- <option value="AL8q5ODqQNJmCuUbDvexhCODK+0gfL2Q4huSBidvPoGtyRS50DVMiLaj+KtX/Hpr">Marc Epperson</option> -->
                            <!-- <option value="7xyCQKZIF0nLcC3bPFqzK4DDgrQSlzzq/W5sxGowed/ow67+Yj3QSCzfzDYpovqF">Kevin Veal</option> -->
                            <!-- <option value="YE0O8RXQHzuDiF4Fj/RDQqUsZPAhpDzMb4h1dLzMAlNq5PaWQ1zWNL6MYhx0uaED">Andre Simmons</option> -->
                            <!-- <option value="vw7mkpvexIfkqEoQwIsoBBPmbZTSR42C1AP4CcTdyXUSiM/RpRoBvq35WOq+CY/v">Tobi Hill</option> -->
                            <!-- <option value="1JEu0lwAARm2FXDDGjVhb+8ievOPgaCRKT+BygLNyEXZKm6ZQUU43mznyp45XRuP">Gary Hancock</option> -->
                          <!-- </optgroup> -->
                          <!-- <optgroup label="Daniel Britva"> -->
                            <!-- <option value="g+usd/73zNN5F9FIAosrOIGI40o/sg9x8SD1ExjzOPg9nwULzgIZhM81C9Vswsas">Rodney Bell</option> -->
                            <!-- <option value="17h1k5BzG5Q7uspDy9RykiHH8VPGVTeiuKMvLD4ouP5hOirqG6reK7OyAuHC++6k">Brandy Kabat</option> -->
                            <!-- <option value="cjqd7eNX9TZxiPJ4D72JlnPNdUtVNIODOcoDRtT4DUSPsssFfbCbQRBdADIKMsvo">Deral Wallace</option> -->
                            <!-- <option value="yo5qvGzg+MgsAqkiMXL+YGzintfMcA87p73flJwbzn2uNhasos1hD+W2AGyWVcOa">Syed Zaeemuddin</option> -->
                            <!-- <option value="OkO1pSWaGodRZNX4mGrsHw7PjPYSYz+X71+6Rmdom/nOAgOrhdUL+oW9tl7pYf8o">Dan McMeans</option> -->
                            <!-- <option value="BBD7A4skZt2yngHabSCtbuMfOtyKIaVpngpIfkfkwrtEVum1tABBw3Ls5Q9okHrT">Paul Owen</option> -->
                            <!-- <option value="YkmlC4Y4DSW7wxLZS2y/1XP4QLlMQoFSjunOI6tmSwIiXeJxPeW2m4sfhrm0aASA">Reggie Davis</option> -->
                            <!-- <option value="1VcomPyHjRgfYNttuukzvs7UZuxXDpRdCuBYGa48o2mpNfVN7+K6O1T36qB1D0Vb">Jerry Bynum</option> -->
                            <!-- <option value="TdUyzMtniYNVE2M2kg6J2fcyvVMmzhTgd7DuIucpw9kMak4O7g4ODrzRdLiuzH17">Matt Shelton</option> -->
                            <!-- <option value="p8wX6lAKmXcrfGxVcNAyQfjG4jW+415O0OsYgTUmTGovV4I33oRuKlCPOcjvepyu">Dale Alsandor</option> -->
                            <!-- <option value="XrU9FPoj6/uFp/cu3BODNSqYFBlN34jhJLSO2dRu4qy3ZXyKG7jKUwSPUKtxK8Y7">Frank Vasquez</option> -->
                            <!-- <option value="fOtsnPsQ/2yp4fO+M5yajo6qLerCedl1UizBZEGvPwfoCDm+JvJIceHAX8DADFvr">Joe Gamez</option> -->
                          <!-- </optgroup> -->
                          <!-- <optgroup label="Max Katsap"> -->
                            <!-- <option value="/LbP3HxrOiBe+Ix5hBkWxJJWFU89gTn9MbY/cYp5zLxkVgyjeCDkJQgXZM6jt9Zq">Jason Cox</option> -->
                            <!-- <option value="hK6EavbKzMspLdnb/NSbMBEJ0fK/eH/TtOkDiQW0w4NQzNpYh0XlaWykWqsJD2+E">Paul Price</option> -->
                          <!-- </optgroup> -->
                          <!-- <optgroup label="Archie Kotlyar"> -->
                            <!-- <option value="tnA02qttkuTtlKQ/Zcj7xJBSVDdSPs4WeabRXGKBTqrbbgndZhknE0Ar4uNN4OMv">Edward Hanson</option> -->
                            <!--
                            <option value="y6eYmktfOXpSIhilFJR+9piaKYpJfd+LxPYKwrMS4/0OdZ+Mx4RjEFLIJuMsoBQ2">Richard Kern</option>
                            <option value="g+usd/73zNN5F9FIAosrOIGI40o/sg9x8SD1ExjzOPg9nwULzgIZhM81C9Vswsas">Rodney Bell</option>
                            <option value="vE03I9S9COo1lC+z+cafJVXCf/ZuranXIijaINyPeti8D7p/KxAUWkcZGu7VibhS">Robert Phillips</option>
                            <option value="NZgtu+elhmqOcU2JJEPtd191WmrqorotAGpxW83GyR54lPiaikFp3oLUUEtIVQQI">Rheda McNamara</option>
                            <option value="+KRTyEV+rW8OcUQE7mUgyNDILxIvHX4kyohrOu+8NQk0BMjjUCXzC5cd3kCWuxEe">Laura Kovacs</option>
                            <option value="iKQI4cTY5VUVLtOA+6fRnqbiN383WvYYpgBy1/27t3DfWMidaYjicaJpQqqKUtU5">Attallah Lewis</option>
                            <option value="oyL5KDTAKYWUVirfRiYceMClc45uLh5VotKKACQ24OnkUKS6hKqmiguZf/4bAWwj">Alyssa Russell</option>
                            <option value="XkkfQGr+1oxbA+BGhE4943qsMEvYSegzNIHMQmooTmzeIGIbKEOaFA6/cOk123wh">Courtenay Martin</option>
                            <option value="LxjLWtEl4tEw66xMfTEuFebzJXpcRap7aveajj6iVEjqAGJdobGHS4xPwIuZoeS1">Fernando Deleon</option>
                            <option value="jyHgZtidaSI+C++IGrgGQXA8HfX/UgCsl+UZ82HdvS+GhcKzWll/ypnlYCHBIR4x">Jessica Hill-Flores</option>
                            <option value="X8odgbX2QphnO1BZQ/BZb2lZKR4omin2aN27Tr+GICQ1Nvdsluhp6941TIiEaIGs">Luke Zondervan</option>
                            <option value="vBZeuoROOQuItZx3Ii/txEaNqxatnzWblqH4i6c34usZ6EZZFTAoz8sUN9mZCxE+">Raymond Bailey</option>
                            <option value="ocrl3EAGpYX3QMG5sGNtNTjk/eG7U/DCVOrr9vsdFF+QQ703NtwhHOtcTtlkfC8m">Kayla Vaughn</option>
                            <option value="s4TdpA6LXjG+3zWJyWlNqVBtHJNArmVQ3IX+3NcMj/3baJizHR0sx/3NF54m8JvM">Ozzie Sims</option>
                            <option value="3hLDoFvcQlkTlT7Taal37C6hiJFrzWTEy/HQTcGeQ1FKPMKBX+a181WSe7suahMW">Gilbert Ferri</option>
                            <option value="3Y/8XGrBvO/gJ5lQF29OdwKX9JtBFwoFX9FivpCVkF/zIVoRwhE/UK09LeTvyDPI">Bruce Bohner</option>
                            <option value="LCQpN3BGBkBsrtVnKV8Ex1QAQM+rpmTsbV/ZV2RM1nn2tp41OjWhldJCiwOJs+pa">Demetrious Dabadee</option>
                            <option value="QwiSKzuqGHnjqRzMqb2x3ioBRCYmmMYC3ZOiIXwysDdbMPtn7IqZMVihGQ09YXvo">Mark Lunsford</option>
                            <option value="TepHp1l8/VDqbfPgDkSNh4SzkLwp6EJMktcV0WVySVM6t9KAifrPi2IIVt23liTh">Franco Cabrera</option>
                            <option value="IYrYSk796dSV9PIqOtjEpvzmkCvcntLl2SZwZ+izaFYF/xTIPkXdBJparamABSAa">Jimmie Thompson</option>
                            <option value="9PdiPB5w2+iTC/dZRDVGDn6u26A5af3I4isE/oGZttZnOgrZEg3z1yckTKiYZM3z">Mark Fleming</option>
                            <option value="GNHRNQNIM5maP6UBX9Pm9fycPv5b3uVVqxnte6Z8rQwk6O2FZq//LvenN+NqNo/G">Eric DeHart</option>
                            <option value="wQ4VtIyuqbxf+cBOJis3992hUJh7JM68H839xxZh8lIaY2p4MhaRvvF11B8f93hd">Alexander Garside</option>
                            <option value="Xz8lqb9T8xUHEshi1TRmUm18YmZ+zIOXtMSSikxFoBzS15oxCYFD2mgSnSkvrhlj">Corey Olson</option>
                            <option value="r+XFc5B/56VFSkT8qFeF114qQa0tU6cDFliLW4zxNaxAApfSCzhgLXe2Y/fYLH5q">Ronald Luippold</option>
                            <option value="ZN5cbpp22JX3R1q7621Dk3vvqdG2sX+kCYxzu3MB0dq0KfysoyKTV6wXixtDO23h">Jagger Fagundes</option>
                            <option value="5MXFk0LFADV9uaZVupPBDMceuv+U/DLcaEHnJVkviTHdm77yQdvmE62UiTJ62GgF">Randy Echols</option>
                            <option value="mebclMyb3gC60owohWT+DXopAEeaXUfLqDtIw2+wTwtugGeKYr/M1ZxpakdgD26h">Kevin Iraheta</option>
                            <option value="jJLfKj3PeSDPTaniaIRjMqIlHB7OvjbMcLFUHk4iNjtZtRE+Weos097EfFPGEbyJ">Alan Zemnovich</option> -->
                          <!-- </optgroup> -->
                          <!-- <optgroup label="Joe Bellantuono">
                            <option value="gkaGKUUjlBzQ3hGEjCA4rK5Q0MZWIm4DB9NGTJL+koIRbSXUsd+oKoj6JFQH2K+e">Marty Cohen</option>
                            <option value="vVd/e1GtGHuWRdXznRr2JJ0uRst6lp6JEQ8g0TzUyMTe2hy8x5vb64YUZ6J9h5Qf">Pedro Estevez</option>
                            <option value="idWIOmoPyl31dL25EwFr8welfLgJAjNOafpBM1Z1NTrjrPO4cdXg+sBKiwRRRKnc">Andrew Lopez</option>
                          </optgroup> -->
                          <!-- <optgroup label="Zach Goldstein"> -->
                            <!-- <option value="ejSKJLc7qJGzIdyRPvrxaU0FvI9qQKpRktexHamSPaBdG2KaJDRziy1VyczQhuiR">Jason Perry</option> -->
                            <!-- <option value="ySgqpvh5cpVW6N1X9pD1ivo5Sj4F9eOYvqm6QhfJNc89sV3EvvNja1e34nzqQlZt">Aaron Jaro</option> -->
                            <!-- <option value="LxjLWtEl4tEw66xMfTEuFebzJXpcRap7aveajj6iVEjqAGJdobGHS4xPwIuZoeS1">Fernando Deleon</option> -->
                            <!-- <option value="FmoKG3Ju1qNysBVle5Y8S1zQsoVkoX8VUUiGDmyM4gZMfLNb38mXZncxHs8cxHR5">Ihab Fayoumi</option> -->
                            <!-- <option value="FdGDMyFKwQrYL1nfy+yrVosiwDyHj38FQRjHS14sqbEHGWCb3CXAxmCei9VAalCx">Thomas Trankler</option> -->
                            <!-- <option value="Y5qhlRRGijxZEdEvy4F5lYPNRodw1knuRFCPB8usPShmPbzKd7a9TWvWVsQ2ag1r">Anthony Olivera</option> -->
                            <!-- <option value="/J0xVqLl/gUUpPEZcZ6gwpOw3bowU8VOFlCjvFoqj/PNBcMA0dYEkA0Tqoiiq21n">Rich Williams</option> -->
                            <!-- <option value="3woZMMEmtSJR9KRcuYhcn5o7d/X2NLf/fWBE2OIEJCyzwp0PhoAjQnJWwIdAAnDD">Scott Davis</option> -->
                            <!-- <option value="jyHgZtidaSI+C++IGrgGQXA8HfX/UgCsl+UZ82HdvS+GhcKzWll/ypnlYCHBIR4x">Jessica Hill-Flores</option> -->
                            <!-- <option value="778/vUlh0KJ/xqZv1157uctCt1eFU2Urrc0tGfEYxH05fhmwD6Jc7vqrm0HnCdwh">Andrew Thomas Webb</option> -->
                            <!-- <option value="X8odgbX2QphnO1BZQ/BZb2lZKR4omin2aN27Tr+GICQ1Nvdsluhp6941TIiEaIGs">Luke Zondervan</option> -->
                            <!-- <option value="vBZeuoROOQuItZx3Ii/txEaNqxatnzWblqH4i6c34usZ6EZZFTAoz8sUN9mZCxE+">Raymond Bailey</option> -->
                            <!-- <option value="r5s4tbCKFcxvn045v0CQuWiunmjXdwxLqz8r/GDRCzhfLV5EhCEhbecdRtG9SrWw">Marco Vindell</option> -->
                            <!-- <option value="ocrl3EAGpYX3QMG5sGNtNTjk/eG7U/DCVOrr9vsdFF+QQ703NtwhHOtcTtlkfC8m">Kayla Vaughn</option> -->
                            <!-- <option value="s4TdpA6LXjG+3zWJyWlNqVBtHJNArmVQ3IX+3NcMj/3baJizHR0sx/3NF54m8JvM">Ozzie Sims</option> -->
                            <!-- <option value="3hLDoFvcQlkTlT7Taal37C6hiJFrzWTEy/HQTcGeQ1FKPMKBX+a181WSe7suahMW">Gilbert Ferri</option> -->
                            <!-- <option value="3Y/8XGrBvO/gJ5lQF29OdwKX9JtBFwoFX9FivpCVkF/zIVoRwhE/UK09LeTvyDPI">Bruce Bohner</option> -->
                          <!-- </optgroup> -->
                          <!-- <optgroup label="John Freehauf"> -->
                            <!-- <option value="LCQpN3BGBkBsrtVnKV8Ex1QAQM+rpmTsbV/ZV2RM1nn2tp41OjWhldJCiwOJs+pa">Demetrious Dabadee</option> -->
                            <!-- <option value="ZvIHbuI+24Eu1Zh8TzWtJM98DfBILuXYn3kx/efhPOC1AE40m5iHgUDJ1Sk5Mvaq">Jose Alfaro</option> -->
                            <!-- <option value="XdcsFTog4XXDB64v8+kT+zfTwkvSf7HHD6rkN0JhHSdnbMLI+iCRIxjeckSD0Wk4">Jason Paul</option> -->
                            <!-- <option value="QwiSKzuqGHnjqRzMqb2x3ioBRCYmmMYC3ZOiIXwysDdbMPtn7IqZMVihGQ09YXvo">Mark Lunsford</option> -->
                            <!-- <option value="PWHXLE46XEJn3jUJaI5SXrFZWPzB4EsvVMIbqLWNEhPbDOCGnMWKiKBFE1r57O78">Carrie Eaton</option> -->
                            <!-- <option value="l0qGOqAuRnAvl+Dxz7Kw4wnDA0iUaHByhmrOrcJoOJ66kGyK+xu4OZ8Y6OV7IJdU">Oscar Castro</option> -->
                            <!-- <option value="TepHp1l8/VDqbfPgDkSNh4SzkLwp6EJMktcV0WVySVM6t9KAifrPi2IIVt23liTh">Franco Cabrera</option>
                            <option value="IYrYSk796dSV9PIqOtjEpvzmkCvcntLl2SZwZ+izaFYF/xTIPkXdBJparamABSAa">Jimmie Thompson</option>
                            <option value="9PdiPB5w2+iTC/dZRDVGDn6u26A5af3I4isE/oGZttZnOgrZEg3z1yckTKiYZM3z">Mark Fleming</option>
                            <option value="GNHRNQNIM5maP6UBX9Pm9fycPv5b3uVVqxnte6Z8rQwk6O2FZq//LvenN+NqNo/G">Eric DeHart</option>
                            <option value="wQ4VtIyuqbxf+cBOJis3992hUJh7JM68H839xxZh8lIaY2p4MhaRvvF11B8f93hd">Alexander Garside</option>
                            <option value="Xz8lqb9T8xUHEshi1TRmUm18YmZ+zIOXtMSSikxFoBzS15oxCYFD2mgSnSkvrhlj">Corey Olson</option>
                            <option value="r+XFc5B/56VFSkT8qFeF114qQa0tU6cDFliLW4zxNaxAApfSCzhgLXe2Y/fYLH5q">Ronald Luippold</option>
                            <option value="ZN5cbpp22JX3R1q7621Dk3vvqdG2sX+kCYxzu3MB0dq0KfysoyKTV6wXixtDO23h">Jagger Fagundes</option> -->
                          <!-- </optgroup> -->
                        </select>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center form-side-wrap">
                  <div class="merchant-info-wrap">
                    <h5>Merchant's Information</h5>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Business DBA Name</label>
                          <input type="text" class="form-control" name="business_dba_name" data-field-string>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Business Phone</label>
                          <input type="text" class="form-control" name="business_phone" data-mask-phone>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Business Address</label>
                          <input type="text" class="form-control" name="business_address" data-field-address>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Business City</label>
                          <input type="text" class="form-control" name="business_city" data-field-string>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Business State</label>
                          <select name="business_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="">
                            <?php echo $dapp->get_states_select_options(); ?>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Business Zip</label>
                          <input type="text" class="form-control" name="business_zip" data-mask-zip>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Owner First Name</label>
                          <input type="text" class="form-control" name="owner_1_first_name" data-field-string>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Owner Last Name</label>
                          <input type="text" class="form-control" name="owner_1_last_name">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Appointment Date (MM/DD)</label>
                          <input type="text" class="form-control" name="appt_date" data-mask-month-date>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Appointment Time</label>
                          <select name="appt_time" class="form-control select-item" style="width:100%;" data-select-placeholder="">
                            <option value=""></option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                          <label>Phone Conversation</label>
                          <div class="custom-file">
                            <input type="hidden" name="file_01_s" value="">
                            <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
                            <input type="file" class="custom-file-input" id="file_01" name="file_01" data-msg-required="Please attach a file" data-filesize>
                            <label class="custom-file-label" for="file_01"><span class="cfl-text"><span>Attach a file...</span></span></label>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Notes</label>
                          <input type="text" class="form-control" name="notes">
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn">
                      <div class="row">
                        <div class="col-12 col-sm-6 ml-auto">
                          <input type="hidden" name="id" value="<?php echo $pin; ?>">
                          <button type="submit" class="btn" data-loading-content="Processing...">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

      </div>

<?php
$view->page_end();
?>