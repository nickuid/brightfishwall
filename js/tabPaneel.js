$('.knoppen').each( function(){
    var dezeKnop = $(this);
    var actieveKnop = dezeKnop.find('li.actief');
    var link = actieveKnop.find('a');
    var actiefPaneel = $(link.attr('href'));
   var dropdown = getUrlVars()["dropdown"];
        var kaas = document.getElementById("search");
        var home = document.getElementById("home");
   // alert(dropdown);
   if(dropdown){
        //alert("er wordt gezocht");
        beoogdId ="#4";
        actiefPaneel.removeClass('actief');
        actiefPaneel = $(beoogdId).addClass('actief');
        
        kaas.className += "actief";
        home.className = "";
        }

    dezeKnop.on('click', 'a', function(e){
        e.preventDefault();
        var link = $(this);
        var beoogdId = this.hash;

        
        
if(kaas){
        if(beoogdId && !link.parent().is('.actief')){
            kaas.className = "";
            actiefPaneel.removeClass('actief');
            actieveKnop.removeClass('actief');
            actiefPaneel = $(beoogdId).addClass('actief');
            actieveKnop = link.parent().addClass('actief');         
        }
}
else{
            if(beoogdId && !link.parent().is('.actief')){
            actiefPaneel.removeClass('actief');
            actieveKnop.removeClass('actief');
            actiefPaneel = $(beoogdId).addClass('actief');
            actieveKnop = link.parent().addClass('actief');         
        }
}

    })

    

});

function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}

$('.paneel').css('display', 'none');