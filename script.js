var tab1=[

    {name :'Lancer de hache',
    description :`Vous voulez ressemblez à un viking ? 
    L’animation est faite pour vous. Pas besoin d’avoir de la force simplement de la précision`, 
    img :'img/progra/img1.png'},  

    {name :'Béhourd',
    description :`Spectacle de combat médiéval en duo avec leurs armures`, 
    img :'img/progra/img2.png'}, 

    {name :'Cracheurs/ jongleurs de feux',
    description :`Vous vivrez un moment inoubliable avec nos cracheurs de feux.`, 
    img :'img/progra/img3.png'}, 

    {name :'Troubadours',
    description :`Les troubadours vont vous accompagner avec des chants festifs durant vos repas.`, 
    img :'img/progra/img4.png'},  

    {name :'Joute équestre ',
    description :`Deux chevaliers au galop, face à face devront s’affronter durant le combat.`, 
    img :'img/progra/img5.png'}, 

    {name :'Fauconnerie',
    description :`Un groupe passionné d’époque et d’oiseaux vont vous présentez un spectacle. Vous pourrez apprendre à utiliser un leurre de cuir, tenir un faucon,... `, 
    img :'img/progra/img6.png'}, 

    {name :'Les échassiers',
    description :`Découvrez tout au long du week-end nos échassier en costume. De quoi avoir la tête en l’air.`, 
    img :'img/progra/img7.png'},  

    {name :'A vous de jouer !',
    description :`Des jeux de sociétés seront mis à votre disposition dans l’ensemble du château.`, 
    img :'img/progra/img8.png'}, 
]

var tab2 =[

    {name :'Les blasons de Bretagne',
    description :`Nouveau artisan qui créer de lui-même des blasons sur mesure.`, 
    img :'img/progra/img9.png'}, 

    {name :'La boutique médiévale',
    description :`Sur place, la boutique vous propose toute une sorte de sacs médiévaux.`, 
    img :'img/progra/img10.png'},  

    {name :'Savon “Le Médiéval”',
    description :`Pour retrouver les sensations du Moyens Âges, on vous propose 3 sortes de savons : le gallique, Alep et le sarrasin.`, 
    img :'img/progra/img11.png'}, 

    {name :'La malle aux costumes',
    description :`Vous avez oublié votre costume ? La boutique spécialisée vient pour vous. `, 
    img :'img/progra/img12.png'}, 

    {name :'La cave de vieilles terres',
    description :`Le stand des boissons locaux, venez vous hydrater`, 
    img :'img/progra/img13.png'},  

    {name :'La cave de vieilles terres',
    description :`Découvrez lors de ce week-end les recettes des cultures des temps anciens`, 
    img :'img/progra/img14.png'}, 

    {name :'Les chevaliers',
    description :`Pour combattre il faut vous équipez ! Vous trouverez le stand des armes/casques.`, 
    img :'img/progra/img15.png'}, 

    {name :'A nos épices',
    description :`Le poivre rond, le gingembre, la cannelle, la noix de muscade et pleins d’autres encore pourront accompagner vos plats`, 
    img :'img/progra/img16.png'},  
]

var tab3 =[
    {name :'Les Derniers Trouvères',
    description :`S'inspirant de musiques du répertoire traditionnel et médiéval européen, ils reçoivent parfois des compositions d'Isline Dhun, entre autres.`, 
    img :'img/progra/img17.png'}, 

    {name :'Die Irrlichter',
    description :`Die Irrlichter est un groupe allemand qui interprète de la musique folk médiévale et fantastique`, 
    img :'img/progra/img18.png'}, 

    {name :'Luc Arbogast',
    description :`Doté d'une voix de contreténor il se produit sur scène en costume de style médiéval tout en arborant quelques symboles punk comme le piercing et des tatouages.`, 
    img :'img/progra/img19.png'},  

    {name :'Stille Volk',
    description :`Stille Volk est un groupe de pagan metal et musique folk français, originaire de Tarbes et Lourdes, en Occitanie.`, 
    img :'img/progra/img20.png'}, 
]

var tab4 =[

    {name :'Manoel Artiste De Feu',
    description :`Manoël vous invite aux portes de son univers, avec "Terre de Feu" un fireshow explosif`, 
    img :'img/progra/img21.png'}, 

    {name :'Troupeau dans le crâne,Théâtre ',
    description :`Ce groupe de théâtre musicale vous ferra danser autant que rire.`, 
    img :'img/progra/img22.png'},  

    {name :'Tortequesne le conteur',
    description :`Tortequesne vous contera ses meilleures contes, petits et grands sont invité`, 
    img :'img/progra/img23.png'}, 

    {name :'Alfredo, Crieur public',
    description :`Alfredo arrive avec son âne et anime les rues du château. `, 
    img :'img/progra/img1.png'}, 
]

var divactivity = document.getElementById('activity-div')

for(var i =0 ; i<tab1.length ; i++){

    var activity = document.createElement('div') ;
    activity.classList.add("BKligth","box-progra","flex-column","wrap")


    activity.innerHTML = `<img class="progra-img" src="`+tab1[i].img+`">
    <p class="bold black center marg-bt">`+tab1[i].name+`</p>
    <p class="medium black center pad">`+tab1[i].description+`</p>`

    divactivity.appendChild(activity);
}


var divmarket = document.getElementById('market-div')

for(var i =0 ; i<tab2.length ; i++){

    var market = document.createElement('div') ;
    market.classList.add("BKligth","box-progra","flex-column","wrap")


    market.innerHTML = `<img class="progra-img" src="`+tab2[i].img+`">
    <p class="bold black center marg-bt">`+tab2[i].name+`</p>
    <p class="medium black center pad">`+tab2[i].description+`</p>`

    divmarket.appendChild(market);
}


var divartist = document.getElementById('artist-div')

for(var i =0 ; i<tab3.length ; i++){

    var artist = document.createElement('div') ;
    artist.classList.add("BKligth","box-progra","flex-column","wrap")


    artist.innerHTML = `<img class="progra-img" src="`+tab3[i].img+`">
    <p class="bold black center marg-bt">`+tab3[i].name+`</p>
    <p class="medium black center pad">`+tab3[i].description+`</p>`

    divartist.appendChild(artist);
}

var divcomedy = document.getElementById('comedy-div')

for(var i =0 ; i<tab4.length ; i++){

    var comedy = document.createElement('div') ;
    comedy.classList.add("BKligth","box-progra","flex-column","wrap")


    comedy.innerHTML = `<img class="progra-img" src="`+tab4[i].img+`">
    <p class="bold black center marg-bt">`+tab4[i].name+`</p>
    <p class="medium black center pad">`+tab4[i].description+`</p>`

    divcomedy.appendChild(comedy);
}


