function show(){
    var selectedTable= document.getElementById("tableSelection").value;

    var elements = document.getElementsByClassName('table')

    for (var i = 0; i < elements.length; i++){
        if(elements[i].id==selectedTable)
            elements[i].style.display = '';
        else
            elements[i].style.display = 'none';
    }

}
