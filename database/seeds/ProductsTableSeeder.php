<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds,
     *
     * @return void
     */
    public function run()
    {   
        if (DB::table('Products')->count() == 0) {

            $products = [
                [
                    "name" => "birra",
                    "slug" => "",
                    "price" => 5.30,
                    "description" => "se ne vuoi un altro boccale apri il ticket 😎",
                    "visible" => "1", //true or false
                    "restaurant_id" => "18", 
                    "category_id" => "6", //???
                    "image" => "donato_birra.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "duff beer piccola",
                    "slug" => "",
                    "price" => 2.30,
                    "description" => "la famosissima birra duff è ora disponibile in formato da 0,33 cl!!",
                    "visible" => "1", //true or false
                    "restaurant_id" => "1", 
                    "category_id" => "6", //???
                    "image" => "moe_duff_small.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "duff beer media",
                    "slug" => "",
                    "price" => 3.90,
                    "description" => "che dovrei dire? questa è LA BIRRA, come sempre, nel formato da 0,5 cl",
                    "visible" => "1", //true or false
                    "restaurant_id" => "1", 
                    "category_id" => "6", //???
                    "image" => "moe_duff_medium.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "duff beer - grande",
                    "slug" => "",
                    "price" => 4.80,
                    "description" => "la famosissima birra duff è ora disponibile in formato da 1 L!!",
                    "visible" => "1", //true or false
                    "restaurant_id" => "1", 
                    "category_id" => "6", //???
                    "image" => "moe_duff_big.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "donuts",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "donuts (morsi da omer)",
                    "visible" => "1", //true or false
                    "restaurant_id" => "1", 
                    "category_id" => "6", //???
                    "image" => "moe_donuts.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "boccale di birra - piccolo",
                    "slug" => "",
                    "price" => 2.10,
                    "description" => "boccale di birra di piccole dimensioni per chi non regge l'alchool - 0,33 cl",
                    "visible" => "1", //true or false
                    "restaurant_id" => "2", 
                    "category_id" => "6", //???
                    "image" => "clam_beer_small.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "boccale di birra - medio",
                    "slug" => "",
                    "price" => 3.70,
                    "description" => "boccale di birra per chi regge l'alchool moderatamente 0,5 cl",
                    "visible" => "1", //true or false
                    "restaurant_id" => "2", 
                    "category_id" => "6", //???
                    "image" => "clam_beer_medium.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "boccale di birra - grande",
                    "slug" => "",
                    "price" => 6.20,
                    "description" => "boccale di birra per chi regge l'alchool bene 1,5 L",
                    "visible" => "1", //true or false
                    "restaurant_id" => "2", 
                    "category_id" => "6", //???
                    "image" => "clam_beer_big.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "uova e bacon",
                    "slug" => "",
                    "price" => 2.95,
                    "description" => "due uova e due strisce di bacon,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "3", 
                    "category_id" => "2", //???
                    "image" => "hermanos_uova.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "omelette",
                    "slug" => "",
                    "price" => 3.95,
                    "description" => "omelette di uova,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "3", 
                    "category_id" => "2", //???
                    "image" => "hermanos_omelette.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "burger di pollo",
                    "slug" => "",
                    "price" => 7.95,
                    "description" => "burger di pollo fritto con insalata, cetriolini, e salsa,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "3", 
                    "category_id" => "7", //???
                    "image" => "hermanos_burger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "ratatuil",
                    "slug" => "",
                    "price" => 72,
                    "description" => "il miglior piatto del miglior ristorante a cinque stelle di parigi,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "4", 
                    "category_id" => "3", //???
                    "image" => "gusteau_ratatuil.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "pizza patatine e wurstel",
                    "slug" => "",
                    "price" => 6.90,
                    "description" => "gli americani non sanno fare la pizza, almeno non ci sta l'ananas qui,,,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "5", 
                    "category_id" => "8", //???
                    "image" => "panucci_pizza.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "caprese",
                    "slug" => "",
                    "price" => 1.30,
                    "description" => "Caprese preparata da uno chef italiano con pomodori, mozzarella, olio e basilico, Possibli effetti collaterali: bruciore, perdita di pele, lacrimazione estrema, rottura involontaria di ossa nel proprio corpo, rinascita causata da uno stand,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "6", 
                    "category_id" => "2", //???
                    "image" => "trusaldi_caprese.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "pane",
                    "slug" => "",
                    "price" => 0.50,
                    "description" => "Semplice pane, Niente effetti collaterali,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "6", 
                    "category_id" => "3", //???
                    "image" => "trusaldi_pane.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "acqua",
                    "slug" => "",
                    "price" => 0.50,
                    "description" => "Acqua della trattoria trusaldi, Possibili effetti collaterali: dissetamento, dipendenza compulsiva, lacrimazione acuta, rinascita causata da uno stand,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "6", 
                    "category_id" => "6", //???
                    "image" => "trusaldi_acqua.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "panino con mano",
                    "slug" => "",
                    "price" => 7.50,
                    "description" => "Un signore biondo di 33 anni di nome Yoshikage Kira che vive nella parte nord-est di Morioh mi ha chiesto di includere la mano di una donna con i suoi panini, finchè paga non mi faccio domande,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "6", 
                    "category_id" => "7", //???
                    "image" => "trusaldi_panino_con_mano.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McChicken",
                    "slug" => "",
                    "price" => 6.80,
                    "description" => "Tutta la semplicità del petto di pollo avvolto in una panatura croccante, insieme all’insalata iceberg e all’inconfondibile salsa McChicken,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_mcchicken.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Il Gustoso",
                    "slug" => "",
                    "price" => 7.50,
                    "description" => "Sapore deciso, nota croccante, Un morso, e Il Gustoso ti stupirà con i suoi ingredienti: salsa al Pecorino Romano DOP e pepe, cavolo cappuccio rosso italiano e, ovviamente, 100% petto di pollo italiano,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_il_gustoso.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "L'Affumicato",
                    "slug" => "",
                    "price" => 7.50,
                    "description" => "Appetitoso, con un gusto che ti sorprende, Ti basterà assaggiare L’Affumicato per farti conquistare dai suoi ingredienti: scamorza affumicata con latte italiano, salsa ai peperoni grigliati e l’immancabile 100% petto di pollo italiano,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_affumicato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McWrap L'Affumicato",
                    "slug" => "",
                    "price" => 7.40,
                    "description" => "Appetitoso, con un gusto che ti sorprende, Ti basterà assaggiare L’Affumicato per farti conquistare dai suoi ingredienti, avvolti in una fragrante tortilla: scamorza affumicata con latte italiano, salsa ai peperoni grigliati e l’immancabile 100% petto di pollo italiano,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_wrap_affumicato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Big Mac",
                    "slug" => "",
                    "price" => 6.80,
                    "description" => "Se pensi di conoscerlo alla perfezione è perché non l’hai ancora provato, Il Grande Classico di McDonald’s è pronto a stupirti con il suo gusto ancora più irresistibile, Lasciati avvolgere dal pane più caldo, trasportare dal sapore della sua carne più succosa e goditi un’ulteriore aggiunta della sua inconfondibile salsa: lo scoprirai ancora più buono,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_big_mac.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Gran Crispy McBacon",
                    "slug" => "",
                    "price" => 8.10,
                    "description" => "Chi ama il Crispy McBacon® ne prenderebbe volentieri un altro e un altro e un altro e un altro ancora, Per questo c’è il Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l'inconfondibile salsa Crispy, Come il classico, ma ancora più grande,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_gran_crispy_mcbacon.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Crispy McWrap",
                    "slug" => "",
                    "price" => 7.70,
                    "description" => "Carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l’inconfondibile salsa, avvolti in una fragrante tortilla,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_crispy_wrap.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "My Selection Chicken Asiago DOP",
                    "slug" => "",
                    "price" => 7.90,
                    "description" => "100% petto di pollo italiano avvolto in una croccante panatura, Asiago DOP, bacon croccante, salsa con olive taggiasche & formaggio e pane EVO con semi di sesamo,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_chicken_asiago_dop.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "My Selection Montasio DOP & Pancetta",
                    "slug" => "",
                    "price" => 8.10,
                    "description" => "180G di succosa carne bovina da soli allevamenti italiani, formaggio Montasio DOP filante avvolto in una dorata panatura, pancetta, salsa alle cipolle & Mela Alto Adige IGP e pane con semi di sesamo & papavero,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_montasio_dop.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "My Selection BBQ",
                    "slug" => "",
                    "price" => 7.90,
                    "description" => "180G di succosa carne bovina da soli allevamenti italiani, gouda stagionato, bacon croccante, insalata, coleslaw, salsa BBQ con Cipolla Rossa di Tropea Calabria IGP e Aceto Balsamico di Modena IGP e pane con semi di sesamo & papavero,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_selection_bbq.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Crispy McBacon",
                    "slug" => "",
                    "price" => 7.00,
                    "description" => "Carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana e formaggio, accompagnati dall'inconfondibile salsa Crispy, Non serve altro per incoronare Crispy McBacon® re della croccantezza e del gusto, Un Grande Classico che non tramonterà mai,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_crispy_bacon.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Double Cheeseburger",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Saranno i due hamburger di carne 100% bovina da allevamenti italiani che abbracciano il formaggio filante, sarà per la cipolla a cubetti, sarà il cetriolo, il ketchup e la senape… il Double Cheeseburger è il Grande Classico che non vi stancherà mai,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_double_cheeseburger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Cheeseburger",
                    "slug" => "",
                    "price" => 2.90,
                    "description" => "Ci sono due tipi di persone: chi ama il cheeseburger e chi ama il cheeseburger, Tutti lo scelgono per il suo gusto semplice e irresistibile, per la carne 100% bovina da allevamenti italiani, il formaggio filante, la cipolla a dadini, il ketchup e la senape,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_cheeseburger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Hamburger",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "Carne 100% bovina da allevamenti italiani, arricchita con cipolla a dadini, cetriolo, ketchup e senape, L’Hamburger, un panino semplice che non passa mai di moda,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_hamburger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Gluten Free Burger",
                    "slug" => "",
                    "price" => 4.60,
                    "description" => "Due fette di formaggio filante si uniscono a due fette di gustosa carne 100% bovina da allevamenti italiani racchiuse in un morbido pane senza glutine, Con Gluten Free Burger puoi goderti tutto il gusto di un hamburger, senza pensieri,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_gluten_free_burger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Double Chicken BBQ",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Un must per tutti gli amanti del pollo, Due croccanti fette di pollo impanato fanno da base per il formaggio filante, per la lattuga fresca e per la salsa barbecue, Nasce così un Grande Classico dal gusto affumicato davvero irresistibile,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_double_chicken_bbq.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Chickenburger",
                    "slug" => "",
                    "price" => 2.00,
                    "description" => "100% pollo italiano impanato e gustosa salsa Caesar tra due morbide fette di pane, Nella sua semplicità il Chickenburger è davvero sorprendente, forse perché non serve altro per godersi la sua panatura croccante?",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_chickenburger.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McMuffin Bacon Egg",
                    "slug" => "",
                    "price" => 3.10,
                    "description" => "Tutto il gusto delle uova fresche 100% italiane, del bacon croccante e del formaggio fuso, per un Grande Classico che ti fa fare il pieno di energia,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_muffin_bacon_egg.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Filet-O-Fish",
                    "slug" => "",
                    "price" => 6.90,
                    "description" => "A volte per sorprendere bastano tre semplici ingredienti: merluzzo impanato, formaggio, salsa tartara, Il risultato? Un Grande Classico che unisce il sapore del mare al gusto unico di McDonald’s,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_filet_o_fish.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McToast",
                    "slug" => "",
                    "price" => 2.00,
                    "description" => "Perché essere quadrati? Quando il profumo del prosciutto cotto si unisce alla dolcezza del formaggio fuso e a tutto il gusto McDonald’s, nasce McToast: il primo (e l’unico) Toast rotondo,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_mctoast.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McWrap con petto di pollo croccante e Parmigiano Reggiano",
                    "slug" => "",
                    "price" => 7.70,
                    "description" => "Un'avvolgente tortilla che racchiude insalata e pomodoro freschi, Parmigiano Reggiano a scaglie e croccante 100% petto di pollo italiano impanato,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "7", //???
                    "image" => "donald_wrap_petto_di_pollo_parmigiano.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Uova strapazzate e bacon con pane",
                    "slug" => "",
                    "price" => 2.30,
                    "description" => "Bacon e uova strapazzate? Una colazione così croccante da sciogliersi in bocca, Provala per iniziare la giornata con una carica di energia, E anche di gusto,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "2", //???
                    "image" => "donald_uova_bacon_pane.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Insalata con petto di pollo croccante e Parmigiano Reggiano",
                    "slug" => "",
                    "price" => 7.90,
                    "description" => "Gli opposti si attraggono! Prova il mix perfetto tra la panatura del petto di pollo 100% italiano e la tenera insalata, insieme alla dolcezza dei pomodorini ciliegia e al gusto inconfondibile del Parmigiano Reggiano per un risultato dal sapore unico,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_insalata_pollo_parmigiano.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Insalata verde con pomodori",
                    "slug" => "",
                    "price" => 8.10,
                    "description" => "Lattughino verde e rosso, songino, spinacino baby e tutta la freschezza dei pomodorini ciliegia, L’insalata verde con pomodori è perfetta per una pausa pranzo veloce o per accompagnare i nostri irresistibili menu,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_insalata_pomodori.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Insalata mista",
                    "slug" => "",
                    "price" => 3.40,
                    "description" => "Il verde della lattuga, il rosso dei pomodori, le carote e il mais, le olive nere e i finocchi, Nell’insalata mista trovi un mix di verdure fresche, sane e genuine per una pausa pranzo all’insegna della leggerezza,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_insalata_mista.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Patate regolari",
                    "slug" => "",
                    "price" => 2.40,
                    "description" => "Perfette per uno snack, da gustare da sole o accompagnate da una delle nostre salse, oppure nel tuo Happy Meal, le patatine regolari sono sempre irresistibili, Sempre con patate tagliate intere e cotte in olio 100% vegetale,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_patatine_regular.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Patatine Medie",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Le patatine di McDonald’s le riconosci subito, anche a occhi chiusi, Sono lunghe, dorate, croccanti e servite nella loro iconica confezione rossa, Goditele accompagnate con una salsa o anche da sole, una dopo l’altra o a quattro, cinque o sei in una sola volta,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_patatine_medie.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Le Ricche Cheddar",
                    "slug" => "",
                    "price" => 4.40,
                    "description" => "Le patatine di sempre più tutto il gusto della salsa calda al Cheddar, Lasciati tentare da Le Ricche: dorate e incredibilmente golose,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_patatine_ricche_cheddar.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Le Ricche Cheese&Bacon",
                    "slug" => "",
                    "price" => 4.60,
                    "description" => "Le patatine di sempre, con tutto il gusto della salsa calda al Cheddar e del bacon croccante, Lasciati tentare da Le Ricche: dorate e incredibilmente golose,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "3", //???
                    "image" => "donald_patatine_ricche_cheddar_bacon.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Chicken McNuggets",
                    "slug" => "",
                    "price" => 5.90,
                    "description" => "Tenere crocchette di petto di pollo 100% italiano impanato, Buonissime da sole, squisite con le salse, I Chicken McNuggets® sono un Grande Classico a cui è difficile resistere, Le puoi gustare come vuoi, da solo o in compagnia, anche se probabilmente vorrai condividerle solo con te stesso,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "2", //???
                    "image" => "donald_nuggets.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Chicken Wings",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Con il loro gusto unico e tutta la qualità del pollo 100% italiano, le Chicken Wings ti conquisteranno,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "2", //???
                    "image" => "donald_wings.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Panzerotti",
                    "slug" => "",
                    "price" => 2.90,
                    "description" => "Un cuore caldo e filante per regalarti un momento di bontà, I Panzerotti con pomodoro e mozzarella 100% italiani sono un piacere per il palato,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "1", //???
                    "image" => "donald_panzerotti.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Tasty Basket",
                    "slug" => "",
                    "price" => 13,40,
                    "description" => "C'è più gusto a stare insieme con il Tasty Basket, 15 pezzi da mangiare con chi vuoi: 6 Chicken McNuggets, 3 Panzerotti con pomodoro e mozzarella 100% italiani e 6 Chicken Wings più 3 salse omaggio,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "2", //???
                    "image" => "donald_basket.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McFlurry Oreo",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Lasciati incantare da un cremoso vortice di gelato, preparato con latte intero 100% italiano, e fatti conquistare dai suoi biscotti al cacao croccante, Non ti è venuta voglia di McFlurry Oreo?",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_flurry_oreo.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McFlurry Snickers",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Le arachidi croccanti e il caramello si sono uniti al vortice di gelato McDonald’s fatto con latte intero 100% italiano, Con il nuovo McFlurry® Snickers® la tua pausa avrà tutto un altro sapore,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_flurry_snickers.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McFlurry Baci Perugina",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "La semplicità del gelato al fiordilatte, fatto con latte 100% italiano, più tutta la golosità dei Baci® Perugina®? Ecco il McFlurry® Baci Perugina: un gusto inconfondibile che trovi solo da McDonald’s, per una pausa di puro piacere,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_flurry_baci.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McFlurry Kitkat",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Cosa accade quando al gusto del gelato al fiordilatte con latte 100% italiano unisci un wafer dal sapore inconfondibile? Nasce un turbine di bontà che ti conquista al primo cucchiaino: McFlurry® KitKat® ti aspetta,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_flurry_kitkat.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "McFlurry Smarties",
                    "slug" => "",
                    "price" => 3.60,
                    "description" => "Il bello di McFlurry Smarties? Che a ogni assaggio i colorati confetti di cioccolato trasformano il soffice gelato al fiordilatte, fatto con latte intero 100% italiano, in un sogno a occhi aperti, ma da vivere a bocca chiusa,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_flurry_smarties.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Baci Perugina",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "La semplicità del gelato al fiordilatte, fatto con latte intero 100% italiano, più tutta la golosità dei Baci® Perugina®? Ecco il Sundae Baci Perugina: un gusto inconfondibile che trovi solo da McDonald’s, per una pausa di puro piacere,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_baci.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Fiordilatte",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "È il Sundae senza l’aggiunta di topping, perfetto così, per chi vuole godersi con il cucchiaino tutta la cremosità del gelato al fiordilatte preparato con latte intero 100% italiano,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_fiordilatte.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Cioccolato",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "Gelato fiordilatte, fatto con latte intero 100% italiano e affogato al cioccolato, Una combinazione così golosa da farti dosare con cura ogni cucchiaiata: per non finire il cioccolato, per non rimanere senza il gelato cremoso, per amarli entrambi allo stesso modo,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_cioccolato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Caramello",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "Dai una cucchiaiata e osservi il caramello filare sopra il soffice gelato al fiordilatte, preparato con latte intero 100% italiano, Lo assaggi e ti accorgi della sua cremosità avvolgente, di quel mix di dolcezza che vorresti non finisse mai,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_caramello.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Caffè",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "Se il caffè è sempre un piacere, quando si unisce alla cremosità del gelato al fiordilatte fatto con latte intero 100% italiano, diventa davvero irresistibile, Con il Sundae al caffè potrai chiudere in dolcezza i tuoi menu o gustare tutta la sua freschezza ogni volta che vuoi,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_caffe.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Sundae Frutti di Bosco",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "Quando il gelato fiordilatte, preparato con latte intero 100% italiano, incontra il topping ai frutti di bosco, puoi fare solo una cosa: prendere il cucchiaino e perderti in un mondo di dolcezza,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_sundae_frutti_bosco.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Cono",
                    "slug" => "",
                    "price" => 1.20,
                    "description" => "Il Cono McDonald’s è così da sempre: semplice, cremoso e irresistibile, Una golosa spirale di gelato al fiordilatte, fatto con latte intero 100% italiano, su una cialda croccante, per chi ha sempre voglia di gelato,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_cono.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Milkshake Fragola",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "Una cremosa bevanda fredda a base di latte con sciroppo alla fragola, Perfetto per una pausa rinfrescante durante l’estate, delizioso come dessert nei mesi invernali, il Milkshake alla fragola addolcirà ogni tuo momento,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "6", //???
                    "image" => "donald_milkshake_fragola.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Milkshake Vaniglia",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "Solo latte e sciroppo all’aroma di vaniglia frullati insieme, Basta questo per innamorarsi del Milkshake alla vaniglia: un classico dalla dolcezza senza tempo,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "6", //???
                    "image" => "donald_milkshake_vaniglia.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Milkshake Cioccolato",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "È facile fare centro quando si parla di cioccolato, E se lo trovi all’interno del nostro Milkshake in un mix cremoso insieme al latte, sai già di aver fatto la scelta giusta ancora prima di averlo assaggiato,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "6", //???
                    "image" => "donald_milkshake_cioccolato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Milkshake Banana",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "Ci sono abbinamenti davvero golosi, come il latte insieme alla banana, Due ingredienti che trovi nel nostro Milkshake: dolce, cremoso, rinfrescante e perfetto in ogni momento,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "6", //???
                    "image" => "donald_milkshake_banana.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Pancake con Sciroppo",
                    "slug" => "",
                    "price" => 2.50,
                    "description" => "Due soffici e profumati pancake da cospargere con lo sciroppo d’acero, cioccolato o caramello, Un classico della colazione americana che puoi gustare anche tu per iniziare la giornata con dolcezza,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "7", 
                    "category_id" => "5", //???
                    "image" => "donald_pancake.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Bacon King",
                    "slug" => "",
                    "price" => 7.50,
                    "description" => "Il panino definitivo, La combinazione perfetta di ingredienti, Il gusto sublime del bacon e quello della carne alla griglia, accompagnati da ketchup, maionese e saporito pane al mais: il Bacon King è un panino che non si fa dire di no, Provalo in tutti i nostri ristoranti: ti innamorerai!",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_bacon_king.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Bacon King 3,0",
                    "slug" => "",
                    "price" => 9.50,
                    "description" => "L'evoluzione del Bacon King: 3 strati di carne alla griglia, 3 strati di formaggio e 8 fette di delizioso bacon, Vieni a scoprire Bacon King 3,0 in tutta la sua esagerazione,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_bacon_king3.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Bacon King 3,0 Rodeo",
                    "slug" => "",
                    "price" => 11,00,
                    "description" => "Quando pensi che la perfezione non esista, ma poi scopri che al bacon abbiamo aggiunto gli anelli di cipolla, Bacon King 3,0 Rodeo: 3 strati di carne alla griglia, 3 strati di formaggio, 8 fette di delizioso bacon, ketchup, maionese e 6 anelli di cipolla croccanti, Vieni a provarlo in tutta la sua abbondanza,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_bacon_king3_rodeo.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Roaster Burger",
                    "slug" => "",
                    "price" => 9.20,
                    "description" => "Panino sfizioso, caratterizzato dalla presenza della salsa Roasted Onion, cremosa e gustosa con un ricco sapore di cipolle arrosto, riesce a esaltare benissimo tutti gli altri ingredienti che accompagna: fresca rucola, fette di pomodoro, cipole fritte, salsa BBQ, croccanti fette di bacon, cheddar e gustosa carne di manzo,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_roaster.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Big King",
                    "slug" => "",
                    "price" => 5.80,
                    "description" => "Il re degli hamburger è qui, Il nostro BIG KING® ti conquisterà con doppia carne di manzo alla griglia, formaggio e deliziosa salsa BIG KING, Un hamburger decisamente maestoso, che, con i suoi 4 pollici di diametro, rende merito al proprio nome,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_big_king.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Bronx Steakhouse",
                    "slug" => "",
                    "price" => 8.20,
                    "description" => "Bronx Steakhouse",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "2", //???
                    "image" => "king_bronx.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "Bacon King 3,0 con salsa BBQ bull's eye",
                    "slug" => "",
                    "price" => 11,20,
                    "description" => "La formula la conosciamo bene: 3 strati di carne rigorosamente alla griglia, 3 di formaggio fuso filante, 8 croccanti fette di bacon… e un’aggiunta che cambia ogni cosa: la salsa Bull’s Eye, la regina delle salse BBQ! Prova il sapore ancora più esagerato del nuovo Bacon King 3,0,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "8", 
                    "category_id" => "7", //???
                    "image" => "king_bacon_king3_bbq.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "piadina kebab",
                    "slug" => "",
                    "price" => 5.90,
                    "description" => "piadina kebab",
                    "visible" => "1", //true or false
                    "restaurant_id" => "9", 
                    "category_id" => "9", //???
                    "image" => "ciro_piadina.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "panino kebab",
                    "slug" => "",
                    "price" => 5.90,
                    "description" => "panino kebab",
                    "visible" => "1", //true or false
                    "restaurant_id" => "9", 
                    "category_id" => "7", //???
                    "image" => "ciro_panino.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "falafel",
                    "slug" => "",
                    "price" => 0.50,
                    "description" => "falafel con salsa bianca inclusa",
                    "visible" => "1", //true or false
                    "restaurant_id" => "9", 
                    "category_id" => "2", //???
                    "image" => "ciro_falafel.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "caffè espresso",
                    "slug" => "",
                    "price" => 0.90,
                    "description" => "caffè espresso illy",
                    "visible" => "1", //true or false
                    "restaurant_id" => "10", 
                    "category_id" => "6", //???
                    "image" => "sesto_espresso.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "cappuccino",
                    "slug" => "",
                    "price" => 1.20,
                    "description" => "cappuccino con caffè illy",
                    "visible" => "1", //true or false
                    "restaurant_id" => "10", 
                    "category_id" => "6", //???
                    "image" => "sesto_cappuccino.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "cornetto al cioccolato",
                    "slug" => "",
                    "price" => 1.00,
                    "description" => "cornetto al cioccolato",
                    "visible" => "1", //true or false
                    "restaurant_id" => "10", 
                    "category_id" => "5", //???
                    "image" => "sesto_cornetto_cioccolato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "cornetto alla crema",
                    "slug" => "",
                    "price" => 1.00,
                    "description" => "cornetto alla crema",
                    "visible" => "1", //true or false
                    "restaurant_id" => "10", 
                    "category_id" => "5", //???
                    "image" => "sesto_cornetto_crema.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "cornetto alla marmallata",
                    "slug" => "",
                    "price" => 1.00,
                    "description" => "cornetto alla marmellata",
                    "visible" => "1", //true or false
                    "restaurant_id" => "10", 
                    "category_id" => "5", //???
                    "image" => "sesto_cornetto_marmellata.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "krabby patty",
                    "slug" => "",
                    "price" => 3.99,
                    "description" => "il leggendario krabby patty",
                    "visible" => "1", //true or false
                    "restaurant_id" => "11", 
                    "category_id" => "7", //???
                    "image" => "krabby_patty.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "caffè",
                    "slug" => "",
                    "price" => 1.50,
                    "description" => "il caffè dello aneiku è macinato a mano da professionisti per il massimo della fragranza",
                    "visible" => "1", //true or false
                    "restaurant_id" => "12", 
                    "category_id" => "6", //???
                    "image" => "anteiku_coffee.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "frappuccino venti",
                    "slug" => "",
                    "price" => 9.95,
                    "description" => "la dimensione è chiamata venti per qualche arcano motivo",
                    "visible" => "1", //true or false
                    "restaurant_id" => "13", 
                    "category_id" => "6", //???
                    "image" => "starbucks_venti.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "frappuccino grande",
                    "slug" => "",
                    "price" => 7.95,
                    "description" => "si chiamerà pure grande ma è la dimensione media,,, il più grande si chiama venti",
                    "visible" => "1", //true or false
                    "restaurant_id" => "13", 
                    "category_id" => "6", //???
                    "image" => "starbucks_grande.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "frappuccino tall",
                    "slug" => "",
                    "price" => 3.95,
                    "description" => "anche se si chiama tall è il più piccolo,,,",
                    "visible" => "1", //true or false
                    "restaurant_id" => "13", 
                    "category_id" => "6", //???
                    "image" => "starbucks_tall.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "piadina allo stracchino e prosciutto",
                    "slug" => "",
                    "price" => 8.00,
                    "description" => "piadina allo stracchino e prosciutto con un po' di insalata",
                    "visible" => "1", //true or false
                    "restaurant_id" => "14", 
                    "category_id" => "9", //???
                    "image" => "agostino_stracchino_prosciutto.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "piadina rucola e speck",
                    "slug" => "",
                    "price" => 8.50,
                    "description" => "piadina rucola e speck",
                    "visible" => "1", //true or false
                    "restaurant_id" => "14", 
                    "category_id" => "9", //???
                    "image" => "agostino_rucola_speck.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "tagliere",
                    "slug" => "",
                    "price" => 24,
                    "description" => "tagliere di salumi (tutto qui, non so cucinare altro)",
                    "visible" => "1", //true or false
                    "restaurant_id" => "15", 
                    "category_id" => "4", //???
                    "image" => "alfonso_tagliere.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "sashimi di salmone",
                    "slug" => "",
                    "price" => 5.00,
                    "description" => "salmone abbattuto tagliato a pezzi",
                    "visible" => "1", //true or false
                    "restaurant_id" => "16", 
                    "category_id" => "12", //???
                    "image" => "sushi_sashimi_salmone.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "sashimi di tonno",
                    "slug" => "",
                    "price" => 5.00,
                    "description" => "tonno abbattuto tagliato a pezzi",
                    "visible" => "1", //true or false
                    "restaurant_id" => "16", 
                    "category_id" => "12", //???
                    "image" => "sushi_sashimi_tonno.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "nigiri di salmone",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "nigiri di salmone",
                    "visible" => "1", //true or false
                    "restaurant_id" => "16", 
                    "category_id" => "10", //???
                    "image" => "sushi_nigiri_salmone.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "pizza margherita",
                    "slug" => "",
                    "price" => 6.90,
                    "description" => "solo una pizza margherita",
                    "visible" => "1", //true or false
                    "restaurant_id" => "18", 
                    "category_id" => "8", //???
                    "image" => "francesco_margherita.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "fiorentina da mezzo chilo",
                    "slug" => "",
                    "price" => 37,
                    "description" => "mezzo chilo di fiorentina",
                    "visible" => "1", //true or false
                    "restaurant_id" => "19", 
                    "category_id" => "2", //???
                    "image" => "giacomo_fiorentina.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "gelato alla fragola",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "gelato alla fragola",
                    "visible" => "1", //true or false
                    "restaurant_id" => "20", 
                    "category_id" => "5", //???
                    "image" => "gelateria_fragola.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "gelato al cioccolato",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "gelato al cioccolato",
                    "visible" => "1", //true or false
                    "restaurant_id" => "20", 
                    "category_id" => "5", //???
                    "image" => "gelateria_cioccolato.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "gelato alla vaniglia",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "gelato alla vaniglia",
                    "visible" => "1", //true or false
                    "restaurant_id" => "20", 
                    "category_id" => "5", //???
                    "image" => "gelateria_vaniglia.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "calamari",
                    "slug" => "",
                    "price" => 3.20,
                    "description" => "calamari buoni",
                    "visible" => "1", //true or false
                    "restaurant_id" => "21", 
                    "category_id" => "2", //???
                    "image" => "pescheria_calamari.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
                [
                    "name" => "tiramisù",
                    "slug" => "",
                    "price" => 3.30,
                    "description" => "tiramisù con i pavesini",
                    "visible" => "1", //true or false
                    "restaurant_id" => "21", 
                    "category_id" => "5", //???
                    "image" => "pescheria_tiramisu.png",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ],
            ];

            DB::table('Products')->insert(
                collect($products)->map(fn ($product) => [
                    "name" => $product["name"],
                    "slug" => Str::of($product["name"])->slug('-'),
                    "price" => $product["price"],
                    "description" => $product["description"],
                    "visible" => "1",
                    "restaurant_id" => $product["restaurant_id"], 
                    "category_id" => $product["category_id"],
                    "image" => "uploads/". $product["image"],
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s"),
                ])->toArray()
            );
        } else {
            echo "Table is not empty";
        }
    }
}
