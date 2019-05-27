
<script src="public/scripts/jquery.js"></script>
<script src="public/scripts/contact.js"></script>
<link rel="stylesheet" href="public/css/style1.css">

<body>

<body background="1.jpg" >
	<header>
		<h1>Связь со мной</h1>
	</header>
<div display="inline-block"; style="border:3px dashed  silver; background-color: black; opacity: 0.5;padding: 10px;font-family: 'arial',cursive; font-size: 20px; color: white ;  word-wrap: break-word; text-align:left; ">

<div class="form" style="text-align: center;">
  <div class="profile"><img src="http://pngimg.com/uploads/email/email_PNG15.png" width="10%">
  </div >



<style>
    .error {
        color : red;
    }
</style>


        <form method="POST"  name="form_contact" style="font-size: 20px">

            <div id="divName" style="font-size: 15px;"></div>

            ФИО <input placeholder="ФИО"  maxlength="40" name="name" type= text class="formDesign" onblur="validate_Contacts()"
                       onmouseenter="OpenHelp();"  onmouseleave="CloseHelp()" >


            <?php
             if( isset( $_POST['confirm'] ) )
    {
            if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
            }
            ?>
            <br>
            Пол:
            <div id="divPol"></div>
            м<label>
                <input name="pol" type= radio value="male" checked="checked" > </label>
            ж<label>
                <input name="pol" type= radio value="female"> </label>
            <br>
            <div id="divEmail"></div>
            E-mail:
            <input name="email" type= email class="formDesign" onblur = "validate_Contacts()"
                   onmouseenter="OpenHelpEmail();"  onmouseleave="CloseHelpEmail()">
            <?php

            if( isset( $_POST['confirm'] ) )
    {
        if($model && $model->getErrorByField('email')) {
                echo "<div class='error'>" . $model->getErrorByField('email')."</div>";
            }
    }
           
            ?>
     
            <br>
            <div id="divPhone"></div>
            Номер телефона - 
            <input name="tel" type= text class="formDesign"  onblur = "validate_Contacts()"
                   onmouseenter="OpenHelpPhone();"  onmouseleave="CloseHelpPhone()">
           
            <?php
             if( isset( $_POST['confirm'] ) )
    {
            if($model && $model->getErrorByField('tel')) {
                echo "<div class='error'>" . $model->getErrorByField('tel')."</div>";
            }}
            ?>
            <p>Дата рождения:
                <br>
                <label>
                    <input type="text" value="dd-mm-yy" class="formDesign" onfocus="this.select();lcs(this)"
                           onclick="event.cancelBubble=true;this.select();lcs(this)">
                </label>
            </p>
            <input type= "submit"name="confirm" id="sub" value="Отправить" class="formDesign" >
            <br>
            <input type="reset" value="Очистить" class="formDesign">
        </form>
        </form>

</div>









</div>

</body>
<!-- <script src="public/scripts/contact1.js"></script> -->