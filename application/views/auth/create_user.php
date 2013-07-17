<div class="span12 ">
<fieldset>
<legend><?php echo lang('create_user_heading');?></legend>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user",'class="form-horizontal"');?>

     <div class="control-group">
        <label class="control-label"><?php echo lang('create_user_fname_label', 'first_name');?> </label> 
        <div class="controls">
        <?php echo form_input($first_name,'text');?>
        </div>
     </div>

     <div class="control-group">
         <label class="control-label"><?php echo lang('create_user_lname_label', 'first_name');?> </label>
        <div class="controls">
            <?php echo form_input($last_name);?>
      </div>
        </div>


     <div class="control-group">
            <label class="control-label"><?php echo lang('create_user_email_label', 'email');?> </label>
        <div class="controls">
            <?php echo form_input($email);?>
      </div>
        </div>

     <div class="control-group">
            <label class="control-label"><?php echo lang('create_user_password_label', 'password');?> </label>
        <div class="controls">
            <?php echo form_input($password);?>
      </div>
        </div>

     <div class="control-group">
            <label class="control-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label> 
        <div class="controls">
            <?php echo form_input($password_confirm);?>
    </div>
        </div>


      <div class="form-actions">
        <?php echo form_submit('submit', lang('create_user_submit_btn'));?>
      </div>

<?php echo form_close();?>
</div>
</fieldset>
