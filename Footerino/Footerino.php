<?php
  if(!defined('ABSPATH'))
  {
      exit;
  }
  global $Email;
  global $Tel;
  global $Copyr;
  // Appel De la fonction Validation
  if(isset($_POST['Submit_validation'])){
    Validation_modif();
  }

  // Fonction qui envoye les donnes recup du Menu vers Footer
  function Validation_modif(){
    $Recup_Email = $_POST['Email'];
    $Recup_Tel = $_POST['Telephone'];
    $Recup_Copyr = $_POST['Copyright'];
    if( get_option('Email_value') != trim($Recup_Email)){
      $Email= update_option( 'Email_value', trim($Recup_Email));
    }
    if( get_option('Tel_value') != trim($Recup_Tel)){
      $Tel = update_option( 'Tel_value', trim($Recup_Tel));
    }
    if( get_option('Copyright_value') != trim($Recup_Copyr)){
      $Copyr = update_option( 'Copyright_value', trim($Recup_Copyr));
    }
  }
?>
<div class="wrap">
  <div id="icone_Menu" style="text-align:center">
  <h2><span class="dashicons dashicons-paperclip"></span>  Footer Options</h2>
  </div>
  <?php if(isset($_POST['Submit_validation']) && ($Email || $Tel ||$Copyr)):?>
    <div id="message" class="updated below-h2">
      <p>Content updated successfully</p>
    </div>
  <?php endif;?>
  <div class="metabox-holder" style="margin:0 auto;width:50%">
    <div class="postbox" >
      <h1 style="text-align:center;text-decoration: overline"><strong>Remplissez les infos necessaires du footer </strong></h1>
      <form method="post" action="" style="margin-left:10%">
        <table class="form-table" style="text-decoration: underline; font-size:24px;">
          <tr>
            <th>Email : </th>
            <td><input type="text" id="Email" name="Email" value="<?php  get_option('Email_value');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Téléphone :</th>
            <td><input type="tel" id="Tel" name="Telephone" value="<?php  get_option('Tel_value');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row"> Année Coopyright :</th>
            <td><input type="text" id="Copyr" name="Copyright" value="<?php  get_option('Copyright_value');?>" style="width:350px;" /></td>
          </tr>
          <tr >
            <th scope="row">&nbsp;</th>
            <td style="padding:10px">
            <input type="submit" name="Submit_validation" value="Valider" class="button-primary"  style="margin-left:25%"/>
            <input type="submit" id="Vider_c" name="Vider" value="Vider"  class="button-primary"  style="margin-left:5%"/>
          </td>
        </table>
      </form>
    </div>
  </div>
</div>
<script>
  var Vider = document.getElementById("Vider_c");
  function Vider_champs(){

    let email = document.getElementById("Email");
    let tel = document.getElementById("Tel");
    let copyr = document.getElementById("Copyr");
    email.value = "";
    tel.value = "";
    copyr.value = "";

  }
  Vider.addEventListener('click',Vider_champs);

</script>



