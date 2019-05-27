
function validate_Contacts()
{
    let validPol = true;
    let validName = true;
    let validPhone = true;
    let validMail = true;
    let telFormat = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    let checkPhone = telFormat.test(document.form_contact.tel.value);
    let fioFormat=/^[а-яА-ЯёЁ]+\s+[а-яА-ЯёЁ]+\s+[а-яА-ЯёЁ]+$/;
    let checkFio=fioFormat.test(document.form_contact.name.value);

    if ( (document.form_contact.name.value === "") ||
        (document.form_contact.name.value.split(' ').length !== 3)
        || (checkFio===false ))
    {
       document.getElementById("divName").innerHTML = "Пожалуйста, введите ФИО в формате: Иванов Иван Иванович!";
        document.form_contact.name.value === "";

        document.form_contact.name.style.border="2px solid red";
        validName = false;
    }
    if (validName === true) {

        document.form_contact.name.style.border="2px solid green";
        document.getElementById("divName").innerHTML = "";
    }

    if ( (document.form_contact.email.value === "") || (!(document.form_contact.email.value.includes(".com"))
        && !(document.form_contact.email.value.includes(".ru")) && !(document.form_contact.email.value.includes(".net"))))
    {
        //document.form_contact.email.focus();
        document.getElementById("divEmail").innerHTML = "Пожалуйста, введите почту в формате: somename@mail.ru";
        document.form_contact.email.style.border="2px solid red";
        validMail = false;
    }
    if (validMail === true) {
        document.form_contact.email.style.border="2px solid green";
        document.getElementById("divEmail").innerHTML = "";
    }
    if ( checkPhone === false)
    {
        document.getElementById("divPhone").innerHTML = "Пожалуйста, введите телефон в формате: +7ХХХХХХХХ";
        document.form_contact.tel.style.border="2px solid red";
        validPhone = false;
    }
    if (validPhone === true) {
        document.form_contact.tel.style.border="2px solid green";
        document.getElementById("divPhone").innerHTML = "";
    }
    if ( ( document.form_contact.pol[0].checked === false ) &&
        ( document.form_contact.pol[1].checked === false ) )
    {
        document.getElementById("divPol").innerHTML = "Пожалуйста, выберете пол";
        validPol = false;
    }
    if (validMail === true) {
        document.getElementById("divPol").innerHTML = "";
    }
    if ((validName === true)&&(validMail === true)&&(validPhone === true)) {
        document.getElementById("sub").disabled = false;
    }
}

function OpenHelp() {
    $("#h").fadeIn("slow" );


}
function CloseHelp() {
    $("#h").fadeOut(2000);

}

function OpenHelpEmail() {

    $("#emailDiv").fadeIn("slow" );


}
function CloseHelpEmail() {
    $("#emailDiv").fadeOut(2000);

}
function OpenHelpPhone() {
    $("#phoneDiv").fadeIn("slow" );


}
function CloseHelpPhone() {
    $("#phoneDiv").fadeOut(2000);

}

