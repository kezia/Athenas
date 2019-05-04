function doPost(formName, actionName)
{
        var hiddenControl = document.getElementById('action');
        hiddenControl.value = actionName;
        document.forms[formName].submit();

}




