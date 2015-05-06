Doc.Title=CONTRAT DE PRESTATION DE SERVICES

0.Sec={0.sec}

0.0.sec=Entre les soussignés :

0.1.sec=La société {P1.Nom}, {P1.FormeJuridique} au capital de {P1.Capital} euros, dont le siège social est {P1.Adresse.1,3}, enregistrée au Registre du Commerce et des Sociétés de {P1.RCS.Adresse.Ville} sous le numéro {P1.RCS.#}, Représentée par M. {P1.Dirigeant1.Nom}, {P1.Dirigeant1.Titre},<p>ci-après désignée " Le Client ",<p> d'une part,

0.2.sec=<strong>et</strong>

0.3.sec=La société {P2.Nom}, {P2.FormeJuridique} au capital de {P2.Capital} euros, dont le siège social est {P2.Adresse.1,3}, enregistrée au Registre du Commerce et des Sociétés de {P2.RCS.Adresse.Ville} sous le numéro {P2.RCS.#}, Représentée par M. {P2.Dirigeant1.Nom}, {P2.Dirigeant1.Titre},<p>ci-après désignée " le Prestataire de services " ou " le Prestataire ",<p>d'autre part,

0.=[Z/Sec/s3]

0.xlist={0.Nlist}

0.90.sec=il a été convenu ce qui suit :

1.Ti=Article premier - Objet

1.sec=Le présent contrat est un contrat de prestation de conseil ayant pour objet la mission définie au cahier des charges annexé au présent contrat et en faisant partie intégrante.

2.Ti=Article 2 - Prix

2.0.sec=En contrepartie de la réalisation des prestations définies à l'Article premier ci-dessus, le client versera au prestataire la somme forfaitaire de {Prix} euros, ventilée de la manière suivante :

2.1.sec=20% à la signature des présentes ;

2.2.sec=30% au (n) jour suivant la signature des présentes ;

2.3.sec=50% constituant le solde, à la réception de la tàche.

2.90.sec=Les frais engagés par le prestataire : déplacement, hébergement, repas et frais annexes de dactylographie, reprographie, etc., nécessaires à l'exécution de la prestation, seront facturés en sus au client sur relevé de dépenses.<p>Les sommes prévues ci-dessus seront payées par chèque, dans les huit jours de la réception de la facture, droits et taxes en sus.

2.=[Z/Sec/s3]

3.Ti=Article 3 - Durée

3.sec=Ce contrat est passé pour une durée de {Contrat.Durée}. Il prendra effet le {Contrat.Début} et arrivera à son terme le {Contrat.Fin}.

4.Ti=Article 4 - Exécution de la prestation

4.0.sec=Fait le {Sign.Date} - {Sign.Ville} en 6 (six) exemplaires.

4.1.Ti=Le Prestataire

4.1.sec={P2.Sign.Block}
 
4.2.Ti= Le Client

4.2.sec={P1.Sign.Block}

4.=[Z/Sec/2]

4.xlist={4.Nlist}

=[Z/Sec/4]

Les numeros des sections sont en format Ti (titre) "Article 4 - Ex....".  Donc on utilise le "none" list type, sans nombres.

xlist={Nlist}

Note : Mettre le header au centre :

DocBody={Doc}