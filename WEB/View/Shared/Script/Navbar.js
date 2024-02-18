$(document).ready(function(){
    GetDataMenu();
});

function GetDataMenu(){
    RequestData('GET', '/Wessel/Api/Controller/V1/SetPageController.php?action=getSetPage', "container", "field", null, function(result){
        $('#menu').html('')
        if(result != null){
            result.forEach(element => {
                $('#menu').append(`
            <li><a href="project.html" class="" aria-expanded="false">
            <div class="menu-icon">
            <div style="margin-right:15px;">${element.ICON}</div>
            </div>	
                <span class="nav-text">${element.NAMA_PAGE}</span>
            </a>
        </li>`);
            });
        }
    });
}