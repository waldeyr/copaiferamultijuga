/**
 * VALIDACAO DO FORM INSCRICAO
 */
function validarFormInscricao() {
    f = document.getElementById("forminscricao");
    if (f.peoName.value == "") {
        f.peoName.style.backgroundColor = "#F5A9A9";
        f.peoName.style.color = "#ffffff";
        f.peoName.focus();
        return false;
    }
    if (f.peoBadge.value == "") {
        f.peoBadge.style.backgroundColor = "#F5A9A9";
        f.peoBadge.style.color = "#ffffff";
        f.peoBadge.focus();
        return false;
    }
    if (f.peoEmail.value == "") {
        f.peoEmail.style.backgroundColor = "red";
        f.peoEmail.style.color = "#ffffff";
        f.peoEmail.focus();
        return false;
    }
    //validar email(verificao de endereco eletrônico)
    parte1 = f.peoEmail.value.indexOf("@");
    parte3 = f.peoEmail.value.length;
    if (!(parte1 >= 3 && parte3 >= 9)) {
        f.peoEmail.style.backgroundColor = "#F5A9A9";
        f.peoEmail.style.color = "#ffffff";
        f.peoEmail.focus();
        return false;
    }
    if (f.peoPass.value == "" || f.peoPass.value.length < 6) {
        f.peoPass.style.backgroundColor = "#F5A9A9";
        f.peoPass.style.color = "#ffffff";
        return false;
        f.peoPass.focus();
    }
    if (f.peoDoc.value == "") {
        f.peoDoc.style.backgroundColor = "#F5A9A9";
        f.peoDoc.style.color = "#ffffff";
        return false;
        f.peoDoc.focus();
    }
    if (f.peoTelephone.value == "") {
        f.peoTelephone.style.backgroundColor = "#F5A9A9";
        f.peoTelephone.style.color = "#ffffff";
        return false;
        f.peoTelephone.focus();
    }

    f.submit();
}


/**
 * VALIDACAO DO FORM LOGIN
 */
function validarFormLogin() {
    f = document.getElementById("formlogin");
    if (f.peoEmail.value == "") {
        f.peoEmail.style.backgroundColor = "red";
        f.peoEmail.style.color = "#ffffff";
        f.peoEmail.focus();
        return false;
    }
    //validar email(verificao de endereco eletrônico)
    parte1 = f.peoEmail.value.indexOf("@");
    parte3 = f.peoEmail.value.length;
    if (!(parte1 >= 3 && parte3 >= 9)) {
        f.peoEmail.style.backgroundColor = "#F5A9A9";
        f.peoEmail.style.color = "#ffffff";
        f.peoEmail.focus();
        return false;
    }
    if (f.peoPass.value == "" || f.peoPass.value.length < 6) {
        f.peoPass.style.backgroundColor = "#F5A9A9";
        f.peoPass.style.color = "#ffffff";
        return false;
        f.peoPass.focus();
    }
    f.submit();
}

/**
 * VALIDACAO DO FORM SUBMISSOES
 */
function validarFormSubmissoes() {
    f = document.getElementById("formsubmissoes");
    if (f.subTitle.value == "") {
        f.subTitle.style.backgroundColor = "red";
        f.subTitle.style.color = "#ffffff";
        f.subTitle.focus();
        return false;
    }
    if (f.subAbstract.value.split(' ').length < 250) {
        f.subAbstract.style.backgroundColor = "red";
        f.subAbstract.style.color = "#ffffff";
        f.subAbstract.focus();
        return false;
    }
    if (f.subAbstract.value.split(' ').length > 500) {
        f.subAbstract.style.backgroundColor = "red";
        f.subAbstract.style.color = "#ffffff";
        f.subAbstract.focus();
        return false;
    }
    if (f.subPalavras.value == "") {
        f.subPalavras.style.backgroundColor = "red";
        f.subPalavras.style.color = "#ffffff";
        f.subPalavras.focus();
        return false;
    }
    f.submit();
}