<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <style type="text/css">
 
  </style>

    <title>Avaliação J&O Software</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel ="stylesheet" href="<?= base_url('public/css/notify.css');?>" type ="text/css">

  </head>
  <body>
  <div class="container">   
    <h1 style="text-align:center">Contato</h1>

        <?= form_open('register/index',$atributos); ?>
   
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome"> Nome Completo * </label>
                            <?= form_input($nome); ?>    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nome"> Email * </label>
                            <?= form_input($email); ?>    
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nome"> Telefone </label>
                            <?= form_input($telefone); ?>   
                            
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nome"> Celular * </label>
                            <?= form_input($celular); ?>    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nome"> Deseja contato via Whatsapp?* </label></br>
                            <?= form_checkbox($wpp); ?>(Marque a caixa se sim)   
                    </div>
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome"> Estado * </label>
                            <?= form_dropdown($estado); ?>    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nome"> Cidade * </label>
                            <?= form_dropdown($cidade); ?>    
                    </div>
                </div>   
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome"> Departamento * </label>
                            <?= form_dropdown($departamento); ?>    
                    </div>
                </div>   
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome"> Nos deixe uma mensagem * </label>
                            <?= form_textarea($mensagem); ?></br>
                            <?= form_submit($botao);?>    
                    </div>
                </div>  
            <?= form_close(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?= base_url('public/js/jquery.mask.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('public/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('public/js/additional-methods.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('public/js/messages_pt_BR.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('public/js/notify.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('public/js/script.js'); ?>" type="text/javascript"></script>

  </body>
</html>