<?php 
	class Nation {
		
		var $italy; 
		
		function __construct(){ 
		    $this->setItaly();  
		} 
		
		function setItaly(){  
			
			$provinces = array(
				"AG" => "Agrigento", 
				/*
				"AL" => "Alessandria", 
				"AN" => "Ancona", 
				"AQ" => "Aquila",
				"AR" => "Arezzo", 
				"AP" => "Ascoli Piceno", 
				"AT" => "Asti", 
				"AV" => "Avellino",
				"BA" => "Bari", 
				"BT" => "Barletta Andria Trani", 
				"BL" => "Belluno",
				"BN" => "Benevento", 
				"BG" => "Bergamo", 
				"BI" => "Biella", 
				"BO" => "Bologna",
				"BZ" => "Bolzano", 
				"BS" => "Brescia", 
				"BR" => "Brindisi", 
				"CA" => "Cagliari",
				"CL" => "Caltanissetta", 
				"CB" => "Campobasso", 
				"CI" => "Carbonia-Iglesias",
				"CE" => "Caserta", 
				"CT" => "Catania", 
				"CZ" => "Catanzaro", 
				"CH" => "Chieti",
				"CO" => "Como", 
				"CS" => "Cosenza", 
				"CR" => "Cremona", 
				"KR" => "Crotone",
				"CN" => "Cuneo", 
				"EN" => "Enna", 
				"FM" => "Fermo", 
				"FE" => "Ferrara",
				"FI" => "Firenze", 
				"FG" => "Foggia", 
				"FC" => "Forlì-Cesena", 
				"FR" => "Frosinone",
				"GE" => "Genova", 
				"GO" => "Gorizia", 
				"GR" => "Grosseto", 
				"IM" => "Imperia",
				"IS" => "Isernia", 
				"LT" => "Latina", 
				"LE" => "Lecce", 
				"LC" => "Lecco",
				"LI" => "Livorno", 
				"LO" => "Lodi", 
				"LU" => "Lucca", 
				"MC" => "Macerata",
				"MN" => "Mantova", 
				"MS" => "Massa-Carrara", 
				"MT" => "Matera",
				"VS" => "Medio Campidano", 
				"ME" => "Messina", 
				"MI" => "Milano", 
				"MO" => "Modena",
				"MB" => "Monza e della Brianza", 
				"NA" => "Napoli", 
				"NO" => "Novara",
				"NU" => "Nuoro", 
				"OG" => "Ogliastra", 
				"OT" => "Olbia-Tempio", 
				"OR" => "Oristano",
				"PD" => "Padova", 
				"PA" => "Palermo", 
				"PR" => "Parma", 
				"PV" => "Pavia",
				"PG" => "Perugia", 
				"PU" => "Pesaro e Urbino", 
				"PE" => "Pescara", 
				"PC" => "Piacenza",
				"PI" => "Pisa", 
				"PT" => "Pistoia", 
				"PN" => "Pordenone", 
				"PZ" => "Potenza",
				"PO" => "Prato", 
				"RG" => "Ragusa", 
				"RA" => "Ravenna", 
				"RC" => "Reggio Calabria",
				"RE" => "Reggio Emilia", 
				"RI" => "Rieti", 
				"RN" => "Rimini", 
				"RM" => "Roma",
				"RO" => "Rovigo", 
				"SA" => "Salerno", 
				"SS" => "Sassari", 
				"SV" => "Savona",
				"SI" => "Siena", 
				"SR" => "Siracusa", 
				"SO" => "Sondrio", 
				"SP" => "Spezia",
				"TA" => "Taranto", 
				"TE" => "Teramo", 
				"TR" => "Terni", 
				"TO" => "Torino",
				"TP" => "Trapani", 
				"TN" => "Trento", 
				"TV" => "Treviso", 
				"TS" => "Trieste",
				"UD" => "Udine",
				"AO" => "Valle d'Aosta", 
				"VA" => "Varese", 
				"VE" => "Venezia",
				"VB" => "Verbano Cusio Ossola", 
				"VC" => "Vercelli", 
				"VR" => "Verona",
				"VV" => "Vibo Valentia",  
				"VI" => "Vicenza", 
				"VT" => "Viterbo"
				 */
			);
			
			$this->italy = $provinces;
		}
		
		function getItaly(){
			return $this->italy;
		}
		  		 	
	}
?>
	